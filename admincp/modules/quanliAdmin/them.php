<h2 style="text-align: center; color: #0098D8;">Thêm Amin</h2>
<form method="POST" action="modules/quanliAdmin/xuly.php" enctype="multipart/form-data" class="form-horizontal">
<div class="form-group row">
  <label for="fullname" class="col-sm-2 col-form-label">Họ và tên</label>
  <div class="col-sm-4" style="margin-left:-120px">
    <input type="text" name="fullname" id="fullname" class="form-control">
  </div>
  <label for="email" class="col-sm-2 col-form-label" style="margin-left:200px">Địa chỉ Email</label>
  <div class="col-sm-4" style="margin-left : -100px">
    <input type="text" name="email" id="email" class="form-control">
  </div>
</div>

<div class="form-group row">
  <label for="password" class="col-sm-2 col-form-label"> Mật khẩu</label>
  <div class="col-sm-4" style="margin-left:-120px">
    <input type="text" name="password" id="password" class="form-control">
  </div>
  <label for="role" class="col-sm-2 col-form-label" style="margin-left:200px">Vai trò</label>
  <div class="col-sm-4" style="margin-left : -100px">
    <input type="text" name="role" id="role" class="form-control">
  </div>
</div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="themsanpham" value="Thêm sản phẩm" class="btn btn-primary">
    </div>
  </div>
</form>