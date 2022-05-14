<?php
    include_once("config.php");
    session_start();
    if(isset($_POST['update']))
    {	
        $id = $_POST['id'];
        $result = mysqli_query($mysqli, "SELECT * FROM post WHERE id=$id");
        while($file_lama = mysqli_fetch_array($result))
        {
            $fotoLama = $file_lama['foto'];
        }
       $nama = $_POST['nama'];
       $harga = $_POST['harga'];
       $harga_palsu = $_POST['harga_palsu'];
       $deskripsi = $_POST['deskripsi'];
       $foto = $_POST['foto'] ?? '';
       $tampilkan = $_POST['tampilkan'];

       $ekstensi_diperbolehkan	= array('png','jpg');
       $namaFoto = $_FILES['file']['name'];
       $x = explode('.', $namaFoto);
       $ekstensi = strtolower(end($x));
       $ukuran	= $_FILES['file']['size'];
       $file_tmp = $_FILES['file']['tmp_name'];	
   
        if(!empty($namaFoto))
        {
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){		
                    unlink('foto/'.$fotoLama);
                    move_uploaded_file($file_tmp, 'foto/'.$namaFoto);
                    // $query = mysql_query("INSERT INTO upload VALUES(NULL, '$namaFoto')");
                }else{
                    echo 'UKURAN FILE TERLALU BESAR';
                }
            }else{
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            }
        }else{
            $namaFoto = $fotoLama;
        }

       $result = mysqli_query(
            $mysqli, 
            "UPDATE post SET 
            nama='$nama',
            harga='$harga',
            harga_palsu='$harga_palsu',
            deskripsi='$deskripsi',
            foto='$namaFoto',
            tampilkan='$tampilkan'
            WHERE id=$id"
       );
  
          //set session sukses
        $_SESSION["sukses"] = 'Data Berhasil Diupdate ';
        header('Location: edit.php?id='.$id);   
   }
?>