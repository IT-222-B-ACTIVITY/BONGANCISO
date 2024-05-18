<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Height Converter</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(to bottom right, red, yellow);
        }

        .container {
            background: url(muscleman.jpg);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: goldenrod;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #ccc ;
        }

        label {
            margin-bottom: 10px;
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        input[type="number"] {
            padding: 10px;
            margin-bottom: 20px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none;
        }

        button[type="submit"] {
            padding: 10px 40px;
            background-color: goldenrod;
            color: white;
            border: none;
            border-radius: 90px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 18px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 20px;
            font-size: 20px;
            color: gold;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Height Converter</h2>
        <form method="post">
            <label for="feet">Feet:</label>
            <input type="number" id="feet" name="feet" required>
            <label for="inches">Inches:</label>
            <input type="number" id="inches" name="inches" required>
            <button type="submit">Convert</button>
        </form>
        <?php
        function feetAndInchesToCm($feet, $inches) {
            // Convert feet to inches
            $totalInches = $feet * 12 + $inches;
            
            // Convert inches to centimeters
            $cm = $totalInches * 2.54;
            
            return $cm;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $feet = $_POST["feet"];
            $inches = $_POST["inches"];
            $cm = feetAndInchesToCm($feet, $inches);
            echo "<p>$feet feet $inches inches is equal to $cm centimeters.</p>";
        }
        ?>
    </div>
</body>
</html>