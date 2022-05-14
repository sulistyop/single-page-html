<title>Fahry Fara Alumunium - Admin</title>
<?php
    require 'header.php';
    include_once("config.php");

    $data = mysqli_query($mysqli, "SELECT * FROM post ORDER BY id DESC");
?>
<?php session_start(); ?>
    <div class="container ">
        <div class="card shadow">
            <div class="m-2">
            <a class="btn btn-primary" href="add.php">Tambah Product</a>
                <div class="table-responsive">
                    <table class="table table-striped mt-2">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Produck</th>
                                <th colspan="3" scope="col" class="text-center">Aksi</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $key=> $value){ ?>
                            <tr>
                                <th scope="row"><?php echo $key+1 ?></th>
                                <td><?php echo $value['nama'] ?></td>
                                <td>
                                    <form method="post" action="tampil.php" enctype="multipart/form-data">
                                        <div class="custom-control custom-switch mb-2 text-center">
                                            <input name="tampilkan" type="checkbox" class="custom-control-input"  id="customSwitch<?php echo $value['id'] ?>" value="1" <?php echo $value['tampilkan'] =='1' ? 'checked': '' ?> onclick="clickFn(event)">
                                            <label class="custom-control-label" for="customSwitch<?php echo $value['id'] ?>"></label>
                                            <input type="text" name="id" value="<?php echo $value['id'] ?>" hidden>
                                        </div>
                                    </form>
                                   
                                </td>
                                <td>
                                    <a class="btn btn-success " href="edit.php?id=<?php echo $value['id'] ?>" onclick="">
                                        <i class="fas fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-danger delete-confirm" href='delete.php?id=<?php echo $value['id'] ?>'>
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


   
    <script>
        function clickFn(event) {
            const checkbox = event.currentTarget;
            event.currentTarget.closest('form').submit()
        }
    </script>
    <script>
      $('.delete-confirm').on('click', function (event) {
            event.preventDefault();
            var urlToRedirect = event.currentTarget.getAttribute('href');
            swal({
            title: "Apakah Anda Yakin ?",
            text: "File anda Akan Terhapus",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                window.location = urlToRedirect;
                swal("Yeyy! Selamat Data Anda Berhasil Dihapus!", {
                icon: "success",
                });
            } else {
                swal("File Anda Aman!");
            }
            });
        });
    </script>
    <?php if(@$_SESSION['sukses']){ ?>
        <script>
            swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
        </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['sukses']); } ?>
