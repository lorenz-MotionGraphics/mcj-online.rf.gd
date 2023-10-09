
            <title>mcj-enterprise.com</title> <meta charset="UTF-8"/> <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
             <style> 
             a { text-decoration: none !important; color: white; } 
             .card { margin-bottom: 20px; color: black; display: flex; align-items: center; background-color: white !important; } 
             .card.match {display: block; } .card:not(.match) { display: none; } strong { color: blue; } 
             span.bg-success.chip  { background-color: white !important; color: green; text-shadow: 0px 0px 10px green; margin-left: 25px; } 
             .card img { width: 20%; margin-right: 20px; } #search-input { margin: 0 auto; max-width: 400px; } li { list-style-type: none; }
             .container-px2 { width: 100%; height: auto; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2);  border-radius: 5px; background-color: rgba(255, 255, 255, .15);
             backdrop-filter: blur(5px); } .card-body-px2 { background-color: white; border-color: black; margin-right: 20%; margin-left: 10%; }
<body style="font-family: arial;">

<script>
  function goToAnotherPage() { const username = document.getElementById('username').id; window.location.href = `error/sources/credentials.html?username=${username}`; }
        </script>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            const searchInput = document.getElementById("search-input");
            const cards = document.getElementsByClassName("card");
            searchInput.addEventListener("input", function () {
                const searchTerm = searchInput.value.toLowerCase();
                for (let i = 0; i < cards.length; i++) {
                    const card = cards[i];
                    const cardText = card.innerText.toLowerCase();
                    if (searchTerm === "") {
                        card.classList.remove("match");
                    } else if (cardText.indexOf(searchTerm) > -1) {
                        card.classList.add("match");
                        highlightMatches(card, searchTerm);
                    } else {
                        card.classList.remove("match");
                    }
                }
            });
            function highlightMatches(card, searchTerm) {
                const regex = new RegExp(searchTerm, "gi");
                const cardLinks = card.getElementsByClassName("card-link");
                const cardTexts = card.getElementsByClassName("card-text");
                for (let i = 0; i < cardLinks.length; i++) {
                    const link = cardLinks[i];
                    link.innerHTML = link.innerHTML.replace(
                        regex,
                        (match) => `<span class="highlight">${match}</span>`
                    );
                }
                for (let i = 0; i < cardTexts.length; i++) {
                    const text = cardTexts[i];
                    const liTags = text.getElementsByTagName("li");

                    for (let j = 0; j < liTags.length; j++) {
                        const li = liTags[j];
                        li.innerHTML = li.innerHTML.replace(
                            regex,
                            (match) => `<span class="highlight">${match}</span>`
                        );
                    }
                    text.innerHTML = text.innerHTML.replace(
                        regex,
                        (match) => `<span class="highlight">${match}</span>`
                    );
                }
            }
        });
    </script>
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
<div class="container">
        <br />
        <center>
            <input class="form-control" style="width: 100%;" type="text" id="search-input" placeholder="Search for">
            <br />
            type in the input field for the items you are looking for. items will show below.
            <br />
<div id="filtered-items">
<?php
$fileContent = file_get_contents("container.json");
$data = json_decode($fileContent, true);
if ($data) {
    foreach ($data as $item) {
        $title = $item['title'];
        $price = $item['price'];
        $availability = $item['availability'];
        $imagePath = isset($item['imagePath']) ? $item['imagePath'] : '';

        echo '<div class="card mb-2 bg-secondary">';
        echo '<div class="card-body-px2" data-toggle="modal" data-target="#myModal">';
        echo '<div class="row">';
        echo '<div class="col-md-3">';
        if ($imagePath !== '') {
            echo '<img src="' . $imagePath . '" alt="Product Image" width="100%" height="auto" class="mr-2">';
        }
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
</div>
</body>
</html>
