import 'package:flutter/material.dart';
import 'package:layout/models/item.dart';
import 'package:layout/widgets/item/item_detail_tiles.dart';

class ItemPage extends StatelessWidget {
  const ItemPage({super.key});

  @override
  Widget build(BuildContext context) {
    final itemArgs = ModalRoute.of(context)!.settings.arguments as Item;
    final description =
        'Experience the reliability of ${itemArgs.name} with premium components, curated to keep up with busy days and weekend adventures alike.';

    return Scaffold(
      appBar: AppBar(title: Text(itemArgs.name)),
      body: GridView(
        padding: const EdgeInsets.all(16),
        gridDelegate: const SliverGridDelegateWithMaxCrossAxisExtent(
          maxCrossAxisExtent: 420,
          crossAxisSpacing: 16,
          mainAxisSpacing: 16,
          childAspectRatio: 0.75,
        ),
        children: [
          ItemImageTile(item: itemArgs),
          ItemInfoTile(item: itemArgs),
          ItemAvailabilityTile(item: itemArgs),
          ItemDescriptionTile(description: description),
          const ItemHighlightsTile(),
          const ItemActionsTile(),
        ],
      ),
    );
  }
}
