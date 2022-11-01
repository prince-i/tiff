<?php

ini_set('memory_limit','-1');

include 'conn.php';
include 'function.php';
$method = $_POST['method'];

if($method == 'fetch_form'){
   

    // $PROJECT_CODE = 'KOF-FRE';
    $PROJECT_CODE = $_POST['project_code'];
    ## DEFAULT IMAGEFILENAME FIELD
    echo '<div class="input-field col s12">';
    ## COLUMN NAME 
    echo '<span class="fieldID" style="display:none;">IMAGE_FILENAME</span>';
    echo '<input type="text" class="keyedData" pattern="[A-Za-z0-9]" value="" id="IMAGE_FILENAME" maxlength="20" name=""/>';
    echo  '<label class="fieldName">IMAGE FILENAME</label>';
    echo '</div>';

    $select_form = "SELECT *FROM formset WHERE PROJECT_CODE = '$PROJECT_CODE'";
    $stmt = $conn->prepare($select_form);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        foreach($stmt->fetchALL() as $row){
            $FIELD_ID = $row['FIELD_ID'];
            $FIELD_NAME = $row['FIELD_NAME'];
            $FIELD_POSITION = $row['FIELD_POSITION'];
            $FIELD_LENGTH = $row['FIELD_LENGTH'];
            $FORM_ID = $row['FORM_ID'];
            $IS_SCROLLING = $row['IS_SCROLLING'];
            $IS_ENABLED = $row['IS_ENABLED'];
            $DISABLE = "";
            // $TYPE = 'text';
            $TYPE = $row['FIELD_TYPE'];
            if($IS_ENABLED == 0){
                $DISABLE = 'disabled';
            }

            $AK_FUNC = $row['AKEY'];
            
            ## DATALIST ID ASSIGNMENT
            if(strpos($AK_FUNC,"matrix") !== false){
                $DATALISTID = "matrix";
            }
            
            else if(strpos($AK_FUNC,"grantee") !==false){
                $DATALISTID = "grantee";
            }

            else if(strpos($AK_FUNC,"grantor") !==false){
                $DATALISTID = "grantor";
            }
            else if(strpos($AK_FUNC,"subd") !==false){
                $DATALISTID = "subd";
            }

            else if(strpos($AK_FUNC,"str") !==false){
                $DATALISTID = "str";
            }

            else if(strpos($AK_FUNC,"locates") !==false){
                $DATALISTID = "locates";
            }


            ## IF NUMERIC
            if($TYPE == 'N'){
                $TYPE = 'text';

                if(!empty($AK_FUNC)){
                    echo '<div class="input-field col s12">';
                    echo '<span class="fieldID" style="display:none;">'.$FIELD_ID.'</span>';
                    echo '<input list="'.$DATALISTID.'" type="'.$TYPE.'" class="keyedData" pattern="[A-Za-z0-9]" value="" id="'.$FIELD_ID.'" maxlength="'.$FIELD_LENGTH.'" name="'.$FIELD_ID.'" '.$DISABLE.' onkeypress="validate_numeric(event)" onclick="'.$AK_FUNC.'"/>';
                    echo  '<label class="fieldName">'.$FIELD_NAME.'</label>';
                    echo '<datalist id="'.$DATALISTID.'">';
                    echo '</datalist>';
                    echo '</div>';

                    echo '</div>';
                }else{
                    echo '<div class="input-field col s12">';
                    echo '<span class="fieldID" style="display:none;">'.$FIELD_ID.'</span>';
                    echo '<input type="'.$TYPE.'" class="keyedData" pattern="[A-Za-z0-9]" value="" id="'.$FIELD_ID.'" maxlength="'.$FIELD_LENGTH.'" name="'.$FIELD_ID.'" '.$DISABLE.' onkeypress="validate_numeric(event)" onclick="'.$AK_FUNC.'"/>';
                    echo  '<label class="fieldName">'.$FIELD_NAME.'</label>';
                    echo '</div>';
                }
            }
            
            ## IF ALPHA ONLY
            elseif($TYPE == 'A'){
                $TYPE = 'text';
               
                if(!empty($AK_FUNC)){
                    echo '<div class="input-field col s12">';
                    echo '<span class="fieldID" style="display:none;">'.$FIELD_ID.'</span>';
                    echo '<input list="'.$DATALISTID.'" type="'.$TYPE.'" class="keyedData" pattern="[A-Za-z0-9]" value="" id="'.$FIELD_ID.'" maxlength="'.$FIELD_LENGTH.'" name="'.$FIELD_ID.'" '.$DISABLE.' onkeypress="validate_alpha(event)" onclick="'.$AK_FUNC.'"/>';
                    echo  '<label class="fieldName">'.$FIELD_NAME.'</label>';
                    echo '<datalist id="'.$DATALISTID.'">';
                    echo '</datalist>';
                    echo '</div>';
                }else{
                    echo '<div class="input-field col s12">';
                    echo '<span class="fieldID" style="display:none;">'.$FIELD_ID.'</span>';
                    echo '<input type="'.$TYPE.'" class="keyedData" pattern="[A-Za-z0-9]" value="" id="'.$FIELD_ID.'" maxlength="'.$FIELD_LENGTH.'" name="'.$FIELD_ID.'" '.$DISABLE.' onkeypress="validate_alpha(event)" onclick="'.$AK_FUNC.'"/>';
                    echo  '<label class="fieldName">'.$FIELD_NAME.'</label>';
                    
                    echo '</div>';
                }

            }
            
            ## IF ALPHA NUMERIC ONLY
            elseif($TYPE == 'AN'){
                $TYPE = 'text';

                 if(!empty($AK_FUNC)){
                    echo '<div class="input-field col s12">';
                    echo '<span class="fieldID" style="display:none;">'.$FIELD_ID.'</span>';
                    echo '<input list="'.$DATALISTID.'" type="'.$TYPE.'" class="keyedData" pattern="[A-Za-z0-9]" value="" id="'.$FIELD_ID.'" maxlength="'.$FIELD_LENGTH.'" name="'.$FIELD_ID.'" '.$DISABLE.' onkeypress="validate_alphanum(event)" onclick="'.$AK_FUNC.'"/>';
                    echo  '<label class="fieldName">'.$FIELD_NAME.'</label>';
                    echo '<datalist id="'.$DATALISTID.'">';
                    echo '</datalist>';
                    echo '</div>';
                
                }else{
                    echo '<div class="input-field col s12">';
                    echo '<span class="fieldID" style="display:none;">'.$FIELD_ID.'</span>';
                    echo '<input type="'.$TYPE.'" class="keyedData" pattern="[A-Za-z0-9]" value="" id="'.$FIELD_ID.'" maxlength="'.$FIELD_LENGTH.'" name="'.$FIELD_ID.'" '.$DISABLE.' onkeypress="validate_alphanum(event)" />';
                    echo  '<label class="fieldName">'.$FIELD_NAME.'</label>';
                    echo '</div>';
                }

                
            }
            else{
                $TYPE = 'text';
                if(!empty($AK_FUNC)){
                    echo '<div class="input-field col s12">';
                    echo '<span class="fieldID" style="display:none;">'.$FIELD_ID.'</span>';
                    echo '<input list="'.$DATALISTID.'" type="'.$TYPE.'" class="keyedData" pattern="[A-Za-z0-9]" value="" id="'.$FIELD_ID.'" maxlength="'.$FIELD_LENGTH.'" name="'.$FIELD_ID.'" '.$DISABLE.' onclick="'.$AK_FUNC.'"/>';
                    echo  '<label class="fieldName">'.$FIELD_NAME.'</label>';
                    echo '<datalist id="'.$DATALISTID.'">';
                    echo '</datalist>';
                    echo '</div>';
                }else{
                    echo '<div class="input-field col s12">';
                    echo '<span class="fieldID" style="display:none;">'.$FIELD_ID.'</span>';
                    echo '<input type="'.$TYPE.'" class="keyedData" pattern="[A-Za-z0-9]" value="" id="'.$FIELD_ID.'" maxlength="'.$FIELD_LENGTH.'" name="'.$FIELD_ID.'" '.$DISABLE.' onclick="'.$AK_FUNC.'"/>';
                    echo  '<label class="fieldName">'.$FIELD_NAME.'</label>';
                    echo '</div>';
                }
                
            }

            ## FORM FIELDS 

            // echo '<div class="input-field col s12">';
            // echo '<span class="fieldID" style="display:none;">'.$FIELD_ID.'</span>';
            // echo '<input type="'.$TYPE.'" class="keyedData" pattern="[A-Za-z0-9]" value="" id="'.$FIELD_ID.'" maxlength="'.$FIELD_LENGTH.'" name="'.$FIELD_ID.'" '.$DISABLE.'/>';
            // echo  '<label class="fieldName">'.$FIELD_NAME.'</label>';
            // echo '</div>';

            ## END FORM FIELDS
        }
       
    }

}

elseif($method == 'saveData'){
    $cols = [];
    $keyed_data_ = [];
    $COLLECTION = [];
    
    $cols = $_POST['cols'];
    $keyed_data = $_POST['keydata'];
    $project_code = $_POST['projectCode'];
    $FORM_ID = 0;

    $HEADER_DATA = $TOR_DATA = $TEE_DATA = $SUBD_DATA = $STR_DATA = $FF_DATA = [];
    $HEADER_COL = $TOR_COL = $TEE_COL = $SUBD_COL = $STR_COL = $FF_COL =[];
    $TIF_NAME = $keyed_data[0];
    // print_r($keyed_data);

    $GET_COUNT_FIELD_PER_FORM = "SELECT (SELECT COUNT(ID) FROM formset WHERE FORM_ID = 1) AS HEADER_C, (SELECT COUNT(ID) FROM formset WHERE FORM_ID = 2) AS TOR_C, (SELECT COUNT(ID) FROM formset WHERE FORM_ID = 3) AS TEE_C, (SELECT COUNT(ID) FROM formset WHERE FORM_ID = 4) AS SUBD_C, (SELECT COUNT(ID) FROM formset WHERE FORM_ID = 5) AS STR_C, (SELECT COUNT(ID) FROM formset WHERE FORM_ID = 6) AS FF_C;";
    $stmt = $conn->prepare($GET_COUNT_FIELD_PER_FORM);
    $stmt->execute();
    foreach($stmt->fetchAll() as $x){
        $HEADER_C = (int) $x['HEADER_C'] + 1;
        $TOR_C = $x['TOR_C'];
        $TEE_C = $x['TEE_C'];
        $SUBD_C = $x['SUBD_C'];
        $STR_C = $x['STR_C'];
        $FF_C = $x['FF_C'];

        ## INDEX FOR ARRAY
        ## TO DETERMINE WHERE THE ARRAY SLICE START FROM
        $HEADER_INDEX = $HEADER_C + 0;
        $TOR_INDEX = $HEADER_INDEX + $TOR_C;
        $TEE_INDEX = $TOR_INDEX + $TEE_C;
        $SUBD_INDEX = $TEE_INDEX + $SUBD_C;
        $STR_INDEX = $SUBD_INDEX + $STR_C;
        $FF_INDEX = $STR_INDEX + $FF_C;
    }

    $HEADER_DATA[] = array_slice($keyed_data, 0 ,$HEADER_C);
    $TOR_DATA[] = array_slice($keyed_data, $HEADER_INDEX, $TOR_C);
    $TEE_DATA[] = array_slice($keyed_data, $TOR_INDEX, $TEE_C);
    $SUBD_DATA[] = array_slice($keyed_data, $TEE_INDEX, $SUBD_C);
    $STR_DATA[] = array_slice($keyed_data, $SUBD_INDEX, $STR_C);
    $FF_DATA[] = array_slice($keyed_data, $STR_INDEX, $FF_C);

    ## COLUMNS
    $HEADER_COL[] = array_slice($cols, 0 ,$HEADER_C);
    $TOR_COL[] =  array_slice($cols, $HEADER_INDEX, $TOR_C);
    $TEE_COL[] =  array_slice($cols, $TOR_INDEX, $TEE_C);
    $SUBD_COL[] = array_slice($cols, $TEE_INDEX,$SUBD_C);
    $STR_COL[] = array_slice($cols, $SUBD_INDEX,$STR_C);
    $FF_COL[] = array_slice($cols,$STR_INDEX,$FF_C);

    // print_r($FF_COL);

    if(count($HEADER_DATA) > 0){
        PROCESS_FORM($HEADER_COL,$HEADER_DATA,1,$TIF_NAME,$project_code,$conn);
    }
     
    if(count($TOR_DATA) > 0){
        PROCESS_FORM($TOR_COL,$TOR_DATA,2,$TIF_NAME,$project_code,$conn);
    }

    if(count($TEE_DATA) > 0){
        PROCESS_FORM($TEE_COL,$TEE_DATA,3,$TIF_NAME,$project_code,$conn);
    }

    if(count($SUBD_DATA) > 0){
        PROCESS_FORM($SUBD_COL,$SUBD_DATA,4,$TIF_NAME,$project_code,$conn);
    }

    if(count($STR_DATA) > 0){
        PROCESS_FORM($STR_COL,$STR_DATA,5,$TIF_NAME,$project_code,$conn);
    }

    if(count($FF_DATA) > 0){
        PROCESS_FORM($FF_COL,$FF_DATA,6,$TIF_NAME,$project_code,$conn);
    }
    
    
   
    

}


## KILL CONNECTION EVERY FINISHED QUERY EXECUTION
$conn = null;

?>