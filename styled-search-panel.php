<?php
$file = "container.json";
if (file_exists($file)) {
    $fileContent = file_get_contents($file);
    $data = json_decode($fileContent, true);
    if ($data !== null) {
        echo '<h2 style="color: black;">Previous Data</h2>';
        echo '<table id="data-table" style="color: black; border-collapse: collapse; width: 100%;">';
        echo '<tr><th style="border: 1px solid black;">Image</th><th style="border: 1px solid black;">Title</th><th style="border: 1px solid black;">Price</th><th style="border: 1px solid black;">Availability</th><th style="border: 1px solid black;">Actions</th></tr>';
        foreach ($data as $item) {
            echo '<tr>';
            echo '<td style="border: 1px solid black;">';
            $imagePath = isset($item['imagePath']) ? $item['imagePath'] : '';
            echo '<img src="' . $imagePath . '" alt="Product Image" width="100" height="100">';
            echo '</td>';
            echo '<td style="border: 1px solid black;">' . $item['title'] . '</td>';
            echo '<td style="border: 1px solid black;">' . $item['price'] . '</td>';
            echo '<td style="border: 1px solid black; text-align: center;">' . $item['availability'] . '</td>';
            echo '<td style="border: 1px solid black;">';
            echo '<button class="move-up-btn" style="background-color: green; color: white; border: none; padding: 5px 10px; cursor: pointer;">&#8593;</button>&nbsp;';
            echo '<button class="move-down-btn" style="background-color: blue; color: white; border: none; padding: 5px 10px; cursor: pointer;">&#8595;</button>&nbsp;';
            echo '<form action="delete.php" method="post" style="display: inline;">';
            echo '<input type="hidden" name="title" value="' . $item['title'] . '">';
            echo '<input type="submit" value="Delete" style="background-color: red; color: white; border: none; padding: 5px 10px; cursor: pointer;">';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '<button id="commit-filter-btn" style="background-color: green; color: white; border: none; padding: 5px 10px; cursor: pointer; margin-left: 85%; margin-top: 5%;">Commit Filter</button>';
    } else {
        echo 'Error decoding JSON file';
    }
} else {
    echo 'No data found';
}
?>
