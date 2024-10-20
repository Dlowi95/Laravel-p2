@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['show']['title']])

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-4">
            <div class="uk-flex uk-flex-middle mb20">
                @foreach($languages as $language)
                @php
                    $url = (session('app_locale') === $language->canonical) ? route('menu.edit', ['id' => $id] ) : route('menu.translate', ['languageId' => $language->id, 'id' => $id])
                @endphp
            <a 
                class="image img-cover system-flag"
                href="{{ $url }}"><img src="{{ $language->image }}" alt="">
            </a>
                @endforeach
            </div>
            <div class="panel-title">Danh sách Menu</div>
            <div class="panel-description">
                <p><i class="fa fa-plus" aria-hidden="true"></i> Danh sách Menu giúp bạn dễ dàng kiểm soát bố cục Menu. Bạn có thể thêm mới hoặc cập nhật Menu bằng nút <span class="text-success">Cập nhật Menu</span></p>
                <p><i class="fa fa-plus" aria-hidden="true"></i> Bạn có thể thay đổi vị trí hiển thị của Menu bằng cách <span class="text-success"><b>KÉO</b> Menu đến vị trí mong muốn</span></p>
                <p><i class="fa fa-plus" aria-hidden="true"></i> Dễ dàng khởi tạo Menu con bằng cách ấn vào nút <span class="text-success">Quản lý Menu con</span></p>
                <p><i class="fa fa-plus" aria-hidden="true"></i><span class="text-danger"> Hỗ trợ tới danh mục con cấp 5</span></p>

            </div>
        </div>
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-title">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <h5 style="margin: 0;">{{ $menuCatalogue->name }}</h5>
                        <a href="{{ route('menu.editMenu',['id' => $id]) }}" class="custom-button">Cập nhật Menu cấp 1</a>
                    </div>
                </div>
                <div class="ibox-content" id="dataCatalogue" data-catalogueId=" {{ $id }} ">
                    @php
                        $menus = recursive($menus);
                        $menuString = recursive_menu($menus);
                    @endphp
                    @if(count($menus))
                        <div class="dd" id="nestable2">
                            <ol class="dd-list">
                                {!! $menuString !!}
                            </ol>
                        </div>
                    @endif
                </div>
            </div>
        </div>    
    </div>
</div>
