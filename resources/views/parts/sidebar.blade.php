<div class="sidebar" role="navigation">
    <div class="sidebar-nav collapse navbar-collapse show" id="side-menu-wrapper">
        <ul class="nav navbar-nav navbar-collapse flex-column side-nav list-group" id="side-menu">
            <li class="list-group-item">
                <a href="{{route("home")}}" class="@if(Request::is(route("home"))) active @endif"><i class="fa fa-dashboard fa-fw"></i> الرئيسية</a>
            </li>
            <li class="list-group-item">
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav-second-level list-group nested">
                    <li class="list-group-item">
                        <a href="flot.html">Flot Charts</a>
                    </li>
                    <li class="list-group-item">
                        <a href="morris.html">Morris.js Charts</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
