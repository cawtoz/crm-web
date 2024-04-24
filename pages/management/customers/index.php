<?php
$title = "Customers";
include "../../../global.php";
include "../../../components/table/table.php";
include "../../../components/footer/footer.php";

$headers = [
    [],
    ["text" => "Id"],
    ["img" => "/public/icons/user.svg", "text" => "Nombre"],
    ["img" => "/public/icons/email.svg", "text" => "Correo"],
    ["img" => "/public/icons/phone.svg", "text" => "Telefono"],
    [""]
];

$table = table("Customers", $headers, [
    [1, "Alejandro", "alejandro@gmail.com", 1212121212],
    [2, "Alejandro", "alejandro@gmail.com", 1212121212],
    [3, "Alejandro", "alejandro@gmail.com", 1212121212]
]);

?>

<link rel="stylesheet" href="/pages/management/customers/customers.css">

<body>
    <main><?= $table ?></main>
    <?= footer() ?>
</body>