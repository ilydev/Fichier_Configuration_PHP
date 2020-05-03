<?php include 'config.php';

	
$sql= "select * from produit ";

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

?>

