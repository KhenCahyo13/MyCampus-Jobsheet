import 'package:flutter/material.dart';
import 'package:week_11/screens/future.dart';
import 'package:week_11/screens/location.dart';
import 'package:week_11/screens/navigation_dialog.dart';
import 'package:week_11/screens/navigation_first.dart';

void main() {
  runApp(const MainApp());
}

class MainApp extends StatelessWidget {
  const MainApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Location Demo - Khen Cahyo',
      theme: ThemeData(
        primarySwatch: Colors.blue,
        visualDensity: VisualDensity.adaptivePlatformDensity,
      ),
      home: NavigationDialogScreen(),
    );
  }
}
