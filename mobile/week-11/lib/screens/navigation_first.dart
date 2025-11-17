import 'package:flutter/material.dart';
import 'package:week_11/screens/navigation_second.dart';

class NavigationFirstScreen extends StatefulWidget {
  const NavigationFirstScreen({super.key});

  @override
  State<NavigationFirstScreen> createState() => _NavigationFirstScreenState();
}

class _NavigationFirstScreenState extends State<NavigationFirstScreen> {
  Color color = Colors.blue.shade700;

  Future<void> _navigateAndGetColor(BuildContext context) async {
    final Color? result = await Navigator.push<Color?>(
      context,
      MaterialPageRoute(builder: (context) => const NavigationSecondScreen()),
    );
    color = result ?? Colors.blue;
    setState(() {});
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: color,
      appBar: AppBar(title: const Text('Navigation First Screen - Khen Cahyo')),
      body: Center(
        child: ElevatedButton(
          child: const Text('Change Color'),
          onPressed: () {
            _navigateAndGetColor(context);
          },
        ),
      ),
    );
  }
}
