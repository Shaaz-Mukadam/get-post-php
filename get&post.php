<!DOCTYPE html>
<html>
<head>
    <!-- //$_GET $_POST $_REQUEST  variables.
// If we have to file called file1 and file2 then if we have to use the vaibale of file1  inside 
// file2 at that time we have to make use of super variable
//There are different types of super variable 1. $_GET 2.$_POST  3. $_REQUEST
//4. $_COOCKIES  5.$_SERVER  6.$_SESSION  7. _FILE.


//$_GET and _$POST these are normally used in forms. we can store in database or we can print into another file or conditional page content -->

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Get & post in php</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<!-- this output will get into new.php file -->
<body>
    <!-- <form action="new.php" method="get"> -->
    <form action="new.php" method="post">
        Name: <input type="text" name="fname" id=""><br><br>
        Age : <input type="text" name="age" id=""><br><br>
        <input type="submit" name="save">
    </form>

    <!-- Server super varibale tell us everthing about the server -->
    <!-- normally get and post thet both are used for same purpose but get gives the url 
    data and post doesnt shows url data incase of any security use post or insace of any
    normal situation use get method -->
    <!-- normally _REQUEST is also used for same purpose like get and post variable
request work with both the variable  -->
</body>
</html>

<!-- $_COOCKIES is used to store the information in visitor website 
_$_COOCKIES is used to check the information about the ur website using like the user is from which place
we can store user browser info screen size info can get , coockies work in 2 steps 1. coockie create and view coockie
setcookie(name , value , expire , path , domain , secure , httponly)
 -->

 <?php 
 $_cookie_name = "user";
 $_cookie_value = "Shaaz Mukadam";
 setcookie($_cookie_name, $_cookie_value,time()+(86400 * 30), "/");
 ?>