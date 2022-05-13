<title>Fahry Fara Alumunium - Tambah Produk</title>
<?php
    require 'header.php';
?>
    <div class="container">
        <div class="card">
            <div class="m-2">
                <div class="text-right">
                    <a class="btn btn-success" href="/admin"><i class="fas fa-x"></i></a>
                </div>
                <form class="form" action="/tambah-product" method="post" name="form1">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Produk</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga Asli</label>
                        <input type="text" name="harga" class="form-control" placeholder="Rp.">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga Sebelum Diskon</label>
                        <input type="text" name="harga_palsu" class="form-control" placeholder="Rp.">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Deskripsi Produk</label>
                        <textarea type="text" name="deskripsi" class="form-control texteditor"></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile">
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    </div>
                    <div class="custom-control custom-switch mt-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Tampilkan Product</label>
                    </div>
                    <input type="submit" class="btn btn-primary mt-2" name="Submit" value="Simpan Produk">
                    <!-- <button type="submit" class="btn btn-primary">Posting Produk</button> -->
                </form>
            </div>
        </div>
    </div>
 
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$harga_palsu = $_POST['harga_palsu'];
		$deskripsi = $_POST['deskripsi'];
		$foto = $_POST['foto'] ?? '';
        $tampilkan = 1;
	
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query(
            $mysqli, 
            "INSERT INTO post(nama,harga,harga_palsu,deskripsi,foto,tampilkan)
             VALUES(
                 '$nama',
                 '$harga',
                 '$harga_palsu',
                 '$foto',
                 '$deskripsi',
                 '$tampilkan'
                 )");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>

