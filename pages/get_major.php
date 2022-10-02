<?php
require_once('includes/connect.php');
 if(isset($_GET['level_id'])) {
    $sql = "SELECT * FROM major WHERE level_id = {$_GET['level_id']}";
    $query = $conn->query($sql);

    $json = array();
    while($result = $query->fetch_assoc()) {    
        array_push($json, $result);
    }
    echo json_encode($json);
}