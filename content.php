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
    echo '<div class="card-body card-body-px2">';
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
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="imageDiv1">
          <img id="modalImage" src="" alt="Product Image" width="100%" height="auto" class="mr-2">
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

<script>
  document.getElementById("filtered-items").addEventListener("click", function(event) {
    if (event.target.classList.contains("card-body-px2")) {
      var card = event.target;
      var title = card.querySelector("li:nth-child(1)").textContent.trim();
      var price = card.querySelector("li:nth-child(2)").textContent.trim();
      var availability = card.querySelector("li:nth-child(3)").textContent.trim();
      var imageLink = card.parentNode.previousElementSibling.querySelector("img").getAttribute("src");

      document.getElementById("modalTitle").textContent = title;
      document.getElementById("modalPrice").textContent = price;
      document.getElementById("modalAvailability").textContent = availability;
      document.getElementById("modalImage").setAttribute("src", imageLink);

      $('#myModal').modal('show');
    }
  });

  document.getElementById("submitBtn").addEventListener("click", function() {
    var title = document.getElementById("modalTitle").textContent.trim();
    var price = document.getElementById("modalPrice").textContent.trim();
    var availability = document.getElementById("modalAvailability").textContent.trim();
    var imageLink = document.getElementById("modalImage").getAttribute("src");

    var redirectUrl = 'another-page.php?title=' + encodeURIComponent(title) +
                      '&price=' + encodeURIComponent(price) +
                      '&availability=' + encodeURIComponent(availability) +
                      '&imageLink=' + encodeURIComponent(imageLink);
  });
});





