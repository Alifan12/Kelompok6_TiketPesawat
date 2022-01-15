<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="gambar/plane.png">
  <title>SWINGS.com</title>

</head>
<?= $this->section('content'); ?>
<div class="container">
  <div class="raw">
    <div class="col">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Device_name</th>
            <th scope="col">Device_brand</th>
            <th scope="col">Device_quantity</th>
            <th scope="col">Device_satus</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($peraktikum5 as $k) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $k['Device_name']; ?></td>
              <td><?= $k['Device_brand']; ?></td>
              <td><?= $k['Device_quantity']; ?></td>
              <td><?= $k['Device_satus']; ?></td>
              <td>
                <a href="" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</html>