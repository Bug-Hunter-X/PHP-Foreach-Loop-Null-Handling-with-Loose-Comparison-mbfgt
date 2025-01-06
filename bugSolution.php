function foo(array $arr) {
  foreach ($arr as $value) {
    if ($value === null) {
      //Handle null value appropriately, maybe continue the loop
      continue; //or throw an exception, log error, etc
    }
    // ... process $value ...
  }
}