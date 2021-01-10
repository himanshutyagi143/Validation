<?php
session_start();
require_once 'head.php';
require_once 'validation.php';

extract($_POST);
if(@$_GET['pid'] == 'page1')
{
    require_once 'aboutus.php';
}
else if(@$_GET['pid'] == 'page2')
{
    require_once 'services.php';
}
else if(@$_GET['pid'] == 'page3')
{
    require_once 'pricing.php';
}
else if(@$_GET['pid'] == 'page4')
{
    require_once 'contactus.php';
}
else
{
    require_once 'main.php';
}

require_once 'aside.php';
require_once 'footer.php';
?>




