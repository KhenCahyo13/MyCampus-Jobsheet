import 'package:flutter/material.dart';

class NavigationSecondScreen extends StatefulWidget {
  const NavigationSecondScreen({super.key});

  @override
  State<NavigationSecondScreen> createState() => _NavigationSecondScreenState();
}

class _NavigationSecondScreenState extends State<NavigationSecondScreen> {
  Color selectedColor = Colors.red.shade700;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: selectedColor,
      appBar: AppBar(title: const Text('Navigation Second Screen - Khen Cahyo'),),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            ElevatedButton(
              child: const Text('Red Color'),
              onPressed: () {
                selectedColor = Colors.red.shade700;
                Navigator.pop(context, selectedColor);
              },
            ),
            ElevatedButton(
              child: const Text('Green Color'),
              onPressed: () {
                selectedColor = Colors.green.shade700;
                Navigator.pop(context, selectedColor);
              },
            ),
            ElevatedButton(
              child: const Text('Blue Color'),
              onPressed: () {
                selectedColor = Colors.blue.shade700;
                Navigator.pop(context, selectedColor);
              },
            ),
          ],
        ),
      ),
    );
  }
}