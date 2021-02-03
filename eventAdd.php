
<?php 

$conn = mysqli_connect('localhost', 'root', '', 'it_development_program');
if (!$conn) 
{
  die ("Connection Failed :" . mysqli_connect_error());
}

// -----   ADD  EVENT   ------
if (isset($_POST['eventname']) && isset($_POST['eventstart']) && isset($_POST['eventend']) && isset($_POST['requirement']) && isset($_POST['status']) && isset($_POST['quota']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$eventname = validate($_POST['eventname']);
	$eventstart = validate($_POST['eventstart']);
	$eventend = validate($_POST['eventend']);
	$eventrequirement = validate($_POST['requirement']);
	$eventstatus = validate($_POST['status']);
	$eventquota = validate($_POST['quota']);

	
		//input data into database
        $sql = "INSERT INTO event (eventName, eventStart, eventEnd, eventType, requirement, status, quota) VALUES ('$eventname', '$eventstart', '$eventend', '$eventtype', '$eventrequirement', '$eventstatus', '$eventquota')";
		$result = mysqli_query($conn, $sql) or die ("Bad Query: $sql");
}

// -----   VIEW  EVENT   ------
if(isset($_POST["search"])){
    
    $search =$_POST["searchvalue"]; 
    $sql = "SELECT * FROM event WHERE eventId='$eventid'"; 
    $result = $conn->query($sql);

}else{
    $sql = "SELECT * FROM request";
    $result = $conn->query($sql);
}

while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><a href="view-detail.php?reqId=<?php echo $row["eventid"]; ?>"><?php echo $row["eventid"]; ?></a></td> 
        <td><?php echo $row["eventId"]; ?> </td>
        <td><?php echo $row["eventName"]; ?></td>
        <td><?php echo $row["eventStart"]; ?></td>
        <td><?php echo $row["eventEnd"]; ?></td>
        <td><?php echo $row["eventType"]; ?></td>
        <td><?php echo $row["requirement"]; ?></td>
        <td><?php echo $row["status"]; ?></td>
        <td><?php echo $row["quota"]; ?></td>
            
        <?php echo "</td>";
    echo "</tr>";
}

// -----   Update  EVENT   ------
if(isset($_POST['update-event'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }

     $eventname = $_POST['eventname'];
     $eventname = validate($_POST['eventname']);
     $eventstart = validate($_POST['eventstart']);
     $eventend = validate($_POST['eventend']);
     $eventtype= validate($_POST['eventtype']);
     $eventrequirement = validate($_POST['requirement']);
     $eventstatus = validate($_POST['status']);
     $eventquota = validate($_POST['quota']);

    $sql = "UPDATE user SET eventName='$eventname', eventStart= '$eventstart', eventEnd='$eventend', eventType='$eventtype', requirement='$eventrequirement', status='$eventstatus' , quota='$eventquota'WHERE eventid= '$eventid' ";
    $query = mysqli_query ($conn,$sql);

}

// -----   Delete  EVENT   ------
if (isset($_POST['delete-event'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$eventid = validate($_POST['eventid']);

		//input data into database
        $sql = "DELETE FROM event WHERE eventId=$eventid";
		$result = mysqli_query($conn, $sql) or die ("Bad Query: $sql");
}

