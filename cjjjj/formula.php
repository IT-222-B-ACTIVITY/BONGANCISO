<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Calculahin nayan</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
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
            background-repeat: repeat-y;
        }

        .container {
            background: url(muscleman.jpg);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
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
            margin-top: 20px;
        }

        button[type="submit"]:hover {
            background-color: darkgoldenrod;
        }

        p {
            margin-top: 20px;
            font-size: 20px;
            color: gold;
        }

    </style>
    </head>
    <body>
        <div class="container flex mt-5">
            <h1 class="text-center">OOP Formula PHP</h1>
            <div class="pogi">
                
                <?php if (isset($_GET["result"])): ?>
                <p id="p1"><?php echo $_GET["result"]; ?></p>
                <?php endif; ?>
                    
            </div>
            <div class="row justify-content-center">
                <!-- Center the form -->
                <form action="form.php" method="POST" class="col-md-8">
                    <div id="container" class="containers">
                        <!-- Align textboxes and button in a row -->
                        <div class="col">
                            <label for="num1Inserted" class="visually-hidden"
                                >Number 1</label
                            >
                            <input
                            type="number"
                                class="form-control"
                                id="num1Inserted"
                                name="num1Inserted"
                                placeholder=""
                            />
                        </div>
                        <div class="col">
                            <label for="num2Inserted" class="visually-hidden"
                                >Number 2</label
                            >
                            <input
                            type="number"
                                class="form-control"
                                id="num2Inserted"
                                name="num2Inserted"
                                placeholder=""
                            />
                        </div>
                        <div class="col">
                            <label for="unit1" class="visually-hidden"
                                >Operation</label
                            >
                            <select
                                id="unit1"
                                class="form-select"
                                name="unit1"
                                onchange="getSelectedValue();"
                            >
                                <option selected value>
                                    -- select an option --
                                </option>
                                <option value="square">Area of Square</option>
                                <option value="rectangle">
                                    Area of Rectangle
                                </option>
                                <option value="circle">Area of Circle</option>
                            </select>
                        </div>
                    </div>
                    <div class="btn-cal">
                        <button type="submit" onclick="btnFunction();">Calculate</button>
                    </div>
                </form>
        

        <script>    

            // Variables
    
        function getSelectedValue(){
          
        var selectedValue = document.getElementById("unit1").value;
        var num1 = document.getElementById("num1Inserted");
        var num2 = document.getElementById("num2Inserted");


              // Square
        
        if(selectedValue === "square"){
            document.getElementById('num2Inserted').placeholder = "a²";
            num1.style.display = "none"


        }



        // Rectangle

        if(selectedValue === "rectangle"){
            document.getElementById('num1Inserted').placeholder = "L";
            document.getElementById('num2Inserted').placeholder = "W";
            num1.style.display = "flex"


        }


                  // circle

        if(selectedValue === "circle"){
            document.getElementById('num2Inserted').placeholder = "πr²";
            num1.style.display = "none"

        }
    
    }



</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>