<!DOCTYPE html>
<html>
<head>
  <title>Data Anda</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* CSS Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('background1.jpg'); /* Ubah 'background.jpg' menjadi nama file gambar yang Anda miliki */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .container {
      width: 50%;
      margin: 50px auto;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    h2 {
      text-align: center;
      font-weight: bold;
    }

    footer {
      margin-top: 50px;
      text-align: center;
      color: #000;
      font-family: 'Roboto Mono', monospace;
      font-style: italic;
    }

    .back-btn {
      padding: 10px 15px;
      background-color: #007bff;
      color: #fff;
      border: 2px solid #007bff;
      display: block;
      width: 100px;
      margin: 30px auto;
      text-align: center;
      text-decoration: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Data yang Anda Masukkan:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Nama: " . $_POST['nama'] . "</p>";
        echo "<p>NIM: " . $_POST['nim'] . "</p>";
        echo "<p>Prodi: " . $_POST['prodi'] . "</p>";
        echo "<p>No. HP: " . $_POST['no_hp'] . "</p>";
        echo "<p>Asal Kota: " . $_POST['asal_kota'] . "</p>";
    }
    ?>
    <a href="index.php" class="back-btn">Back *Home</a>
    <a href="form.php" class="back-btn">Back *FORM </a>
    <button onclick="myFunction()">Print this page</button>
           <script>
                     function myFunction() {
                      window.print();
              }
           </script> <br><br>
    <footer>
      <p>dibuat oleh: Inyoman Ardianta - D3 MI - 2212030580</p>
    </footer>
  </div>
</body>
</html>
