<?php
function section($id, $title, $img, $items, $isBlack)
{
  $itemsHTML = '';
  foreach ($items as $item) {
    $itemsHTML .= '<li><p>' . $item . '</p></li>';
  }

  $class = ($isBlack) ? "class=\"section-black\"" : "";

  return '
    <section id="' . $id . '" ' . $class . ' >
        <img src="' . $img . '" />
        <div>
          <h2>' . $title . '</h2>
          <ul>' . $itemsHTML . '</ul>
        </div>
      </section>
    ';
}
?>
<link rel="stylesheet" href="/components/section/section.css">