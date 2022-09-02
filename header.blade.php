<!DOCTYPE html><html lang="zxx"><head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title> FlameCat - NFT Minting/Collection</title>
    <meta name="description" content>
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="images/rWaISEoQ5zuz.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/nlvK1UnPiy7m.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href={{ asset("css/c4GzCTvr0dEA.css")}}>
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href={{ asset("css/IwZYQNiq9R3a.css")}}>
    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href={{ asset("css/jxvVraPZK323.css")}}>
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="css/ZgofA7ysVeOq.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href={{ asset("css/15WmoKhqO6hP.css")}}>
    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href={{ asset("css/ZutGIVHVwEhp.css")}}>
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href={{ asset("css/cALYSjKtWfuU.css")}}>
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href={{ asset("css/style.css")}}>
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href={{ asset("css/SFRht5YUKyXp.css")}}>
</head>
<body>
    <!--Preloader area start here-->
    <section class="loader_first">
        <div class="loader_first_inner">
            <div class="circular-spinner"></div>
        </div>
    </section>
    <!--Preloader area End here-->

<!-- Connect Wallet Modal -->
<div class="connect_modal"> 
    <div class="modal fade " id="connectModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal_overlay">
                    <div class="modal_header">
                        <h2>CREATE AN ACCOUNT</h2>
                        <button data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="modal_body text-center">
                        <p>Sign up to start minting</p>
                        <div class="connect-section">
                            <form action={{route("signup")}} method="post">
                            @csrf
                                <input type="text" class="custom-form-control" name="name" placeholder="Name">
                                <input type="email" class="custom-form-control" name="email" placeholder="Email address">
                                <input type="password" class="custom-form-control" name="password" placeholder="Password">
                                <button type="submit" class="custom-btn">Sign Up</button> 
                            </form>
                        </div>
                        <h6>By sigining up, you agree to our <a href="#">Terms of Service</a> and our <a href="#">Privacy Policy</a>.</h6>
                    </div>
                    <div class="modal_bottom_shape">
                        <span class="modal_bottom_shape_left"><img src="fonts/ltcdonq8ZksZ.svg" alt></span>
                        <span class="modal_bottom_shape_right"><img src="fonts/ltcdonq8ZksZ.svg" alt></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Connect Wallet Modal -->



{{-- LOGIN MODAL --}}
<!-- Connect Wallet Modal -->
<div class="connect_modal"> 
    <div class="modal fade " id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal_overlay">
                    <div class="modal_header">
                        <h2>LOGIN</h2>
                        <button data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="modal_body text-center">
                        <p>Sign up to start minting</p>
                        <div class="connect-section">
                            <form action={{route("login")}} method="post">
                            @csrf
                                <input type="email" class="custom-form-control" name="email" placeholder="Email address">
                                <input type="password" class="custom-form-control" name="password" placeholder="Password">
                                <button type="submit" class="custom-btn">Login</button> 
                            </form>
                        </div>
                        {{-- <h6>By L up, you agree to our <a href="#">Terms of Service</a> and our <a href="#">Privacy Policy</a>.</h6> --}}
                    </div>
                    <div class="modal_bottom_shape">
                        <span class="modal_bottom_shape_left"><img src="fonts/ltcdonq8ZksZ.svg" alt></span>
                        <span class="modal_bottom_shape_right"><img src="fonts/ltcdonq8ZksZ.svg" alt></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Connect Wallet Modal -->

@error('email')
<div class="alert alert-danger" style="position: absolute; top: 10%; left: 50%; box-shadow: 2px 3px 25px rgba(0,0,0,0.5); transform: translateX(-50%);">
    {{ $message }}
</div>
    
@enderror