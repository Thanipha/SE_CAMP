<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiplication Table Calculator</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      max-width: 600px;
      padding: 30px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h1 {
      font-size: 36px;
      color: #333;
      margin-bottom: 20px;
    }

    input[type="text"] {
      width: calc(100% - 22px);
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 20px;
    }

    button {
      display: inline-block;
      width: calc(100% - 22px);
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 20px;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #45a049;
    }

    #output {
      margin-top: 20px;
      font-size: 20px;
      text-align: center;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      border: 1px solid #ccc;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Multiplication Table Calculator</h1>
    <input type="text" id="number" placeholder="Enter a number">
    <button onclick="myFunction()">Calculate</button>
    <div id="output"></div>
  </div>
  <script>
    function myFunction() {
      let number = parseInt(document.getElementById('number').value);
      let output = document.getElementById('output');
      output.innerHTML = ''; 

      if (isNaN(number)) {
        output.innerHTML = "Please enter a valid number.";
        return;
      }

      let tableHTML = "<table>";
      for (let i = 1; i <= 12; i++) {
        tableHTML += "<tr><td>" + number + " x " + i + "</td><td>=</td><td>" + (number*i) + "</td></tr>";
      }
      tableHTML += "</table>";
      output.innerHTML = tableHTML;
    }
  </script>
</body>
</html>
