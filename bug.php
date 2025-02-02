```php
function myFunction($a, $b) {
  if ($a === 0) {
    return $b; 
  }
  return $a + $b;
}

//Incorrect usage leading to unexpected behavior
echo myFunction(0, 5); //Outputs 5 (Correct)
echo myFunction(0, '5'); //Outputs 5 (Correct)
echo myFunction(1, '2'); //Outputs 3 (Incorrect)
```