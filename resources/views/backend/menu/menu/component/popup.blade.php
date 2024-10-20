<div id="createMenuCatalogue" class="modal fade">
  <form action="" class="form create-menu-catalogue" method="">
    <div class="modal-dialog modal-lg">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              <h5 class="modal-title">Thêm mới vị trí cho Menu</h5>
              <small>Nhập đầy đủ thông tin để tạo vị trí hiển thị cho <b>Menu</b> <span class="text-danger">(*)</span></small>
            </div>
            <div class="modal-body">
              <div class="form-error text-success mb10"></div>
                <div class="row">
                    <div class="col-lg-12 mb10">
                        <label for="">Tên vị trí hiển thị</label>
                        <input type="text" class="form-control" value="" name="name">
                        <div class="error name"></div>
                    </div> 
                    <div class="col-lg-12 mb10">
                        <label for="">Từ khóa</label>
                        <input type="text" class="form-control" value="" name="keyword">
                        <div class="error keyword"></div>
                    </div> 
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
              <button type="submit" name="create" value="create" class="btn btn-primary">Lưu lại</button>
            </div>
          </div>
        </div>
      </div>
  </form>
</div>