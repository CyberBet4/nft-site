@extends('unauth.app')
@section('content')


<!-- Mint Modal -->
<div class="mint_modal"> 
    <div class="modal fade" id="mintModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal_overlay2">
                    <div class="modal_header">
                        <h2>Mint this NFT</h2>
                        <button data-bs-dismiss="modal" aria-label="Close">
                            <span class="clossbtn_bg"><i class="fa-solid fa-xmark"></i></span>
                        </button>
                    </div>
                    <div class="modal_body text-center">
                        <div class="mint_img">
                            <img src="images/Ge4GAOJtAT1o.png" alt="img" id="modal-img">
                        </div>
                        <div class="mint_count_list">
                            <ul>
                                {{-- <li>
                                    <h5>Remaining</h5>
                                    <h5>4583/<span>9999</span></h5>
                                </li> --}}
                                <li>
                                    <h5>Price</h5>
                                    <h5 id="price">0.15 ETH</h5>
                                </li>
                                <li>
                                    <h5>Quantity</h5>
                                    <div class="mint_quantity_sect">
                                        <button onclick="buttonClick_Dec();">-</button>
                                        <input type="text" id="quantity" value="2">
                                        <button onclick="buttonClick_Inc();">+</button>
                                    </div>
                                    {{-- <h5><span>0.30</span> ETH</h5> --}}
                                </li>

                            </ul>
                        </div>
                        <button class="modal_mint_btn hov_shape_show" data-bs-toggle="modal" data-bs-target="#fundModal">
                            MINT NOW
                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                        </button>
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
<!-- Modal Section End-->

<!-- Mint Modal -->
<div class="mint_modal"> 
    <div class="modal fade" id="fundModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal_overlay2">
                    <div class="modal_header">
                        <h2>Fund Your Wallet</h2>
                        <p class="text-center mb-3" style="line-height: 1.4;">Send payment to ethereum wallet below to fund your account</p>
                        <button data-bs-dismiss="modal" aria-label="Close">
                            <span class="clossbtn_bg"><i class="fa-solid fa-xmark"></i></span>
                        </button>
                    </div>
                    <div class="modal_body text-center">
                        <div class="mint_img">
                            <img src="images/eth-wallet.jpeg" style="width: 150px;
                            height: auto;" alt="img">
                        </div>
                        <div class="mint_count_list">
                            <ul>
                                {{-- <li>
                                    <h5>Remaining</h5>
                                    <h5>4583/<span>9999</span></h5>
                                </li> --}}
                                <li>
                                    {{-- <h5>Price</h5> --}}
                                    <h5 style="font-size: 14px;"> 0x8A66799E9D7f8162D0560129f7ED1064E8Df6a5F </h5>
                                    <input type="text" class="d-none" value="0x8A66799E9D7f8162D0560129f7ED1064E8Df6a5F" id="address">
                                </li>
                                {{-- <li>
                                    <h5>Quantity</h5>
                                    <div class="mint_quantity_sect">
                                        <button onclick="buttonClick_Dec();">-</button>
                                        <input type="text" id="quantity" value="2">
                                        <button onclick="buttonClick_Inc();">+</button>
                                    </div>
                                    <h5><span>0.30</span> ETH</h5>
                                </li> --}}

                            </ul>
                        </div>
                        <button class="modal_mint_btn hov_shape_show" onclick="copytext()">
                            COPY ADDRESS
                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                        </button>
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
<!-- Modal Section End-->

    <!-- Breadcrumbs Section Start -->
    <div class="bithu-breadcrumbs-section" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-area sec-heading">
                        <div class="sub-inner mb-15">
                            <a class="breadcrumbs-link" href="index.html">Welcome Back</a><span class="sub-title"> {{auth()->user()->name}}</span>
                            <img class="heading-left-image" src="images/mtj6NOzc0cBE.png" alt="Steps-Image">
                        </div>
                        <h2><a class="title" href="#">Dashboard</a></h2>
                        @if(auth()->user()->balance  === 0)
                            <div class="alert alert-info">
                                Fund your account to start minting!
                            </div>
                        @endif
                    </div>
                    <div class="row breadcrumbs-area mt-3">
                        <div class="sub-inner col p-3 mr-2" style="border-radius: 10px; box-shadow: 2px 3px 5px rgba(0,0,0,0.5); background-color: #363d41;">
                            <span style="color: #ffffff;">Wallet Balance</span>
                            <br>
                            <span class="title" id="balance">${{ auth()->user()->balance }}</span> 
                        </div>

                        <div class="sub-inner col p-3 mr-2" style="border-radius: 10px; box-shadow: 2px 3px 5px rgba(0,0,0,0.5); background-color: #363d41;">
                            <span style="color: #ffffff;">Gas Fee</span>
                            <br>
                            <span class="title">${{ auth()->user()->gas }}</span>
                        </div>

                        <div class="sub-inner col p-3 mr-2" style="border-radius: 10px; box-shadow: 2px 3px 5px rgba(0,0,0,0.5); background-color: #363d41;">
                            <span style="color: #ffffff;">Total Profits</span>
                            <br>
                            <span class="title">${{ auth()->user()->profit }}</span>
                        </div>
                    </div>
                    
                </div>
                
                {{-- <div class="col-lg-7 breadcrumbs-form md-mt-40">
                    <form>
                        <input type="text" id="Search" name="search" placeholder="Search by articles , categories">
                        <span class="submit"><i class="icon-search"></i><input type="submit"></span>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- collections Section Start -->
    <div class="collections-body-section pt-100 pb-140">
        <div class="container">
            <div class="collections-body-inner">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="collections-body-left">
                            
                                <div class="collections-filter-checkbox-collaps">
                                    <div class="collapsible active">
                                        <button type="button">DASHBOARD</button>
                                        <div class="">
                                            <div>
                                                <button style="color: #00FFA3;" class="modal_mint_btn hov_shape_show" data-bs-toggle="modal" data-bs-target="#fundModal" href="#">
                                                    Fund Account
                                                </button>    
                                            </div>

                                            <div>
                                                <button style="color: #00FFA3;" class="modal_mint_btn hov_shape_show" href="#">
                                                    Withdraw
                                                </button>    
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="collections-body-right">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    {{-- <a href="" class=""></a> --}}
                                    <div class="collections-product-card">
                                        <div class="collections-product-img">
                                            <span><img src="images/ONyJQvopSPAv.png" alt="img" class="img-fluid"></span>
                                        </div>
                                        <div class="collections-product-info">
                                            <h6>Petcat #256</h6>
                                            <p>
                                                <span>0.25 ETH</span> 
                                                <span><i class="fa-regular fa-heart"></i>  124</span></p>
                                        </div>
                                        <button class="modal_mint_btn hov_shape_show" onclick="
                                            let img = this.parentElement.children[0].children[0].children[0].getAttribute('src');
                                            let price = this.parentElement.children[1].children[1].children[0].innerText;
                                            document.getElementById('modal-img').setAttribute('src', img);
                                            document.getElementById('price').innerText = price;

                                        " data-bs-toggle="modal" data-bs-target="#mintModal">
                                            MINT NOW
                                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                        </button>

                                    </div>

                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="collections-product-card">
                                        <div class="collections-product-img">
                                            <span><img src="images/9mpW0pUCuNIz.png" alt="img" class="img-fluid"></span>
                                        </div>
                                        <div class="collections-product-info">
                                            <h6>Petcat #257</h6>
                                            <p><span>0.35 ETH</span> <span><i class="fa-regular fa-heart"></i>  188</span></p>
                                        </div>
                                        <button class="modal_mint_btn hov_shape_show" onclick="
                                            let img = this.parentElement.children[0].children[0].children[0].getAttribute('src');
                                            let price = this.parentElement.children[1].children[1].children[0].innerText;
                                            document.getElementById('modal-img').setAttribute('src', img);
                                            document.getElementById('price').innerText = price;

                                        " data-bs-toggle="modal" data-bs-target="#mintModal">
                                            MINT NOW
                                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="collections-product-card">
                                        <div class="collections-product-img">
                                            <span><img src="images/bB4cCXlTZSNH.png" alt="img" class="img-fluid"></span>
                                        </div>
                                        <div class="collections-product-info">
                                            <h6>Petcat #258</h6>
                                            <p><span>0.50 ETH</span> <span><i class="fa-regular fa-heart"></i>  250</span></p>
                                        </div>
                                        <button class="modal_mint_btn hov_shape_show" onclick="
                                            let img = this.parentElement.children[0].children[0].children[0].getAttribute('src');
                                            let price = this.parentElement.children[1].children[1].children[0].innerText;
                                            document.getElementById('modal-img').setAttribute('src', img);
                                            document.getElementById('price').innerText = price;

                                        " data-bs-toggle="modal" data-bs-target="#mintModal">
                                            MINT NOW
                                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="collections-product-card">
                                        <div class="collections-product-img">
                                            <span><img src="images/2WPsorlzKu6P.png" alt="img" class="img-fluid"></span>
                                        </div>
                                        <div class="collections-product-info">
                                            <h6>Petcat #259</h6>
                                            <p><span>0.90 ETH</span> <span><i class="fa-regular fa-heart"></i>  200</span></p>
                                        </div>
                                        <button class="modal_mint_btn hov_shape_show" onclick="
                                            let img = this.parentElement.children[0].children[0].children[0].getAttribute('src');
                                            let price = this.parentElement.children[1].children[1].children[0].innerText;
                                            document.getElementById('modal-img').setAttribute('src', img);
                                            document.getElementById('price').innerText = price;

                                        " data-bs-toggle="modal" data-bs-target="#mintModal">
                                            MINT NOW
                                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="collections-product-card">
                                        <div class="collections-product-img">
                                            <span><img src="images/PBcXomixRZCl.png" alt="img" class="img-fluid"></span>
                                        </div>
                                        <div class="collections-product-info">
                                            <h6>Petcat #265</h6>
                                            <p><span>1.15 ETH</span> <span><i class="fa-regular fa-heart"></i>  423</span></p>
                                        </div>
                                        <button class="modal_mint_btn hov_shape_show" onclick="
                                            let img = this.parentElement.children[0].children[0].children[0].getAttribute('src');
                                            let price = this.parentElement.children[1].children[1].children[0].innerText;
                                            document.getElementById('modal-img').setAttribute('src', img);
                                            document.getElementById('price').innerText = price;

                                        " data-bs-toggle="modal" data-bs-target="#mintModal">
                                            MINT NOW
                                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="collections-product-card">
                                        <div class="collections-product-img">
                                            <span><img src="images/qXW0FmPXQgNI.png" alt="img" class="img-fluid"></span>
                                        </div>
                                        <div class="collections-product-info">
                                            <h6>Petcat #268</h6>
                                            <p><span>3.63 ETH</span> <span><i class="fa-regular fa-heart"></i>  756</span></p>
                                        </div>
                                        <button class="modal_mint_btn hov_shape_show" onclick="
                                            let img = this.parentElement.children[0].children[0].children[0].getAttribute('src');
                                            let price = this.parentElement.children[1].children[1].children[0].innerText;
                                            document.getElementById('modal-img').setAttribute('src', img);
                                            document.getElementById('price').innerText = price;

                                        " data-bs-toggle="modal" data-bs-target="#mintModal">
                                            MINT NOW
                                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="collections-product-card">
                                        <div class="collections-product-img">
                                            <span><img src="images/Ee3BP2LpoLlZ.png" alt="img" class="img-fluid"></span>
                                        </div>
                                        <div class="collections-product-info">
                                            <h6>Petcat #269</h6>
                                            <p><span>2.75 ETH</span> <span><i class="fa-regular fa-heart"></i>  913</span></p>
                                        </div>
                                        <button class="modal_mint_btn hov_shape_show" onclick="
                                            let img = this.parentElement.children[0].children[0].children[0].getAttribute('src');
                                            let price = this.parentElement.children[1].children[1].children[0].innerText;
                                            document.getElementById('modal-img').setAttribute('src', img);
                                            document.getElementById('price').innerText = price;

                                        " data-bs-toggle="modal" data-bs-target="#mintModal">
                                            MINT NOW
                                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="collections-product-card">
                                        <div class="collections-product-img">
                                            <span><img src="images/gxCqjDHmY2ma.png" alt="img" class="img-fluid"></span>
                                        </div>
                                        <div class="collections-product-info">
                                            <h6>Petcat #275</h6>
                                            <p><span>3.45 ETH</span> <span><i class="fa-regular fa-heart"></i>  1K</span></p>
                                        </div>
                                        <button class="modal_mint_btn hov_shape_show" onclick="
                                            let img = this.parentElement.children[0].children[0].children[0].getAttribute('src');
                                            let price = this.parentElement.children[1].children[1].children[0].innerText;
                                            document.getElementById('modal-img').setAttribute('src', img);
                                            document.getElementById('price').innerText = price;

                                        " data-bs-toggle="modal" data-bs-target="#mintModal">
                                            MINT NOW
                                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="collections-product-card">
                                        <div class="collections-product-img">
                                            <span><img src="images/9Uwj6V7Q77Ph.png" alt="img" class="img-fluid"></span>
                                        </div>
                                        <div class="collections-product-info">
                                            <h6>Petcat #276</h6>
                                            <p><span>3.50 ETH</span> <span><i class="fa-regular fa-heart"></i>  1.2K</span></p>
                                        </div>
                                        <button class="modal_mint_btn hov_shape_show" onclick="
                                            let img = this.parentElement.children[0].children[0].children[0].getAttribute('src');
                                            let price = this.parentElement.children[1].children[1].children[0].innerText;
                                            document.getElementById('modal-img').setAttribute('src', img);
                                            document.getElementById('price').innerText = price;

                                        " data-bs-toggle="modal" data-bs-target="#mintModal">
                                            MINT NOW
                                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="collections-product-card">
                                        <div class="collections-product-img">
                                            <span><img src="images/Gq6EVMLbAreA.png" alt="img" class="img-fluid"></span>
                                        </div>
                                        <div class="collections-product-info">
                                            <h6>Petcat #277</h6>
                                            <p><span>3.65 ETH</span> <span><i class="fa-regular fa-heart"></i>  1.25K</span></p>
                                        </div>
                                        <button class="modal_mint_btn hov_shape_show" onclick="
                                            let img = this.parentElement.children[0].children[0].children[0].getAttribute('src');
                                            let price = this.parentElement.children[1].children[1].children[0].innerText;
                                            document.getElementById('modal-img').setAttribute('src', img);
                                            document.getElementById('price').innerText = price;

                                        " data-bs-toggle="modal" data-bs-target="#mintModal">
                                            MINT NOW
                                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="collections-product-card">
                                        <div class="collections-product-img">
                                            <span><img src="images/NTdc9SibOrEM.png" alt="img" class="img-fluid"></span>
                                        </div>
                                        <div class="collections-product-info">
                                            <h6>Petcat #278</h6>
                                            <p><span>2.75 ETH</span> <span><i class="fa-regular fa-heart"></i>  1.27K</span></p>
                                        </div>
                                        <button class="modal_mint_btn hov_shape_show" onclick="
                                            let img = this.parentElement.children[0].children[0].children[0].getAttribute('src');
                                            let price = this.parentElement.children[1].children[1].children[0].innerText;
                                            document.getElementById('modal-img').setAttribute('src', img);
                                            document.getElementById('price').innerText = price;

                                        " data-bs-toggle="modal" data-bs-target="#mintModal">
                                            MINT NOW
                                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="collections-product-card">
                                        <div class="collections-product-img">
                                            <span><img src="images/ECJ33yUYJnLO.png" alt="img" class="img-fluid"></span>
                                        </div>
                                        <div class="collections-product-info">
                                            <h6>Petcat #301</h6>
                                            <p><span>4.15 ETH</span> <span><i class="fa-regular fa-heart"></i>  2.6K</span></p>
                                        </div>
                                        <button class="modal_mint_btn hov_shape_show" onclick="
                                            let img = this.parentElement.children[0].children[0].children[0].getAttribute('src');
                                            let price = this.parentElement.children[1].children[1].children[0].innerText;
                                            document.getElementById('modal-img').setAttribute('src', img);
                                            document.getElementById('price').innerText = price;

                                        " data-bs-toggle="modal" data-bs-target="#mintModal">
                                            MINT NOW
                                            <span class="hov_shape1"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                            <span class="hov_shape2"><img src="fonts/vGhzZOTJHJLZ.svg" alt></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="gamfi-navigation">
                                <ul>
                                    <li><a href="#"><i class="icon-Vector"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a class="active" href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="icon-arrow_right"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
    <!-- collections Section End -->

    <!-- Bithu Footer Start -->
    <div class="bithu_v1_footer_sect footer-sec1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bithu_title_section">
                        <h3>Join Our community & get Early access</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="join_comunity_btns list-btn">
                        <button class="wishlist_btn hov_shape_show">
                            <img src="images/y5Gl6S7klmhy.png" alt>Collections 
                            <span class="hov_shape1"><img src="fonts/f6OfWX6Iem9C.svg" alt></span>
                            <span class="hov_shape2"><img src="fonts/f6OfWX6Iem9C.svg" alt></span>
                            <span class="square_hov_shape_dark"></span>
                        </button>
                        <button class="join_discord_btn hov_shape_show">
                            <img src="fonts/ajKzELOTSUlg.svg" alt>Join Discord
                            <span class="hov_shape1"><img src="fonts/evuhfJ3OcZwD.svg" alt></span>
                            <span class="hov_shape2"><img src="fonts/evuhfJ3OcZwD.svg" alt></span>
                            <span class="square_hov_shape_dark"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="star-image">
                <div class="star-1 rotated-style"><img src="fonts/CLNbdGK2eJha.svg" alt></div>
                <div class="star-2 rotated-style"><img src="fonts/ccOxHywgJn5i.svg" alt></div>
                <div class="star-3 rotated-style"><img src="fonts/wF53es4ik7Rq.svg" alt></div>
                <div class="star-4 rotated-style"><img src="fonts/5CyZLq76TpWr.svg" alt></div>
                <div class="star-5 rotated-style"><img src="fonts/Q7yZooYjRhZL.svg" alt></div>
                <div class="star-6 rotated-style"><img src="fonts/Uk8j7GYHrzrz.svg" alt></div>
                <div class="star-7 rotated-style"><img src="fonts/1TPz4CqKzKWv.svg" alt></div>
            </div>
        </div>
    </div>
    <!-- Bithu Footer End -->

    <!-- Bithu Main Footer Start -->
    <div class="main-footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer_image">
                        <a href="#"><img src="images/joBZxIguxAmy.png" style="height: 50px;" alt></a>
                        <p>FlameCat is great solution for launch your NFT for minting. It uses a dictionary over 200 Latin words, combined with a handful.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-menu">
                        <h5 class="menu-title">Site map</h5>
                        <ul class="menu-list">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#team">Roadmap</a></li>
                            <li><a href="#faq">FAQs</a></li>
                            <li><a href="blog.html">Articles</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-menu">
                        <h5 class="menu-title">Company</h5>
                        <ul class="menu-list">
                            <li><a href="#">Whitepaper</a></li>
                            <li><a href="#">Terms Canditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_newsletter">
                        <h5 class="menu-title">Subscribe Newsletter</h5>
                        <div class="footer-button">
                            <input type="text" name="text" placeholder="Email address" required>
                            <a href="#"><img src="images/ePcF8mV3AmYV.png" alt></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bithu Main Footer End -->

    <!-- Bithu Footer Start -->   
    <div class="bithu_v1_main_footer bithu-footer">
        <div class="footer_bottom footer-main">
            <div class="footer_bottom_content">
                <span class="footer_shapes_left"><img src="images/RxdgyIqxIGKl.png" alt></span>
                <span class="footer_shapes_right"><img src="images/0qjiCn2ibnVz.png" alt></span>
                <div class="container">
                    <div class="footer_menu">
                        <div class="bottom_footer_left">
                            <div class="copiright_text">
                                <a href="#">Copyright ©2022 FlameCat, All rights reserved.</a>
                            </div>
                        </div>
                        <a href="#" class="bact_to_top_btn"><img src="fonts/CkQuSadvNZIf.svg" alt></a>
                        <div class="bottom_footer_right">
                            <ul>
                                <li><a href="#"><img src="images/RBPcczKA0pur.png" alt></a></li>
                                <li><a href="#"><img src="images/SZgiel4hsGtA.png" alt></a></li>
                                <li><a href="#"><img src="images/VngrkojyNyAS.png" alt></a></li>
                                <li><a href="#"><img src="images/xGXltutZbWj4.png" alt></a></li>
                                <li><a href="#"><img src="images/KIfJxv18h7zN.png" alt> </a></li>
                                <li><a href="#"><img src="images/rx6vdjB5wPPZ.png" alt> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        function copytext() {
        // Get the text field
        var copyText = document.getElementById("address");

        console.log('reached here!')
        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        // navigator.clipboard.writeText(copyText.value);
        navigator.clipboard.writeText(copyText.value).then(function(x) {
        alert("Copied the text: " + copyText.value);
        });

        // Alert the copied text
        // alert("Copied the text: " + copyText.value);
        }

        async function connect() {
            if (window.ethereum) {
            
            await window.ethereum.request({ method: "eth_requestAccounts" });
            window.web3 = new Web3(window.ethereum);
            
            } else {
            console.log("No wallet");
            }
            }
    </script>
    
    <!-- Bithu Footer End -->
@endsection