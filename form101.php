<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action = "" method = "post">
        <input type = "text" name = "my_val"/>
        <button type = "submit" > บันทึก </button>
    </form>
    <h1><?php 
    //print_r($_POST['my_val']);
    //print_r($_POST);
   // print_r($_REQUEST);//รับได้หมด
    if(isset($POST['my_val'])) {
        echo $_POST['my_val'];
    } ?></h1>
</body>
</html>