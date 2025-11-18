import 'dart:async';
import 'dart:math';

import 'package:flutter/material.dart';
import 'package:week_12/data/color.dart';
import 'package:week_12/data/number.dart';

class StreamScreen extends StatefulWidget {
  const StreamScreen({super.key});

  @override
  State<StreamScreen> createState() => _StreamScreenState();
}

class _StreamScreenState extends State<StreamScreen> {
  Color bgColor = Colors.white;
  late ColorStream colorStream;
  int lastNumber = 0;
  late StreamController numberStreamController;
  late NumberStream numberStream;
  late StreamTransformer transformer;
  late StreamSubscription subscription;
  late StreamSubscription subscription2;
  String values = '';

  // void changeColor() async {
  //   // await for (var eventColor in colorStream.getColors()) {
  //   //   setState(() {
  //   //     bgColor = eventColor;
  //   //   });
  //   // }

  //   colorStream.getColors().listen((eventColor) {
  //     setState(() {
  //       bgColor = eventColor;
  //     });
  //   });
  // }

  void stopStream() {
    numberStreamController.close();
  }

  @override
  void initState() {
    // numberStream = NumberStream();
    // numberStreamController = numberStream.controller;
    // Stream stream = numberStreamController.stream;
    // // stream.listen((event) {
    // //   setState(() {
    // //     lastNumber = event;
    // //   });
    // // });

    // transformer = StreamTransformer<int, int>.fromHandlers(
    //   handleData: (value, sink) {
    //     sink.add(value * 10);
    //   },
    //   handleError: (error, trace, sink) {
    //     sink.add(-1);
    //   },
    //   handleDone: (sink) => sink.close(),
    // );

    // stream.transform(transformer).listen((event) {
    //   setState(() {
    //     lastNumber = event;
    //   });
    // }).onError((error) {
    //   setState(() {
    //     lastNumber = -1;
    //   });
    // });

    numberStream = NumberStream();
    numberStreamController = numberStream.controller;
    Stream stream = numberStreamController.stream.asBroadcastStream();
    subscription = stream.listen((event) {
      setState(() {
        values += '$event - ';
      });
    });

    subscription2 = stream.listen((event) {
      setState(() {
        values += '$event - ';
      });
    });

    subscription.onError((error) {
      setState(() {
        lastNumber = -1;
      });
    });

    subscription.onDone(() {
      print('Stream is closed');
    });

    super.initState();
  }

  @override
  void dispose() {
    // numberStreamController.close();
    subscription.cancel();
    super.dispose();
  }

  void addRandomNumber() {
    Random random = Random();
    int myNum = random.nextInt(10);

    if (!numberStreamController.isClosed) {
      numberStream.addNumberToSink(myNum);
    } else {
      setState(() {
        lastNumber = -1;
      });
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text('Stream Color - Khen Cahyo')),
      body: SizedBox(
        width: double.infinity,
        child: Column(
          mainAxisAlignment: MainAxisAlignment.spaceEvenly,
          crossAxisAlignment: CrossAxisAlignment.center,
          children: [
            Text('Last Number: $lastNumber', style: TextStyle(fontSize: 24)),
            ElevatedButton(
              onPressed: stopStream,
              child: Text('Stop Subscription'),
            ),
            ElevatedButton(
              onPressed: addRandomNumber,
              child: Text('New Random Number'),
            ),
          ],
        ),
      ),
    );
  }
}
