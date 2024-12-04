<div class="sidebar sticky-bar p-4 rounded shadow">
    <div class="widget">
        <h5 class="widget-title">Followers :</h5>
        <div class="row mt-4">
            <div class="col-6 text-center">
                <i data-feather="user-plus" class="fea icon-ex-md text-primary mb-1"></i>
                <h5 class="mb-0">2588</h5>
                <p class="text-muted mb-0">Followers</p>
            </div><!--end col-->

            <div class="col-6 text-center">
                <i data-feather="users" class="fea icon-ex-md text-primary mb-1"></i>
                <h5 class="mb-0">454</h5>
                <p class="text-muted mb-0">Following</p>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <div class="widget mt-4 pt-2">
        <h5 class="widget-title">Projects :</h5>
        <div class="progress-box mt-4">
            <h6 class="title text-muted">Progress</h6>
            <div class="progress">
                <div class="progress-bar position-relative bg-primary" style="width:50%;">
                    <div class="progress-value d-block text-muted h6">24 / 48</div>
                </div>
            </div>
        </div><!--end process box-->
    </div>

    <div class="widget mt-4">
        <ul class="list-unstyled sidebar-nav mb-0" id="navmenu-nav">
            <li class="navbar-item account-menu px-0">
                <a href="account-profile.html" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                    <span class="h4 mb-0"><i class="uil uil-dashboard"></i></span>
                    <h6 class="mb-0 ms-2">Profile</h6>
                </a>
            </li>

            <li class="navbar-item account-menu px-0 mt-2">
                <a href="{{ route('user.document.upload') }}"
                    class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                    <span class="h4 mb-0"><i class="uil uil-file"></i></span>
                    <h6 class="mb-0 ms-2">Upload Document</h6>
                </a>
            </li>

            <li class="navbar-item account-menu px-0 mt-2">
                <a href="account-works.html" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                    <span class="h4 mb-0"><i class="uil uil-file"></i></span>
                    <h6 class="mb-0 ms-2">Portfolio</h6>
                </a>
            </li>

            <li class="navbar-item account-menu px-0 mt-2">
                <a href="account-chat.html" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                    <span class="h4 mb-0"><i class="uil uil-comment"></i></span>
                    <h6 class="mb-0 ms-2">Chat</h6>
                </a>
            </li>

            <li class="navbar-item account-menu px-0 mt-2">
                <a href="account-messages.html" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                    <span class="h4 mb-0"><i class="uil uil-envelope-star"></i></span>
                    <h6 class="mb-0 ms-2">Messages</h6>
                </a>
            </li>

            <li class="navbar-item account-menu px-0 mt-2">
                <a href="account-payments.html" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                    <span class="h4 mb-0"><i class="uil uil-transaction"></i></span>
                    <h6 class="mb-0 ms-2">Payments</h6>
                </a>
            </li>

            <li class="navbar-item account-menu px-0 mt-2">
                <a href="account-setting.html" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                    <span class="h4 mb-0"><i class="uil uil-setting"></i></span>
                    <h6 class="mb-0 ms-2">Settings</h6>
                </a>
            </li>

            <li class="navbar-item account-menu px-0 mt-2">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                    <span class="h4 mb-0"><i class="uil uil-dashboard"></i></span>
                    <h6 class="mb-0 ms-2">Logout</h6>
                </a>
            </li>
        </ul>
    </div>
</div>
