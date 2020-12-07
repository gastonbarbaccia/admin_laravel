
     <!-- container section start -->

     <section id="container" class="">

        <!--header start-->
    
        <header class="header dark-bg">
    
          <div class="toggle-nav">
    
            <div class="icon-reorder tooltips" data-placement="bottom"><i class="icon_menu"></i></div>
    
          </div>
    
    
    
          <!--logo start-->
    
          <a  class="logo">Panel de  <span class="lite">Administración</span></a>
    
          <!--logo end-->
    
    
    
          <div class="top-nav notification-row">
    
            <!-- notificatoin dropdown start-->
    
            <ul class="nav pull-right top-menu">
    
    
    
              <!-- user login dropdown start-->
    
              <li class="dropdown">
    
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
    
                                <span class="profile-ava">
    
                                </span>
    
                                <span class="username">{{ auth()->user()->name }}</span>
    
                                <b class="caret"></b>
    
                            </a>
    
                <ul class="dropdown-menu extended logout">
    
                  <div class="log-arrow-up"></div>
    
                  <li>

                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                     <i class="icon_key_alt"></i>Cerrar sesión   
                  </a>
                  <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
              
                  </li>
    
                </ul>
    
              </li>
    
              <!-- user login dropdown end -->
    
            </ul>
    
            <!-- notificatoin dropdown end-->
    
          </div>
    
        </header>
    
        <!--header end-->
    
    
    
        <!--sidebar start-->
    
        <aside>
    
          <div id="sidebar" class="nav-collapse ">
    
            <!-- sidebar menu start-->
    
            <ul class="sidebar-menu">
    
              <li class=""> 
    
                <a class="" href="{{route('dashboard')}}">
    
                              <i class="icon_house_alt"></i>
    
                              <span>Dashboard</span>
    
                          </a>
    
              </li>
    
              <li>
    
                <a class="" href="{{ route('cuentas') }}">
    
                              <i class="icon_document_alt"></i>
    
                              <span>Cuentas a pagar</span>
    
                          </a>
    
              </li>
    
               <li>
 
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                <i class=icon_key_alt></i> <span>Cerrar sesion</span>  
                </a>
                <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
    
              </li>
    
            </ul>
    
            <!-- sidebar menu end-->
    
          </div>
    
        </aside>
        
@yield('menu')