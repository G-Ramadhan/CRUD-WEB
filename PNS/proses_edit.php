<?php



include "config/koneksi.php";

        $lokasi_file = $_FILES['fupload']['tmp_name'];
        $nama_file   = $_FILES['fupload']['name'];

        // Apabila Gambar tidak diganti
        if (empty($lokasi_file)){
            mysqli_query($koneksi,"UPDATE `tb_data_pns` SET `nama`='$_POST[nama]',`nip`='$_POST[nip]',`tgl_lahir`='$_POST[tgl_lahir]',`pangkat`='$_POST[pangkat]',`gol_pns`='$_POST[gol_pns]',`bdg_studi`='$_POST[bdg_studi]',`alamat`='$_POST[alamat]',`pnd_terakhir`='$_POST[pnd_terakhir]',`no_hp`='$_POST[no_hp]' WHERE  nomor ='$_POST[id]'");                                      
        }
        // Apabila Gambar diganti
        else{
            move_uploaded_file($lokasi_file,"gambar/$nama_file");
            mysqli_query($koneksi,"UPDATE `tb_data_pns` SET `nama`='$_POST[nama]',`nip`='$_POST[nip]',`tgl_lahir`='$_POST[tgl_lahir]',`pangkat`='$_POST[pangkat]',`gol_pns`='$_POST[gol_pns]',`bdg_studi`='$_POST[bdg_studi]',`alamat`='$_POST[alamat]',`pnd_terakhir`='$_POST[pnd_terakhir]',`no_hp`='$_POST[no_hp]', `gambar`='$nama_file' WHERE  nomor ='$_POST[id]'");
        }

        header('location:tampil_data.php');
        ?>