<?php
    $list_name = array("Fajar", "Agir", "Cantarella");
    $list_name_string = implode(", ", $list_name);
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
        <h1>Hello, World! <?php echo $list_name_string; ?></h1>
</body>
</html>