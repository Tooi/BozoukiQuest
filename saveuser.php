<?PHP
if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'  )
{
	session_start();
	
	require_once('config/config.php');
	$query="SELECT * FROM tbluser where username='".$_POST['username']."';";
	
	$res=ORM::for_table('tbluser')->raw_query($query)->find_one();
	if($res)
	{
		$data['err']='username';
		$data['msg']='Username has been taken already.';
		echo json_encode($data);
		exit;
	}
	
	$query="SELECT * FROM tbluser where email='".$_POST['email']."';";
	
	$res=ORM::for_table('tbluser')->raw_query($query)->find_one();
	if($res)
	{
		$data['err']='email';
		$data['msg']='Email has been taken already.';
		echo json_encode($data);
		exit;
	}
	
	
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$country=$_POST['country'];
	$validationkey=md5(date("h:i:sa"));
	$status=0;
	$a = ORM::for_table('tbluser')->create();
		$a->username=$username;
		$a->email=$email;
		$a->password=$password;
		$a->country=$country;
		$a->validationkey=$validationkey;
		$a->status=1;
		$a->save();
	$data['err']='no';
	
	$_SESSION['status']="success";
	echo json_encode($data);
	
}
else
echo "<H2>Something went wrong...</H2>";
?>