<?php
    include_once("config.php");
    session_start();
    $id = $_POST['id'];
    $tampilkan = $_POST['tampilkan'];
   

  
        $result = mysqli_query(
            $mysqli, 
            "UPDATE post SET 
            tampilkan='$tampilkan'
            WHERE id=$id"
       );
   
    if( $tampilkan == 1 )
    {
        $message = 'ditampilkan';
    }else{
        $message = 'diarsipkan';
    }
    $_SESSION['sukses'] = "Product Berhasil $message";
    header('Location:admin.php');
?>