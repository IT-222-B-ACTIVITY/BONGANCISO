<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator with Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container flex mt-5">
        <h1 class="text"> Modern Abacus</h1>
        <div class="row justify-content-center"> <!-- Center the form -->
        <form action="calc.php" method="POST" class="col-md-6">
            <div class="row g-3 align-items-center"> <!-- Align textboxes and button in a row -->
                <div class="col">
                    <label for="num1Inserted" class="visually-hidden">Number 1</label>
                    <input type="text" class="form-control" id="num1Inserted" name="num1Inserted" placeholder="Enter Number 1">
                </div>
                <div class="col">
                    <label for="num2Inserted" class="visually-hidden">Number 2</label>
                    <input type="text" class="form-control" id="num2Inserted" name="num2Inserted" placeholder="Enter Number 2">
                </div>
                <div class="col">
                    <label for="calInserted" class="visually-hidden">Operation</label>
                    <select id="calInserted" class="form-select" name="calInserted">
                        <option value="add">Add</option>
                        <option value="sub">Subtract</option>
                        <option value="mul">Multiply</option>
                    </select>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </div>
            </div>
        </form>
    </div>

        <?php if (isset($result)): ?>
            <p class="mt-3">Result: <?php echo $calculator->getResult(); ?></p>
        <?php endif; ?>
    </div>

    <!--<script>
        $(document).ready(function() {
            $('#calculatorForm').submit(function(event) {
                event.preventDefault(); // Prevent form submission

                // Get form data
                var formData = $(this).serialize();

                // Send AJAX request
                $.ajax({
                    type: 'POST',
                    url: 'calculate.php',
                    data: formData,
                    success: function(response) {
                        // Update the result container with the received result
                        $('#result').text(response);
                    }
                });
            });
        });
    </script> -->

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>