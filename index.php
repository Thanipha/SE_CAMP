<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOC</title>
</head>
<body>
    <h1>This is PHP <?php echo 'Hello World!'; ?></h1>
    <div>
        <p>1</p>
        <?php
        $var_a = 1;
        $var_a = "1$var_a";//1 1
        print_r($var_a); 
        echo "<br>";
        #var_dump($var_a);
        echo $var_a . "2"; // 12 , 3
        $arry = array();
        $arry = [];
        $arry[] = 1;
        $arry[] = 2;
        $arry[0] = 3;
        print_r($arry);
        // count
        // sizeof
        for($i=0; $i < count($arry); $i++)
        {
            echo "<h1>my h2</h1>";
            ?>
            <p>2</p>
            <?php
        }
        ?>
        <p>3</p>
    </div>
    <h1><?php echo 'Hello World';?></h1>
</body>
</html>