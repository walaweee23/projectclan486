<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
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
      require_once 'connect.php'; // koneksi ke database.

      /**
       * Cegah akses ke halaman login saat sedang login.
       */
      if(isset($_SESSION['is_login']) || isset($_COOKIE['_logged'])) {
        header('location: /');
      }

      if(isset($_POST['submit'])) {
        /**
         * Mendapatkan data dari formulir login.
         * Data: Email, Kata Sandi, dan Ingat Saya.
         */
        $email    = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);
        $remember = (!empty($_POST['remember_me']) ? $_POST['remember_me'] : '');

        if(empty($email) || empty($password)) {
          /**
           * Cek apakah formulir telah terisi data.
           */
          echo '<b>Warning!</b> Silahkan isi semua data yang diperlukan.';
        } elseif(count((array) $connect->query('SELECT email FROM mahasiswa WHERE email = "'.$email.'"')->fetch_array()) == 0) {
          /**
           * Cek jika email tidak terdaftar.
           */
          echo '<b>Warning!</b> Email tidak terdaftar.';
        } else {
          /**
           * Mengecek data mahasiswa.
           */
          $mahasiswa = $connect->query('SELECT password, nama_lengkap FROM mahasiswa')->fetch_assoc();
          if(password_verify($password, $mahasiswa['password'])) {
            $_SESSION['is_login'] = $mahasiswa['nama_lengkap'];

            /**
             * Cek apakah tombol remember me diklik.
             */
            if($remember) {
              if(!isset($_COOKIE['is_logged'])) {
                /**
                 * Atur cookie selama 1 hari.
                 * Rumus: 60 * 60 * 24 = 1 hari.
                 */
                setcookie('_logged', substr(md5($email), 0, 10), time() + (60 * 60 * 24), '/');
              }
            }
            header('location: /'); // Alihkan ke halaman index.
          } else {
            echo '<b>Warning!</b> Kata sandi salah.';
          }
        }
      }

    ?>
    <div class="container">
      <h1>Walawee Login</h1>

    <form method="POST">
      <input type="email" name="email" value="" autocomplete="off" placeholder="Email" required>
      <br/>
      <input type="password" name="password" value="" autocomplete="off" placeholder="Kata sandi" required>
      <br/>
      <input type="checkbox" name="remember_me"> Ingat Saya
      <br/>
         <button type="submit" class="btn" name="submit" value="Login">
           <?php
        echo (isset($_SESSION['is_login']) || isset($_COOKIE['_logged']) ? 'Hi, '.$_SESSION['is_login'].' - 
        </a>' : '<a href="index.php">Login</a>');
      ?>
      <br/>
    </div>
      <p style="text-align: center; margin-top: 20px">
        Belum punya akun ? | <a href="register.php"> Mendaftar</a>
      </p>

    </form>
  </body>
</html>