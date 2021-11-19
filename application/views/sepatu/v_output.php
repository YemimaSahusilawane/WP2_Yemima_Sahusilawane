<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Output Pemesanan</title>
</head>
<body>
  <style>
        *{
      font-family: Georgia, 'Times New Roman', Times, serif;
      font-size: 20px;
    }
    body{
      background-color: #c9c9ff;
    }
    fieldset{
    margin: 20px 20px auto;
    width: 40%;
    border-radius: 5px solid;
    background-color: #a7adba;
    }
    legend{
      text-align: center;
      font-weight: bolder;
      font-size: 25px;
      padding-bottom: 5px;
    }
    select{
      width: 80%;
    }
    button{
      width: 100%;
      color: #8b9dc3;
    }
  </style>
</body>
<center>
  <fieldset>
    <legend>Hasil Pemesanan Sepatu</legend>

    <table>
      <tr>
        <th>Nama Pembeli</th>
        <td> : </td>
        <td>
          <?= $nama; ?>
        </td>
      </tr>

      <tr>
        <th>No. Handphone</th>
        <td> : </td>
        <td>
          <?= $nohp; ?>
        </td>
      </tr>

      <tr>
        <th>Merk Sepatu</th>
        <td> : </td>
        <td>
          <?= $merk; ?>
        </td>
      </tr>

      <tr>
        <th>Ukuran Sepatu</th>
        <td> : </td>
        <td>
          <?= $ukuran; ?>
        </td>
      </tr>
      <tr>
        <th>Harga Sepatu</th>
        <td> : </td>
        <td>
          <?= $harga; ?>
        </td>
      </tr>

      <tr>
        <td colspan="3" align="center">
          <hr>
          <button><a href="<?= base_url('Sepatu'); ?>" type="button">Kembali</a></button>
        </td>
      </tr>
    </table>
  </fieldset>
</center>
</html>