<?php

$servername = "localhost";  // Server name
$username = "root";         // username
$password = "";				//Password
$dbname = "flat_assignment"; // Database name
 
// Create connection
$conn = new mysqli($servername,$username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}


if(isset($_POST['bookingData']) && $_POST['bookingData'] !=''){

	$name 	= $_POST['bookingData']['name'];
	$flat 	= $_POST['bookingData']['flats'];
	$floor 	= $_POST['bookingData']['floor'];

	$getData = $conn->query("select * from flat_booking where flats = $flat");


	if (isset($getData) && $getData->num_rows > 0) {
		// code...

		$sqlquery = "update  flat_booking SET name = '$name' WHERE  flats = $flat";

		if ($conn->query($sqlquery) === TRUE) {
			
			echo json_encode(array('msg'=>'record updated successfully'));	
	   
		} else {

		   echo json_encode(array( 'msg'=>'record not update.'));
		}

	}else{

		$sqlquery = "insert into flat_booking(floors, flats, name) values ($floor, $flat,'$name')";

		if ($conn->query($sqlquery) === TRUE) {

			echo json_encode(array('msg'=>'record inserted successfully'));	
	 
		} else {
		    echo json_encode(array('msg'=>'record not inserted'));
		}

	}

}

?>


<div class="main-home-contact" style="width:100%;">
	<div class="main-row"> 
	    <div class="div-field">
	          	<p> Free site and energy demand assessment.</p>
				<p> Free consultation for all types of Solar PV plants.</p>
				<p> Solar PV plant design and installation.</p>
	    </div>
	     <div class="div-field">
		        <p> Solar PV plant performance simulation.</p>
				<p> Project Management and monitoring.</p>
				<p> Operation and maintenance</p>
	     </div>
	</div>
</div>




