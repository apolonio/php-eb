

<html>
<body>
Resultado
<?php
    //Valor enviado na View
    echo $_GET["valor"];

    $fibo = $_GET["valor"];
    echo "<br>";
    $fib = fibonacci($fibo, true);
      foreach($fib as $v){ 	
          
        echo (end($fib) == $v) ? $v : $v.', ';	
    }

?>

</body>
</html>

<?php
 
//função que gera a sequência de fibonacci e retorna em array
function fibonacci($q, $zero = false){
	if($q >= 2){ 
		$f = ($zero) ? [0,1] : [1,1]; 
		for($i = 2; $i < $q; $i++){
			$f[$i] = $f[$i-1] + $f[$i-2];		
		}
		return $f;
	}
	return ($q == 1) ? [1] : [];
}
 
//exibindo os primeiros 20 números da sequência de fibonacci, começando por 0
// $fib = fibonacci(10, true);
// foreach($fib as $v){
// 	echo (end($fib) == $v) ? $v : $v.', ';	
// }
?>