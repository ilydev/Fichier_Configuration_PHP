<?php include 'config.php';



if ($_SERVER['REQUEST_METHOD'] =='POST'){




	 $id = $_POST['id'];
	 





    $sql = "delete from produit  where id='$id' ";



    if ( mysqli_query($conn, $sql) ) {

        $result["success"] = "1";

        $result["message"] = "success";



        echo json_encode($result,JSON_UNESCAPED_UNICODE);

        mysqli_close($conn);



    } else {



        $result["success"] = "0";

        $result["message"] = "error";



        echo json_encode($result,JSON_UNESCAPED_UNICODE);

        mysqli_close($conn);

    }

}



?>