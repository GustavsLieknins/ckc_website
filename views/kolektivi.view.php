<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolektivi</title>
    <style>
    table, td, th {
      border: 1px solid;
    }

    table {
      border-collapse: collapse;
    }
</style>
</head>
<?php require "components/navbar.php" ?>
<body>
<h1>CKC kolektivi</h1>
<table>
  <tr>
    <th>Kolektīvs</th>
    <th>Apraksts</th>
  </tr>
  <tr>
    <?php foreach($kolektivi as $kolektivs) { ?>
    <tr>
      <td> <?= $kolektivs["name"]  ?></td>
      <td> <?= $kolektivs["description"]  ?></td>
    </tr>
    <?php } ?>
  </tr>

  </table>
</body>
</html>