<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
      }
      .container {
        width: 100%;
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      h1 {
        text-align: center;
        margin-bottom: 20px;
      }

      input[type="email"],
      input[type="text"],
      input[type="password"] {
        position: relative;
        width: 91%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 3px;
        font-size: 15px;
        background-color: #f5f5f5;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        margin: 10px;
        padding: 20px;
        width: 91%;
        margin-left: auto;
        margin-right: auto;
      }

      button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
        background-color: black;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        margin: 10px;
        padding: 20px;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
      }

      button[type="submit"]:hover {
        background-color: #2980b9;
        background-color: grey;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        width: 100%;
        margin-left: auto;
        margin-right: auto;
      }

      a {
        text-decoration: none;
        color: #3498db;
      }

      a:hover {
        color: #2980b9;
      }
    </style>
  </head>
  <body>
    <?php
      require_once 'connect.php'; // Koneksi ke database

      /**
       * Cegah akses ke halaman login saat sedang login.
       */
      if(isset($_SESSION['is_login']) || isset($_COOKIE['_logged'])) {
        header('location: /');
      }

      if(isset($_POST['submit'])) {
        /**
         * Mendapatkan data dari formulir pendaftaran.
         * Data: Email, Kata Sandi, Nama Lengkap, dan NIM.
         */
        $email    = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);
        $name     = strip_tags($_POST['name']);
        $nim      = strip_tags($_POST['nim']);

        if(empty($email) || empty($password) || empty($name) || empty($nim)) {
          /**
           * Cek apakah formulir telah terisi data.
           */
          echo '<b>Warning!</b> Silahkan isi data yang diperlukan.';
        } elseif(count((array) $connect->query('SELECT email FROM mahasiswa WHERE email = "'.$email.'" OR nim = "'.$nim.'"')->fetch_array()) > 1) {
          /**
           * Cek jika email atau NIM telah terdaftar.
           */
          echo '<b>Warning!</b> Email atau NIM telah terdaftar.';
        } else {
          /**
           * Memasukkan data ke database.
           */
          $insert = $connect->query('INSERT INTO `mahasiswa`(`email`, `password`, `nama_lengkap`, `nim`) VALUES("'.$email.'", "'.password_hash($password, PASSWORD_BCRYPT).'", "'.$name.'", "'.$nim.'")');
          if($insert) {
            echo 'Pendaftaran berhasil!';
          } else {
            echo 'Pendaftaran gagal!';
          }
        }
      }
    ?>
    <div class="container">
      <h1>Walawee Register</h1>
    <form method="POST">
      <input type="text" name="email" value="" autocomplete="off" placeholder="Email">
      <br/>
      <input type="password" name="password" value="" autocomplete="off" placeholder="Kata sandi">
      <br/>
      <input type="text" name="name" value="" autocomplete="off" placeholder="Nama lengkap">
      <br/>
      <input type="text" name="nim" value="" autocomplete="off" placeholder="NIM">
      <br/>
           <button type="submit" class="btn" name="submit" value="Register">
      <?php
        echo (isset($_SESSION['is_login']) || isset($_COOKIE['_logged']) ? 'Hi, '.$_SESSION['is_login'].' - 
        </a>' : '<a href="register.php">Register</a>');
      ?>
 
    </div>
      <p style="text-align: center; margin-top: 20px">
         Kembali ke Halaman | <a href="login.php">Login</a>
        </p>
    </form>
  </body>
</html>