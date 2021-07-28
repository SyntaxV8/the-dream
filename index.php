<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Dream</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>Currency converter YEN</header>

<!--passwords use post, not sensible data use get-->

<form action="index.php" method="post">
    <placeholder>Please enter your amount.</placeholder>
    <input type="text" name="amount" placeholder="Amount in YEN">
        <select name="selector">
            <option value="EUR">Euro</option>
            <option value="USD">USD</option>
        </select>
    <input type="submit" name="btn" value="Submit">

    <?php

    $result = 0;

    if ($_POST["btn"])
    {
        $amount = $_POST["amount"];
        $value = $_POST["selector"];

        switch ($value){

            case "EUR":

                $result = $amount*0.0077;

                echo "<h1>Amount in EUR = $result</h1>";
                break;

            case "USD":

                $result = $amount*0.0091;

                echo "<h1>Amount in USD = $result</h1>";
                break;

        }
    }
    ?>

</form>

</body>
</html>