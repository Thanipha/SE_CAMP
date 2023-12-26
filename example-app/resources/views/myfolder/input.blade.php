<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <h1>แม่สูตรคูณ</h1>
        <form method ="post" action ="/my-display">
        @csrf
        <label for="NumberInput">ป้อนตัวเลข:</label>
        <input type ="number" name ="myinputnumber">
        <button type ="submit">แสดง</button>
        </form>
        <style>
             * {
                font-family: 'Itim', cursive;
            }
            input[type="submit"] {
                padding: 8px;
                cursor: pointer;
                 background-color: #a6a9a6;
                color: #ffffff;
                border: none;
                border-radius: 5px
            }
            form {
                margin-bottom: 40px;
            }
        </style>
    </body>
</html>
