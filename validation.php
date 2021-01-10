<?php
extract($_POST);
if(isset($sub))
{
if($uname == '' and $pwd == '')
{
 $msg = "Please Enter All Details";
}
else if($uname == '')
{
    $msg = "Please Enter Username";
}
else if($pwd == '')
{
    $msg = "Please Enter Password";
}
else if($uname == 'Himanshu' and $pwd == '12345')
{
    header("location:page.php");
}
else
{
    $msg = "Username or Password is incorrect";
}
}
?>