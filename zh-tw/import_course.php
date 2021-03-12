<?php
    //header('Content-Type: application/json; charset=UTF-8');
    include "mysql_connect.inc.php";
    $current_course = $_POST["current_course"];
    
    $sql_select = "SELECT * FROM course where course_code = '$current_course'";
    $result = mysqli_query($conn, $sql_select);    

    $rows = array();

    if(mysqli_num_rows($result) > 0){
        while ($r = mysqli_fetch_assoc($result)) {            
            array_push($rows, $r);
            break;
        }
        //print json_encode($rows,JSON_UNESCAPED_UNICODE);
        //echo print_r($_POST);
        echo json_encode($rows,JSON_UNESCAPED_UNICODE);
    }else{
        echo "No data";
    }
    mysqli_close($conn);
?>