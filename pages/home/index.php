<?php
$title = "Inicio";
include "../../global.php";
include "../../components/footer/footer.php";
include "../../components/section/sectiton.php";
include "../../components/horizontalNavbar/horizontalNavbar.php";

$sections = section(
    "clientes",
    "Gestión de Clientes",
    "/public/gestion-clientes.png",
    [
        "Registra y administra la información de tus clientes.",
        "Personaliza la experiencia de compra basada en las preferencias y el historial de compras de tus clientes."
    ],
    false
);

$sections .= section(
    "ventas",
    "Seguimiento de Ventas",
    "/public/seguimiento-ventas.png",
    [
        "Realiza un seguimiento detallado de todas las ventas realizadas en tu tienda.",
        "Analiza las tendencias de ventas y el rendimiento de productos para optimizar tu estrategia de ventas."
    ],
    true
);

$sections .= section(
    "inventario",
    "Gestión de Inventario",
    "/public/gestion-inventario.png",
    [
        "Lleva un control preciso del inventario de productos disponibles en tu tienda.",
        "Recibe alertas automáticas cuando el stock de un producto esté bajo para que puedas reponerlo a tiempo."
    ],
    false
);

$sections .= section(
    "analisis",
    "Análisis de Ventas",
    "/public/analisis-ventas.png",
    [
        "Genera informes detallados y análisis de ventas para evaluar el rendimiento de tu tienda.",
        "Identifica los productos más vendidos y las oportunidades de crecimiento."
    ],
    true
);

$horizontalNavbar = horizontalNavbar(
    [
        ['url' => '#clientes', 'text' => 'Clientes'],
        ['url' => '#ventas', 'text' => 'Ventas'],
        ['url' => '#inventario', 'text' => 'Inventario'],
        ['url' => '#analisis', 'text' => 'Análisis']
    ],
    [
        ['url' => '/pages/contact', 'text' => 'Contacto'],
        ['url' => '/pages/login', 'text' => 'Login']
    ]
);
?>

<body>
    <header>
        <?= $horizontalNavbar ?>
    </header>
    <main>
        <?= $sections ?>
    </main>
    <?= footer() ?>
</body>