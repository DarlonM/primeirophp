<?php
    $ValorDolar = $_GET["ValorDolar"];
    $taxacambio = 4.26; 
    $ValorReal = $ValorDolar * $taxacambio;
    echo "<p>$ValorDolar dólar(es) equivale(m) a $ValorReal reais.</p>";
?>