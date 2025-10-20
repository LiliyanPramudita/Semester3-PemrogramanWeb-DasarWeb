<?php
$host = "localhost";
$port = "5432";
$dbname = "lils_restaurant";
$user = "postgres"; 
$password = "12345";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("<p style='color:red;'>Koneksi gagal: " . $e->getMessage() . "</p>");
}

//Pilih tabel dari dropdown
$tabel = isset($_GET['tabel']) ? $_GET['tabel'] : 'menu';
$allowed_tables = ['menu', 'kategori'];
if (!in_array($tabel, $allowed_tables)) $tabel = 'menu';

//Ambil data
try {
    $query = $conn->query("SELECT * FROM $tabel ORDER BY 1");
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("<p style='color:red;'>Gagal mengambil data: " . $e->getMessage() . "</p>");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Lihat Data | Lil’s Restaurant</title>
  <style>
    body {
      font-family: "Poppins", Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #eaf8ef;
      color: #2f4f4f;
    }

    header {
      background-color: #a3d9a5;
      color: #fff;
      padding: 20px 40px;
      text-align: center;
      font-size: 22px;
      font-weight: 600;
      letter-spacing: 1px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .container {
      max-width: 1000px;
      background: #fff;
      margin: 40px auto;
      padding: 25px 40px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    h2 {
      color: #3e8e41;
      margin-bottom: 5px;
    }

    form {
      margin-top: 15px;
      margin-bottom: 25px;
    }

    select {
      padding: 8px 12px;
      border-radius: 6px;
      border: 1px solid #a3d9a5;
      background-color: #f4fff5;
      color: #2f4f4f;
      font-size: 14px;
      outline: none;
      transition: 0.3s;
    }
    select:hover {
      border-color: #67b567;
      box-shadow: 0 0 5px #a3d9a5;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }

    th {
      background-color: #67b567;
      color: white;
      padding: 10px;
      text-align: left;
      border-bottom: 2px solid #55a055;
    }

    td {
      padding: 10px;
      border-bottom: 1px solid #cce5d0;
    }

    tr:nth-child(even) {
      background-color: #f2fff4;
    }

    tr:hover {
      background-color: #dcfce7;
    }

    footer {
      text-align: center;
      padding: 15px;
      background-color: #a3d9a5;
      color: #fff;
      font-weight: 500;
      box-shadow: 0 -2px 8px rgba(0,0,0,0.1);
    }

    .no-data {
      text-align: center;
      padding: 20px;
      background: #f9fdf9;
      border: 1px dashed #a3d9a5;
      border-radius: 10px;
      color: #667;
    }
  </style>
</head>
<body>

<header>
  Lil’s Restaurant - Data Database
</header>

<div class="container">
  <h2>Data dari Database: <em><?php echo htmlspecialchars($dbname); ?></em></h2>

  <form method="get">
    <label for="tabel"><b>Pilih tabel:</b></label>
    <select name="tabel" id="tabel" onchange="this.form.submit()">
      <option value="menu" <?php if($tabel=='menu') echo 'selected'; ?>>menu</option>
      <option value="kategori" <?php if($tabel=='kategori') echo 'selected'; ?>>kategori</option>
    </select>
  </form>

  <?php
  if ($rows) {
      echo "<h3>Isi Tabel: <span style='color:#3e8e41;'>" . htmlspecialchars($tabel) . "</span></h3>";
      echo "<table>";
      echo "<tr>";
      foreach (array_keys($rows[0]) as $kolom) {
          echo "<th>" . htmlspecialchars($kolom) . "</th>";
      }
      echo "</tr>";

      foreach ($rows as $row) {
          echo "<tr>";
          foreach ($row as $isi) {
              echo "<td>" . htmlspecialchars($isi) . "</td>";
          }
          echo "</tr>";
      }
      echo "</table>";
  } else {
      echo "<div class='no-data'>Tidak ada data pada tabel <b>$tabel</b>.</div>";
  }
  ?>
</div>

<footer>
  © 2025 Lil’s Restaurant | Healthy Comfort Food
</footer>

</body>
</html>