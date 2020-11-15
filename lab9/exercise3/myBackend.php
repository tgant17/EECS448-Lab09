<html>
    <head>
        <title>Order Confirmation</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    </body>
</html>


<?php
    error_reporting(E_ALL);
    ini_set("display_error", 1);

    function welcomeUser()
    {
        $username = $_POST["username"];
        $password = $_POST["password"]; 

        echo "<h2>" . "Welcome " . $username . "</h2>" . "<br>";
        echo "<h2>" . "Your password is: " . $password . "</h2>" . "<br>";
    }

    function printReceipt()
    {
        $xboxQ = $_POST["xboxQ"];
        $ps5Q = $_POST["ps5Q"];
        $switchQ = $_POST["switchQ"];

        $shipping = $_POST["shipping"]; 

        $xboxP = 500; 
        $ps5P = 400; 
        $switchP = 300; 

        $total = $xboxP * $xboxQ + $ps5P * $ps5Q + $switchP * $switchQ + $shipping;

        echo "<h3>" . "Your total is: $" . $total . "</h3>" . "<br>";
        echo "Here is your receipt:<br>";
        echo "<table border='1'><tbody>";  //open table
        echo "<tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Subtotal</td></tr>";
        echo "<tr><td>PS5</td><td>".$ps5Q."</td><td>$$ps5P.00</td><td>$".$ps5Q*$ps5P.".00</td>";
        echo "<tr><td>Xbox Series X</td><td>".$xboxQ."</td><td>$$xboxP.00</td><td>$".$xboxQ*$xboxP.".00</td>";
        echo "<tr><td>Nintendo Switch</td><td>".$switchQ."</td><td>$$switchP.00</td><td>$".$switchQ*$switchP.".00</td>";
        echo "<tr><td>Shipping</td><td colspan = 2>$".$shipping.".00</td><td>$$shipping.00</td></tr>";
        echo "<tr><td>Total Cost</td><td colspan=3>$$total.00</td>";


    }

    welcomeUser();

    printReceipt();
?>