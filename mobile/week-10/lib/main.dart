import 'package:flutter/material.dart';
import 'package:week_10/models/plan.dart';
import 'package:week_10/providers/plan_provider.dart';
import 'package:week_10/views/plan_creator_screen.dart';
import 'package:week_10/views/plan_screen.dart';

void main() => runApp(MasterPlanApp());

class MasterPlanApp extends StatelessWidget {
  const MasterPlanApp({super.key});

  @override
  Widget build(BuildContext context) {
    return PlanProvider(
      notifier: ValueNotifier<List<Plan>>(const []),
      child: MaterialApp(
        title: 'State management app',
        theme: ThemeData(primarySwatch: Colors.blue),
        home: const PlanCreatorScreen(),
      ),
    );
  }
}
