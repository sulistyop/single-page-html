<title>Fahry Fara Alumunium - Edit Produk</title>
<?php
    require 'header.php';
    include_once("config.php");

    if(isset($_POST['update']))
    {	
        $request = $_SERVER['REQUEST_URI'];
        $path = parse_url($request, PHP_URL_PATH);
        $pathFragments = explode('/', $path);
        $id = end($pathFragments);
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
// Display selected user data based on id
// Getting id from url
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);
$pathFragments = explode('/', $path);
$id = end($pathFragments);

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
                <?php if(isset($success)){ echo $success ;} ?>
                <div class="text-right">
                    <a class="btn btn-success" href="/admin"><i class="fas fa-x"></i></a>
                </div>
                <form class="form" action="/edit-product/<?php  echo $id ?>" method="post" name="form1">
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
                    <input type="submit" class="btn btn-primary mt-2" name="update" value="Simpan Produk">
                    <!-- <button type="submit" class="btn btn-primary">Posting Produk</button> -->
                </form>
            </div>
        </div>
    </div>

</body>
</html>