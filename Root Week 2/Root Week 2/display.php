<?php
//GET
// $first_name = $_GET['$first_name'];
// $last_name = $_GET['$last_name'];

//POST
$first_name = $_POST['$first_name'];
$last_name = $_POST['$last_name'];

echo $first_name;
echo $last_name;
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Document<title>
</head>
<body>
    <h1> <?php echo $first_name; ?> </h1>
    <h1> <?php echo $last_name; ?> </h1>
</body>
</html>