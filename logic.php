<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Admin
 * Date: 5/19/14
 * Time: 11:44 PM
 * To change this template use File | Settings | File Templates.
 */
require_once("connect.php");

$create_time = time();
if(isset($_POST["name"]) || isset($_POST["email"]) || isset($_POST["phone"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $code = generateRandomString(5);
    $query = "SELECT id FROM user_code WHERE code = '$code'";

       if($result = $con->query($query)){
           if( $result->num_rows == null) {
               //Lưu token vào bảng
//               echo $name; die;
               $con->query("INSERT INTO user_code (name,email,phone,code,create_time) VALUES ('$name','$email','$phone','$code','$create_time')");
               Header( "Location: index.php?code=".$code );
           } else {
               echo "Đã tồn tại";
           }
       }else{
           echo "Không kiểm tra được";
       }
}else{
    echo "Thiếu dữ liệu";
}

/* close connection */
$con->close();

function generateRandomString($length = 5) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}