<?php
$title = "Productos";
include "../../../global.php";
include "../../../components/table/table.php";
include "../../../components/footer/footer.php";

$headers = [
    [],
    ["Id"],
    ["text" => "Nombre"],
    ["text" => "Descripción"],
    ["text" => "Precio"],
    ["text" => "Color"],
    ["text" => "Talla"],
    ["text" => "Material"],
    ["text" => "Marca"],
    []
];

$records = [
    [1, "Camiseta de algodón", "Camiseta básica de algodón para hombre", "$19.99", "Negro", "M", "Algodón", "Marca A"],
    [2, "Jeans ajustados", "Jeans ajustados para mujer, disponibles en varios colores", "$29.99", "Azul", "S", "Denim", "Marca B"],
    [3, "Vestido de verano", "Vestido de verano con estampado floral, perfecto para el día a día", "$39.99", "Blanco", "L", "Algodón y poliéster", "Marca C"],
    [4, "Abrigo de invierno", "Abrigo acolchado para mujer, perfecto para el invierno", "$59.99", "Gris", "M", "Poliéster", "Marca D"]
];

$table = table($title, $headers, $records)

?>

<link rel="stylesheet" href="/pages/management/products/products.css">

<body>
    <main><?= $table ?></main>
    <?= footer() ?>
</body>