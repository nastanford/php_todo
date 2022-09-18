<?php
  include 'config.php';
  include 'qry_items.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDo List</title>
</head>
<body>

<?php 
  echo "\n<ul/>\n";
  // loop through data  
  foreach ($items as $item) {
    echo "\t<li>".$item['title'] . "</li>\n";
  }
  echo "</ul>\n";
?>

  
</body>
</html>
