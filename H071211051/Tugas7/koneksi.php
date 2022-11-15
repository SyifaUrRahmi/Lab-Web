<?php
session_start();

class Connection
{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $db = "akademik";
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }
}

class Register extends Connection
{
    public function registration($username, $email, $password, $cpassword)
    {

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($this->conn, $sql);

        if ($result->num_rows > 0) {
            return 1;
            //email sdh ada

        } else {
            if ($password == $cpassword) {
                $sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
                $result = mysqli_query($this->conn, $sql);
                return 2;
                //sukses
            } else {
                return 3;
                //pass salah
            }
        }
    }
}

class Login extends Connection
{
    public $id;
    public function login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($result->num_rows > 0) {

            if ($password == $row["password"]) {
                $this->id = $row["id"];
                return 1;
                //sukses
            }
        } else {
            return 2;
            //pass salah
        }
    }
    public function idUser()
    {
        return $this->id;
    }
}

class Data extends Connection
{
    public $nim        = "";
    public $nama       = "";
    public $alamat     = "";
    public $fakultas   = "";
    public $sukses     = "";
    public $error      = "";
    public $id         = "";

    public function insert(){
        $nim        = $_POST['nim'];
        $nama       = $_POST['nama'];
        $alamat     = $_POST['alamat'];
        $fakultas   = $_POST['fakultas'];

        $result = mysqli_query($this->conn, "select * from mahasiswa where nim = '$nim'");
        $num_rows = mysqli_num_rows($result);
        if ($num_rows) {
            return false;
        } else {
            $sql1   = "insert into mahasiswa(nim,nama,alamat,fakultas) values ('$nim','$nama','$alamat','$fakultas')";
            $q1     = mysqli_query($this->conn, $sql1);
            if ($q1) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function delete($id){
        $sql2       = "select nim from mahasiswa where id = '$id'";
        $q2         = mysqli_query($this->conn, $sql2);
        $r2         = mysqli_fetch_array($q2);
        $sql1       = "delete from mahasiswa where id = '$id'";
        $q1         = mysqli_query($this->conn, $sql1);
        if ($q1) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($id){
        $sql1       = "select * from mahasiswa where id = '$id'";
        $q1         = mysqli_query($this->conn, $sql1);
        $r1         = mysqli_fetch_array($q1);
        $nim        = $r1['nim'];
        $nama       = $r1['nama'];
        $alamat     = $r1['alamat'];
        $fakultas   = $r1['fakultas'];
        if ($nim == '') {
            return false;
        } else {
            return true;
        }
    }

    public function update() {
        $sql2       = "select nim from mahasiswa where id = '$this->id'";
        $q2         = mysqli_query($this->conn, $sql2);
        $r2         = mysqli_fetch_array($q2);
        $sql1       = "update mahasiswa set nim = '$this->nim',nama='$this->nama',alamat = '$this->alamat',fakultas='$this->fakultas' where id = '$this->id'";
        $q1         = mysqli_query($this->conn, $sql1);
        if ($q1) {
            return true;
        } else {
            return  false;
        }
    }

    public function tampil(){
        $isi = null;
        $sql2   = "select * from mahasiswa order by id asc";
        if ($q2  = $this->conn->query($sql2)) {
            while ($row = mysqli_fetch_assoc($q2)) {
                $isi[] = $row;
            }
        }
        return $isi;
    }
}
