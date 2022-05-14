<title>Fahry Fara Alumunium - Tambah Produk</title>
<?php
    require 'header.php';
  
?>
    <div class="container">

        <div class="card">
            <div class="m-2">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
                </ol>
                </nav>
                <div class="text-right">
                    <a class="btn btn-success" href="admin.php"><i class="fas fa-x"></i></a>
                </div>
                <form class="form" action="create.php" method="post" name="form1" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Produk</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Produk">
                        <?php
                            if(isset($_GET['nama'])){
                                if($_GET['nama'] == "kosong"){
                                    echo "<p style='color:red;font-size:11px;'>Nama Produk Wajib Diisi !</p>";
                                }
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga Asli</label>
                        <input type="text" name="harga" class="form-control" placeholder="Rp." >
                        <?php
                            if(isset($_GET['harga'])){
                                if($_GET['harga'] == "kosong"){
                                    echo "<p style='color:red;font-size:11px;'>Harga Produk Wajib Diisi !</p>";
                                }
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga Sebelum Diskon</label>
                        <input type="text" name="harga_palsu" class="form-control" placeholder="Rp.">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Deskripsi Produk</label>
                        <textarea type="text" name="deskripsi" class="form-control texteditor"></textarea>
                    </div>
                    <div class="custom-control custom-switch mt-2 text-center">
                        <input type="checkbox" class="custom-control-input" name="tampilkan" value="1" id="customSwitch1" checked>
                        <label class="custom-control-label" for="customSwitch1">Tampilkan Product</label>
                    </div>
                    <label for="image_broadcast">Gambar</label>
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-8 ">
                                <div class="d-flex justify-content-center">
                                    <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div id="msg"></div>
                                <input type="file" name="file" class="file" accept="image/*" hidden >
                                <div class="input-group my-3">
                                    <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                                    <div class="input-group-append">
                                    <button type="button" class="browse btn btn-primary">Browse...</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if(isset($_GET['file'])){
                                if($_GET['file'] == "kosong"){
                                    echo "<p style='color:red;font-size:11px;'>Foto Produk Wajib Diisi !</p>";
                                }
                                }
                            ?>
                        </div>
                    </div>
                   
                    <input type="submit" class="btn btn-primary mt-2" name="Submit" value="Simpan Produk">
                    <!-- <button type="submit" class="btn btn-primary">Posting Produk</button> -->
                </form>
            </div>
        </div>
    </div>
 
	

    
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

