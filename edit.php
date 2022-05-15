<title>Fahry Fara Alumunium - Edit Produk</title>

<?php
    require 'header.php';
    include_once("config.php");
   
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
        <div class="card mb-2">
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
                <form class="form"  method="post" action="update.php" enctype="multipart/form-data">
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
                    <div class="custom-control custom-switch mb-2 text-center">
                        <input name="tampilkan" type="checkbox" class="custom-control-input"  id="customSwitch1" value="1" <?php echo $tampil =='1' ? 'checked': '' ?>>
                        <label class="custom-control-label" for="customSwitch1">Tampilkan Product</label>
                    </div>
                    <label for="image_broadcast">Gambar</label>
                    <div class="col-md-12">
                        <div class="form-group">
                                <div class="d-flex justify-content-center">
                                    <img src="<?php echo "foto/".$foto; ?>" id="preview" class="img-thumbnail">
                                </div>
                                <div id="msg"></div>
                                <input type="file" name="file" class="file" accept="image/*" hidden>
                                <div class="input-group my-3">
                                    <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                                    <div class="input-group-append">
                                    <button type="button" class="browse btn btn-primary">Browse...</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value=<?php echo $_GET['id'] ?? $_POST['id'];?>>
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary mt-2" name="update" value="Simpan Produk">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if(@$_SESSION['sukses']){ ?>
        <script>
            swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
        </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['sukses']); } ?>




    <script>
    $(document).on("click", ".browse", function() {
    var file = $(this).parents().find(".file");
    file.trigger("click");
    });
    $('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);

    var reader = new FileReader();
    reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
    });
</script>
</body>
</html>