<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function my_var_dump($var) {
            echo "<pre style='background-color: orange; border: 2px solid black'>";
            print_r($var);
            //var_dump($var);
            echo "</pre>";
        }

        include_once("rib.class.php");
        $validator = new RIBValidator("12345", "67890", "000A56b77H88", "87");
        my_var_dump($validator);
        if ($validator->isValid()) {
            echo "<p>Ce RIB est valide</p>";
        } else {
            echo "<p>Ce RIB est invalide !!!</p>";
        }
    ?>
</body>
</html>