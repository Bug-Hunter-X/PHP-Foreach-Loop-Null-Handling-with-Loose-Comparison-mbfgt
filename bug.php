function foo(array $arr) {
  foreach ($arr as $value) {
    if ($value === null) {
      return null; // This line might cause unexpected behavior
    }
    // ... process $value ...
  }
}