<?php
  $username = "Rico Nurmsalu";
  $fulltimenow = date ("d.m.Y H:i:s");
  $hournow = date("H");
  $partofday = "lihtsalt aeg";
  if($hournow < 6) {
      $partofday = "uneaeg";
  }
  if($hournow >= 8 and $hournow < 18) {
      $partofday = "õppimise aeg";
  }
?>

<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title>Veebileht</title>

</head>
<body>
  <h1>Pealkiri</h1>
  <p>See veebileht on loodud õppetöö kaigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>

</body>
</html>