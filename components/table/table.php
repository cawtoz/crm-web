<?php
function table($title, $headers, $records)
{
    return '
        <div class="table-container">
            <h1>' . $title . '</h1>
            <table>
                <thead>
                    <tr>
                    ' . buildHeaders($headers) . '
                    </tr>
                </thead>
                <tbody>
                    ' . buildRecords($records) . '
                </tbody>
            </table>
        </div>
    ';
}

function buildHeaders($headers)
{
    $headersHTML = '';

    foreach ($headers as $header) {

        $img = array_key_exists('img', $header) ? '<img src="' . $header["img"] . '">' : '';
        $text = array_key_exists('text', $header) ? '<p>' . $header["text"] . '</p>' : '<p></p>';

        $headersHTML .= '
            <th>
                <div>' . $img . $text . '</div>
            </th>
        ';
    }

    return $headersHTML;
}

function buildRecords($records)
{
    $recordsHTML = '';

    foreach ($records as $record) {
        $recordsHTML .= buildRecord($record);
    }

    return $recordsHTML;
}

function buildRecord($record)
{
    $record_id = $record[0];

    $cellsHTML = '
        <td>
            <input type="checkbox" id="checkbox_' . $record_id . '" onchange="selectRecord(' . $record_id . ')">
        </td>
    ';

    foreach ($record as $data) {
        $cellsHTML .= '<td>' . $data . '</td>';
    }

    $cellsHTML .= buildContextMenuButton($record_id);
    $recordHTML = '<tr id="record_' . $record_id . '">' . $cellsHTML . '</tr>';

    return $recordHTML;
}

function buildContextMenuButton($record_id)
{
    $contextMenuButton = '
        <td>
            <button class="context-menu-button" onClick="handlerContextMenuButton(' . $record_id . ')">
                <img src="/public/icons/more.svg">
            </button>
        </td>
    ';
    return $contextMenuButton;
}

function buildContextMenu()
{
    return '
        <ul class="context-menu">
            <li>
                <button>
                    <img src="/public/icons/edit.svg">
                    <p>Editar</p>
                </button>
                <button>
                    <img src="/public/icons/delete.svg">
                    <p>Eliminar</p>
                </button>
            </li>
        </ul>
    ';
}

?>

<link rel="stylesheet" href="/components/table/table.css">

<body>
    <script>
        function selectRecord(record_id) {
            document.getElementById(`record_${record_id}`).classList.toggle("selected-record");
        }

        let contextMenu = null;

        function handlerContextMenuButton(record_id) {
            if (!contextMenu) {
                var tds = document.getElementById(`record_${record_id}`).getElementsByTagName("td");
                const lastTd = tds[tds.length - 1];
                lastTd.innerHTML += <?php echo json_encode(buildContextMenu()); ?>;
                contextMenu = lastTd.getElementsByClassName("context-menu")[0];
            } else {
                contextMenu.remove();
                contextMenu = null;
            }
        }
    </script>
</body>