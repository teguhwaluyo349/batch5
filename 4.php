<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=batch5", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = ' select pokemon_tb.*, elemen_tb.name as elemen_name from pokedumb_tb join pokemon_tb on pokemon_tb.id=pokedumb_tb.pokemon_id join elemen_tb on elemen_tb.id = pokedumb_tb.elemen_id';

$q = $conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
?>

<html>

<head>
  <title>Batch 5</title>
</head>

<body>
  <div id="container">
    <h1>Pokemon</h1>
    <table class="table table-bordered table-condensed">
      <thead>
        <tr>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          $id = 0;
          while ($row = $q->fetch()) : ?>
            <?php if ($row['id'] != $id) { ?>
              <td><img src="<?php echo $row['photo'] ?>" height="200px" width="200px"><br><p>
                <center><?php echo htmlspecialchars($row['name']); ?><br><p>
                <?php echo htmlspecialchars($row['elemen_name']); ?><center></td>
          <?php }
            $id = $row['id'];
          endwhile; ?>
        </tr>
      </tbody>
    </table>
</body>
</div>

</html>