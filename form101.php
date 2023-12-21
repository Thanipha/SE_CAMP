<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action = "paht" method = "post">
        <input type = "txxt" name = "my_val"/>
    </form>
    <h1><?php if(isset($POST['my_val'])) {
        echo $_POST['my_val'];
    } ?></h1>
</body>
</html>