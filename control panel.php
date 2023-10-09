<!DOCTYPE html>
<html>
<head>
    <title>Control Panel</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    
</head>
<body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-nnzkI2u2Dy6HMnzMIkh7CPd1KX445z38XIu4jG1jGw7x5tSL3VBjE44dY4ihMU1ijAQV930SPM12cCFrB18sVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.0.4/js.cookie.min.js" integrity="sha512-Nonc2AqL1+VEN+97F3n4YxucBOAL5BgqNwEVc2uUjdKOWAmzwj5ChdJQvN2KldAxkCxE4OenuJ/RL18bWxGGzA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#" data-bs-toggle="modal" data-bs-target="#search">search modification panel</a>
  <a href="#" data-bs-toggle="modal" data-bs-target="#post">posts modification panel</a>
  <a href="#">promo's modification panel</a>
  <a href="#">products modification panel</a>
  <a href="#">CRUD system and analysis overview</a>
  <a href="#" data-bs-toggle="modal" data-bs-target="#request">user order request overview</a>
  <a href="#" data-bs-toggle="modal" data-bs-target="#feedback">user feedback message overview</a> 
</div>
<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
</div>
<script>
function openNav() { document.getElementById("mySidebar").style.width = "100%"; document.getElementById("main").style.marginLeft = "100%"; }
function closeNav() { document.getElementById("mySidebar").style.width = "0"; document.getElementById("main").style.marginLeft= "0"; }
</script>
<button id="refreshButton" class="openbtn">Refresh</button>
<div class="modal fade" id="search" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: black;">search modification modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="height: 100vh;">
                     <font color="black"><b>Admin you can upload images using the 'Choose file' button and press submit to sync your changes to search function</b></font>
             <br><br><div id="imagePreview"></div>
             <form action="store_data.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="myImage" accept="image/png, image/gif, image/jpeg" id="myImageInput" />
                <input type="text" name="title" placeholder="Product title">
                <input type="number" name="price" placeholder="Product price">
                <input type="number" name="availability" placeholder="Product availability/stock count"><br><br>
                <input type="submit" value="Submit">
            </form>
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
            echo '<td style="border: 1px solid black;">' . $item['availability'] . '</td>';
            echo '<td style="border: 1px solid black;">';
            echo '<button class="move-up-btn">Up</button>';
            echo '<button class="move-down-btn">Down</button>';
            echo '<form action="delete.php" method="post" style="display: inline;">';
            echo '<input type="hidden" name="title" value="' . $item['title'] . '">';
            echo '<input type="submit" value="Delete">';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '<button id="commit-filter-btn">Commit Filter</button>';
    } else {
        echo 'Error decoding JSON file';
    }
} else {
    echo 'No data found';
}
?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="post" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: black;">posts modification modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="height: 100vh;">
                     <font color="black"><b>Admin you can upload images using the 'Choose file' button and press submit to sync your changes to post function</b></font>
             <br><br><div id="imagePreview1"></div>
             <form action="data_block/json_object/post.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="myImage" accept="image/png, image/gif, image/jpeg" id="myImageInput1" /><br><br>
                <input type="submit" value="Submit">
            </form>
               <?php
$file = "data_block/json_object/post.json";
if (file_exists($file)) {
    $fileContent = file_get_contents($file);
    $data = json_decode($fileContent, true);
    if ($data !== null) {
        echo '<h2 style="color: black;">Previous Data</h2>';
        echo '<ul style="color: black;">';
        foreach ($data as $index => $item) {
            echo '<li style="color: black;">';
            $fileName = $item['fileName'];
            $imagePath = "data_block/json_object/post-upload/" . $fileName;
            echo '<img src="' . $imagePath . '" alt="Product Image" width="100" height="100" style="margin-top: 10px; margin-right: 20px;">';
            echo '<form action="data_block/json_object/delete.php" method="post" style="display: inline;">';
            echo '<input type="hidden" name="index" value="' . $index . '">';
            echo '<input type="submit" value="Delete">';
            echo '</form>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'Error decoding JSON file';
    }
} else {
    echo 'No data found';
}
?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: black;">user feedback message overview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="height: 100vh;">
                    <center>
                <ul id="feedbackList" style="color: black;"></ul>
            </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="request" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel" style="color: black;">user order request overview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="height: 100vh;">
                    <center>
                <ul id="orderList" style="color: black;"></ul>
            </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<script>
fetch('message.json')
    .then(response => response.json())
    .then(data => {
        const feedbackList = document.getElementById('feedbackList');
        feedbackList.innerHTML = '';
        for (const key in data) {
            if (Object.hasOwnProperty.call(data, key)) {
                const feedback = data[key].feedback;
                const listItem = document.createElement('li');
                listItem.textContent = feedback;
                feedbackList.appendChild(listItem);
            }
        }
    })
    .catch(error => console.error(error));
    fetch('request.json')
  .then(response => response.json())
  .then(data => {
    const orderList = document.getElementById('orderList');
    data.reverse(); 
    data.forEach(order => {
      const listItem = document.createElement('li');
      const orderDetails = document.createElement('ul');
      for (const key in order) {
        if (Object.hasOwnProperty.call(order, key)) {
          const value = order[key];
          const detailItem = document.createElement('li');
          if (key === "image") {
            const imageElement = new Image();
            imageElement.src = value;
            imageElement.alt = "Product Image";
            imageElement.style.maxHeight = "200px";
            detailItem.innerHTML = `${key}: `;
            detailItem.appendChild(imageElement);
          } else {
            detailItem.innerHTML = `${key}: ${value}`;
          }
          orderDetails.appendChild(detailItem);
        }
      }
      listItem.appendChild(orderDetails);
      orderList.insertBefore(listItem, orderList.firstChild);
    });
  })
  .catch(error => console.error(error));
        document.getElementById('refreshButton').addEventListener('click', function() {
        location.reload(); 
      });
       document.getElementById('myImageInput').addEventListener('change', function (event) {
        var imagePreview = document.getElementById('imagePreview');
        imagePreview.innerHTML = '';
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = function (e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '300px'; //adjustment
            imagePreview.appendChild(img);
        };
        reader.readAsDataURL(file);
    });
    document.getElementById('myImageInput1').addEventListener('change', function (event) {
        var imagePreview = document.getElementById('imagePreview1');
        imagePreview.innerHTML = '';
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = function (e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '300px'; //adjustment
            imagePreview.appendChild(img);
        };
        reader.readAsDataURL(file);
    });
</script>
<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-firestore.js"></script>
<script type="module">
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-analytics.js";
  const firebaseConfig = {
    apiKey: "AIzaSyBgmWNc9GWNT-e14nuQt8IxUYmtlKObn9I",
    authDomain: "mcj-online.firebaseapp.com",
    projectId: "mcj-online",
    storageBucket: "mcj-online.appspot.com",
    messagingSenderId: "271420233196",
    appId: "1:271420233196:web:287481a0eade9223ba9cc9",
    measurementId: "G-YCHMMES4R3"
  };

  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
