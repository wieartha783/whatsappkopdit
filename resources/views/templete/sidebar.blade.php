<div class="sidebar-menu">
    <div class="sidebar-menu-inner">
        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <a href="#">
                    <img src="{{ url('/') }}/aset/neon/assets/images/logoempty.png" width="120" alt="" />
                    {{-- AN APPS --}}
                </a>
            </div>
            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>         
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>                
        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <li class="has-sub">
                <a href="#">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>   
            </li>
            <li class="has-sub">
                <a href="">
                    <i class="entypo-layout"></i>
                    <span class="title">Layouts</span>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <span class="title">Horizontal Menu Boxed</span>
                        </a>
                    </li>
                   
                    <li class="has-sub">
                        <a href="#">
                            <span class="title">Page Enter Transitions</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="title">Fade Scale</span>
                                </a>
                            </li> 
                        </ul>
                    </li> 
                </ul>
            </li>
        </ul>
    </div>
</div>