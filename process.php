<?php 

    if (isset($_POST["num1"], $_POST["num2"], $_POST["operator"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        $result = "";

        if ($operator == "+") {
            $result = $num1 + $num2;
        } else if ($operator == "-") {
            $result = $num1 - $num2;
        } else if ($operator == "*") {
            $result = $num1 * $num2;
        } else if ($operator == "/") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot be divided by zero.";
            }
        } else {
            $result = "Invalid operator.";
        }
    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Result</title>
        <link href="styles.css" rel="stylesheet"> 
    </head>
    <body>
        <div id = "result">
            <h2>Result</h2>
            <input type="text" id = "display" value = "<?php echo $result; ?>" disabled>
            <a href="form.html" class = "button">Go back </a>
        </div>
        
    </body>
    </html>