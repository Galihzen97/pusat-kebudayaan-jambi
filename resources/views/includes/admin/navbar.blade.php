   <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
       <!-- Left navbar links -->
       <ul class="navbar-nav">
           <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
           </li>
           <li class="nav-item d-none d-sm-inline-block">
               <a href="{{route('dashboard')}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">Dashboard</a>
           </li>
       </ul>

       <!-- Right navbar links -->
       <ul class="navbar-nav ml-auto">
           
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="/assets/dist/img/avatar.png" class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">{{auth()->user()->name}}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                
                <li class="user-header bg-primary">
                    <img src="/assets/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
                    <p>
                    {{auth()->user()->name}}
                    <small>{{auth()->user()->email}}</small>
                    </p>
                </li>
                <li class="user-footer">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                    <a class="btn btn-danger border-radius float-right" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i> Sign out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </li>
                </ul>
            </li>
           <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                   <i class="fas fa-expand-arrows-alt"></i>
               </a>
           </li>
       </ul>
   </nav>
   <!-- /.navbar -->
