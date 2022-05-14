<?php

    require_once 'validasi-create-update.php';
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
        
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$harga_palsu = $_POST['harga_palsu'];
		$deskripsi = $_POST['deskripsi'];
        $tampilkan = $_POST['tampilkan'] ?? 0;

        $ekstensi_diperbolehkan	= array('png','jpg');
        $namaFoto = $_FILES['file']['name'];
        $x = explode('.', $namaFoto);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];	

        $validation = ["?"];
        if($nama == ""){
            $validation[]= 'nama=kosong';
        }
        if($harga == ""){
            $validation[]= '&harga=kosong';
        }
        if($namaFoto == ""){
            $validation[]= '&file=kosong';
        }
        $val = implode("",$validation);
        if($val != "?")
        {
            return header("location:add.php".$val);
        }
        

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){		
                move_uploaded_file($file_tmp, 'foto/'.$namaFoto);
                // $query = mysql_query("INSERT INTO upload VALUES(NULL, '$namaFoto')");
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }


		// include database connection file
		include_once("config.php");
        session_start();
				
		// Insert user data into table
		$result = mysqli_query(
            $mysqli, 
            "INSERT INTO post(nama,harga,harga_palsu,deskripsi,foto,tampilkan)
             VALUES(
                 '$nama',
                 '$harga',
                 '$harga_palsu',
                 '$deskripsi',
                 '$namaFoto',
                 '$tampilkan'
                 )");
		
		// // Show message when user added
        $_SESSION['sukses'] = "Produk $nama Berhasil Ditambahkan ";
        header('Location: admin.php');   
	}
    
	?>