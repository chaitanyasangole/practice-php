<?php 
require 'db_config.php';
$sql='select * from register';
$res=mysqli_query($con,$sql);
$html='<table><tr><thead><th>Sr.No.</th><th>Username</th>
<th>Email</th><th>Password</th><th>Phone</th></thead></tr><tbody>';
while($row=mysqli_fetch_assoc($res))
{
	$no=$username=$email=$password=$phone='-';
	
	if(isset($row['id']) && !empty($row['id']))
	$no=$row['id'];

	if(isset($row['username']) && !empty($row['username']))
	$username=$row['username'];

	if(isset($row['email']) && !empty($row['email']))
	$email=$row['email'];

	if(isset($row['password']) && !empty($row['password']))
	$password=$row['password'];

	if(isset($row['phone']) && !empty($row['phone']))
	$phone=$row['phone'];
	
	$html.="<tr><td>".$no."</td><td>".$username."</td><td>".$email."</td><td>".$password."</td><td>".$phone."</td></tr>";
}
$html.='</tbody></table>';
echo $html;
if(file_exists('excel.xls'))
{
	unlink('excel.xls');
}

file_put_contents('excel.xls', $html);

if(isset($_POST['save_excel_file']))
{

}
?>