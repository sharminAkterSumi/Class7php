<?php
session_start();
//echo"sumi";
// var_dump($_POST);
 if(isset($_POST['submit'])){
    $array=[];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $comment=$_POST["com"];

    $button=$_POST["submit"];
    //var_dump($_POST);
    
    
if(empty($name)){
    //echo"plz enter your name";
    $array["name1"]="plz enter your name";
    
}elseif (strlen($name>30)){
        //echo"plz enter your name in 30 character";
    $array["name1"]="plz enter your name in 30 character";
}

if(empty($email)){
    //echo"plz enter your email address ";
    $array['email2']="plz enter your email address";

 }elseif(strlen($email>20)){
  //echo"plz enter your email address with @";
     $array['email2']="plz enter your email address with @";

}

if(empty($pass)){
   // echo"plz Enter your password";
    $array['password']="plz Enter your password";
}/*elseif(strlen($pass>7)){
    //echo"plz Enter your password in 7 int";
    $array['password']="plz Enter your password in 7 int";
}*/
if(empty($comment)){
    //echo"Enter your openion";
    $array['detail']="Enter your openion";
}elseif(str_word_count($comment>100)){
   // echo"Enter your openion is overflow";
    $array['detail']="Enter your openion is over";
}


if(count($array)>0){
    $_SESSION['errors']= $array;
   $_SESSION["oldarray"]=$_POST;
    header("location:form1.php");
}
else{
    echo"<h1>Successful Signin</h1>";
}


 //print_r($array);

 //var_dump($_POST);



 }
 else{
     echo"try again";
 }
//echo"sumi";
// var_dump($_POST);
// 
 
 
 ?>