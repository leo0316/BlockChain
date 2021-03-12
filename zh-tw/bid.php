<?php
    //header('Content-Type: application/json; charset=UTF-8');
    include "mysql_connect.inc.php";
    $course_code = $_POST["course_code"];
    $money = $_POST["money"];
    $wallet = $_POST["wallet"];
    $hash_value = $_POST["hash_value"];
    if($course_code != null && $money != null && $wallet != null && $hash_value != null)
    {
        $sql = "insert into bid (course_code, money, wallet, hash_value) values ('$course_code','$money', '$wallet', '$hash_value')";
        if(mysqli_query($conn,$sql))
        {
            
            $sql = "UPDATE member set money = money - $money where wallet = '$wallet'";
            if(mysqli_query($conn,$sql))
                echo json_encode(array('result' => 'success', 'sql' => $sql));
            else
                echo json_encode(array('result' => 'failed', 'reason' => mysqli_error($conn)));
        }
        else
            echo json_encode(array('result' => 'failed', 'reason' => mysqli_error($conn)));
        
    }
    mysqli_close($conn);
?>