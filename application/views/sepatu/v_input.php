<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Pemesanan</title>
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
    width: 50%;
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
<center>
  <div class="row ">
    <div class="col-6">
      <h3>Pemesanan Sepatu</h3>
      <fieldset>
        <legend>Input Pemesanan Sepatu</legend>
        <hr>
        <form method="post" action="#">
          <table>
            <tr>
              <th>Nama Pembeli</th>
              <td> : </td>
              <td>
                <input type="text" name="nama" id="nama" placeholder="Nama Lengkap..">
                <?= form_error('nama', '<br><span style="color:red;">','</span>'); ?>
              </td>
            </tr>

            <tr>
              <th>No. Handphone</th>
              <td> : </td>
              <td>
                <input type="text" name="nohp" id="nohp" placeholder="No. Handphone..">
                <?= form_error('nohp', '<br><span style="color:red;">','</span>'); ?>
              </td>
            </tr>

            <tr>
              <th>Merk Sepatu</th>
              <td> : </td>
              <td>
                <select name="merk" id="merk">
                  <option> -- Merk Sepatu --</option>
                  <?php foreach($merk as $m) : ?>
                  <option value="<?= $m; ?>"><?= $m; ?></option>
                  <?php endforeach; ?>
                </select>
              </td>
            </tr>

            <tr>
              <th>Ukuran</th>
              <td> : </td>
              <td>
                <select name="ukuran" id="ukuran">
                  <option> -- Ukuran Sepatu -- </option>
                  <?php for ($i = 32; $i <= 44; $i++) : ?>
                  <option value="<?= $i; ?>"><?= $i; ?></option>
                  <?php endfor; ?>
                </select>
              </td>
            </tr>

            <tr>
              <td>
              <hr>
              <button type="submit">Pesan</button>
              </td>
            </tr>
          </table>
      </fieldset>
    </div>
  </div>
</center>
</body>
</html>