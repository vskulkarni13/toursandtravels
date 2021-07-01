  <?php
  

$con = mysqli_connect("localhost","root","") OR die ("cannot connect");
mysqli_select_db($con,'main');

//echo '<script type="text/javascript">alert("Php Working")</script>';
$redirected = 1;

if($redirected) 
{
	//echo '<script type="text/javascript">alert("Php Working")</script>';
	@$name=$_POST['name'];
	@$birthday=$_POST['birthday'];
	$email=$_POST['email'];
	@$phone= $_POST['phone'];
	@$Package= $_POST['Package'];
	if ($name == "" || $birthday == "" ||$email == "" || $phone == "" || $Package == "")
	 {
			echo '<script type="text/javascript">alert("Insert values in all fields")</script>';
	 }
	 
	else {

		$query = "insert into USER_INFO values('$name','$birthday','$email','$phone','$Package')";
		$query_run = mysqli_query($con,$query);
		if ($query_run) {

			echo '<script type="text/javascript">alert("Values inserted successfully")</script>';
			header("Location: index.html");
			echo '<script type="text/javascript">alert("Values inserted successfully")</script>';
		} 
		else {

			echo '<script type="text/javascript">alert("Values not inserted successfully")</script>';
		}
	}


}
else {
	echo"NOt Working";
}

?>