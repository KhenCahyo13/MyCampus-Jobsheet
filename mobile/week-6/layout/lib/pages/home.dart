import 'package:flutter/material.dart';
import 'package:layout/models/item.dart';
import 'package:layout/widgets/home/item_summary_card.dart';

class HomePage extends StatelessWidget {
  final List<Item> items = [
    Item(name: 'Item 1', price: 100, image: 'assets/images/hutan.png', stock: 10, rating: 4.5),
    Item(name: 'Item 2', price: 200, image: 'assets/images/hutan.png', stock: 20, rating: 4.0),
    Item(name: 'Item 3', price: 300, image: 'assets/images/hutan.png', stock: 30, rating: 3.5),
    Item(name: 'Item 4', price: 400, image: 'assets/images/hutan.png', stock: 40, rating: 5.0),
    Item(name: 'Item 5', price: 500, image: 'assets/images/hutan.png', stock: 50, rating: 4.8),
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Home Page'),
      ),
      body: Container(
        margin: EdgeInsets.all(10),
        child: ListView.builder(
          padding: EdgeInsets.all(8),
          itemCount: items.length,
          itemBuilder: (context, index) {
            final item = items[index];
            return ItemSummaryCard(
              item: item,
              onTap: () {
                Navigator.pushNamed(context, '/item', arguments: item);
              },
            );
          },
        ),
      ),
    );
  }
}
