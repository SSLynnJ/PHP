<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Калькулятор</title>
</head>
<body>
	
</body>
</html>


<? 
$a = $_POST['a'];
$b = $_POST['b'];
$radio = $_POST['operation'];
if ($_POST['button'])
{
if ($radio=='+'){$c = $a + $b; $info = "<red>Результат:</red><br> сумма = <red>" . $c.'</red>';}
if ($radio=='-'){$d = $a - $b; $info = "<red>Результат:</red><br>разность = <red>" . $d.'</red>';}
if ($radio=='*'){$e = $a *$b;  $info =  "<red>Результат:</red><br>произведение = <red>" . $e.'</red>';}
if ($radio=='/'){$f = $a / $b; $info = "<red>Результат:</red><br>деление = <red>" . $f;}
{if ($b == 0); echo 'Деление невозможно!';}
}


else {echo $info;} 

	?>

 <form method="POST" action="">
    <input type="radio" name="operation" value="+">+<br>
    <input type="radio" name="operation" value="-">-<br>
    <input type="radio" name="operation" value="/">/<br>
    <input type="radio" name="operation" value="*">*<br>
               <input type="text" name="a" required><br>
               <input type="text" name="b" required><br>
<input type="submit" name="button" value="Отправить">
</form>