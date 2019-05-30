public function testResultado(): void {
  $this->assertTrue(function_exists("entreDoisNumeros"), "Não existe a função entreDoisNumeros");
  
  $fct = new ReflectionFunction('entreDoisNumeros');
  $params = $fct->getNumberOfRequiredParameters();
  
  $this->assertTrue($params == 1, "A função deve receber um 1 parametro obrigatorio");
  
  $paramsOpt = $fct->getNumberOfParameters() - $params;
  
  $this->assertTrue($paramsOpt == 2, "A função deve receber um 2 parametro obrigatorio");
  
  
  $this->assertTrue(entreDoisNumeros(50, 10, 60) == true, "Dado os numeros 50, 10 e 60 a função retorna false.");
  $this->assertTrue(entreDoisNumeros(0, 0, 10) == true, "Dado os numeros 0, 0 e 10 a função retorna false.");
  $this->assertTrue(entreDoisNumeros(100, 90, 100) == true, "Dado os numeros 100, 90 e 100 a função retorna false.");
  
  $this->assertTrue(entreDoisNumeros(200, 100, 150) == false, "Dado os numeros 200, 100 e 150 a função retorna true.");
  $this->assertTrue(entreDoisNumeros(101, 80, 100) == false, "Dado os numeros 101, 80 e 100 a função retorna true.");
  
  
  $this->assertTrue(entreDoisNumeros(-90, -50, 0) == false, "Dado os numeros -90, -50 e 0 a função retorna true.");
  $this->assertTrue(entreDoisNumeros(-1, 0, 10) == false, "Dado os numeros -1, 0 e 10 a função retorna true.");
  
  $this->assertTrue(entreDoisNumeros(50) == true, "Dado apenas o numero 50 a função retorna false");
  $this->assertTrue(entreDoisNumeros(0) == true, "Dado apenas o numero 0 a função retorna false");
  $this->assertTrue(entreDoisNumeros(100) == true, "Dado apenas o numero 100 a função retorna false");
  $this->assertTrue(entreDoisNumeros(-1) == false, "Dado apenas o numero 50 a função retorna true");
  $this->assertTrue(entreDoisNumeros(101) == false, "Dado apenas o numero 101 a função retorna true");
}