<?php 
if(isset($_POST['word']))
{
$str1=$_POST['word'];$str2='';
echo "String 1=".$str1;
$arr=str_split($str1);
// print_r($arr);
for($i=strlen($str1)-1; $i>=0;$i--)
{
	$str2.=$arr[$i];
}
echo"<br>String 2=". $str2;
if($str1==$str2)
echo "<br>palindrome word";
else
echo "<br>Not a palindrome word";
$_POST['word']='';
}
?>
<html>
 <head></head>
 <body>
 	<form action="" method="post">
 		<input type="text" name="word" required>
 		<input type="submit" value="Submit">
 	</form>
 </body>
</html>