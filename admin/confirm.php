<?php
    //header('Content-Type: application/json; charset=UTF-8');
    include "..\zh-tw\mysql_connect.inc.php";
    $course_code = $_POST["course_code"];
    $wallet = $_POST["wallet"];
    $hash_value = $_POST["hash_value"];
    if($course_code != null && $wallet != null && $hash_value != null)
    {
        $sql = "UPDATE bid SET confirmed=TRUE WHERE course_code='$course_code' AND wallet='$wallet' AND hash_value='$hash_value';";
        if(mysqli_query($conn,$sql))
        {
            echo json_encode(array('result' => 'success'));
        }
        else
            echo json_encode(array('result' => 'failed', 'reason' => mysqli_error($conn), 'sql' => $sql));
        
    }
    mysqli_close($conn);
?>