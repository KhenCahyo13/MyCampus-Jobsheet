import 'package:flutter/material.dart';
import 'package:week_12/data/new_number.dart';
import 'package:week_12/data/random_bloc.dart';

class NewStreamScreen extends StatefulWidget {
  const NewStreamScreen({super.key});

  @override
  _NewStreamScreenState createState() => _NewStreamScreenState();
}

class _NewStreamScreenState extends State<NewStreamScreen> {
  late Stream<int> numberStream;
  final _bloc = RandomBloc();

  @override
  void initState() {
    numberStream = NewNumber().getNewNumberStream();
    super.initState();
  }

  @override
  void dispose() {
    _bloc.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text('New Stream Screen - Khen Cahyo')),
      body: Center(
        child: StreamBuilder<int>(
          stream: _bloc.randomNumber,
          initialData: 0,
          builder: (context, snapshot) {
            return Text(
              'Random Number: ${snapshot.data}',
              style: TextStyle(fontSize: 32),
            );
          },
        ),
      ),
      floatingActionButton: FloatingActionButton(
        onPressed: () {
          _bloc.generateRandom.add(null);
        },
        child: Icon(Icons.refresh),
      ),
    );
  }
}
