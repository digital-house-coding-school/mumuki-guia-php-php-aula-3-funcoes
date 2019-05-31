public function testResultado(): void {
  $this->assertTrue(function_exists("fullName"), "Não existe a função fullName!");
  
  $fct = new ReflectionFunction('fullName');
  $fct = $fct->getNumberOfRequiredParameters();
  
  $this->assertTrue($fct == 2, "A função deveria receber 2 parametros");
  
  $res = fullName("Jon", "Snow");
  $this->assertTrue($res === "Jon Snow", "Usando o nome Jon Snow a função retorna: '$res'");
  
  $res = fullName("Arya", "Stark");
  $this->assertTrue($res === "Arya Stark", "Usando o nome Jon Snow a função retorna: '$res'");
}