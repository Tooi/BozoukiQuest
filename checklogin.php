<?PHP
if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'  )
{ 										//isset = looks at variable to make sure it's set and not null
session_start();
$username =$_POST['username'];
$password = md5($_POST['password']); //password is md5 protected
  
require_once('config/config.php'); //includes the config file 
$query = "select * from tbluser where username = '$username' AND  password='$password';" ;
	
	$res=ORM::for_table('tbluser')->raw_query($query)->find_one();
	if(!$res)
	{
		$data['user']="invalid"; //if the data put in user doesn't match what's in the database then it will show 
		echo json_encode($data);
		exit;
	}
	
	$data['user']="success";           //else it will successfully log in
	$_SESSION['username']=$username;
	echo json_encode($data);

}
else
echo "<H2>Something went wrong...</H2>";
?>