<?php
// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "db_pns"

// $koneksi = mysqli_connect($server, $username, $password) or die ("Koneksi Gagal!");
// mysqli_select_db($konek, $database) or die ("database tidak bisa dibuka");

// urut-> alamat server database, username, password, nama database. Silahkan sesuaikan dengan konfigurasi database.
$koneksi = mysqli_connect("localhost","root","","db_pns");

// Check connection
if(mysqli_connect_error()){

// jika koneksi berhasil
echo "Koneksi database gagal:" .mysqli_connect_error();
}
else{

// jika koneksi gagal
echo ""; 
// di bawah ini adalah isi echo diatas!
// <div style = \"color:green; text-align:center\">Koneksi ke database 
// berhasil </div>"."<br/>

}

function query ($sqLi){
    global $koneksi;
    $result = mysqli_query($koneksi, $sqLi);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_data_pns WHERE nomor = $id");
    
    return mysqli_affected_rows($koneksi);
}
function cari($keyword){
    $query = "SELECT * FROM tb_data_pns
    WHERE
    nama LIKE '%$keyword%' OR
    nip LIKE '%$keyword%' OR
    tgl_lahir LIKE '%$keyword%' OR
    pangkat LIKE '%$keyword%' OR
    gol_pns LIKE '%$keyword%' OR
    bdg_studi LIKE '%$keyword%' OR
    alamat LIKE '%$keyword%' OR
    pnd_terakhir LIKE '%$keyword%' OR
    no_hp LIKE '%$keyword%' OR
    gambar LIKE '%$keyword%'
    ";
    return query($query);
}
?>