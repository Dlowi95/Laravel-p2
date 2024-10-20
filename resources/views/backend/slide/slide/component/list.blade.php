<div class="ibox">
    <div class="ibox-title">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <h5>Danh sách Slides (<span class="text-danger">có thể chọn liên tục nhiều Slide khác nhau</span>)</h5>
            <button type="button" class="addSlide btn">Thêm Slide</button>
        </div>
    </div>
        @php
            $slides = old('slide', ($slideItem) ?? []);
        @endphp
    <div class="ibox-content">
        <div id="sortable" class="row slide-list sortui ui-sortable">
            @if(!$slides || count($slides['image']) == 0)
            <div class="slide-notification alert alert-danger text-center">
                Bạn chưa có Slide hay Banner nào cả...
            </div>
        @endif
            @if($slides)
            @foreach($slides['image'] as $key => $val)
            @php
                $image = $val;
                $description = $slides['description'][$key];
                $url = $slides['url'][$key];
                $name = $slides['name'][$key];
                $alt = $slides['alt'][$key];
                $window = (isset($slides['window'][$key])) ? $slides['window'][$key] : '' ;
                $tabId = "tab" . $key;
                $seoTabId = "seo_tab" . $key;
            @endphp
            <div class="col-lg-12 ui-state-default">
                <div class="slide-item mb20">
                    <div class="row custom-row">
                        <div class="col-lg-3 mb-10">
                            <span class="slide-image img-cover"><img src="{{ $val }}" alt=""></span>
                            <input type="hidden" name="slide[image][]" value="{{ $val }}">
                            <span class="deleteSlide btn btn-danger"><i class="fa fa-trash"></i></span>
                        </div>
                        <div class="col-lg-9">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#{{ $tabId }}" aria-expanded="true">Thông tin chung</a></li>
                                    <li><a data-toggle="tab" href="#{{ $seoTabId }}" aria-expanded="false">SEO</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="{{ $tabId }}" class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="label-text mb5">Mô tả</div>
                                            <div class="form-row mb10">
                                                <textarea  name="slide[description][]" class="form-control" placeholder="Nhập mô tả">{{ $description }}</textarea>
                                            </div>
                                            <div class="form-row form-row-url">
                                                <input 
                                                    type="text" 
                                                    name="slide[url][]" 
                                                    class="form-control"
                                                    placeholder="Nhập URL | Vd: https://loideptrai.com"
                                                    value="{{ $url }}"
                                                >
                                                <div class="overlay">
                                                    <div class="uk-flex uk-flex-middle">
                                                        <label for="input_{{ $key }}">Mở trong tab mới</label>
                                                        <input 
                                                            type="checkbox"
                                                            name="slide[window][{{ $key }}]"
                                                            value="_blank"
                                                            {{ ($window == '_blank') ? 'checked' : '' }}
                                                            id="input_{{ $key }}"
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="{{ $seoTabId }}" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="label-text mb5">Tiêu đề ảnh</div>
                                            <div class="form-row form-row-url slide-seo-tab">
                                                <input 
                                                    type="text" 
                                                    name="slide[name][]" 
                                                    class="form-control"
                                                    placeholder="Nhập tiêu đề ảnh"
                                                    value="{{ $name }}"
                                                >
                                            </div>
                                            <div class="label-text mb5 mt16">Mô tả ảnh</div>
                                            <div class="form-row form-row-url slide-seo-tab">
                                                <input 
                                                    type="text" 
                                                    name="slide[alt][]" 
                                                    class="form-control"
                                                    placeholder="Nhập mô tả ảnh"
                                                    value="{{ $alt }}"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            @endif
        </div>
    </div>
</div>    