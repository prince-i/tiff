<?php

## HEADER
function PROCESS_FORM($COLUMNS,$KEYED,$FORM_ID,$TIF_NAME,$PROJECT_CODE,$conn){
    // echo "$COLUMNS|$KEYED|$PROJECT_CODE\n";
    // echo $PROJECT_CODE;
    // print_r($COLUMNS);
    // print_r($KEYED);
    
    $JSON_COL = json_encode($COLUMNS);
    $JSON_COL = str_replace("[","",$JSON_COL);
    $JSON_COL = str_replace("]","",$JSON_COL);
    $JSON_COL = str_replace('"','`',$JSON_COL);
    // echo $JSON_COL; 
    
    $JSON_KEY = json_encode($KEYED);
    $JSON_KEY = str_replace("[","",$JSON_KEY);
    $JSON_KEY = str_replace("]","",$JSON_KEY);
    $JSON_KEY = str_replace('"',"'",$JSON_KEY);
    // echo $JSON_KEY;

    // die(); 
    if($FORM_ID == 1){
      $TABLE = strtolower("$PROJECT_CODE-HEADER");
      $INSERT_HEADER = "INSERT INTO `$TABLE` ($JSON_COL) VALUES ($JSON_KEY)";
      $stmt = $conn->prepare($INSERT_HEADER);
      $stmt->execute();
    }

    if($FORM_ID == 2){
      $TABLE = strtolower("$PROJECT_CODE-GRANTOR");
      $INSERT_GRANTOR = "INSERT INTO `$TABLE` (`IMAGE_FILENAME`,$JSON_COL) VALUES ('$TIF_NAME',$JSON_KEY)";
      $stmt = $conn->prepare($INSERT_GRANTOR);
      $stmt->execute();
    }

    if($FORM_ID == 3){
      $TABLE = strtolower("$PROJECT_CODE-GRANTEE");
      $INSERT_GRANTEE = "INSERT INTO `$TABLE` (`IMAGE_FILENAME`,$JSON_COL) VALUES ('$TIF_NAME',$JSON_KEY)";
      $stmt = $conn->prepare($INSERT_GRANTEE);
      $stmt->execute();
    }

    if($FORM_ID == 4){
      $TABLE = strtolower("$PROJECT_CODE-SUBD");
      $INSERT_SUBDIVISION = "INSERT INTO `$TABLE` (`IMAGE_FILENAME`,$JSON_COL) VALUES ('$TIF_NAME',$JSON_KEY)";
      $stmt = $conn->prepare($INSERT_SUBDIVISION);
      $stmt->execute();
    }

    if($FORM_ID == 5){
      $TABLE = strtolower("$PROJECT_CODE-STR");
      $INSERT_STR = "INSERT INTO `$TABLE` (`IMAGE_FILENAME`,$JSON_COL) VALUES ('$TIF_NAME',$JSON_KEY)";
      $stmt = $conn->prepare($INSERT_STR);
      $stmt->execute();
    }

    if($FORM_ID == 6){
      $TABLE = strtolower("$PROJECT_CODE-FF");
      $INSERT_FF = "INSERT INTO `$TABLE` (`IMAGE_FILENAME`,$JSON_COL) VALUES ('$TIF_NAME',$JSON_KEY)";
      $stmt = $conn->prepare($INSERT_FF);
      $stmt->execute();
    }
    

}

## GRANTOR
// function GRANTOR_FORM($COLUMNS,$KEYED,$FORM_ID,$PROJECT_CODE,$conn){
//   ## INCLUDE CONNECTION  
//   // include 'conn.php';
//     // echo "$COLUMNS|$KEYED|$PROJECT_CODE\n";
//     // echo $PROJECT_CODE;
//     // print_r($COLUMNS);
//     // print_r($KEYED);
//     $JSON_COL = json_encode($COLUMNS);
//     $JSON_COL = str_replace("[","",$JSON_COL);
//     $JSON_COL = str_replace("]","",$JSON_COL);
//     $JSON_COL = str_replace('"','`',$JSON_COL);
//     echo $JSON_COL;
    
//     $JSON_KEY = json_encode($KEYED);
//     $JSON_KEY = str_replace("[","",$JSON_KEY);
//     $JSON_KEY = str_replace("]","",$JSON_KEY);
//     $JSON_KEY = str_replace('"',"'",$JSON_KEY);
//     echo $JSON_KEY;

//     if($FORM_ID == 2){
//       $TABLE = strtolower("$PROJECT_CODE-GRANTOR");
//       $INSERT_GRANTOR = "INSERT INTO `$TABLE` ($JSON_COL) VALUES ($JSON_KEY)";
//       $stmt = $conn->prepare($INSERT_GRANTOR);
//       $stmt->execute();
//     }

// }

// ## GRANTEE
// function GRANTEE_FORM($COLUMNS,$KEYED,$FORM_ID,$PROJECT_CODE){
//   ## INCLUDE CONNECTION  
//   include 'conn.php';
//     // echo "$COLUMNS|$KEYED|$PROJECT_CODE\n";
//     // echo $PROJECT_CODE;
//     // print_r($COLUMNS);
//     // print_r($KEYED);
//     $JSON_COL = json_encode($COLUMNS);
//     $JSON_COL = str_replace("[","",$JSON_COL);
//     $JSON_COL = str_replace("]","",$JSON_COL);
//     $JSON_COL = str_replace('"','`',$JSON_COL);
//     echo $JSON_COL;
    
//     $JSON_KEY = json_encode($KEYED);
//     $JSON_KEY = str_replace("[","",$JSON_KEY);
//     $JSON_KEY = str_replace("]","",$JSON_KEY);
//     $JSON_KEY = str_replace('"',"'",$JSON_KEY);
//     echo $JSON_KEY;

//     if($FORM_ID == 3){
//       $TABLE = strtolower("$PROJECT_CODE-GRANTEE");
//       $INSERT_GRANTEE = "INSERT INTO `$TABLE` ($JSON_COL) VALUES ($JSON_KEY)";
//       $stmt = $conn->prepare($INSERT_GRANTEE);
//       $stmt->execute();
//     }

// }

?>