<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    </head>
    <body>
        <br>
    <h1>แม่สูตรคูณ</h1>
        <form method ="post" action ="/my-display">
        @csrf
        <label for="NumberInput">ป้อนตัวเลข:</label>
        <input type ="number" name ="myinputnumber">
        <button type ="submit">แสดง</button>
        </form>
        <style>
           body {
    font-family: 'Itim', sans-serif;
    background-color: #f0f0f0; /* สีพื้นหลัง */
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

h1 {
    text-align: center;
    color: #333; /* สีข้อความ */
}

form {
    margin-bottom: 40px;
    text-align: center;
}

label {
    display: block;
    margin-bottom: 8px;
}

input[type="number"] {
    padding: 8px;
    border: 1px solid #ccc; /* สีขอบของ input */
    border-radius: 5px;
}

button {
    padding: 8px;
    cursor: pointer;
    background-color: #a6a9a6;
    color: #ffffff;
    border: none;
    border-radius: 5px;
}

        </style>
    </body>
</html>
