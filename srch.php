<div id="filtered-items">
<?php
$fileContent = file_get_contents("container.json");
$data = json_decode($fileContent, true);
if ($data) {
    foreach ($data as $item) {
        $title = $item['title'];
        $price = $item['price'];
        $availability = $item['availability'];
        $imagePath = $item['imagePath'];

        echo '<div class="card mb-2 bg-secondary">';
        echo '<div class="card-body-px2" data-toggle="modal" data-target="#myModal">';
        echo '<div class="row">';
        echo '<div class="col-md-3">';
        echo '<img src="' . $imagePath . '" alt="Product Image" width="100%" height="auto" class="mr-2">';
        echo '</div>';
        echo '<div class="col-md-9">';
        echo '<ul>';
        echo '<li>' . $title . '</li>';
        echo '<li>Price: Php. ' . $price . '</li>';
        echo '<li>Stocks: ' . ($availability > 0 ? 'Available' : 'Out of stock') . '</li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>No data available</p>';
}
?>
</div>
