<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flight Information</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="logo">
        <img src="https://www.vietnamairlines.com/Content/VietnamAirlines/en/common/img/logo-vietnamairlines.svg" alt="Vietnam Airlines">
      </div>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Book</a></li>
          <li><a href="#">Manage</a></li>
          <li><a href="#">Sky Pass</a></li>
          <li><a href="#">About Us</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="flight-information">
        <h1>Flight Information</h1>

        <div class="card">
          <div class="card-header">Flight Details</div>
          <div class="card-body">

          <?php
            echo '<pre>';
            print_r($_POST);
            echo '</pre>'; 
          ?>
        
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Vietnam Airlines</h2>
          <p>...</p>
        </div>
        <div class="col-md-4">
          <h2>Contact Us</h2>
          <p>...</p>
        </div>
        <div class="col-md-4">
          <h2>Social Media</h2>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>

<h1>Heading</h1>
