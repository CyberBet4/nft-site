 <!--Header Start-->
 <div class="bithu_header" id="navbar">
    <div class="container">
        <!-- Main Menu Start -->
        <div class="bithu_menu_sect">
            <div class="bithu_menu_left_sect">
                <div class="logo">
                    <a href={{ route("home")}}><img src="images/joBZxIguxAmy.png" alt="logo"></a>
                </div>
            </div>
            <div class="bithu_menu_right_sect bithu_v1_menu_right_sect">
                <div class="bithu_menu_list">
                    <ul>
                        <li><a href={{ route("home")}}>Home</a></li>
                        {{-- <li><a href="#about">About</a></li> --}}
                        <li><a href={{ route("home") . "#roadmap"}}>Roadmap</a></li>
                        <li><a href={{ route("collection")}}>Collection</a></li>
                        <li><a href={{ route("home") . "#faq"}}>FAQ</a></li>
                        <li><a href={{ route("about")}}>About Us</a></li>
                    </ul>   
                </div>

                @auth

                <div class="bithu_menu_right_buttons">
                    <button href={{route('dashboard')}} class="join_btn hov_shape_show">
                        Dashboard
                        <span class="hov_shape1"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                        <span class="hov_shape2"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                        <span class="square_hov_shape"></span>
                    </button>
                    <button class="menu_bar"><i class="fa-solid fa-bars"></i></button>
                    <div class="connect-btn-wrapper">
                        <form action={{ route("logout")}} method="post">
                        @csrf
                        <button class="connect_btn hov_shape_show">
                            {{-- <img src="fonts/q8IEPqIkVjHt.svg" alt>CONNECT --}}
                            Logout
                            <span class="hov_shape1"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                            <span class="hov_shape2"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                            <span class="square_hov_shape"></span>
                        </button>
                        </form>
                    </div>
                </div>
          
                @endauth
          
                @guest
                
                <div class="bithu_menu_right_buttons">
                    <button class="join_btn hov_shape_show" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                        <span class="hov_shape1"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                        <span class="hov_shape2"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                        <span class="square_hov_shape"></span>
                    </button>
                    <button class="menu_bar"><i class="fa-solid fa-bars"></i></button>
                    <div class="connect-btn-wrapper">
                        <button class="connect_btn hov_shape_show" data-bs-toggle="modal" data-bs-target="#connectModal">
                            {{-- <img src="fonts/q8IEPqIkVjHt.svg" alt>CONNECT --}}
                            Signup
                            <span class="hov_shape1"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                            <span class="hov_shape2"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                            <span class="square_hov_shape"></span>
                        </button>
                    </div>
                </div>
                @endguest
            </div>
        </div>
        <!-- Main Menu END -->
        
        <!-- Mobile Menu Start -->
        <div class="bithu_mobile_menu" id="bithu_mobile_menu">
            <div class="bithu_mobile_menu_content">
                <div class="mobile_menu_logo">
                    <span><img src="images/joBZxIguxAmy.png" alt></span>
                    <button class="mobile_menu_close_btn"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="bithu_mobile_menu_list">
                    <ul>
                        <li class="mobile-menu-hide"><a href={{ route("home")}}>Home</a></li>
                        {{-- <li class="mobile-menu-hide"><a href="#about">About</a></li> --}}
                        <li class="mobile-menu-hide"><a href={{ route("home") . "#roadmap" }}>Roadmap</a></li>
                        <li class="mobile-menu-hide"><a href={{ route("collection")}}>Collection</a></li>
                        <li class="mobile-menu-hide"><a href={{ route("home") . "#faq"}}>FAQ</a></li>
                        <li class="mobile-menu-hide"><a href={{ route("about")}}>About Us</a></li>
                    </ul>
                </div>
                <div class="mobile_menu_btns">
                    <ul class="mobile_menu_social_links">
                        <li><a href="#"><img src="fonts/QJwZKV3ppqVu.svg" alt></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-discord"></i></a></li>
                    </ul>

                    @auth
                        <div class="connect-btn-wrapper w-100">
                            <a href={{ route("dashboard")}} class="connect_btn hov_shape_show mobile-menu-hide">
                                Dashboard
                                <span class="hov_shape1"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                                <span class="hov_shape2"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                                <span class="square_hov_shape"></span>
                            </a>
                        </div>

                        <div class="connect-btn-wrapper w-100">
                            <form action={{ route("logout")}} method="post">
                                @csrf
                            <button class="connect_btn hov_shape_show mobile-menu-hide">
                                Logout
                                <span class="hov_shape1"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                                <span class="hov_shape2"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                                <span class="square_hov_shape"></span>
                            </button>
                            </form>
                        </div>
                    @endauth

                    @guest
                    <div class="connect-btn-wrapper w-100">
                        <button class="connect_btn hov_shape_show mobile-menu-hide" data-bs-toggle="modal" data-bs-target="#connectModal">
                            Sign Up
                            <span class="hov_shape1"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                            <span class="hov_shape2"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                            <span class="square_hov_shape"></span>
                        </button>
                    </div>

                    <div class="connect-btn-wrapper w-100">
                        <button class="connect_btn hov_shape_show mobile-menu-hide" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Log In
                            <span class="hov_shape1"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                            <span class="hov_shape2"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                            <span class="square_hov_shape"></span>
                        </button>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
        <!-- Mobile Menu End -->
    </div>
</div>