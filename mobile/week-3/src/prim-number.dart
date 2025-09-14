void main() {
	String nama = "Khen Muhammad Cahyo";
	String nim = "244107002032";

	for (int i = 2; i <= 201; i++) {
		if (isPrime(i)) {
			print('$i adalah bilangan prima - $nama ($nim)');
		}
	}
}

bool isPrime(int n) {
	if (n < 2) return false;
	for (int i = 2; i <= n ~/ 2; i++) {
		if (n % i == 0) return false;
	}
	return true;
}
