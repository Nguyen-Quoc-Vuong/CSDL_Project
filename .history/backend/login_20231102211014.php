<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="login.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <?php
    
      ?>
      <form action="login.php" method = "post">
        <div class="col-md-4" style="display : flex">
            <img src="img/VNA_logo_vn.webp" alt="" style="height: 80px;width:50%">
            <img src="img/skyteam.webp" alt="" style="height: 40px; width: 50px ;margin-top : 15px">
        </div>
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Login</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <div class="form-item">
                    <button class="btn btn-primary w-100 py-2" type="submit">Submit</button>
                </div>
            </div>
              <div class="form-group user-register">
                <div class="col-sm-12 col-md-12 col-lg-12 form-item text-center">
                    <br/> Don't Have an Account ? 
                    <a href="#">Resister Now</a>
                </div>
            </div>
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; VietNamAirLine</small>
          </div>
        </div>
      </div>
      </form>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
  </body>
</html>