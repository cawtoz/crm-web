<?php
$title = "Ventas";
include "../../../global.php";
include "../../../components/table/table.php";
include "../../../components/footer/footer.php";

$headers = [
    [],
    ["text" => "Id Venta"],
    ["text" => "Fecha"],
    ["text" => "Id Cliente"],
    ["text" => "Id Prod"],
    ["text" => "Nombre Prod"],
    ["text" => "Cantidad"],
    ["text" => "Precio Unitario"],
    ["text" => "Total"],
    []
];

$records = [
    [1007, "2022-05-05", 1, 2, "Jeans ajustados", 1, "$29.99", "$29.99"],
    [1008, "2022-05-10", 3, 1, "Camiseta de algodón", 2, "$19.99", "$39.98"],
    [1009, "2022-05-15", 2, 3, "Vestido de verano", 1, "$39.99", "$39.99"],
    [1010, "2022-05-20", 1, 3, "Vestido de verano", 1, "$39.99", "$39.99"],
    [1011, "2022-05-25", 3, 2, "Jeans ajustados", 2, "$29.99", "$59.98"],
    [1012, "2022-05-30", 2, 1, "Camiseta de algodón", 3, "$19.99", "$59.97"],
    [1013, "2022-06-05", 1, 2, "Jeans ajustados", 1, "$29.99", "$29.99"],
    [1014, "2022-06-10", 3, 1, "Camiseta de algodón", 2, "$19.99", "$39.98"],
    [1015, "2022-06-15", 2, 3, "Vestido de verano", 1, "$39.99", "$39.99"],
    [1016, "2022-06-20", 1, 3, "Vestido de verano", 1, "$39.99", "$39.99"],
    [1017, "2022-06-25", 3, 2, "Jeans ajustados", 2, "$29.99", "$59.98"],
    [1018, "2022-06-30", 2, 1, "Camiseta de algodón", 3, "$19.99", "$59.97"],
    [1019, "2022-07-05", 1, 2, "Jeans ajustados", 1, "$29.99", "$29.99"],
    [1020, "2022-07-10", 3, 1, "Camiseta de algodón", 2, "$19.99", "$39.98"],
    [1021, "2022-07-15", 2, 3, "Vestido de verano", 1, "$39.99", "$39.99"],
    [1022, "2022-07-20", 1, 3, "Vestido de verano", 1, "$39.99", "$39.99"],
    [1023, "2022-07-25", 3, 2, "Jeans ajustados", 2, "$29.99", "$59.98"],
    [1024, "2022-07-30", 2, 1, "Camiseta de algodón", 3, "$19.99", "$59.97"],
    [1025, "2022-08-05", 1, 2, "Jeans ajustados", 1, "$29.99", "$29.99"],
    [1026, "2022-08-10", 3, 1, "Camiseta de algodón", 2, "$19.99", "$39.98"]
];


$table = table($title, $headers, $records)

?>

<link rel="stylesheet" href="/pages/management/sales/sales.css">

<body>
    <main><?= $table ?></main>
    <?= footer() ?>
</body>