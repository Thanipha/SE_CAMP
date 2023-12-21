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
    <br>
    <?php 
    $var_c = $var_b = 1;
    $var_c = '1';
    if($var_b === $var_c){
        //true
        echo '$var_b === $var_c';
    }else if($var_b <> $var_c){
        //true
        echo '$var_b <> $var_c';
    }else{
        //false
        echo 'else';
    }?>
    <br>
    <?php echo 'ฉันตายได้นะ แต่ยังไม่ตาย';?>
    <br>
    <?php echo $var_c = 2;?>
    <br>
    <?php 
    echo $var_c ;
    switch($var_c){
        case 1:
            echo "1";
            break;
        default:
            echo "test";
    }
    $arry = array();
    $arry1 = [];
    $arry2[] = 1;
    $arry2[] = 2;
    $arry2[] = 3;
    $arry2[] = "Hello";
    $arry2['SE'] = "World";
    ?><?php print_r($arry);?>                               
    <pre><?php print_r($arry);?></pre>
    <pre><?php print_r($arry1);?></pre>
    <pre><?php print_r($arry2);?></pre>
    <?php for($i = 0; $i <count($arry2);$i++){ ?>
    <h3><?php echo $arry2[$i];?></h3>
    <?php}?>

    <?php foreach($arry2 as $key => $value){?>
    <h3><?php echo $arry2[$key];?> : <?php echo $value ;?></h3>
    <?php } ?>    
</body>
</html>