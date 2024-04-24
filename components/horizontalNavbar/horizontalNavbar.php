<?php
function horizontalNavbar($leftItems, $rightItems)
{

    $leftItemsHTML = '';
    foreach ($leftItems as $item) {
        $leftItemsHTML .= '<li><a href="' . $item['url'] . '">' . $item['text'] . '</a></li>';
    }

    $rightItemsHTML = '';
    foreach ($rightItems as $item) {
        $rightItemsHTML .= '<li><a href="' . $item['url'] . '">' . $item['text'] . '</a></li>';
    }

    return '
        <nav>
            <img src="/public/logo.png" />
            <ul>
                ' . $leftItemsHTML . '
                <div class="right-items">
                    ' . $rightItemsHTML . '
                </div>
            </ul>
        </nav>
    ';
}
?>

<link rel="stylesheet" href="/components/horizontalNavbar/horizontalNavbar.css">