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
    <style>
        /*2023/10/08 06:55:36 */
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap");input[type="text"],input[type="file"]{margin-bottom:.625pc;}::-webkit-scrollbar{width:.5pc;}input[type="number"],input[type="text"]{width:250px;}input[type="text"],input[type="number"]{padding-left:.104166667in;}input[type="text"],input[type="number"]{padding-bottom:.104166667in;}[class~=sidebar] [class~=closebtn]{position:absolute;}input[type="text"],input[type="number"]{padding-right:.104166667in;}[class~=sidebar],[class~=sidebar] [class~=closebtn]{top:0;}[class~=sidebar] [class~=closebtn]{right:1.5625pc;}input[type="text"],input[type="number"]{padding-top:.104166667in;}[class~=sidebar]{height:100%;}input[type="text"]{border-left-width:.010416667in;}::-webkit-scrollbar-track{background-color:#f1f1f1;}body{font-family:"Roboto",sans-serif;}#main{transition:margin-left .5s;}input[type="text"]{border-bottom-width:.010416667in;}input[type="text"]{border-right-width:.010416667in;}input[type="text"]{border-top-width:.010416667in;}input[type="text"]{border-left-style:solid;}[class~=sidebar] [class~=closebtn]{font-size:.375in;}[class~=sidebar]{width:0;}input[type="text"]{border-bottom-style:solid;}input[type="text"]{border-right-style:solid;}input[type="text"]{border-top-style:solid;}input[type="text"]{border-left-color:#ccc;}body{color:white;}[class~=sidebar]{position:fixed;}[class~=sidebar]{z-index:1;}body{background-color:white;}input[type="text"]{border-bottom-color:#ccc;}input[type="text"]{border-right-color:#ccc;}input[type="text"]{border-top-color:#ccc;}[class~=sidebar]{left:0;}input[type="text"]{border-image:none;}body{scrollbar-width:thin;}::-webkit-scrollbar-thumb{background-color:#888;}input[type="text"],input[type="number"]{border-radius:3pt;}input[type="text"],input[type="number"]{font-size:16px;}body{scrollbar-color:#888 #f1f1f1;}[class~=sidebar] [class~=closebtn]{margin-left:50px;}[class~=sidebar]{background-color:#111;}[class~=sidebar]{overflow-x:hidden;}.openbtn:hover{background-color:#444;}form{display:flex;}input[type="number"]{margin-bottom:.104166667in;}::-webkit-scrollbar-thumb{border-radius:4px;}[class~=sidebar]{transition:.5s;}input[type="number"]{border-left-width:.010416667in;}input[type="number"]{border-bottom-width:.010416667in;}input[type="number"]{border-right-width:.010416667in;}input[type="number"]{border-top-width:.010416667in;}[class~=sidebar]{padding-top:45pt;}form{flex-direction:column;}input[type="number"]{border-left-style:solid;}input[type="number"]{border-bottom-style:solid;}form{align-items:center;}input[type="number"]{border-right-style:solid;}#main{padding-left:12pt;}input[type="number"]{border-top-style:solid;}form{justify-content:center;}input[type="number"]{border-left-color:#ccc;}input[type="number"]{border-bottom-color:#ccc;}input[type="number"]{border-right-color:#ccc;}form{height:50vh;}input[type="number"]{border-top-color:#ccc;}[class~=openbtn]{font-size:1.25pc;}input[type="number"]{border-image:none;}input[type="submit"],[class~=openbtn]{cursor:pointer;}[class~=openbtn]{background-color:green;}input[type="submit"]{padding-left:15pt;}input[type="submit"],[class~=openbtn]{color:white;}[class~=openbtn]{padding-left:.9375pc;}input[type="submit"],[class~=openbtn]{padding-bottom:.625pc;}input[type="submit"]{padding-right:15pt;}[class~=openbtn]{padding-right:.9375pc;}[class~=openbtn],input[type="submit"]{padding-top:.625pc;}input[type="submit"]{background-color:#4caf50;}input[type="submit"],[class~=openbtn]{border-left-width:medium;}[class~=openbtn],input[type="submit"]{border-bottom-width:medium;}input[type="submit"],[class~=openbtn]{border-right-width:medium;}input[type="submit"],[class~=openbtn]{border-top-width:medium;}input[type="submit"],[class~=openbtn]{border-left-style:none;}[class~=openbtn],input[type="submit"]{border-bottom-style:none;}input[type="submit"],[class~=openbtn]{border-right-style:none;}input[type="submit"],[class~=openbtn]{border-top-style:none;}[class~=openbtn],input[type="submit"]{border-left-color:currentColor;}[class~=openbtn],input[type="submit"]{border-bottom-color:currentColor;}input[type="submit"],[class~=openbtn]{border-right-color:currentColor;}[class~=openbtn],input[type="submit"]{border-top-color:currentColor;}input[type="submit"],[class~=openbtn]{border-image:none;}input[type="submit"]{border-radius:3pt;}input[type="submit"]{font-size:1pc;}[class~=sidebar] a{padding-left:24pt;}[class~=sidebar] a{padding-bottom:.5pc;}[class~=sidebar] a{padding-right:.083333333in;}[class~=sidebar] a{padding-top:8px;}[class~=sidebar] a{text-decoration:none;}[class~=sidebar] a{font-size:.260416667in;}[class~=sidebar] a{color:#818181;}[class~=sidebar] a{display:block;}[class~=sidebar] a{transition:.3s;}.sidebar a:hover{color:#f1f1f1;}#main{padding-bottom:12pt;}#main{padding-right:12pt;}#main{padding-top:12pt;}@media screen and (max-height: 450px){[class~=sidebar] a{font-size:.1875in;}[class~=sidebar]{padding-top:.15625in;}}
    </style>
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
<script>
$(document).ready(function() {
  $('.move-up-btn').click(function() {
    var row = $(this).closest('tr');
    if (row.index() > 1) {
      row.insertBefore(row.prev());
    }
  });
  $('.move-down-btn').click(function() {
    var row = $(this).closest('tr');
    row.insertAfter(row.next());
  });
  $('#commit-filter-btn').click(function() {
    var tableData = [];
    $('#data-table tbody tr').each(function() {
      var row = $(this);
      var item = {
        title: row.find('td:nth-child(2)').text().trim(),
        price: row.find('td:nth-child(3)').text().trim(),
        availability: row.find('td:nth-child(4)').text().trim(),
        imagePath: row.find('img').attr('src')
      };
      tableData.push(item);
    });
    var jsonData = JSON.stringify(tableData);
    $.ajax({
      type: 'POST',
      url: 'save.php',
      data: { data: jsonData },
      success: function(response) {\
        console.log(response);
      }
    });
  });
});
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
        // Remove empty objects from the beginning of the array
        while (!empty($data) && $data[0]['title'] === '') {
            array_shift($data);
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
            echo '<button class="move-up-btn" style="background-color: green; color: white; border: none; padding: 5px 10px; cursor: pointer; border-radius: 5px;">&#8593;</button>&nbsp;';
            echo '<button class="move-down-btn" style="background-color: blue; color: white; border: none; padding: 5px 10px; cursor: pointer; border-radius: 5px;">&#8595;</button>&nbsp;';
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
