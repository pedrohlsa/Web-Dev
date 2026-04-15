<?php
    $name = "Broca De Ferro";
    $food = "Pizza";
    $email = "fake@gmail.com";

    $age = 21;
    $users = 2; // int
    $quantity = 3;

    $gpa = 2.5;
    $price = 5.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = false;
    $for_sale = true;
    
    echo "Olá {$name}<br>";
    echo "Sua comida favorita é: {$food}<br>"; 
    echo "Seu email é: {$email}<br>";

    echo "Sua idade é: {$age}<br>";
    echo "Existem {$users} usuarios online<br>";
    echo "Você gostaria de comprar {$quantity} itens?<br>";

    echo "Sua gpa é: {$gpa}?<br>";
    echo "O preco da sua pizza é: R\${$price}<br>";
    echo "A taxa de entrega é {$tax_rate}%<br>";

    echo "Online status {$online}<br>";

    $total = null;
    
    echo "Voce pediu {$quantity} de {$food}s<br>";
    $total = $quantity * $price;
    echo "O seu total é: R\${$total}";
    
?>
