<?php
        $list_name = array("Fajar", "Agir", "Cantarella");
        $list_name_string = implode(", ", $list_name);
        $title = "Mantap"
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <h1><?php echo $title;?></h1>
        <h1>Hello, World! <?php echo $list_name_string; ?></h1>
</body>
</html> 