
<div class="page-wrap">
                <div class="app-sidebar">
                    <div class="sidebar-header" style="background-color: #0D6EFD;">
                        <a class="header-brand" href="{{url('/dashboard')}}">
                            <div class="logo-img">
                              
                            </div>
                            <span class="text" style="color: white;">Dispensar</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel" style="background-color: #CFE2FF; color: #0D6EFD; font-weight: 700;">Navigare</div>
                                <div class="nav-item active">
                                    <a href="{{url('dashboard')}}"><i class="ik ik-bar-chart-2"></i><span>Acasa</span></a>
                                </div>
                              <!--   <div class="nav-item">
                                    <a href="pages/navbar.html"><i class="ik ik-menu"></i><span>Navigation</span> <span class="badge badge-success">New</span></a>
                                </div> -->
                                
                                @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Departament</span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('department.create')}}" class="menu-item new-style">Creare</a>
                                        <a href="{{route('department.index')}}" class="menu-item new-style">Vizualizare</a>
                                       
                                    </div>
                                </div>
                                @endif

                           

                                  @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Doctor</span></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('doctor.create')}}" class="menu-item new-style">Creare</a>
                                        <a href="{{route('doctor.index')}}" class="menu-item new-style">Vizualizare</a>
                                       
                                    </div>
                                </div>
                                @endif
                                @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                 <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span class="stylee">Programari pacienti</span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('patient')}}" class="menu-item new-style">Programari</a>
                                        <a href="{{route('all.appointments')}}" class="menu-item new-style">Arhiva programari</a>
                                       
                                    </div>
                                </div>
                                
                                @endif
                                
                                  @if(auth()->check()&& auth()->user()->role->name === 'doctor')
                                   <div class="nav-item has-sub">
                                    <a href="javascript:void(0)" class="stylee"><i class="ik ik-layers"></i><span>Programari</span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('appointment.create')}}" class="menu-item new-style">Creare</a>
                                        <a href="{{route('appointment.index')}}" class="menu-item new-style">Vizualizare</a>
                                       
                                    </div>
                                </div>
                                @endif

                                @if(auth()->check()&& auth()->user()->role->name === 'doctor')
                                   <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Pacienti</span></a>
                                    <div class="submenu-content">
                                    <a href="{{route('patients.today')}}" class="menu-item new-style">Pacienti</a>
                                        <a href="{{route('prescribed.patients')}}" class="menu-item new-style">Arhiva pacienti</a>
                                       
                                    </div>
                                </div>
                                @endif

                               


                                

                                <div class="nav-item active">
                                    <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="ik ik-power dropdown-icon"></i><span>Deconectare</span></a>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                           
                                
                            </nav>
                        </div>
                    </div>
                </div>
<style type="text/css">
    .submenu-content a.new-style:hover{
        background-color: #D3D5D3;
        /* width: 100vh; */
    }
    /* .nav-item.has-sub a.stylee:focus{
        background-color: #0D6EFD;
        width: 100vw;
        color: #FFF !important;
    } */
</style>
