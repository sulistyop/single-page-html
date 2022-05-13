<title>Fahry Fara Alumunium - Edit Produk</title>
<?php
    require 'header.php';
    include_once("config.php");

    if(isset($_POST['update']))
    {	
      
       $id = $_POST['id'];
       $nama = $_POST['nama'];
       $harga = $_POST['harga'];
       $harga_palsu = $_POST['harga_palsu'];
       $deskripsi = $_POST['deskripsi'];
       $foto = $_POST['foto'] ?? '';
       $tampilkan = 1;
   
       $result = mysqli_query(
            $mysqli, 
            "UPDATE post SET 
            nama='$nama',
            harga='$harga',
            harga_palsu='$harga_palsu',
            deskripsi='$deskripsi',
            foto='$foto',
            tampilkan='$tampilkan'
            WHERE id=$id"
       );
       $success =  'Update Produk Berhasil';
   
   }
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<?php

$id = $_GET['id'] ?? $_POST['id'];
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM post WHERE id=$id");
 
while($dt = mysqli_fetch_array($result))
{
	$nama = $dt['nama'];
	$harga = $dt['harga'];
	$harga_palsu = $dt['harga_palsu'];
	$foto = $dt['foto'];
	$deskripsi = $dt['deskripsi'];
	$tampil = $dt['tampilkan'];
    $id = $dt['id'];

}
?>

    <div class="container">
        <div class="card">
            <div class="m-2">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Produk</li>
                </ol>
                </nav>
                <?php if(isset($success)){ echo $success ;} ?>
                <div class="text-right">
                    <a class="btn btn-success" href="admin.php"><i class="fas fa-x"></i></a>
                </div>
                <form class="form"  method="post" action="edit.php" >
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Produk</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $nama ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga Asli</label>
                        <input type="text" name="harga" class="form-control" value="<?php echo $harga ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga Sebelum Diskon</label>
                        <input type="text" name="harga_palsu" class="form-control" value="<?php echo $harga_palsu ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Deskripsi Produk</label>
                        <textarea type="text" name="deskripsi" class="form-control texteditor"><?php echo $deskripsi ?></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile">
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    </div>
                    <div class="custom-control custom-switch mt-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" value="<?php echo $tampil ?>">
                        <label class="custom-control-label" for="customSwitch1">Tampilkan Product</label>
                    </div>
                    <input type="hidden" name="id" value=<?php echo $_GET['id'] ?? $_POST['id'];?>>
                    <input type="submit" class="btn btn-primary mt-2" name="update" value="Simpan Produk">
                    <!-- <button type="submit" class="btn btn-primary">Posting Produk</button> -->
                </form>
            </div>
        </div>
    </div>

</body>
</html>