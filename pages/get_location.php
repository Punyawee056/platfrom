<?php
require_once('includes/connect.php');
 if(isset($_GET['dealer_id'])) {
    $sql = "SELECT * FROM location WHERE dealer_id = {$_GET['dealer_id']}";
    $query = $conn->query($sql);

    $json = array();
    while($result = $query->fetch_assoc()) {    
        array_push($json, $result);
    }
    echo json_encode($json);
}