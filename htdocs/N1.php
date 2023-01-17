<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/style.css">
  <title>N1</title>
</head>
<body>

  <button onclick="window.location.href = 'index.html';">Главная</button>

  <div class="container">
	  <h3>Элементы &a = 1 ставятся после чисел с цифрой "2"</h3>

 <?php
 $a = 1;
 $arr = array(2, 22, 44, 442, 66, 222, 555, 2, 8, 0, 22);

 $len = count($arr);
 for ($i = 0; $i < $len; $i++){
     if (strrpos($arr[$i], "2") !== false) {
         $len++;
         for ($j = $len - 1; $j > $i; $j--){
                 $arr[$j] = $arr[$j-1];
         }
         $i++;
         $arr[$i] = $a;
     }
 }
 print_r($arr);
?>

</body>
</html>
