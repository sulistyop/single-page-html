<title>Fahry Fara Alumunium - Admin</title>
<?php
    require 'header.php';
    include_once("config.php");

    $data = mysqli_query($mysqli, "SELECT * FROM post ORDER BY id DESC");
?>
<?php session_start(); ?>
    <div class="m-1 shadow">
        <div class="card">
            <div class="m-2">
            <a class="btn btn-primary" href="add.php">Tambah Product</a>
                <div class="table-responsive">
                    <table class="table table-striped mt-2">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Produck</th>
                                <th colspan="2" scope="col" class="text-center">Aksi</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $key=> $value){ ?>
                            <tr>
                                <th scope="row"><?php echo $key+1 ?></th>
                                <td><?php echo $value['nama'] ?></td>
                                <td>
                                    <a class="btn btn-success" href="edit.php?id=<?php echo $value['id'] ?>">
                                        <i class="fas fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href='delete.php?id=<?php echo $value['id'] ?>'>
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

   
  
    <?php if(@$_SESSION['sukses']){ ?>
        <script>
            swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
        </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['sukses']); } ?>
