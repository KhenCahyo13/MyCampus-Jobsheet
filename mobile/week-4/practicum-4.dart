void main() {
    // List<int?> list1 = [0, 1, 2, 3];
    // var list = [1, 2, 3];
    // var list2 = [0, ...list];
    // print(list1);
    // print(list2);
    // print(list2.length);

    // list1 = [1, 2, null];
    // print(list1);
    // var list3 = [0, ...?list1];
    // print(list3.length);

    // var nimDigits = [2, 4, 4, 1, 0, 7, 0, 2, 3, 0, 0, 2];
    // var nimList = [...nimDigits];
    // print(nimList);
    // print(nimList.length);

    // bool promoActive = false;

    // var nav = ['Home', 'Furniture', 'Plants', if (promoActive) 'Outlet'];
    // print(nav);

    var listOfInts = [1, 2, 3];
    var listOfStrings = ['#0', for (var i in listOfInts) '#$i'];
    assert(listOfStrings[1] == '#1');
    print(listOfStrings);
}