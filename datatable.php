<?php

require 'conn.php';

$method = $_POST['method'];

if($method == 'fetch_matrix'){
    $table = $_POST['table'];
    $fetch  = "SELECT * FROM $table";
    $stmt = $conn->prepare($fetch);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        foreach($stmt->fetchALL() as $row){
        $doc_code = $row['doc_code'];
           echo '<option value="'.$doc_code.'">';
        }
    }
}

?>