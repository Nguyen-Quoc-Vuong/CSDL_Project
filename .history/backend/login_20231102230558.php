<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../asset/css/login.css" rel="stylesheet">
  </head>

  if (isset($_POST["submit"])) {
           $fullname = $_POST["username"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullname) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"Không được để trống");
           } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              array_push($errors, "Email không hợp lệ");
             }
             if (strlen($password)<6) {
              array_push($errors,"Mật khẩu ít nhất 6 kí tự");
             }
             if ($password!==$passwordRepeat) {
              array_push($errors,"Mật khẩu không hợp lệ");
             }
           }
           
           require_once "../helper/connect_dtb.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email đã tồn tại!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (username, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullname, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
        }
        ?>

  <body>
    <div class="container-fluid">
      <form action="login.php">
      <div class="col-md-4" style="display : flex">
            <img src="../asset/img/VNA_logo_vn.webp" alt="" style="height: 80px;width:50%">
            <img src="../asset/img/skyteam.webp" alt="" style="height: 40px; width: 50px ;margin-top : 15px">
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
                    <button class="btn btn-primary w-100 py-2" type="submit" name = "submit">Submit</button>
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
    </div>
      </form> 
  </body>
</html>