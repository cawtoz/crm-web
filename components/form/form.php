<?php
function form($title, $img, $inputs, $buttonText)
{
    return '
        <div class="form-container">
            <img src="' . $img . '">
            <form>
                <h1>' . $title . '</h1>
                ' . $inputs . '
                <button>' . $buttonText . ' </>
            </form>
        </div>
    ';
}
?>
<link rel="stylesheet" href="/components/form/form.css">