<?php

$title = "Login";

include "../../global.php";
include "../../components/form/form.php";
include "../../components/input/input.php";
include "../../components/footer/footer.php";
include "../../components/section/sectiton.php";
include "../../components/horizontalNavbar/horizontalNavbar.php";

$horizontalNavbar = horizontalNavbar(
    [],
    [
        ['url' => '/pages/home', 'text' => 'Inicio'],
        ['url' => '/pages/contact', 'text' => 'Contacto'],
    ]
);

$inputs = input("Usuario", "/public/icons/user.svg", "text", true);
$inputs .= input("Contraseña", "/public/icons/key.svg", "password", true);

$form = form("Login", "/public/login.svg", $inputs, "Login");

?>

<link rel="stylesheet" href="/pages/login/login.css">

<body>
    <header><?= $horizontalNavbar ?></header>
    <main><?= $form ?></main>
    <?= footer() ?>
</body>