<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
</head>
<body class="bg-dark">

<?php

if ($_SERVER['REQUEST_METHOD'] == 'post') {
    
    $itemCount = isset($_POST['item_count']) ? (int)$_POST['item_count'] : 0;

            $items  = $_POST['items'] ?? [];
            $qty   = $_POST['qty'] ?? [];
            $price = $_POST['price'] ?? [];

            $grandTotal = 0;

            echo "<div id='invoice' class='m-auto mt-5 p-5 card bg-dark text-light fs-4 border border-5 rounded-5 border-primary w-50'>";
            echo "<h1 class='text-center mb-4'>Invoice</h1>";

            for ($i = 0; $i < count($items); $i++)
            {
                $subtotal = $qty[$i] * $price[$i];
                $grandTotal += $subtotal;
                echo "<div class='mb-3 fs-1 border-bottom border-secondary'>"; 
                echo "Item: <span class = 'fs-1'>" . $items[$i] . "</span><br>";
                echo "Quantity: ".$qty[$i] . "<br>"; 
                echo "Price: ₹".$price[$i] . "<br>"; 
                echo "Subtotal: ₹".$subtotal. "<br>";
                echo "</div>"; }
            }
            echo "<h3 class='text-end mt-4'>Total Payable: ₹{$grandTotal}</h3>";
            echo "<button class='btn btn-primary mt-4' onclick='shot()'>Download Invoice</button>";
            echo "</div>"; 
?>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
function shot(){
  html2canvas(document.getElementById('invoice')).then(c=>{
    const a = document.createElement('a');
    a.href = c.toDataURL('image/png');
    a.download = 'invoice.png';
    a.click();
  }); 
}
</script>
