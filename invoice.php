<!DOCTYPE html>
<html>
<head>
    <title>Simple Invoice System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-dark">

<div class="box bg-dark text-light">
    

    <div class="container-fluid p-5">
        <form class="form m-auto card bg-dark text-light border border-5 rounded-5 border-primary" method="post">
            <div class="headtext text-center mb-4 p-3">
                <h2>Invoice Generator</h2>
            </div>
             
            <label>Item Name</label>
            <input class="form-control  my-3 " type="text" name="item" required>

            <label>Quantity</label>
            <input class="form-control  my-3" type="number" name="qty" min="1" required>

            <label>Price per Item</label>
            <input class="form-control  my-3" type="number" name="price" step="0.01" required>

            <button class="btn btn-primary mt-5 rounded-5   " type="submit" name="generate">Generate Invoice</button>
        </form>
    </div>

<?php
if (isset($_POST['generate'])) {

    $item = $_POST['item'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];


    $finaltotal = $qty * $price;

    

    echo "<div class='invoice m-auto mb-5 p-4 card bg-dark text-light border border-5 rounded-5 border-primary' style='max-width: 500px;'>";
        echo "<h3>Invoice</h3>";
        echo "Item: <b>$item</b><br>";
        echo "Quantity: $qty<br>";
        echo "Price: ₹$price<br><br>";
        echo "<h4>Total Payable: ₹" .$finaltotal . "</h4>";
    echo "</div>";
}
?>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
