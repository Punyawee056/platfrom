<?php
require_once('includes/connect.php');
 if(isset($_GET['desc_id'])) {
    $sql = "SELECT * FROM color WHERE model_desc_id = {$_GET['desc_id']}";
    $query = $conn->query($sql);

    $json = array();
    while($result = $query->fetch_assoc()) {    
        array_push($json, $result);
    }
    echo json_encode($json);
}