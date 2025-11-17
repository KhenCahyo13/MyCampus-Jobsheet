import 'package:flutter/material.dart';

class NavigationDialogScreen extends StatefulWidget {
  const NavigationDialogScreen({super.key});

  @override
  State<NavigationDialogScreen> createState() => _NavigationDialogScreenState();
}

class _NavigationDialogScreenState extends State<NavigationDialogScreen> {
  Color color = Colors.blue.shade800;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: color,
      appBar: AppBar(title: Text('Navigation Dialog Screen - Khen Cahyo')),
      body: Center(
        child: ElevatedButton(
          child: Text('Change Color'),
          onPressed: () {
            _showColorDialog(context);
          },
        ),
      ),
    );
  }

  _showColorDialog(BuildContext context) async {
    await showDialog(
      barrierDismissible: false,
      context: context,
      builder: (_) {
        return AlertDialog(
          title: Text('Select a color'),
          content: Column(
            mainAxisSize: MainAxisSize.min,
            children: [
              ElevatedButton(
                child: Text('Red Color'),
                onPressed: () {
                  setState(() {
                    color = Colors.red.shade700;
                  });
                  Navigator.pop(context);
                },
              ),
              ElevatedButton(
                child: Text('Green Color'),
                onPressed: () {
                  setState(() {
                    color = Colors.green.shade700;
                  });
                  Navigator.pop(context);
                },
              ),
              ElevatedButton(
                child: Text('Blue Color'),
                onPressed: () {
                  setState(() {
                    color = Colors.blue.shade700;
                  });
                  Navigator.pop(context);
                },
              ),
            ],
          ),
        );
      },
    );
  }
}
