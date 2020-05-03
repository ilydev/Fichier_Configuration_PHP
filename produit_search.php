
<?php include 'config.php';



if ($_SERVER['REQUEST_METHOD'] =='POST'){




	$id = $_POST['id'];
	 
    $reference = $_POST['reference'];

    $designation = $_POST['designation'];
	 

	$sql= "select * from produit where id='$id' OR reference='$reference'  OR  designation='$designation'";

	$result = mysqli_query($conn, $sql);

	$rows = array();



	if(mysqli_num_rows($result) > 0){

		while($r = mysqli_fetch_assoc($result)) {

			array_push($rows , $r) ;

		}

		echo (json_encode($rows,JSON_UNESCAPED_UNICODE));

	}else{

		echo json_encode("no data");	
		

	}




}



?>

