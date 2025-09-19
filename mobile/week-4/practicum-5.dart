(int, int) tukar((int, int) record) {
  var (a, b) = record;
  return (b, a);
}

void main() {
  // var record = ('first', a: 2, b: true, 'last');
  // print(record);

  // print(tukar((1, 2)));

  // (String, int) mahasiswa = ('Khen Muhammad Cahyo', 244107023002);
  // print(mahasiswa);

  var mahasiswa2 = ('Khen Muhammad Cahyo', a: 244107023002, b: true, 'last');

  print(mahasiswa2.$1); // Prints 'Khen Muhammad Cahyo'
  print(mahasiswa2.a); // Prints 244107023002
  print(mahasiswa2.b); // Prints true
  print(mahasiswa2.$2); // Prints 'last'
}
