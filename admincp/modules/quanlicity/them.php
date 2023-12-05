<div class="container">
  <h2 class="text-center">Thêm thành phố</h2>
  <form method="POST" action="modules/quanlicity/xuly.php">
    <div class="form-group row">
      <label for="tendanhmuc" class="col-2 col-form-label pl-0">Tên thành phố</label>
      <div class="col-10 pl-0">
      <input type="text" name="tendanhmuc" id="tendanhmuc" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12 pl-0">
        <button type="submit" class="btn btn-primary" name="themdanhmuc">Thêm</button>
      </div>
    </div>
  </form>
  <hr style="border: 2px solid #808080; width: 200%; margin-left:-160px">
</div>
<style>
  .form-group {
    margin-left : -127px; 
  }
</style>