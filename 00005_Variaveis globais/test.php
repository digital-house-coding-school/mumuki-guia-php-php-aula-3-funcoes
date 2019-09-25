public function testResultado(): void {
  global $contadorGlobal;
  $this->assertTrue($contadorGlobal == 0, 'Verifique se você está utilizando a váraivel global $contatorGlobal');
  
  $this->assertTrue(function_exists("someUm"), "Não existe a função someUm");
  
  someUm();
  $this->assertTrue($contadorGlobal == 1, 'Aparentemente o valor da váriavel $contadorGlobal não foi alterado.');
  
  someUm();
  someUm();
  $this->assertTrue($contadorGlobal == 3, 'Aparentemente o valor da váriavel $contadorGlobal não foi alterado.');
}