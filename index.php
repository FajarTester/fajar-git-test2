<?php
    $list_name = array("Fajar", "Agir", "Cantarella");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
        <h1>Hello, World! <?php echo implode(", ", $list_name); ?></h1>
</body>
</html>