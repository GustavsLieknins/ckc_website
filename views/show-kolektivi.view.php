<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing</title>
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
<table>
  <tr>
    <th>Kolektīvs</th>
    <th>Apraksts</th>
  </tr>
  <tr>
    <tr>
      <td> <?= htmlspecialchars($kolektivs["name"])  ?></td>
      <td> <?= htmlspecialchars($kolektivs["description"])  ?></td>
    </tr>
  </tr>

  </table>
</body>
</html>