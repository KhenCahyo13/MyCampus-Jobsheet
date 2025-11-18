import 'dart:async';
import 'dart:math';

class RandomBloc {
  final _generateRandomController = StreamController<void>();
  final _randomNumberController = StreamController<int>();
  Sink<void> get generateRandom => _generateRandomController.sink;
  Stream<int> get randomNumber => _randomNumberController.stream;

  RandomBloc() {
    _generateRandomController.stream.listen((_) {
      _randomNumberController.sink.add(Random().nextInt(10));
    });
  }

  void dispose() {
    _generateRandomController.close();
    _randomNumberController.close();
  }
}