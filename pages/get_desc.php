<?php
require_once('includes/connect.php');
 if(isset($_GET['model_id'])) {
    $sql = "SELECT * FROM model_desc WHERE model_id = {$_GET['model_id']}";
    $query = $conn->query($sql);

    $json = array();
    while($result = $query->fetch_assoc()) {    
        array_push($json, $result);
    }
    echo json_encode($json);
}