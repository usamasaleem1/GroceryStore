<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>user_dashboard</title>
  </head>
  <body>
    <p style="text-align: center;"><u><b>Sign up Succesfull!</b></u></p>
    <p style="text-align: center;"><u><b><br>
        </b></u></p>
    <p>
      <?php
//connecting to db	  
// $sid = "(DESCRIPTION
//                 =(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)
//                 (HOST=DoppleGanger)(PORT=1521)))(CONNECT_DATA=(SID=FAIZANN)))";
//                 $con = oci_connect("scott", "1234", $sid);
$host = 'remotemysql.com:3306';
$db = 'HTADFpjYkD';
$user = 'HTADFpjYkD';
$pass = 'Ng7fU9bD9m'
$charset = 'utf8mb4';

$conn = new mysqli($host,$user,$pass,$db); 
if ($conn-> connect_errno) { 
    trigger_error('Database connection failed: ' . $conn->connect_error); 
    }

if ($conn)
{
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
	  // collect value of input field
	//  $name = $_POST["name"];
	//  $password = $_POST["password"];
	 // $q="insert into emp values( 8214,'Ali', 'MANAGER' , 8213,TO_DATE('2004/12/31', 'yyyy/mm/dd'),2310,219,40)";
	 //echo $q;
	 //$query_id = oci_parse($con, $q); 		
	 //$r = oci_execute($query_id); 
	$firstname = (int)$_POST['firstname'];	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$postal = $_POST['postal'];

//$query = "insert into member values ('" . $_POST["name"] . "' where employee_id = ". $_POST["idz"];
	$q2="INSERT INTO member(firstname,email,password,address,postal)	values ('$firstname',,'$email','$password','$address','$postal')";
	echo $q2;
	
	 $query_id = oci_parse($conn, $q2); 		
	 $r = oci_execute($query_id);

		//if($r){
			
			//echo "Inserted!";
		//}
			
		}
	}
else{
	
	echo "could not connect";
	
}
?>
    </p>
  </body>
</html>
