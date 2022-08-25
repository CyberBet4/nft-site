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
                        <li><a href="#roadmap">Roadmap</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href={{ route("about")}}>About Us</a></li>
                    </ul>
                </div>
                <div class="bithu_menu_right_buttons">
                    <button class="join_btn hov_shape_show">
                        Sign up
                        <span class="hov_shape1"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                        <span class="hov_shape2"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                        <span class="square_hov_shape"></span>
                    </button>
                    <button class="menu_bar"><i class="fa-solid fa-bars"></i></button>
                    <div class="connect-btn-wrapper">
                        <button class="connect_btn hov_shape_show" data-bs-toggle="modal" data-bs-target="#connectModal">
                            {{-- <img src="fonts/q8IEPqIkVjHt.svg" alt>CONNECT --}}
                            Login
                            <span class="hov_shape1"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                            <span class="hov_shape2"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                            <span class="square_hov_shape"></span>
                        </button>
                    </div>
                </div>
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
                        <li class="mobile-menu-hide"><a href="#home">Home</a></li>
                        {{-- <li class="mobile-menu-hide"><a href="#about">About</a></li> --}}
                        <li class="mobile-menu-hide"><a href="#roadmap">Roadmap</a></li>
                        <li class="mobile-menu-hide"><a href="#team">Team</a></li>
                        <li class="mobile-menu-hide"><a href="#faq">FAQ</a></li>
                        <li class="mobile-menu-hide"><a href={{ route("about")}}>About Us</a></li>
                    </ul>
                </div>
                <div class="mobile_menu_btns">
                    <ul class="mobile_menu_social_links">
                        <li><a href="#"><img src="fonts/QJwZKV3ppqVu.svg" alt></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-discord"></i></a></li>
                    </ul>
                    <div class="connect-btn-wrapper w-100">
                        <button class="connect_btn hov_shape_show mobile-menu-hide" data-bs-toggle="modal" data-bs-target="#connectModal">
                            <img src="fonts/q8IEPqIkVjHt.svg" alt>Connect
                            <span class="hov_shape1"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                            <span class="hov_shape2"><img src="fonts/dle9yZdldMMf.svg" alt></span>
                            <span class="square_hov_shape"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu End -->
    </div>
</div>