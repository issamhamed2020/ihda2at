<header class="align-items-start app-header flex-column flex-md-row navbar navbar-expand-md navbar-light">
    <div class="align-items-baseline d-flex flex-row navbar-brand p-lg-3 pl-3 pr-3 pt-3">
        <a class="" href="#">{{config('app.name')}}</a>
        <button class="collapsed ml-auto navbar-toggler" type="button" data-toggle="collapse"
                data-target="#side-menu-wrapper" aria-controls="side-menu" aria-expanded="false"
                aria-label="Toggle navigation" style="">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <ul class="nav navbar-nav mr-md-auto flex-row navbar-top-links">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="true" aria-expanded="false">
                <span>{{Auth::guard("web")->user()->name}}</span>
                <i class="fa fa-user fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-user">
                <a class="dropdown-item" href="{{route("homepage")}}" target="_blank"><i class="fa fa-globe"></i> زيارة الموقع </a>
                <a class="dropdown-item" href="#"><i class="fa fa-credit-card"></i> البطاقات الجديدة </a>
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> المستخدمين </a>
                <div class="dropdown-divider"></div>
                <form action="{{route("logout")}}" id="logout_form" method="post" style="display: none;">@csrf</form>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout_form').submit()"><i class="fa fa-sign-out fa-fw"></i> تسجيل الخروج</a>
            </div>
        </li>
    </ul>
</header>
