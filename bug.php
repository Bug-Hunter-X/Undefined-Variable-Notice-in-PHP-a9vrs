function myFunc() {
  $a = 10;
  if (true) {
    $a = 20; 
  }
  // Forgot to declare $a
  return $a + $b; 
}