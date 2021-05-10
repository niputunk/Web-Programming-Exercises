<?php
    session_start();
    if(isset($_POST['submit'])){
        setcookie("player","{$_POST['player']}",time() + 60*60*24*30);
        $_SESSION['nyawa'] = 5;
        $_SESSION['skor'] = 0;
        $_SESSION['angka1'] = rand(0,20);
        $_SESSION['angka2'] = rand(0,20);
        header("Location:proses.php");
    }else{
        header("Location:index.php");
    }
?>