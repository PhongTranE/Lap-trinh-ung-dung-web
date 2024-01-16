<?php 

    $hoten =  $_POST['hoten'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    
    # Check password correct
    if($password) {
        echo 'Ho ten: ' . $hoten . '<br />' . 'Email: ' . $email . '<br />';
    } else {
        echo 'Vui long dang ky thanh vien';
    }

?>