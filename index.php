<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is PHP <?php echo 'Hello World!'; ?></h1>
    <div>
        <p>1</p>
        <?php
        if(false){
            # die;
            ?>
            <p>2</p>
            <?php
        }
        ?>
        <p>3</p>
    </div>
</body>
</html>