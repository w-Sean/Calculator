<!DOCTYPE html>
<html>
<head>
    <title>Calculator using PHP</title>
</head>
<body>
    <div id="page-wrap">
        <h1>Calculator using PHP</h1>
        <form action="index.php" method="post" id="quiz-form">
            <p>
                <input type="number" name="Number1" id="Number1" required="required" placeholder="Enter first number" />
                <b>First Number</b>
            </p>
            <p>
                <input type="number" name="Number2" id="Number2" required="required" placeholder="Enter second number" />
                <b>Second Number</b>
            </p>
            <p>
                <input type="text" name="CalculatorResult" id="CalculatorResult" readonly="readonly" 
                value="<?php if(isset($_POST['operation'])) { echo calculate(); } ?>">
                <b>Calculator Result</b>
            </p>
            <p>
                <input type="submit" name="operation" value="Sum" />
                <input type="submit" name="operation" value="Subtraction" />
                <input type="submit" name="operation" value="Multiplication" />
                <input type="submit" name="operation" value="Division" />
            </p>
        </form>
    </div>

    <?php
        function calculate() {
            $Number1 = $_POST['Number1'];
            $Number2 = $_POST['Number2'];
            $operation = $_POST['operation'];
            switch($operation) {
                case "Sum":
                    $result = $Number1 + $Number2;
                    break;
                case "Subtraction":
                    $result = $Number1 - $Number2;
                    break;
                case "Multiplication":
                    $result = $Number1 * $Number2;
                    break;
                case "Division":
                    if ($Number2 != 0) {
                        $result = $Number1 / $Number2;
                    } else {
                        $result = "Cannot divide by zero";
                    }
                    break;
                default:
                    $result = "Error in operation";
                    break;
            }
            return $result;
        }
    ?>
</body>
</html>
