<head>
    <title>Receipt</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php

    $username = $_POST["username"];
    $password = $_POST["password"];

    $macQty = $_POST["macQty"];
    $iphoneQty = $_POST["iphoneQty"];
    $pencilQty = $_POST["pencilQty"];

    $macTotal = $macQty * 2000;
    $iphoneTotal = $iphoneQty * 1000;
    $pencilTotal = $pencilQty * 100;

    $shipping = $_POST["shipping"];
    if ($shipping == 7) {
        $shippingName = "Free Shipping";
        $shippingPrice = 0;
    } else if ($shipping == 3) {
        $shippingName = "3 Day Shipping";
        $shippingPrice = 5;
    } else if ($shipping == 1) {
        $shippingName = "Express Shipping";
        $shippingPrice = 50;
    }

    $totalCost = $macTotal + $macTotal + $pencilTotal + $shippingPrice;

    echo "Hello, " . $username . "<br>";
    echo "Your password is " . $password . "<br>";

    echo "<h1>Receipt</h1>";
?>

<table id="receipt-table">
    <thead>
        <th>Item</th>
        <th>Price per Item</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </thead>
    <tbody>
        <tr>
            <td>MacBook Pro 2017</td>
            <td>$2,000</td>
            <td><?php echo $macQty ?></td>
            <td>$<?php echo $macTotal ?></td>
        </tr>
        <tr>
            <td>iPhone 11 Pro</td>
            <td>$1,000</td>
            <td><?php echo $iphoneQty ?></td>
            <td>$<?php echo $iphoneTotal ?></td>
        </tr>
        <tr>
            <td>Apple Pencil</td>
            <td>$100</td>
            <td><?php echo $pencilQty ?></td>
            <td>$<?php echo $pencilTotal ?></td>
        </tr>
        <tr>
            <td><?php echo $shippingName ?></td>
            <td>$<?php echo $shippingPrice ?></td>
            <td>1</td>
            <td>$<?php echo $shippingPrice ?></td>
        </tr>
    </tbody>
</table>
<br>
Total: $<?php echo $totalCost ?>