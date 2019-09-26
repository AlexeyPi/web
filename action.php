<?php
if(isset($_POST['first'])&&isset($_POST['second'])&&isset($_POST['email'])){
    $first=$_POST['first'];
    $second=$_POST['second'];
    $email=$_POST['email'];
    //
    $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $db_base="web";
    $db_table="people";

    $mysqli=new mysqli($db_host,$db_user,$db_pass,$db_base,$db_table);

    if($mysqli->connect_error){
        die('Ошибка:('.$mysqli->connect_errno.')'.$mysqli->connect_error);
    }
    $result=$mysqli->query("insert into 'people' ('first','second','email') values ('$first','$second','$email')");
    if($result==TRUE){
        echo 'all done in DB';
    }else{
        echo 'all is bad';
    }
}