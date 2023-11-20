<div class="container">
  <h2 class="text-center">Thêm danh mục vé</h2>
  <form method="POST" action="modules/quanlidanhmucsp/xuly.php">
    <div class="form-group row">
      <label for="tendanhmuc" class="col-2 col-form-label pl-0">Tên danh mục</label>
      <div class="col-10 pl-0">
        <input type="text" class="form-control" id="tendanhmuc" name="tendanhmuc">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12 pl-0">
        <button type="submit" class="btn btn-primary" name="themdanhmuc">Thêm danh mục sản phẩm</button>
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