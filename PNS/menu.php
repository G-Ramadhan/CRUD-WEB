<?php
//-----------Cek Login--------------//
session_start();
if (empty($_SESSION['username'])) {
    header("location:login_form.php");
}

//----------------------------------//
?>
<html>

<head>
    <title>:: Menu Utama ::</title>
    <link rel="stylesheet" href="assets/css/menu.css">
</head>

<body>
    <center>
        <p align="center">
            <font size="12"><b>MENU UTAMA</b></font>
        </p>
        <?php
        echo "<h5>Login Sebagai : ";
        echo $_SESSION['username'];
        ?>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></lottie-player>


        <form method=POST action=tambah_data.php>
            <button>Tambah Data</button>
        </form>

        <form method=POST action=tampil_data.php>
            <button>Tampil Data</button>
        </form>

        <form method=POST action=logout.php>
            <button>LogOut</button>
        </form>

       <form method=POST action=Dev_Info.php>
            <button> Developer Info </button>
        </form>
    </center>
</body>

</html>