## Practicum 1 - Camera
![Alt text](images/p-1.png)

## Practicum 2 - Filters
![Alt text](images/p-2.png)

## What is `void async`?
`void async` in practicum 1 indicates that the function does not return a value `(void)` but runs asynchronously `(async)`, meaning that the process within the function can wait for other tasks such as retrieving data or I/O operations without stopping the execution of the main program. With `async`, the function can use the `await` keyword to delay execution until a specific task is complete, making the code more efficient and easier to read even when working with time-consuming operations.

## What is `@immutable` and `@override` for?
The `@immutable` annotation is used to indicate that a class is immutable, meaning that all property values ​​in the class must be final and cannot be changed after the object is created — this is often used in Widgets in Flutter to make it safer and more efficient.
Meanwhile, the `@override` annotation is used when a method or property overrides a method or property of the parent class (superclass), making it easier for code readers and ensuring that the method written actually replaces the method of its parent.