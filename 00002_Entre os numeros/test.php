public function testResultado(): void {
  $this->assertTrue(function_exists("entre100"), "Não existe a função entre100");
  
  $fct = new ReflectionFunction('entre100');
  $fct = $fct->getNumberOfRequiredParameters();
  
  $this->assertTrue($fct == 1, "A função deveria receber um parametro.");
  
  $this->assertTrue(entre0Y100(50) == true, "Dado numero 50 a função retorna true");
  $this->assertTrue(entre0Y100(0) == true, "La función falla para el número 0");
  $this->assertTrue(entre0Y100(100) == true, "La función falla para el número 100");
  
  $this->assertTrue(entre0Y100(200) == false, "La función falla para el número 200");
  $this->assertTrue(entre0Y100(101) == false, "La función falla para el número 100");
  
  
  $this->assertTrue(entre0Y100(-90) == false, "La función falla para el número -90");
  $this->assertTrue(entre0Y100(-1) == false, "La función falla para el número -1");
}