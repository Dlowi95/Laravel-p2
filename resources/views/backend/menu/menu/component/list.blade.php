<div class="row">
    <div class="col-lg-5">
        <div class="ibox">
            <div class="ibox-content">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="collapsed">Liên kết tự tạo</a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body">
                                <div class="panel-title">Tạo Menu</div>
                                <div class="panel-description">
                                    <p> <i class="fa fa-bullhorn" aria-hidden="true"></i> Cài đặt <b>Menu</b> mà bạn muốn hiển thị </p>
                                    <p><small class="text-danger">* Khi khởi tạo Menu bạn phải chắc chắn rằng đường dẫn của Menu có hoạt động. Đường dẫn trên website được khởi tạo tại các module: <b>Bài viết, Sản phẩm, Dự án, vv</b>...</small></p>
                                    <p><small class="text-danger">* Tiêu đề và đường dẫn Menu <b>không</b> được để trống.</small></p>
                                    <p><small class="text-danger">* Hệ thống chỉ hỗ trợ tối đa <b>5</b> cấp Menu</small></p>
                                    <a href="" style="color: #000;border-color: #c4cdd5;display: inline-block !importan;" title="" class="btn btn-default add-menu m-b m-r right"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Thêm đường dẫn <i class="fa fa-hand-o-left" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach(__('module.model') as $key => $val)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#{{ $key }}" class="collapsed menu-module" data-model=" {{ $key }} " aria-expanded="false">{{ $val }}</a>
                            </h4>
                        </div>
                        <div id="{{ $key }}" class="panel-collapse collapse" aria-expanded="true" style="">
                            <div class="panel-body">
                                        <input 
                                            type="text"
                                            value=""
                                            class="form-control search-menu"
                                            name="keyword"
                                            placeholder="Nhập ít nhất 2 kí tự để tìm kiếm..."
                                            autocomplete="off"
                                        >
                                <div class="menu-list mt20">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="ibox">
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-4 text-center"> 
                        <label for="">Tên Menu</label>
                    </div>
                    <div class="col-lg-4 text-center">
                        <label for="">Đường dẫn</label>
                    </div>
                    <div class="col-lg-2 text-center">
                        <label for="">Vị trí</label>
                    </div>
                    <div class="col-lg-2 text-center">
                        <label for="">Xóa</label>
                    </div>
                </div>
                <div class="hr-line-dashed" style="margin-top: 10px 0"></div>
                @php
                    $menu = old('menu', ($menuList) ?? null)
                @endphp
                <div class="menu-wrapper">
                    <div class="notification text-center {{ (is_array($menu) && count($menu)) ? 'none' : '' }} ">
                        <h4 style="font-weight: 500;font-size: 16px;color: #000">Danh sách liên kết này chưa có bất kỳ đường dẫn nào.</h4>
                        <p style="color: #555;margin-top: 10px">Hãy nhấn vào <span style="color: blue">Thêm đường dẫn</span> để bắt đầu thêm.</p>
                    </div>

                @if(is_array($menu) && count($menu))
                    @foreach($menu['name'] as $key => $val)
                    <div class="row mb10 menu-item">
                        <div class="col-lg-4">
                            <input 
                                type="text" 
                                value=" {{ $val }} " 
                                class="form-control" 
                                name="menu[name][]"
                            >
                        </div>
                        <div class="col-lg-4">
                            <input 
                                type="text" 
                                value=" {{ $menu['canonical'][$key] }} " 
                                class="form-control" 
                                name="menu[canonical][]"
                            >
                        </div>
                        <div class="col-lg-2">
                            <input 
                                type="text" 
                                value=" {{ $menu['order'][$key] }} " 
                                class="form-control int text-right" 
                                name="menu[order][]"
                            >
                        </div>
                        <div class="col-lg-2">
                            <div class="form-row text-center"><a class="delete-menu"><i class="fa fa-times close-delete"></i></a>
                            </div>
                            <input 
                                type="text" 
                                class="hidden" 
                                name="menu[id][]"
                                value=" {{ $menu['id'][$key] }} "
                                >
                        </div>
                    </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    </div>
</div>