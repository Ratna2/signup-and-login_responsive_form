<?php 
    session_start();
    include_once  "db.php";
    $otp1 = $_POST['otp1'];
    $otp2 = $_POST['otp2'];
    $otp3 = $_POST['otp3'];
    $otp4 = $_POST['otp4'];
    $unique_id = $_SESSION['unique_id'];
    $session_otp = $_SESSION['otp'];

    $otp = $otp1.$otp2.$otp3.$otp4;

    if(!empty($otp)){
        if($otp ==  $session_otp){
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}' AND otp = '{$otp}'");
            if(mysqli_num_rows($sql) > 0){
                $null_otp = 0;
              $sql2 = mysqli_query($conn,"UPDATE users SET `verification_status` = 'Verified' , `otp` = '$null_otp' WHERE unique_id = {$unique_id}");
              if($sql2){
                $row = mysqli_fetch_assoc($sql);
                if($row){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    $_SESSION['verification_status'] = $row['verification_status'];
                echo "success";
                }
            }
            }
        }
        else{
            echo "Wrong Otp!";
        }
    }
    else{
        echo "Enter Otp!";
    }
?>