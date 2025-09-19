void main() {
	var gifts = {
		'first': 'partridge',
		'second': 'turtledoves',
		'fifth': 'golden rings'
	};

	var nobleGases = {
		2: 'helium',
		10: 'neon',
		18: 'argon',
	};

	var mhs1 = Map<String, String>();
	mhs1['name'] = 'Khen Muhammad Cahyo';
	mhs1['nim'] = '244107023002';

	var mhs2 = Map<int, String>();
	mhs2[1] = 'Khen Muhammad Cahyo';
	mhs2[2] = '244107023002';

	gifts['name'] = 'Khen Muhammad Cahyo';
	gifts['nim'] = '244107023002';

	nobleGases[20] = 'Khen Muhammad Cahyo';
	nobleGases[21] = '244107023002';

	print(gifts);
	print(nobleGases);
	print(mhs1);
	print(mhs2);
}