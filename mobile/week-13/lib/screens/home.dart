import 'dart:convert';
import 'dart:io';

import 'package:flutter/material.dart';
import 'package:flutter_secure_storage/flutter_secure_storage.dart';
import 'package:week_13/models/pizza.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:path_provider/path_provider.dart';

class HomeScreen extends StatefulWidget {
  const HomeScreen({super.key});

  @override
  State<HomeScreen> createState() => _HomeScreenState();
}

class _HomeScreenState extends State<HomeScreen> {
  List<Pizza> pizzaList = [];
  int counter = 0;
  String documentsPath = '';
  String tempPath = '';
  late File myFile;
  String fileText = '';
  final pwdController = TextEditingController();
  String password = '';
  final storage = const FlutterSecureStorage();
  final storageKey = 'password';

  Future writeToSecureStorage() async {
    password = pwdController.text;
    await storage.write(key: storageKey, value: password);
  }

  Future<String> readFromSecureStorage() async {
    String secret = await storage.read(key: storageKey) ?? '';
    return secret;
  }

  Future<bool> writeFile() async {
    try {
      await myFile.writeAsString('Margherita, Pepperoni, Veggie');
      return true;
    } catch (e) {
      return false;
    }
  }

  Future<bool> readFile() async {
    try {
      String fileContent = await myFile.readAsString();
      setState(() {
        fileText = fileContent;
      });
      return true;
    } catch (e) {
      return false;
    }
  }

  Future getPaths() async {
    final docDir = await getApplicationDocumentsDirectory();
    final tempDir = await getTemporaryDirectory();

    setState(() {
      documentsPath = docDir.path;
      tempPath = tempDir.path;
    });
  }

  Future readAndWritePreference() async {
    SharedPreferences prefs = await SharedPreferences.getInstance();
    counter = prefs.getInt('counter') ?? 0;
    counter++;

    await prefs.setInt('counter', counter);
  }

  Future deletePreference() async {
    SharedPreferences prefs = await SharedPreferences.getInstance();
    await prefs.clear();
    setState(() {
      counter = 0;
    });
  }

  Future<List<Pizza>> readPizzaJsonFile() async {
    final String response = await DefaultAssetBundle.of(
      context,
    ).loadString('assets/pizza.json');

    List pizzaMapList = jsonDecode(response);
    List<Pizza> pizzaList = pizzaMapList
        .map((json) => Pizza.fromJson(json))
        .toList();

    return pizzaList;
  }

  @override
  void initState() {
    super.initState();
    // readPizzaJsonFile().then((value) {
    //   setState(() {
    //     pizzaList = value;
    //   });
    // });
    // readAndWritePreference();
    getPaths().then((_) {
      myFile = File('$documentsPath/pizza.txt');
      writeFile();
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text('Home JSON')),
      body: Container(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          spacing: 12,
          mainAxisAlignment: MainAxisAlignment.center,
          crossAxisAlignment: CrossAxisAlignment.center,
          children: [
            TextField(
              controller: pwdController,
              decoration: const InputDecoration(labelText: 'Enter Password'),
            ),
            ElevatedButton(
              onPressed: () {
                writeToSecureStorage();
              },
              child: const Text('Save Password'),
            ),
            ElevatedButton(
              onPressed: () {
                readFromSecureStorage().then((value) {
                  setState(() {
                    password = value;
                  });
                });
              },
              child: const Text('Read Password'),
            ),
            Text('Stored Password: $password'),
          ],
        ),
      ),
    );
  }
}
