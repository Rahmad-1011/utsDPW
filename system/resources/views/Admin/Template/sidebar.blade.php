@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active-menu';
}
@endphp

<nav class="navbar-default navbar-side" role="navigation">
    
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="{{ url('Admin/beranda') }}"><h4><i class="fa fa-user fa-fw"></i> {{request()-> user()-> nama}} </h4></a>
                    </li>
                    <br>

                    <li class="{{checkRouteActive('Admin/beranda')}}">
                        <a href="{{ url('Admin/beranda') }}"><i class="fa fa-dashboard"></i> Beranda </a>
                    </li>

                     <li class="{{checkRouteActive('Admin/tag')}}">
                        <a href="{{ url('Admin/tag') }}"><i class="fa fa-edit"></i> Tags </a>
                    </li>

                    <li class="{{checkRouteActive('Admin/konten')}}">
                        <a href="{{ url('Admin/konten') }}"><i class="fa fa-edit"></i> Konten </a>
                    </li>

                    <li class="{{checkRouteActive('Admin/user')}}">
                        <a href="{{ url('Admin/user') }}"><i class="fa fa-edit"></i> User </a>
                    </li>
                </ul>

            </div>
</nav>