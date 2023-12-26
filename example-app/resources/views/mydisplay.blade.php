<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

    <div class="HW">
        <table>
            <tbody>
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $x = $_POST["myinputnumber"];
                    echo "<h1>ตารางสูตรคูณแม่ $x</h1>";
                    echo "<ul>";
                    for ($i = 1; $i <= 24; $i++) {
                    echo "<br>$x x $i = " . $x * $i . "<br>";
                    }
                    echo "</ul>";
                }
                ?>
            </tbody>
        </table>
       <style>
            * {
                font-family: 'Itim', cursive;
            }
            table {
                width: 300px;
                height: 400px;
                background-color: #f4ac11;
                text-align: center;
                margin: auto
            }
            div.HW{
                width: 300px;
                height: 400px;
                overflow-y : scroll ;
                text-align: center;
                margin: auto
            }
            h1{
                color: #054f15;
                text-shadow: 3px 3px rgb(65, 32, 2);
            }
            body {
                background: url('https://i.pinimg.com/564x/46/46/38/46463886f20d59b49471246012f45a79.jpg');
                color:#ffffff;
                display: flex;
                justify-content: center;
            }

        </style>
</body>
</html>
