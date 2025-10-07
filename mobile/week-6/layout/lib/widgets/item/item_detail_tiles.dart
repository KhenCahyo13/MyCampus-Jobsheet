import 'package:flutter/material.dart';
import 'package:layout/models/item.dart';

class ItemImageTile extends StatelessWidget {
  final Item item;

  const ItemImageTile({super.key, required this.item});

  @override
  Widget build(BuildContext context) {
    return Card(
      shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(16)),
      clipBehavior: Clip.antiAlias,
      child: Stack(
        children: [
          Positioned.fill(
            child: Hero(
              tag: 'itemImage-${item.name}',
              child: Image.asset(
                item.image,
                fit: BoxFit.cover,
              ),
            ),
          ),
          Positioned(
            top: 12,
            left: 12,
            child: DecoratedBox(
              decoration: BoxDecoration(
                color: Colors.black.withOpacity(0.45),
                borderRadius: BorderRadius.circular(20),
              ),
              child: const Padding(
                padding: EdgeInsets.symmetric(horizontal: 12, vertical: 6),
                child: Text(
                  'Best Seller',
                  style: TextStyle(
                    color: Colors.white,
                    fontWeight: FontWeight.bold,
                  ),
                ),
              ),
            ),
          ),
        ],
      ),
    );
  }
}

class ItemInfoTile extends StatelessWidget {
  final Item item;

  const ItemInfoTile({super.key, required this.item});

  @override
  Widget build(BuildContext context) {
    final theme = Theme.of(context);
    return Card(
      shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(16)),
      child: Padding(
        padding: const EdgeInsets.all(16),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text(
              item.name,
              style: theme.textTheme.titleLarge?.copyWith(
                fontWeight: FontWeight.bold,
              ),
            ),
            const SizedBox(height: 12),
            Row(
              children: [
                Icon(Icons.star, color: Colors.amber.shade600, size: 18),
                const SizedBox(width: 4),
                Text(
                  item.rating.toStringAsFixed(1),
                  style: theme.textTheme.bodyMedium,
                ),
                const SizedBox(width: 6),
                Text(
                  '| ${item.stock} sold',
                  style: theme.textTheme.bodySmall?.copyWith(
                    color: theme.colorScheme.onSurfaceVariant,
                  ),
                ),
              ],
            ),
            const SizedBox(height: 20),
            Text(
              '\$${item.price.toDouble().toStringAsFixed(2)}',
              style: theme.textTheme.headlineSmall?.copyWith(
                fontWeight: FontWeight.bold,
                color: theme.colorScheme.primary,
              ),
            ),
            const SizedBox(height: 8),
            Text(
              'Prices include tax',
              style: theme.textTheme.bodySmall?.copyWith(
                color: theme.colorScheme.onSurfaceVariant,
              ),
            ),
            const Spacer(),
            Container(
              padding: const EdgeInsets.symmetric(horizontal: 12, vertical: 8),
              decoration: BoxDecoration(
                color: theme.colorScheme.primaryContainer,
                borderRadius: BorderRadius.circular(12),
              ),
              child: Row(
                mainAxisSize: MainAxisSize.min,
                children: [
                  Icon(Icons.verified, color: theme.colorScheme.primary, size: 18),
                  const SizedBox(width: 6),
                  Text(
                    'Official store',
                    style: theme.textTheme.bodySmall?.copyWith(
                      fontWeight: FontWeight.w600,
                    ),
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}

class ItemAvailabilityTile extends StatelessWidget {
  final Item item;

  const ItemAvailabilityTile({super.key, required this.item});

  @override
  Widget build(BuildContext context) {
    final theme = Theme.of(context);
    return Card(
      shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(16)),
      child: Padding(
        padding: const EdgeInsets.all(16),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text(
              'Availability',
              style: theme.textTheme.titleMedium?.copyWith(
                fontWeight: FontWeight.bold,
              ),
            ),
            const SizedBox(height: 16),
            DetailInfoRow(
              icon: Icons.inventory_2_outlined,
              label: '${item.stock} items ready to ship',
            ),
            const SizedBox(height: 12),
            const DetailInfoRow(
              icon: Icons.local_shipping_outlined,
              label: 'Free delivery within 2-3 days',
            ),
            const SizedBox(height: 12),
            const DetailInfoRow(
              icon: Icons.refresh_outlined,
              label: '30-day hassle-free returns',
            ),
            const Spacer(),
            Text(
              'Ships from Jakarta warehouse',
              style: theme.textTheme.bodySmall?.copyWith(
                color: theme.colorScheme.onSurfaceVariant,
              ),
            ),
          ],
        ),
      ),
    );
  }
}

class ItemDescriptionTile extends StatelessWidget {
  final String description;

  const ItemDescriptionTile({super.key, required this.description});

  @override
  Widget build(BuildContext context) {
    final theme = Theme.of(context);
    return Card(
      shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(16)),
      child: Padding(
        padding: const EdgeInsets.all(16),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text(
              'Product Details',
              style: theme.textTheme.titleMedium?.copyWith(
                fontWeight: FontWeight.bold,
              ),
            ),
            const SizedBox(height: 12),
            Text(
              description,
              style: theme.textTheme.bodyMedium?.copyWith(height: 1.4),
            ),
            const SizedBox(height: 16),
            Wrap(
              spacing: 8,
              runSpacing: 8,
              children: const [
                DetailTagChip(icon: Icons.security_outlined, label: 'Secure packaging'),
                DetailTagChip(icon: Icons.eco_outlined, label: 'Eco materials'),
                DetailTagChip(icon: Icons.bolt_outlined, label: 'Fast setup'),
              ],
            ),
          ],
        ),
      ),
    );
  }
}

class ItemHighlightsTile extends StatelessWidget {
  const ItemHighlightsTile({super.key});

  @override
  Widget build(BuildContext context) {
    return Card(
      shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(16)),
      child: Padding(
        padding: const EdgeInsets.all(16),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            const Text(
              'What you\'ll love',
              style: TextStyle(
                fontSize: 18,
                fontWeight: FontWeight.bold,
              ),
            ),
            const SizedBox(height: 16),
            const DetailInfoRow(
              icon: Icons.check_circle_outline,
              label: 'Premium build quality with year-long warranty',
            ),
            const SizedBox(height: 12),
            const DetailInfoRow(
              icon: Icons.palette_outlined,
              label: 'Modern design that matches multiple interior styles',
            ),
            const SizedBox(height: 12),
            const DetailInfoRow(
              icon: Icons.headset_mic_outlined,
              label: '24/7 customer support with dedicated specialists',
            ),
          ],
        ),
      ),
    );
  }
}

class ItemActionsTile extends StatelessWidget {
  const ItemActionsTile({super.key});

  @override
  Widget build(BuildContext context) {
    final theme = Theme.of(context);
    return Card(
      shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(16)),
      child: Padding(
        padding: const EdgeInsets.all(16),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.stretch,
          children: [
            Text(
              'Choose your action',
              style: theme.textTheme.titleMedium?.copyWith(
                fontWeight: FontWeight.bold,
              ),
            ),
            const SizedBox(height: 16),
            OutlinedButton.icon(
              onPressed: () {},
              icon: const Icon(Icons.shopping_cart_outlined),
              label: const Text('Add to cart'),
              style: OutlinedButton.styleFrom(
                padding: const EdgeInsets.symmetric(vertical: 14),
              ),
            ),
            const SizedBox(height: 12),
            FilledButton.icon(
              onPressed: () {},
              icon: const Icon(Icons.flash_on_outlined),
              label: const Text('Buy now'),
              style: FilledButton.styleFrom(
                padding: const EdgeInsets.symmetric(vertical: 16),
              ),
            ),
            const SizedBox(height: 12),
            Text(
              'Secure payment powered by FlutterPay',
              textAlign: TextAlign.center,
              style: theme.textTheme.bodySmall?.copyWith(
                color: theme.colorScheme.onSurfaceVariant,
              ),
            ),
          ],
        ),
      ),
    );
  }
}

class DetailInfoRow extends StatelessWidget {
  final IconData icon;
  final String label;

  const DetailInfoRow({
    super.key,
    required this.icon,
    required this.label,
  });

  @override
  Widget build(BuildContext context) {
    final theme = Theme.of(context);
    return Row(
      crossAxisAlignment: CrossAxisAlignment.start,
      children: [
        Icon(
          icon,
          size: 20,
          color: theme.colorScheme.primary,
        ),
        const SizedBox(width: 8),
        Expanded(
          child: Text(
            label,
            style: theme.textTheme.bodyMedium,
          ),
        ),
      ],
    );
  }
}

class DetailTagChip extends StatelessWidget {
  final IconData icon;
  final String label;

  const DetailTagChip({
    super.key,
    required this.icon,
    required this.label,
  });

  @override
  Widget build(BuildContext context) {
    final theme = Theme.of(context);
    return Chip(
      avatar: Icon(
        icon,
        size: 18,
        color: theme.colorScheme.primary,
      ),
      label: Text(label),
      shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(12)),
      padding: const EdgeInsets.symmetric(horizontal: 4, vertical: 2),
    );
  }
}
