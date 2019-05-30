public function testDescriptionExample(): void {
  $this->assertTrue(function_exists("entreDoisNumeros"), "Não existe a função entreDoisNumeros!");
  
  $fct = new ReflectionFunction('entreDoisNumeros');
  $fct = $fct->getNumberOfRequiredParameters();
  
  $this->assertTrue($fct == 3, "A função deveria conter 3 parametros");
  
  $this->assertTrue(entreDoisNumeros(50, 10, 60) == true, "Dado os numeros 50, 10 e 60 a função retorna false.");
  $this->assertTrue(entreDoisNumeros(0, 0, 10) == true, "Dado os numeros 0, 0 e 10 a função retorna false.");
  $this->assertTrue(entreDoisNumeros(100, 90, 100) == true, "Dado os numeros 100, 90 e 100 a função retorna false.");
  
  $this->assertTrue(entreDoisNumeros(200, 100, 150) == false, "Dado os numeros 200, 100 e 150 a função retorna true.");
  $this->assertTrue(entreDoisNumeros(101, 80, 100) == false, "Dado os numeros 101, 80 e 100 a função retorna true.");
  
  
  $this->assertTrue(entreDoisNumeros(-90, -50, 0) == false, "Dado os numeros -90, -50 e 0 a função retorna true.");
  $this->assertTrue(entreDoisNumeros(-1, 0, 10) == false, "Dado os numeros -1, 0 e 10 a função retorna true.");
}