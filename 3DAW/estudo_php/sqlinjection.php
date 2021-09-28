<?php
    $autor = $_POST['autor'];
    // ' or 1=1
    $sqlOriginal = "select * from posts where autor = '$autor'";
    $sqlSubstituída = "select * from posts where autor = '' or 1=1";
    // retorna não apenas , mas todos os autores

    // '; drop table posts
    $sqlSubstituída = "select * from posts where autor = '; drop table posts";

    // Para prevenir se usa a função addslashes
    $autor = addslashes($_POST['autor']);
    // vai colocar uma \ antes de cada ' para prevnir sql injection
?>