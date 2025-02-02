```php
function myFunction($a, $b) {
  if (!is_numeric($a) || !is_numeric($b)) {
    return "Invalid input: both parameters must be numbers.";
  }
  if ($a === 0) {
    return $b; 
  }
  return $a + $b;
}

//Correct usage with error handling
echo myFunction(0, 5); //Outputs 5
echo myFunction(0, '5'); //Outputs Invalid input: both parameters must be numbers
echo myFunction(1, '2'); //Outputs Invalid input: both parameters must be numbers
echo myFunction(1, 2); //Outputs 3
```