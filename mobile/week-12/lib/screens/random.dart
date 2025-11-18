import 'package:flutter/material.dart';
import 'package:week_12/data/random_bloc.dart';

class RandomScreen extends StatefulWidget {
  const RandomScreen({super.key});

  @override
  _RandomScreenState createState() => _RandomScreenState();
}

class _RandomScreenState extends State<RandomScreen> {
  final _bloc = RandomBloc();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text('Random Screen - Khen Cahyo')),
      body: Center(
        child: Text('Random Screen Content', style: TextStyle(fontSize: 24)),
      ),
    );
  }
}
