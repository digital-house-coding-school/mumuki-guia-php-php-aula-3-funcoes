public function testResultado(): void {
/*...content...*/
  $sol = '/*...content...*/';
  
  $this->assertTrue(function_exists("dobroDaArray"), "Não existe a função 'dobroDaArray'");
  
  $resul = $this->dobroDaArray();
  
  $this->assertTrue(is_array($resul), "A função deve retornar um array");
  
  $this->assertTrue(count($resul) == 10, "A array deve retornar 10 elementos");
  
  $exito = true;
  $i = 2;
  foreach ($resul as $r) {
    $exito = $exito && $r == $i;
    $i = $i + 2;
  }
  
  $this->assertTrue($exito, "A função não está retornando o resultado certo");
  
  $cantUnoAlDiez = substr_count($sol, "umADez");
  
  $this->assertTrue($cantUnoAlDiez > 0, "Você não utilizou a função umADez");
  
  $trampa = substr_count($sol, "8") + substr_count($sol, "20");
  $trampa = $trampa == 0;
  $this->assertTrue($trampa, "Não deveria ter escrito o numeros manualmente!");
}