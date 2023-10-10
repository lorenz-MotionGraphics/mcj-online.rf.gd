<?php
$file = "container.json";
if (file_exists($file)) {
    $fileContent = file_get_contents($file);
    $data = json_decode($fileContent, true);
    if ($data !== null) {
        // Remove empty objects from the beginning of the array
        while (!empty($data) && $data[0]['title'] === '') {
            array_shift($data);
        }

        // Store changes when up or down button is clicked
        if (isset($_POST['direction'])) {
            $direction = $_POST['direction'];
            // Store the current filter direction in the session or database
            // You can modify this part to save to your desired location
            // For example, storing it in session:
            session_start();
            $_SESSION['filter_direction'] = $direction;
        }

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
            echo '<form action="" method="post">';
            echo '<button type="submit" name="direction" value="up" style="background-color: green; color: white; border: none; padding: 5px 10px; cursor: pointer; border-radius: 5px;">&#8593;</button>&nbsp;';
            echo '<button type="submit" name="direction" value="down" style="background-color: blue; color: white; border: none; padding: 5px 10px; cursor: pointer; border-radius: 5px;">&#8595;</button>&nbsp;';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Error decoding JSON file';
    }
} else {
    echo 'No data found';
}
?>
