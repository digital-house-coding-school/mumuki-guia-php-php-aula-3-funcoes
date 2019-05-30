public function testDescriptionExample(): void {
  $this->assertTrue(function_exists("entreDosNumeros"), "No existe la función entreDosNumeros");
  
  $fct = new ReflectionFunction('entreDosNumeros');
  $params = $fct->getNumberOfRequiredParameters();
  
  $this->assertTrue($params == 1, "La función debe recibir 1 parámetro obligatorio");
  
  $paramsOpt = $fct->getNumberOfParameters() - $params;
  
  $this->assertTrue($paramsOpt == 2, "La función debe recibir 2 parámetros optativos");
  
  
  $this->assertTrue(entreDosNumeros(50, 10, 60) == true, "La función falla para el número 50 con 10 y 60 cómo límites");
  $this->assertTrue(entreDosNumeros(0, 0, 10) == true, "La función falla para el número 0 con 0 y 10 como límites");
  $this->assertTrue(entreDosNumeros(100, 90, 100) == true, "La función falla para el número 100 con 90 y 100 cómo límites");
  
  $this->assertTrue(entreDosNumeros(200, 100, 150) == false, "La función falla para el número 200 con 100 y 150 como límites");
  $this->assertTrue(entreDosNumeros(101, 80, 100) == false, "La función falla para el número 101 con 80 y 100 cómo límites");
  
  
  $this->assertTrue(entreDosNumeros(-90, -50, 0) == false, "La función falla para el número -90 con -50 y 0 cómo límites");
  $this->assertTrue(entreDosNumeros(-1, 0, 10) == false, "La función falla para el número -1 con 0 y 10 cómo límites");
  
  $this->assertTrue(entreDosNumeros(50) == true, "La función falla para el número 50 sin límites específicos");
  $this->assertTrue(entreDosNumeros(0) == true, "La función falla para el número 0 sin límites específicos");
  $this->assertTrue(entreDosNumeros(100) == true, "La función falla para el número 100 sin límites específicos");
  $this->assertTrue(entreDosNumeros(-1) == false, "La función falla para el número -1 sin límites específicos");
  $this->assertTrue(entreDosNumeros(101) == false, "La función falla para el número 101 sin límites específicos");
}