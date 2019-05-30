public function testResultado(): void {
  $this->assertTrue(function_exists("entre100"), "Não existe a função entre100");
  
  $fct = new ReflectionFunction('entre100');
  $fct = $fct->getNumberOfRequiredParameters();
  
  $this->assertTrue($fct == 1, "A função deveria receber um parametro.");
  
  $this->assertTrue(entre100(50) == true, "Dado numero 50 a função retorna false");
  $this->assertTrue(entre100(0) == true, "Dado numero 0 a função retorna false");
  $this->assertTrue(entre100(100) == true, "Dado numero 100 a função retorna false");
  
  $this->assertTrue(entre100(200) == false, "Dado numero 200 a função retorna true");
  $this->assertTrue(entre100(101) == false, "Dado numero 101 a função retorna true");
  
  
  $this->assertTrue(entre100(-90) == false, "Dado numero -90 a função retorna true");
  $this->assertTrue(entre100(-1) == false, "Dado numero -1 a função retorna true");
}