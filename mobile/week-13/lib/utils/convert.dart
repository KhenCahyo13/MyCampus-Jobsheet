import 'dart:convert';

String convertToJson(List<dynamic> data) {
  return jsonEncode(data.map((item) => jsonEncode(item)).toList());
}