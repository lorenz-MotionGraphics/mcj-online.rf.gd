  <script>
$(document).ready(function() {
  $('#myModal').on('hidden.bs.modal', function () {
    $('#modalTitle').text('');
    $('#modalPrice').text('');
    $('#modalAvailability').text('');
    $('#modalImage').attr('src', '');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
  });
  $('.card-body-px2').click(function() {
    var title = $(this).find('ul li:nth-child(1)').text().trim();
    var price = $(this).find('ul li:nth-child(2)').text().trim();
    var availability = $(this).find('ul li:nth-child(3)').text().trim();
    var imageLink = $(this).find('img').attr('src');

    $('#modalTitle').text(title);
    $('#modalPrice').text(price);
    $('#modalAvailability').text(availability);
    $('#modalImage').attr('src', imageLink);

    $('#myModal').modal('show');
  });
  $('#submitBtn').click(function() {
    var title = $('#modalTitle').text().trim();
    var price = $('#modalPrice').text().trim();
    var availability = $('#modalAvailability').text().trim();
    var imageLink = $('#modalImage').attr('src');

    window.location.href = 'another-page.php?title=' + encodeURIComponent(title) +
                           '&price=' + encodeURIComponent(price) +
                           '&availability=' + encodeURIComponent(availability) +
                           '&imageLink=' + encodeURIComponent(imageLink);
  });
});
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="imageDiv1">
          <img id="modalImage" src="" alt="Logo" width="100%" height="auto" class="mr-2">
          <ul>
            <li id="modalTitle"></li>
            <li id="modalPrice"></li>
            <li id="modalAvailability"></li>
          </ul>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="submitBtn">Submit</button>
      </div>
    </div>
  </div>
</div>
<div id="filtered-items">
<?php
$fileContent = file_get_contents("container.json");
$data = json_decode($fileContent, true);
if ($data) {
  foreach ($data as $item) {
    if (empty($item['title']) && empty($item['price']) && empty($item['availability'])) {
      continue; // Skip empty entry
    }
              
    $title = $item['title'] ?? '';
    $price = $item['price'] ?? '';
    $availability = $item['availability'] ?? '';
    $imagePath = isset($item['imagePath']) ? $item['imagePath'] : '';

    echo '<div class="card mb-2 bg-secondary">';
    echo '<div class="row">';
    echo '<div class="col-md-3">';
    if ($imagePath !== '') {
      echo '<img src="' . $imagePath . '" alt="Product Image" width="100%" height="auto" class="mr-2">';
    }
    echo '</div>';
    echo '<div class="col-md-9">';
    echo '<div class="card-body card-body-px2" data-toggle="modal" data-target="#myModal">';
    echo '<ul>';
    echo '<li>' . htmlspecialchars($title) . '</li>';
    echo '<li>Price: Php. ' . htmlspecialchars($price) . '</li>';
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
