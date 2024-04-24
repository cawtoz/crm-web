<?php

$title = "Contacto";

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
        ['url' => '/pages/login', 'text' => 'Login'],
    ]
);

$inputs = input("Nombre", "/public/icons/user.svg", "text", true);
$inputs .= input("Correo", "/public/icons/email.svg", "text", true);
$inputs .= input("Telefono", "/public/icons/phone.svg", "text", true);
$inputs .= input("Pais", "/public/icons/world.svg", "text", true);
$inputs .= input("Ciudad", "/public/icons/location.svg", "text", true);
$inputs .= input("Nombre de la empresa", "/public/icons/company.svg", "text", true);

$form = form("Contacto", "/public/contacto.png", $inputs, "Enviar");

?>

<link rel="stylesheet" href="/pages/contact/contact.css">

<body>
    <header><?= $horizontalNavbar ?></header>
    <main><?= $form ?></main>
    <?= footer() ?>
</body>