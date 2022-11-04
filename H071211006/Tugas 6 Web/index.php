<?php
$host = "localhost:8111";
$username = "root";
$password = "";
$database = "db_laundry";

$conn    = mysqli_connect($host, $username, $password, $database);
$orderNumber = "";
$nama = "";
$alamat = "";
$service = "";
$pembayaran = "";
$sukses = "";
$error = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if ($op == 'DELETE') {
    $customerNumber = $_GET['customerNumber'];
    $sql1 = "DELETE  FROM customers WHERE customerNumber = '$customerNumber'";
    $q1 = mysqli_query($conn, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    } else {
        $error = "Gagal melakukan delete data";
    }
}
if ($op == 'UPDATE') {
    $customerNumber = $_GET['customerNumber'];
    $sql1 = "SELECT * FROM customers WHERE customerNumber = '$customerNumber'";
    $q1 = mysqli_query($conn, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $orderNumber = $r1['orderNumber'];
    $nama = $r1['nama'];
    $alamat = $r1['alamat'];
    $service = $r1['service'];
    $pembayaran = $r1['pembayaran'];

    if ($orderNumber == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) {
    $orderNumber = $_POST['orderNumber'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $service = $_POST['service'];
    $pembayaran = $_POST['pembayaran'];

    if ($orderNumber && $nama && $alamat && $service && $pembayaran) {
        if ($op == 'UPDATE') { {
                $sql1 = "UPDATE customers SET orderNumber = '$orderNumber', nama='$nama',alamat='$alamat',service='$service',pembayaran='$pembayaran' WHERE customerNumber = '$customerNumber'";
                $q1 = mysqli_query($conn, $sql1);
                if ($q1) {
                    $sukses = "Data berhasil diupdate";
                } else {
                    $error = "Data gagal diupdate";
                }
            }
        } else {
            $result = mysqli_query($conn, "SELECT * FROM customers WHERE orderNumber = '$orderNumber'");
            $num_rows = mysqli_num_rows($result);
            if ($num_rows) {
                $error = "Data duplikat, silahkan mengisi data dengan benar";
            } else {
                $sql1 = "INSERT INTO customers(orderNumber,nama,alamat,service,pembayaran) VALUES ('$orderNumber','$nama','$alamat','$service','$pembayaran')";
                $q1 = mysqli_query($conn, $sql1);
                if ($q1) {
                    $sukses = "Berhasil memasukkan data baru";
                } else {
                    $error = "Gagal Memasukkan Data";
                }
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="customerNumber=device-width, initial-scale=1.0">
    <title>Data customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        body {
            background: black;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .mx-auto {
            width: 1050px
        }

        .card {
            margin-top: 10px;
            background-color: #AFAFAF;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header text-white bg-secondary">
                <center>Coin Laundry Alhamdulillah</center>
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:2;url=index.php");
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:2;url=index.php");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="orderNumber" class="col-sm-2 col-form-label">Order Number</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="orderNumber" name="orderNumber" value="<?php echo $orderNumber ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="service" class="col-sm-2 col-form-label">Service</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="service" id="service">
                                <option value="">- Pilih Service -</option>
                                <option value="Pencucian" <?php if ($service == "Pencucian") echo "selected" ?>>Pencucian</option>
                                <option value="Setrika" <?php if ($service == "Setrika") echo "selected" ?>>Setrika</option>
                                <option value="Pencucian dan Setrika" <?php if ($service == "Pencucian dan Setrika") echo "selected" ?>>Pencucian dan Setrika</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pembayaran" class="col-sm-2 col-form-label">Pembayaran</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="pembayaran" id="pembayaran">
                                <option value="">- Pilih Pembayaran -</option>
                                <option value="Cash / Tunai" <?php if ($pembayaran == "Cash / Tunai") echo "selected" ?>>Cash / Tunai</option>
                                <option value="Debit / Kredit" <?php if ($pembayaran == "Debit / Kredit") echo "selected" ?>>Debit / Kredit</option>
                                <option value="e-wallet" <?php if ($pembayaran == "e-wallet") echo "selected" ?>>e-wallet</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header text-white bg-secondary">
                <center>Data Customer</center>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Service</th>
                            <th scope="col">Pembayaran</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "SELECT * FROM customers ORDER BY customerNumber DESC";
                        $q2     = mysqli_query($conn, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $customerNumber = $r2['customerNumber'];
                            $orderNumber = $r2['orderNumber'];
                            $nama = $r2['nama'];
                            $alamat = $r2['alamat'];
                            $service = $r2['service'];
                            $pembayaran = $r2['pembayaran'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $orderNumber ?></td>
                                <td scope="row"><?php echo $nama ?></td>
                                <td scope="row"><?php echo $alamat ?></td>
                                <td scope="row"><?php echo $service ?></td>
                                <td scope="row"><?php echo $pembayaran ?></td>
                                <td scope="row">
                                    <a href="index.php?op=UPDATE&customerNumber=<?php echo $customerNumber ?>"><button type="button" class="btn btn-primary">Update</button></a>
                                    <a href="index.php?op=DELETE&customerNumber=<?php echo $customerNumber ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</body>

</html>