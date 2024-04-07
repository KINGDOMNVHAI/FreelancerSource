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
