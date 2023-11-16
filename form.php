<!DOCTYPE html>
<html> 
<head>
  <title>Form Data Diri</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* CSS Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('background.jpg'); /* Ubah 'background.jpg' menjadi nama file gambar yang Anda miliki */
       background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    .container {
      width: 50%;
      margin: 50px auto;
      background-color: rgba(255, 255, 255, 0.8); /* Transparansi pada box */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    h1 {
      text-align: center;
      font-weight: bold;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="text"] {
      padding: 8px;
      margin-bottom: 15px;
    }

   input[type="submit"] {
  padding: 10px 15px;
  background-color: #007bff;
  color: #fff;
  border: 2px solid #007bff; /* Menambahkan bingkai */
  width: 50%; /* Lebar tombol 50% dari container */
  display: block; /* Untuk mengatur posisi ke tengah */
  margin: 0 auto; /* Untuk mengatur posisi ke tengah */
  cursor: pointer;
}

    footer {
  margin-top: 50px;
  text-align: center;
  color: #000;
  font-family: 'Roboto Mono', monospace; /* Menggunakan font Roboto Mono */
  font-style: italic; /* Membuat teks menjadi miring */
}
  </style>
</head>
<body>
  <div class="container">
    <h1>Form Data Diri</h1>
    <form action="datasaya.php" method="post">
      <label for="nama">Masukkan Nama Anda:</label>
      <input type="text" id="nama" name="nama" required>

      <label for="nim">Masukkan NIM Anda:</label>
      <input type="text" id="nim" name="nim" required>

      <label for="prodi">Masukkan Prodi Anda:</label>
      <input type="text" id="prodi" name="prodi" required>

      <label for="no_hp">Masukkan No. HP Anda:</label>
      <input type="text" id="no_hp" name="no_hp" required>

      <label for="asal_kota">Masukkan Asal Kota Anda:</label>
      <input type="text" id="asal_kota" name="asal_kota" required>

      <input type="submit" name="submit" value="Kirim Data">
    </form>
    <footer>
      <p>dibuat oleh: Inyoman Ardianta - D3 MI - 2212030580</p>
    </footer>
  </div>
</body>
</html>
