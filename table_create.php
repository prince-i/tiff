<?php
include 'conn.php';


$PROJECT_CODE = "KOF-FRE";
$HDR_COL = ['IMAGE_FILENAME VARCHAR(21)'];
$TOR_COL = ['IMAGE_FILENAME VARCHAR(21)'];
$TEE_COL = ['IMAGE_FILENAME VARCHAR(21)'];
$SUB_COL = ['IMAGE_FILENAME VARCHAR(21)'];
$STR_COL = ['IMAGE_FILENAME VARCHAR(21)'];
$FF_COL = ['IMAGE_FILENAME VARCHAR(21)'];

$SQL = "SELECT FORM_ID,FIELD_LENGTH,FIELD_ID, PROJECT_CODE FROM formset WHERE PROJECT_CODE = '$PROJECT_CODE'";
$stmt = $conn->prepare($SQL);
$stmt->execute();
foreach($stmt->fetchall() as $x){
   $FIELD_ID = $x['FIELD_ID'];
   $FORM_ID = $x['FORM_ID'];
   $LEN = $x['FIELD_LENGTH'];
   
//    $TABLE =  "$FIELD_ID VARCHAR($LEN)";
//    array_push($ARR_COL,$TABLE);

   if($FORM_ID == 1){
        $TABLE =  "$FIELD_ID VARCHAR($LEN)";    
        array_push($HDR_COL,$TABLE);
   }
  
   elseif($FORM_ID == 2){
        $TABLE =  "$FIELD_ID VARCHAR($LEN)";
        array_push($TOR_COL,$TABLE);
   }
   elseif($FORM_ID == 3){
        $TABLE =  "$FIELD_ID VARCHAR($LEN)";
        array_push($TEE_COL,$TABLE);
   }
   elseif($FORM_ID == 4){
        $TABLE =  "$FIELD_ID VARCHAR($LEN)";
        array_push($SUB_COL,$TABLE);

   }
   elseif($FORM_ID == 5){
        $TABLE =  "$FIELD_ID VARCHAR($LEN)";
        array_push($STR_COL,$TABLE);
   }elseif($FORM_ID == 6){
        $TABLE =  "$FIELD_ID VARCHAR($LEN)";
        array_push($FF_COL,$TABLE);

   }

   
   
}

// print_r($HDR_COL);
// print_r($TOR_COL);

    // print_r($ARR_COL);

    ## CREATE HEADER

    if(count($HDR_COL) > 1){
        $TABLE_TYPE = "HEADER";
        $JSON_COL = json_encode($HDR_COL);
        $JSON_COL = str_replace(['[',']','"'],['','',''],$JSON_COL);
        // echo $JSON_COL;
        // echo $TABLE_TYPE;
    
        $TABLE_NAME = $PROJECT_CODE."-".$TABLE_TYPE;
        $TABLE_NAME = strtoupper($TABLE_NAME);
    
        $CREATE = "CREATE TABLE IF NOT EXISTS `$TABLE_NAME` ($JSON_COL)";
        // echo "$CREATE\n";
        $stmt = $conn->prepare($CREATE);
        $stmt->execute();
    }


    ## CREATE TOR
    if(count($TOR_COL) > 1){
        $TABLE_TYPE = "GRANTOR";
        $JSON_COL = json_encode($TOR_COL);
        $JSON_COL = str_replace(['[',']','"'],['','',''],$JSON_COL);
        // echo $JSON_COL;
        // echo $TABLE_TYPE;

        $TABLE_NAME = $PROJECT_CODE."-".$TABLE_TYPE;
        $TABLE_NAME = strtoupper($TABLE_NAME);

        $CREATE = "CREATE TABLE IF NOT EXISTS `$TABLE_NAME` ($JSON_COL)";
        // echo "$CREATE\n";
        $stmt = $conn->prepare($CREATE);
        $stmt->execute();
    }

    ## CREATE TEE
    if(count($TOR_COL) > 1){
        $TABLE_TYPE = "GRANTEE";  ## MUST CHANGE IF NECESSARY
        $JSON_COL = json_encode($TEE_COL);  ## MUST CHANGE IF NECESSARY
        $JSON_COL = str_replace(['[',']','"'],['','',''],$JSON_COL);
        // echo $JSON_COL;
        // echo $TABLE_TYPE;

        $TABLE_NAME = $PROJECT_CODE."-".$TABLE_TYPE;
        $TABLE_NAME = strtoupper($TABLE_NAME);

        $CREATE = "CREATE TABLE IF NOT EXISTS `$TABLE_NAME` ($JSON_COL)";
        // echo "$CREATE\n";
        $stmt = $conn->prepare($CREATE);
        $stmt->execute();
    }
    
    ## CREATE SUB
    if(count($TOR_COL) > 1){
        $TABLE_TYPE = "SUBD";  ## MUST CHANGE IF NECESSARY
        $JSON_COL = json_encode($SUB_COL);  ## MUST CHANGE IF NECESSARY
        $JSON_COL = str_replace(['[',']','"'],['','',''],$JSON_COL);
        // echo $JSON_COL;
        // echo $TABLE_TYPE;

        $TABLE_NAME = $PROJECT_CODE."-".$TABLE_TYPE;
        $TABLE_NAME = strtoupper($TABLE_NAME);

        $CREATE = "CREATE TABLE IF NOT EXISTS `$TABLE_NAME` ($JSON_COL)";
        // echo "$CREATE\n";
        $stmt = $conn->prepare($CREATE);
        $stmt->execute();
    }

    ## CREATE STR
    if(count($TOR_COL) > 1){
        $TABLE_TYPE = "STR";  ## MUST CHANGE IF NECESSARY
        $JSON_COL = json_encode($STR_COL);  ## MUST CHANGE IF NECESSARY
        $JSON_COL = str_replace(['[',']','"'],['','',''],$JSON_COL);
        // echo $JSON_COL;
        // echo $TABLE_TYPE;

        $TABLE_NAME = $PROJECT_CODE."-".$TABLE_TYPE;
        $TABLE_NAME = strtoupper($TABLE_NAME);

        $CREATE = "CREATE TABLE IF NOT EXISTS `$TABLE_NAME` ($JSON_COL)";
        // echo "$CREATE\n";
        $stmt = $conn->prepare($CREATE);
        $stmt->execute();
    }

    ## CREATE FF
    if(count($TOR_COL) > 1){
        $TABLE_TYPE = "FF";  ## MUST CHANGE IF NECESSARY
        $JSON_COL = json_encode($FF_COL);  ## MUST CHANGE IF NECESSARY
        $JSON_COL = str_replace(['[',']','"'],['','',''],$JSON_COL);
        // echo $JSON_COL;
        // echo $TABLE_TYPE;

        $TABLE_NAME = $PROJECT_CODE."-".$TABLE_TYPE;
        $TABLE_NAME = strtoupper($TABLE_NAME);

        $CREATE = "CREATE TABLE IF NOT EXISTS `$TABLE_NAME` ($JSON_COL)";
        // echo "$CREATE\n";
        $stmt = $conn->prepare($CREATE);
        $stmt->execute();
    }

    $conn = null;
?>

