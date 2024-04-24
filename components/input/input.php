<?php
function input($text, $img, $type, $required)
{
    return '
        <div class="input" id="' . uniqid('input-') . '">
            <p>' . $text . ($required ? " <span>*</span>" : "") . ' </p>
            <div>
              <img src="' . $img . '">
              <input type="' . $type . '" required />
            </div>
        </div>
    ';
}
?>
<link rel="stylesheet" href="/components/input/input.css">