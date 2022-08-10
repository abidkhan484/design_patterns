# Adapter Pattern

### Concept
In this scenerio, there are two different interfaces Keyboard and Mouse. There can be a couple of similar methods in both of the interfaces. We can use `Adapter Pattern` to call similar methods with the newly created interface.

In this example, two classes are implemented with different interfaces. and another interface is implemented for the adapter between Keyboard and Mouse interfaces.
Here, Keyboard can call the click method like Mouse interface.

### Playground
After pulling from the repository and changing to the `adapter` directory, run the below command to execute.

```sh
composer install # this will create vendor directory
php index.php # php -S localhost:9090
```
