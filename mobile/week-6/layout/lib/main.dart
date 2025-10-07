import 'package:flutter/material.dart';
import 'package:layout/pages/home.dart';
import 'package:layout/pages/item.dart';

void main() => runApp(MaterialApp(
  initialRoute: '/',
  routes: {
    '/': (context) => HomePage(),
    '/item': (context) => ItemPage(),
  },
));