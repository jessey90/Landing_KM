<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Admin
 * Date: 5/19/14
 * Time: 11:46 PM
 * To change this template use File | Settings | File Templates.
 */

$con = new mysqli("localhost","root","","linhskin_km");
// Check connection
if (mysqli_connect_errno($con))
{
    echo "Không thể kết nối đến CSDL: " . mysqli_connect_error();
}
