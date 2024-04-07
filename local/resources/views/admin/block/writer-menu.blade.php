<li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#productExamples">
        <i class="material-icons">widgets</i>
        <p> BÀI VIẾT
            <b class="caret"></b>
        </p>
    </a>
    <div class="collapse" id="productExamples">
        <ul class="nav">
            <li class="nav-item <?= ($_SERVER['REQUEST_URI'] == '/post-list' ) ? 'active' : '' ?>">
                <a class="nav-link" href="{{ route('post-index') }}">
                    <i class="material-icons">content_paste</i>
                    <span class="sidebar-normal"> DANH SÁCH BÀI VIẾT </span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('post-insert-update') }}">
                    <i class="material-icons">info</i>
                    <span class="sidebar-normal"> TẠO BÀI VIẾT </span>
                </a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item <?= ($_SERVER['REQUEST_URI'] == '/api-social-network' ) ? 'active' : '' ?>">
    <a class="nav-link" href="{{ route('api-social-network-index') }}">
        <i class="material-icons">live_tv</i>
        <p> API SOCIAL NETWORK </p>
    </a>
</li>

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
            <!-- <li class="nav-item">
                <a class="nav-link" href="route('security')">
                    <i class="material-icons">security</i>
                    <span class="sidebar-normal"> BẢO MẬT </span>
                </a>
            </li> -->
        </ul>
    </div>
</li>
