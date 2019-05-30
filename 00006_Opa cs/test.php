public function testResultado(): void {
  $this->assertTrue(function_exists("umADez"), "A função umADez não existe");
  
  $resul = umADez();
  
  $this->assertTrue(is_array($resul), "A função deve retornar um array");
  
  $this->assertTrue(count($resul) == 10, "A array que será retornada deve conter 10 elementos");
  
  $exito = true;
  $i = 1;
  foreach ($resul as $r) {
    $exito = $exito && $r == $i;
    $i++;
  }
  
  $this->assertTrue($exito, "A função não está retornando a contagem correta!");
}