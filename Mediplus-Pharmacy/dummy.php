<?php
$conn=mysqli_connect("localhost","root","","software_engg");
session_start();
$res2=mysqli_query($conn,"SELECT order_no,total,count(qty),date from orders where pid='p101'group by order_no");
while ($row=mysqli_fetch_array($res2)){
    echo Text(number,$row['order_no']);
}
?>
