<!-- <li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#postExamples">
        <i class="material-icons">widgets</i>
        <p> BÀI VIẾT
            <b class="caret"></b>
        </p>
    </a>
    <div class="collapse" id="postExamples">
        <ul class="nav">
            <li class="nav-item    ">
                <a class="nav-link" href="{{ route('post-index') }}">
                    <i class="material-icons">content_paste</i>
                    <span class="sidebar-normal"> DANH SÁCH BÀI VIẾT </span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('post-insert') }}">
                    <i class="material-icons">info</i>
                    <span class="sidebar-normal"> TẠO BÀI VIẾT </span>
                </a>
            </li>
        </ul>
    </div>
</li> -->

<li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#categoryExamples">
        <i class="material-icons">category</i>
        <p>THỂ LOẠI
            <b class="caret"></b>
        </p>
    </a>
    <div class="collapse" id="categoryExamples">
        <ul class="nav">
            <li class="nav-item <?= ($_SERVER['REQUEST_URI'] == '/category-index' ) ? 'active' : '' ?>">
                <a class="nav-link" href="{{ route('category-index') }}">
                    <i class="material-icons">content_paste</i>
                    <span class="sidebar-normal"> DANH SÁCHTHỂ LOẠI</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('category-insert') }}">
                    <i class="material-icons">info</i>
                    <span class="sidebar-normal"> TẠOTHỂ LOẠI</span>
                </a>
            </li>
            <li class="nav-item <?= ($_SERVER['REQUEST_URI'] == '/category-list-deteled' ) ? 'active' : '' ?>">
                <a class="nav-link" href="{{ route('category-list-deteled') }}">
                    <i class="material-icons">recycling</i>
                    <span class="sidebar-normal">THỂ LOẠI ĐÃ XÓA</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#productExamples">
        <i class="material-icons">widgets</i>
        <p> SẢN PHẨM
            <b class="caret"></b>
        </p>
    </a>
    <div class="collapse" id="productExamples">
        <ul class="nav">
            <li class="nav-item <?= ($_SERVER['REQUEST_URI'] == '/product-list' ) ? 'active' : '' ?>">
                <a class="nav-link" href="{{ route('product-index') }}">
                    <i class="material-icons">content_paste</i>
                    <span class="sidebar-normal"> DANH SÁCH SẢN PHẨM </span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('product-insert') }}">
                    <i class="material-icons">info</i>
                    <span class="sidebar-normal"> TẠO SẢN PHẨM </span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#bookingExamples">
        <i class="material-icons">add_shopping_cart</i>
        <p> ĐƠN HÀNG
            <b class="caret"></b>
        </p>
    </a>
    <div class="collapse" id="bookingExamples">
        <ul class="nav">
            <li class="nav-item <?= ($_SERVER['REQUEST_URI'] == '/booking-list' ) ? 'active' : '' ?>">
                <a class="nav-link" href="{{ route('booking-index') }}">
                    <i class="material-icons">shopping_cart</i>
                    <span class="sidebar-normal"> DANH SÁCH ĐẶT HÀNG </span>
                </a>
            </li>
        </ul>
    </div>
</li>

<!-- <li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#shipperExamples">
        <i class="material-icons">pedal_bike</i>
        <p> SHIPPER
            <b class="caret"></b>
        </p>
    </a>
    <div class="collapse" id="shipperExamples">
        <ul class="nav">
            <li class="nav-item <?= ($_SERVER['REQUEST_URI'] == '/booking-list' ) ? 'active' : '' ?>">
                <a class="nav-link" href="{{ route('booking-index') }}">
                    <i class="material-icons">person_search</i>
                    <span class="sidebar-normal"> DANH SÁCH SHIPPER </span>
                </a>
            </li>
        </ul>
    </div>
</li> -->

<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#settingsExamples">
        <i class="material-icons">settings</i>
        <p> CÀI ĐẶT
            <b class="caret"></b>
        </p>
    </a>
    <div class="collapse" id="settingsExamples">
        <ul class="nav">
            <li class="nav-item <?= ($_SERVER['REQUEST_URI'] == '/user-profile' ) ? 'active' : '' ?>">
                <a class="nav-link" href="{{ route('user-profile') }}">
                    <i class="material-icons">person</i>
                    <span class="sidebar-normal"> THÔNG TIN CÁ NHÂN </span>
                </a>
            </li>

        </ul>
    </div>
</li>
