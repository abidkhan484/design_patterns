# Strategy pattern
### Concept
The main concept of `Strategy Pattern` is to avoid violating `Open Close Principle` in `SOLID` where the class/ interface is open for extension and close for modification.

In this example, the SummationOperation class is implemented via IArithmeticInterface. And ArithmeticOperation service class is consuming the IArithmeticInterface with methods.
Now, If a new class SubtractionOperation class is introduced with the implementaion of IArithmeticInterface and called by providing the class in ArithmeticOperation service class. The expected output can be found without updating the existing classes. This is the main concept of the Open Close Principle.

### Playground
After pulling from the repository and changing to the `strategy` directory, run the below command to execute.

```sh
composer install # this will create vendor directory
php index.php # php -S localhost:9090
```
