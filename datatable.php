<?php

require 'conn.php';

$method = $_POST['method'];

if($method == 'fetch_matrix'){
    $COL_ARR = [];

    $table = $_POST['table'];

    ## FETCH COLUMN NAME
    $COL = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$table'";
    $ss = $conn->prepare($COL);
    $ss->execute();
    foreach($ss->fetchall() as $col){
        $COL_ARR[] = $col['COLUMN_NAME'];
    }
    // print_r($COL_ARR);

    $fetch  = "SELECT * FROM $table";
    $stmt = $conn->prepare($fetch);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        foreach($stmt->fetchALL() as $row){
        // $doc_code = $row['DOCNUM'];
        $ROW_DATA = [];
        foreach($COL_ARR as $column){
            $ROW_DATA[] = $row[$column];
        }
        // print_r($ROW_DATA);
        $MATRIX_DATA = implode(' | ',$ROW_DATA);
           echo '<option value="'.$MATRIX_DATA.'">';
        }
    }
}

?>