<?php
$title = "Clientes";
include "../../../global.php";
include "../../../components/table/table.php";
include "../../../components/footer/footer.php";

$headers = [
    [],
    ["text" => "Id"],
    ["text" => "Nombre"],
    ["text" => "Correo electrónico"],
    ["text" => "Teléfono"],
    ["text" => "Dirección"],
    ["text" => "Ciudad"],
    ["text" => "País"],
    []
];

$records = [
    [1, "Maria Jose", "mariajose@gmail.com", "123-456-7890", "Calle 12 #21-32", "Bucaramanga", "Colombia"],
    [2, "Andre Solano", "juanmanuel@gmail.com", "987-654-3210", "Calle 32 #18-29", "Medellin", "Colombia"],
    [3, "Juan Manuel", "juanmauel@gmail.com", "555-555-5555", "Calle 22 #27-23", "Bogota", "Colombia"]
];

$table = table($title, $headers, $records);

?>

<link rel="stylesheet" href="/pages/management/customers/customers.css">

<body>
    <main><?= $table ?></main>
    <?= footer() ?>
</body>