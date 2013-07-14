<?php
$name = '';
if(!empty($_SERVER['PATH_INFO'])) {
  $name = str_replace('/', '',  $_SERVER['PATH_INFO']);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
Hello <?php echo $name; ?>
</body>
</html>
