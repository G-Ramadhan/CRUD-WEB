<?php
// ------------------- //
session_start();
if (empty($_SESSION['username'])) {
	header("location:login_form.php");
}
// ----------------- //


include "config/koneksi.php";
$id = $_GET["id"];
if( hapus($id) > 0 ) { ?>
 
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'tampil_data.php';
    </script>

<?php
    }else {
?>

    <script>
        alert('data gagal dihapus!');
        document.location.href = 'tampil_data.php';
    </script>
<?php } ?>
    

