import 'package:flutter/material.dart';
import 'package:week_12/screens/new_stream.dart';
import 'package:week_12/screens/random.dart';
import 'package:week_12/screens/stream.dart';

void main() {
  runApp(const MainApp());
}

class MainApp extends StatelessWidget {
  const MainApp({super.key});

  @override
  Widget build(BuildContext context) {
    return const MaterialApp(
      home: NewStreamScreen(),
    );
  }
}
