<header>
    <div class="container">
        <div class="row" style="display: flex; align-items: center; font-size: 0.875rem; line-height: 1.25rem;">
            <div class="col-2 col-md-1 d-lg-none">
                <div class="wsus__mobile_menu_area">
                    <span class="wsus__mobile_menu_icon"><i class="fal fa-bars"></i></span>
                </div>
            </div>
            <div class="col-xl-2 col-7 col-md-8 col-lg-2">
                <div class="wsus_logo_area">
                    <a class="wsus__header_logo" href="{{ route('home') }}">
                        <img src="/assets/logo/logo_horizontal.svg" alt="logo" class="img-fluid w-100">
                    </a>
                </div>
            </div>

            <div style="display: flex; flex: 1; justify-content: space-between; align-items: center;">
                <div style="display: flex; align-items: center; flex: 1; width: 100%">

                    <div style="margin-right: 10px; text-align: center; display: flex; align-items: center;">
                        Productos&nbsp;
                        <i>
                            <svg width="12" height="12" viewBox="0 0 6 4" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.38737 0.64624L2.89779 2.72089L0.408203 0.64624" stroke="#001E00"
                                    stroke-width="0.622396" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </i>

                    </div>


                    <div style="position: relative; width: 100%;">
                        <form>
                            <div style="position: relative; display: flex; flex: 1; width: 100%;">
                                <input type="text" placeholder="Busca tus productos en Buhogt"
                                    style="padding: 10px; border: 1px solid #000; border-radius: 20px; width: 100%">
                                <button type="submit"
                                    style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); border: none; background: none;">
                                    <i class="far fa-search" style="border: none;"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>





                <div class="px-4 d-none d-lg-flex align-items-center">
                    <!-- La clase d-none oculta el elemento en tamaños de pantalla más pequeños que lg -->
                    <a href="{{route('login')}}" style="margin-right: 15px;">
                        Iniciar sesión
                    </a>
                    @auth

                    Hola

                    @endauth
                    <a style="margin-right: 15px;">
                        Registrarse
                    </a>
                    <a>
                        Tienda
                    </a>
                </div>

            </div>

            <div class="w-12 col-md-3 d-none d-lg-block" style="width: 12%;">
                <!-- La clase d-none d-lg-block oculta el elemento en tamaños de pantalla lg o más pequeños -->
                <div>
                    <ul class="wsus__icon_area">
                        <li><a href="wishlist.html"><i>
                                    <svg width="21" height="21" viewBox="0 0 18 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.81643 15.2766C7.44633 15.2766 0.517822 10.0385 0.517822 5.31828C0.517822 2.47932 2.47961 0.339111 5.08206 0.339111C6.49416 0.426497 7.82415 1.03268 8.81643 2.04116C9.81058 1.03534 11.1395 0.429647 12.5508 0.339111C15.1533 0.339111 17.115 2.47932 17.115 5.31828C17.115 10.0385 10.1865 15.2766 8.81643 15.2766ZM5.08206 1.99883C3.3991 1.99883 2.17754 3.39549 2.17754 5.31828C2.17754 8.72735 7.51521 13.0567 8.81643 13.6169C10.1143 13.0717 15.4553 8.77714 15.4553 5.31828C15.4553 3.39549 14.2338 1.99883 12.5508 1.99883C10.9085 1.99883 9.48032 3.74569 9.46289 3.76395L8.80896 4.5714L8.16582 3.75814C8.14093 3.72743 6.74178 1.99883 5.08206 1.99883Z"
                                            fill="#222222" />
                                    </svg>
                                </i><span>05</span></a></li>
                        <li><a href="{{ route('compare') }}"><i class="fal fa-random"></i><span>03</span></a></li>
                        <li><a class="wsus__cart_icon" href="#">
                                <i>
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_488_39222)">
                                            <path
                                                d="M8.1604 19.1065C8.60059 19.1065 9.02274 18.9317 9.334 18.6204C9.64526 18.3091 9.82012 17.887 9.82012 17.4468C9.82012 17.0066 9.64526 16.5845 9.334 16.2732C9.02274 15.9619 8.60059 15.7871 8.1604 15.7871C7.72021 15.7871 7.29806 15.9619 6.9868 16.2732C6.67554 16.5845 6.50068 17.0066 6.50068 17.4468C6.50068 17.887 6.67554 18.3091 6.9868 18.6204C7.29806 18.9317 7.72021 19.1065 8.1604 19.1065ZM13.9694 19.1065C14.4096 19.1065 14.8318 18.9317 15.143 18.6204C15.4543 18.3091 15.6292 17.887 15.6292 17.4468C15.6292 17.0066 15.4543 16.5845 15.143 16.2732C14.8318 15.9619 14.4096 15.7871 13.9694 15.7871C13.5292 15.7871 13.1071 15.9619 12.7958 16.2732C12.4846 16.5845 12.3097 17.0066 12.3097 17.4468C12.3097 17.887 12.4846 18.3091 12.7958 18.6204C13.1071 18.9317 13.5292 19.1065 13.9694 19.1065ZM18.1187 4.99889H5.39281L4.8227 2.33503C4.78283 2.1494 4.68051 1.98305 4.53281 1.86375C4.38511 1.74444 4.20096 1.67939 4.01109 1.67944H1.52151C1.30142 1.67944 1.09034 1.76687 0.934711 1.9225C0.779082 2.07813 0.69165 2.28921 0.69165 2.5093C0.69165 2.7294 0.779082 2.94048 0.934711 3.0961C1.09034 3.25173 1.30142 3.33917 1.52151 3.33917H3.33974L5.68907 14.3016C5.70282 14.3471 5.72059 14.3913 5.74219 14.4336C5.75629 14.4776 5.77372 14.5207 5.79447 14.5622C5.82676 14.6082 5.86375 14.6508 5.90484 14.6892C5.92716 14.7186 5.95156 14.7463 5.97787 14.7722C6.026 14.8062 6.07745 14.8361 6.13139 14.8593C6.15961 14.8776 6.18948 14.8942 6.22019 14.9091C6.31018 14.9413 6.4051 14.9576 6.50068 14.9572H15.6292C15.8077 14.9572 15.9815 14.8997 16.1247 14.7931C16.2679 14.6865 16.3729 14.5366 16.4242 14.3655L18.9137 6.06692C18.9507 5.94302 18.9582 5.81221 18.9357 5.68489C18.9132 5.55758 18.8612 5.43728 18.784 5.33357C18.7068 5.22986 18.6065 5.1456 18.491 5.0875C18.3755 5.02939 18.248 4.99905 18.1187 4.99889ZM16.2565 9.14819H13.9694V6.65861H17.0034L16.2565 9.14819ZM7.18033 13.2975L6.68242 10.8079H8.1604V13.2975H7.18033ZM9.82012 10.8079H12.3097V13.2975H9.82012V10.8079ZM9.82012 9.14819V6.65861H12.3097V9.14819H9.82012ZM8.1604 6.65861V9.14819H6.3513L5.85339 6.65861H8.1604ZM15.0117 13.2975H13.9694V10.8079H15.7586L15.0117 13.2975Z"
                                                fill="#222222" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_488_39222">
                                                <rect width="19.9167" height="19.9167" fill="white"
                                                    transform="translate(0.69165 0.849609)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </i>
                                <span>04</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="wsus__mini_cart">
        <h4>shopping cart <span class="wsus_close_mini_cart"><i class="far fa-times"></i></span></h4>
        <ul>
            <li>
                <div class="wsus__cart_img">
                    <a href="#"><img src="images/tab_2.jpg" alt="product" class="img-fluid w-100"></a>
                    <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                </div>
                <div class="wsus__cart_text">
                    <a class="wsus__cart_title" href="#">apple 9.5" 7 serise tab with full view display</a>
                    <p>$140 <del>$150</del></p>
                </div>
            </li>
            <li>
                <div class="wsus__cart_img">
                    <a href="#"><img src="images/pro4.jpg" alt="product" class="img-fluid w-100"></a>
                    <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                </div>
                <div class="wsus__cart_text">
                    <a class="wsus__cart_title" href="#">men's fashion casual watch</a>
                    <p>$130</p>
                </div>
            </li>
            <li>
                <div class="wsus__cart_img">
                    <a href="#"><img src="images/pro2.jpg" alt="product" class="img-fluid w-100"></a>
                    <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                </div>
                <div class="wsus__cart_text">
                    <a class="wsus__cart_title" href="#">men's casual shoes</a>
                    <p>$140 <del>$150</del></p>
                </div>
            </li>
            <li>
                <div class="wsus__cart_img">
                    <a href="#"><img src="images/pro9.jpg" alt="product" class="img-fluid w-100"></a>
                    <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                </div>
                <div class="wsus__cart_text">
                    <a class="wsus__cart_title" href="#">men's fashion casual sholder bag</a>
                    <p>$140</p>
                </div>
            </li>
            <li>
                <div class="wsus__cart_img">
                    <a href="#"><img src="images/tab_2.jpg" alt="product" class="img-fluid w-100"></a>
                    <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                </div>
                <div class="wsus__cart_text">
                    <a class="wsus__cart_title" href="#">apple 9.5" 7 serise tab with full view display</a>
                    <p>$140 <del>$150</del></p>
                </div>
            </li>
        </ul>
        <h5>sub total <span>$3540</span></h5>
        <div class="wsus__minicart_btn_area">
            <a class="common_btn" href="cart_view.html">view cart</a>
            <a class="common_btn" href="check_out.html">checkout</a>
        </div>
    </div>

</header>
<!--============================
    HEADER END
==============================-->


<!--============================
    MAIN MENU START
==============================-->
<nav class="wsus__main_menu d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="relative_contect d-flex">
                    <div class="wsus_menu_category_bar">
                        <i class="far fa-bars"></i>
                    </div>
                    <ul class="wsus_menu_cat_item show_home toggle_menu">
                        <li><a href="#"><i class="fas fa-star"></i> hot promotions</a></li>
                        <li><a class="wsus__droap_arrow" href="#"><i class="fal fa-tshirt"></i> Fashion
                            </a>
                            <ul class="wsus_menu_cat_droapdown">
                                <li><a href="#">New Arrivals <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Best Sellers</a></li>
                                <li><a href="#">Trending <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Home Audio & Theaters</a></li>
                                <li><a href="#">TV & Videos</a></li>
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Photos & Videos <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a class="wsus__droap_arrow" href="#"><i class="fas fa-tv"></i> Electronics</a>
                            <ul class="wsus_menu_cat_droapdown">
                                <li><a href="#">New Arrivals <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Best Sellers</a></li>
                                <li><a href="#">Trending <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Home Audio & Theaters</a></li>
                                <li><a href="#">TV & Videos</a></li>
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Photos & Videos <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a class="wsus__droap_arrow" href="#"><i class="fas fa-chair-office"></i>
                                Furniture</a>
                            <ul class="wsus_menu_cat_droapdown">
                                <li><a href="#">New Arrivals <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Best Sellers</a></li>
                                <li><a href="#">Trending <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Home Audio & Theaters</a></li>
                                <li><a href="#">TV & Videos</a></li>
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Photos & Videos <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a class="wsus__droap_arrow" href="#"><i class="fal fa-mobile"></i> Smart
                                Phones</a>
                            <ul class="wsus_menu_cat_droapdown">
                                <li><a href="#">New Arrivals <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Best Sellers</a></li>
                                <li><a href="#">Trending <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Home Audio & Theaters</a></li>
                                <li><a href="#">TV & Videos</a></li>
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Photos & Videos <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fas fa-home-lg-alt"></i> Home & Garden</a></li>
                        <li><a href="#"><i class="far fa-camera"></i> Accessories</a></li>
                        <li><a href="#"><i class="fas fa-heartbeat"></i> Healthy & Beauty</a></li>
                        <li><a href="#"><i class="fal fa-gift-card"></i> Gift Ideas</a></li>
                        <li><a href="#"><i class="fal fa-gamepad-alt"></i> Toy & Games</a></li>
                        <li><a href="#"><i class="fal fa-gem"></i> View All Categories</a></li>
                    </ul>

                    <ul class="wsus__menu_item">
                        <li><a style="font-weight: 600;" class="active" href="{{ route('home') }}">home</a>
                        </li>
                        <li><a style="font-weight: 600;" href="product_grid_view.html">Moda Mujer <i>
                                    <svg width="11" height="11" viewBox="0 0 9 6" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_488_39232" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="9" height="6">
                                            <g clip-path="url(#clip0_488_39232)">
                                                <path
                                                    d="M1.95939 0.792128L4.60167 3.43441L7.24396 0.792128C7.30701 0.729079 7.38186 0.679067 7.46424 0.644945C7.54661 0.610824 7.6349 0.593262 7.72407 0.593262C7.81323 0.593262 7.90153 0.610824 7.9839 0.644945C8.06628 0.679067 8.14112 0.729079 8.20418 0.792128C8.26722 0.855177 8.31724 0.930026 8.35135 1.0124C8.38548 1.09478 8.40304 1.18307 8.40304 1.27223C8.40304 1.36139 8.38548 1.44969 8.35135 1.53206C8.31724 1.61444 8.26722 1.68929 8.20418 1.75234L5.07838 4.87814C5.01538 4.94127 4.94054 4.99136 4.85816 5.02553C4.77577 5.0597 4.68746 5.07729 4.59827 5.07729C4.50908 5.07729 4.42076 5.0597 4.33838 5.02553C4.256 4.99136 4.18117 4.94127 4.11816 4.87814L0.992367 1.75234C0.929236 1.68934 0.87915 1.6145 0.844976 1.53212C0.810803 1.44974 0.793213 1.36143 0.793213 1.27223C0.793213 1.18304 0.810803 1.09473 0.844976 1.01235C0.87915 0.929965 0.929236 0.85513 0.992367 0.792128C1.25796 0.533347 1.6938 0.526538 1.95939 0.792128Z"
                                                    fill="black" />
                                            </g>
                                        </mask>
                                        <g mask="url(#mask0_488_39232)">
                                            <rect x="0.459229" y="0.16748" width="8.29861" height="4.97917"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_488_39232">
                                                <rect width="8.29861" height="4.97917" fill="white"
                                                    transform="translate(0.459229 0.16748)" />
                                            </clipPath>
                                        </defs>
                                    </svg></i></a>
                            <div class="wsus__mega_menu">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="wsus__mega_menu_colum">
                                            <h4>women</h4>
                                            <ul class="wsis__mega_menu_item">
                                                <li><a href="#">New Arrivals</a></li>
                                                <li><a href="#">Best Sellers</a></li>
                                                <li><a href="#">Trending</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Bags</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Jewlery & Watches</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="wsus__mega_menu_colum">
                                            <h4>men</h4>
                                            <ul class="wsis__mega_menu_item">
                                                <li><a href="#">New Arrivals</a></li>
                                                <li><a href="#">Best Sellers</a></li>
                                                <li><a href="#">Trending</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Bags</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Jewlery & Watches</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="wsus__mega_menu_colum">
                                            <h4>category</h4>
                                            <ul class="wsis__mega_menu_item">
                                                <li><a href="#"> Healthy & Beauty</a></li>
                                                <li><a href="#">Gift Ideas</a></li>
                                                <li><a href="#">Toy & Games</a></li>
                                                <li><a href="#">Cooking</a></li>
                                                <li><a href="#">Smart Phones</a></li>
                                                <li><a href="#">Cameras & Photo</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">View All Categories</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="wsus__mega_menu_colum">
                                            <h4>women</h4>
                                            <ul class="wsis__mega_menu_item">
                                                <li><a href="#">New Arrivals</a></li>
                                                <li><a href="#">Best Sellers</a></li>
                                                <li><a href="#">Trending</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Bags</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Jewlery & Watches</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a style="font-weight: 600;" href="{{ route('vendor') }}">Moda hombre
                                <i>
                                    <svg width="11" height="11" viewBox="0 0 9 6" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_488_39232" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="9" height="6">
                                            <g clip-path="url(#clip0_488_39232)">
                                                <path
                                                    d="M1.95939 0.792128L4.60167 3.43441L7.24396 0.792128C7.30701 0.729079 7.38186 0.679067 7.46424 0.644945C7.54661 0.610824 7.6349 0.593262 7.72407 0.593262C7.81323 0.593262 7.90153 0.610824 7.9839 0.644945C8.06628 0.679067 8.14112 0.729079 8.20418 0.792128C8.26722 0.855177 8.31724 0.930026 8.35135 1.0124C8.38548 1.09478 8.40304 1.18307 8.40304 1.27223C8.40304 1.36139 8.38548 1.44969 8.35135 1.53206C8.31724 1.61444 8.26722 1.68929 8.20418 1.75234L5.07838 4.87814C5.01538 4.94127 4.94054 4.99136 4.85816 5.02553C4.77577 5.0597 4.68746 5.07729 4.59827 5.07729C4.50908 5.07729 4.42076 5.0597 4.33838 5.02553C4.256 4.99136 4.18117 4.94127 4.11816 4.87814L0.992367 1.75234C0.929236 1.68934 0.87915 1.6145 0.844976 1.53212C0.810803 1.44974 0.793213 1.36143 0.793213 1.27223C0.793213 1.18304 0.810803 1.09473 0.844976 1.01235C0.87915 0.929965 0.929236 0.85513 0.992367 0.792128C1.25796 0.533347 1.6938 0.526538 1.95939 0.792128Z"
                                                    fill="black" />
                                            </g>
                                        </mask>
                                        <g mask="url(#mask0_488_39232)">
                                            <rect x="0.459229" y="0.16748" width="8.29861" height="4.97917"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_488_39232">
                                                <rect width="8.29861" height="4.97917" fill="white"
                                                    transform="translate(0.459229 0.16748)" />
                                            </clipPath>
                                        </defs>
                                    </svg></i></a></li>
                        <li><a style="font-weight: 600;" href="{{ route('blog') }}">Hogar & Jardín

                                <i>
                                    <svg width="11" height="11" viewBox="0 0 9 6" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_488_39232" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="9" height="6">
                                            <g clip-path="url(#clip0_488_39232)">
                                                <path
                                                    d="M1.95939 0.792128L4.60167 3.43441L7.24396 0.792128C7.30701 0.729079 7.38186 0.679067 7.46424 0.644945C7.54661 0.610824 7.6349 0.593262 7.72407 0.593262C7.81323 0.593262 7.90153 0.610824 7.9839 0.644945C8.06628 0.679067 8.14112 0.729079 8.20418 0.792128C8.26722 0.855177 8.31724 0.930026 8.35135 1.0124C8.38548 1.09478 8.40304 1.18307 8.40304 1.27223C8.40304 1.36139 8.38548 1.44969 8.35135 1.53206C8.31724 1.61444 8.26722 1.68929 8.20418 1.75234L5.07838 4.87814C5.01538 4.94127 4.94054 4.99136 4.85816 5.02553C4.77577 5.0597 4.68746 5.07729 4.59827 5.07729C4.50908 5.07729 4.42076 5.0597 4.33838 5.02553C4.256 4.99136 4.18117 4.94127 4.11816 4.87814L0.992367 1.75234C0.929236 1.68934 0.87915 1.6145 0.844976 1.53212C0.810803 1.44974 0.793213 1.36143 0.793213 1.27223C0.793213 1.18304 0.810803 1.09473 0.844976 1.01235C0.87915 0.929965 0.929236 0.85513 0.992367 0.792128C1.25796 0.533347 1.6938 0.526538 1.95939 0.792128Z"
                                                    fill="black" />
                                            </g>
                                        </mask>
                                        <g mask="url(#mask0_488_39232)">
                                            <rect x="0.459229" y="0.16748" width="8.29861" height="4.97917"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_488_39232">
                                                <rect width="8.29861" height="4.97917" fill="white"
                                                    transform="translate(0.459229 0.16748)" />
                                            </clipPath>
                                        </defs>
                                    </svg></i></a></li>
                        <li><a style="font-weight: 600;" href="daily_deals.html">Salud y belleza

                                <i>
                                    <svg width="11" height="11" viewBox="0 0 9 6" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_488_39232" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="9" height="6">
                                            <g clip-path="url(#clip0_488_39232)">
                                                <path
                                                    d="M1.95939 0.792128L4.60167 3.43441L7.24396 0.792128C7.30701 0.729079 7.38186 0.679067 7.46424 0.644945C7.54661 0.610824 7.6349 0.593262 7.72407 0.593262C7.81323 0.593262 7.90153 0.610824 7.9839 0.644945C8.06628 0.679067 8.14112 0.729079 8.20418 0.792128C8.26722 0.855177 8.31724 0.930026 8.35135 1.0124C8.38548 1.09478 8.40304 1.18307 8.40304 1.27223C8.40304 1.36139 8.38548 1.44969 8.35135 1.53206C8.31724 1.61444 8.26722 1.68929 8.20418 1.75234L5.07838 4.87814C5.01538 4.94127 4.94054 4.99136 4.85816 5.02553C4.77577 5.0597 4.68746 5.07729 4.59827 5.07729C4.50908 5.07729 4.42076 5.0597 4.33838 5.02553C4.256 4.99136 4.18117 4.94127 4.11816 4.87814L0.992367 1.75234C0.929236 1.68934 0.87915 1.6145 0.844976 1.53212C0.810803 1.44974 0.793213 1.36143 0.793213 1.27223C0.793213 1.18304 0.810803 1.09473 0.844976 1.01235C0.87915 0.929965 0.929236 0.85513 0.992367 0.792128C1.25796 0.533347 1.6938 0.526538 1.95939 0.792128Z"
                                                    fill="black" />
                                            </g>
                                        </mask>
                                        <g mask="url(#mask0_488_39232)">
                                            <rect x="0.459229" y="0.16748" width="8.29861" height="4.97917"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_488_39232">
                                                <rect width="8.29861" height="4.97917" fill="white"
                                                    transform="translate(0.459229 0.16748)" />
                                            </clipPath>
                                        </defs>
                                    </svg></i></a></li>
                        {{-- <li class="wsus__relative_li"><a href="#">pages <i class="fas fa-caret-down"></i></a>
                            <ul class="wsus__menu_droapdown">
                                <li><a href="404.html">404</a></li>
                                <li><a href="{{ route('faqs') }}">faq</a></li>
                                <li><a href="invoice.html">invoice</a></li>
                                <li><a href="about_us.html">about</a></li>
                                <li><a href="product_grid_view.html">product</a></li>
                                <li><a href="check_out.html">check out</a></li>
                                <li><a href="team.html">team</a></li>
                                <li><a href="change_password.html">change password</a></li>
                                <li><a href="custom_page.html">custom page</a></li>
                                <li><a href="forget_password.html">forget password</a></li>
                                <li><a href="privacy_policy.html">privacy policy</a></li>
                                <li><a href="product_category.html">product category</a></li>
                                <li><a href="brands.html">brands</a></li>
                            </ul>
                        </li> --}}
                        <li><a style="font-weight: 600;" href="track_order.html">Coleccionables y Arte
                                <i>
                                    <svg width="11" height="11" viewBox="0 0 9 6" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_488_39232" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="9" height="6">
                                            <g clip-path="url(#clip0_488_39232)">
                                                <path
                                                    d="M1.95939 0.792128L4.60167 3.43441L7.24396 0.792128C7.30701 0.729079 7.38186 0.679067 7.46424 0.644945C7.54661 0.610824 7.6349 0.593262 7.72407 0.593262C7.81323 0.593262 7.90153 0.610824 7.9839 0.644945C8.06628 0.679067 8.14112 0.729079 8.20418 0.792128C8.26722 0.855177 8.31724 0.930026 8.35135 1.0124C8.38548 1.09478 8.40304 1.18307 8.40304 1.27223C8.40304 1.36139 8.38548 1.44969 8.35135 1.53206C8.31724 1.61444 8.26722 1.68929 8.20418 1.75234L5.07838 4.87814C5.01538 4.94127 4.94054 4.99136 4.85816 5.02553C4.77577 5.0597 4.68746 5.07729 4.59827 5.07729C4.50908 5.07729 4.42076 5.0597 4.33838 5.02553C4.256 4.99136 4.18117 4.94127 4.11816 4.87814L0.992367 1.75234C0.929236 1.68934 0.87915 1.6145 0.844976 1.53212C0.810803 1.44974 0.793213 1.36143 0.793213 1.27223C0.793213 1.18304 0.810803 1.09473 0.844976 1.01235C0.87915 0.929965 0.929236 0.85513 0.992367 0.792128C1.25796 0.533347 1.6938 0.526538 1.95939 0.792128Z"
                                                    fill="black" />
                                            </g>
                                        </mask>
                                        <g mask="url(#mask0_488_39232)">
                                            <rect x="0.459229" y="0.16748" width="8.29861" height="4.97917"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_488_39232">
                                                <rect width="8.29861" height="4.97917" fill="white"
                                                    transform="translate(0.459229 0.16748)" />
                                            </clipPath>
                                        </defs>
                                    </svg></i></a></li>
                        <li><a style="font-weight: 600;" href="daily_deals.html">Zapatos
                                <i>
                                    <svg width="11" height="11" viewBox="0 0 9 6" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_488_39232" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="9" height="6">
                                            <g clip-path="url(#clip0_488_39232)">
                                                <path
                                                    d="M1.95939 0.792128L4.60167 3.43441L7.24396 0.792128C7.30701 0.729079 7.38186 0.679067 7.46424 0.644945C7.54661 0.610824 7.6349 0.593262 7.72407 0.593262C7.81323 0.593262 7.90153 0.610824 7.9839 0.644945C8.06628 0.679067 8.14112 0.729079 8.20418 0.792128C8.26722 0.855177 8.31724 0.930026 8.35135 1.0124C8.38548 1.09478 8.40304 1.18307 8.40304 1.27223C8.40304 1.36139 8.38548 1.44969 8.35135 1.53206C8.31724 1.61444 8.26722 1.68929 8.20418 1.75234L5.07838 4.87814C5.01538 4.94127 4.94054 4.99136 4.85816 5.02553C4.77577 5.0597 4.68746 5.07729 4.59827 5.07729C4.50908 5.07729 4.42076 5.0597 4.33838 5.02553C4.256 4.99136 4.18117 4.94127 4.11816 4.87814L0.992367 1.75234C0.929236 1.68934 0.87915 1.6145 0.844976 1.53212C0.810803 1.44974 0.793213 1.36143 0.793213 1.27223C0.793213 1.18304 0.810803 1.09473 0.844976 1.01235C0.87915 0.929965 0.929236 0.85513 0.992367 0.792128C1.25796 0.533347 1.6938 0.526538 1.95939 0.792128Z"
                                                    fill="black" />
                                            </g>
                                        </mask>
                                        <g mask="url(#mask0_488_39232)">
                                            <rect x="0.459229" y="0.16748" width="8.29861" height="4.97917"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_488_39232">
                                                <rect width="8.29861" height="4.97917" fill="white"
                                                    transform="translate(0.459229 0.16748)" />
                                            </clipPath>
                                        </defs>
                                    </svg></i></a></li>
                        <li><a style="font-weight: 600;" href="{{ route('landing') }}">Joyeria
                                <i>
                                    <svg width="11" height="11" viewBox="0 0 9 6" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_488_39232" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="9" height="6">
                                            <g clip-path="url(#clip0_488_39232)">
                                                <path
                                                    d="M1.95939 0.792128L4.60167 3.43441L7.24396 0.792128C7.30701 0.729079 7.38186 0.679067 7.46424 0.644945C7.54661 0.610824 7.6349 0.593262 7.72407 0.593262C7.81323 0.593262 7.90153 0.610824 7.9839 0.644945C8.06628 0.679067 8.14112 0.729079 8.20418 0.792128C8.26722 0.855177 8.31724 0.930026 8.35135 1.0124C8.38548 1.09478 8.40304 1.18307 8.40304 1.27223C8.40304 1.36139 8.38548 1.44969 8.35135 1.53206C8.31724 1.61444 8.26722 1.68929 8.20418 1.75234L5.07838 4.87814C5.01538 4.94127 4.94054 4.99136 4.85816 5.02553C4.77577 5.0597 4.68746 5.07729 4.59827 5.07729C4.50908 5.07729 4.42076 5.0597 4.33838 5.02553C4.256 4.99136 4.18117 4.94127 4.11816 4.87814L0.992367 1.75234C0.929236 1.68934 0.87915 1.6145 0.844976 1.53212C0.810803 1.44974 0.793213 1.36143 0.793213 1.27223C0.793213 1.18304 0.810803 1.09473 0.844976 1.01235C0.87915 0.929965 0.929236 0.85513 0.992367 0.792128C1.25796 0.533347 1.6938 0.526538 1.95939 0.792128Z"
                                                    fill="black" />
                                            </g>
                                        </mask>
                                        <g mask="url(#mask0_488_39232)">
                                            <rect x="0.459229" y="0.16748" width="8.29861" height="4.97917"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_488_39232">
                                                <rect width="8.29861" height="4.97917" fill="white"
                                                    transform="translate(0.459229 0.16748)" />
                                            </clipPath>
                                        </defs>
                                    </svg></i></a></li>

                        <li><a style="font-weight: 600;" href="{{ route('landing') }}">Más
                                <i>
                                    <svg width="11" height="11" viewBox="0 0 9 6" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_488_39232" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="9" height="6">
                                            <g clip-path="url(#clip0_488_39232)">
                                                <path
                                                    d="M1.95939 0.792128L4.60167 3.43441L7.24396 0.792128C7.30701 0.729079 7.38186 0.679067 7.46424 0.644945C7.54661 0.610824 7.6349 0.593262 7.72407 0.593262C7.81323 0.593262 7.90153 0.610824 7.9839 0.644945C8.06628 0.679067 8.14112 0.729079 8.20418 0.792128C8.26722 0.855177 8.31724 0.930026 8.35135 1.0124C8.38548 1.09478 8.40304 1.18307 8.40304 1.27223C8.40304 1.36139 8.38548 1.44969 8.35135 1.53206C8.31724 1.61444 8.26722 1.68929 8.20418 1.75234L5.07838 4.87814C5.01538 4.94127 4.94054 4.99136 4.85816 5.02553C4.77577 5.0597 4.68746 5.07729 4.59827 5.07729C4.50908 5.07729 4.42076 5.0597 4.33838 5.02553C4.256 4.99136 4.18117 4.94127 4.11816 4.87814L0.992367 1.75234C0.929236 1.68934 0.87915 1.6145 0.844976 1.53212C0.810803 1.44974 0.793213 1.36143 0.793213 1.27223C0.793213 1.18304 0.810803 1.09473 0.844976 1.01235C0.87915 0.929965 0.929236 0.85513 0.992367 0.792128C1.25796 0.533347 1.6938 0.526538 1.95939 0.792128Z"
                                                    fill="black" />
                                            </g>
                                        </mask>
                                        <g mask="url(#mask0_488_39232)">
                                            <rect x="0.459229" y="0.16748" width="8.29861" height="4.97917"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_488_39232">
                                                <rect width="8.29861" height="4.97917" fill="white"
                                                    transform="translate(0.459229 0.16748)" />
                                            </clipPath>
                                        </defs>
                                    </svg></i></a></li>
                    </ul>
                    {{-- <ul class="wsus__menu_item wsus__menu_item_right">
                        <li><a href="contact.html">contact</a></li>
                        <li><a href="dsahboard.html">my account</a></li>
                        <li><a href="login.html">login</a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</nav>
<!--============================
    MAIN MENU END
==============================-->


<!--============================
    MOBILE MENU START
==============================-->
<section id="wsus__mobile_menu">
    <span class="wsus__mobile_menu_close"><i class="fal fa-times"></i></span>
    <ul class="wsus__mobile_menu_header_icon d-inline-flex">

        <li><a href="wishlist.html"><i class="far fa-heart"></i> <span>2</span></a></li>

        <li><a href="compare.html"><i class="far fa-random"></i> </i><span>3</span></a></li>
    </ul>
    <form>
        <input type="text" placeholder="Search">
        <button type="submit"><i class="far fa-search"></i></button>
    </form>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                role="tab" aria-controls="pills-home" aria-selected="true">Categories</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                role="tab" aria-controls="pills-profile" aria-selected="false">main menu</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="wsus__mobile_menu_main_menu">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <ul class="wsus_mobile_menu_category">
                        <li><a href="#"><i class="fas fa-star"></i> hot promotions</a></li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThreew" aria-expanded="false"
                                aria-controls="flush-collapseThreew"><i class="fal fa-tshirt"></i> fashion</a>
                            <div id="flush-collapseThreew" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="#">men's</a></li>
                                        <li><a href="#">wemen's</a></li>
                                        <li><a href="#">kid's</a></li>
                                        <li><a href="#">others</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThreer" aria-expanded="false"
                                aria-controls="flush-collapseThreer"><i class="fas fa-tv"></i> electronics</a>
                            <div id="flush-collapseThreer" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="#">Consumer Electronic</a></li>
                                        <li><a href="#">Accessories & Parts</a></li>
                                        <li><a href="#">other brands</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThreerrp" aria-expanded="false"
                                aria-controls="flush-collapseThreerrp"><i class="fas fa-chair-office"></i>
                                furnicture</a>
                            <div id="flush-collapseThreerrp" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="#">home</a></li>
                                        <li><a href="#">office</a></li>
                                        <li><a href="#">restaurent</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThreerrw" aria-expanded="false"
                                aria-controls="flush-collapseThreerrw"><i class="fal fa-mobile"></i> Smart
                                Phones</a>
                            <div id="flush-collapseThreerrw" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="#">apple</a></li>
                                        <li><a href="#">xiaomi</a></li>
                                        <li><a href="#">oppo</a></li>
                                        <li><a href="#">samsung</a></li>
                                        <li><a href="#">vivo</a></li>
                                        <li><a href="#">others</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#"><i class="fas fa-home-lg-alt"></i> Home & Garden</a></li>
                        <li><a href="#"><i class="far fa-camera"></i> Accessories</a></li>
                        <li><a href="#"><i class="fas fa-heartbeat"></i> healthy & Beauty</a></li>
                        <li><a href="#"><i class="fal fa-gift-card"></i> Gift Ideas</a></li>
                        <li><a href="#"><i class="fal fa-gamepad-alt"></i> Toy & Games</a></li>
                        <li><a href="#"><i class="fal fa-gem"></i> View All Categories</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="wsus__mobile_menu_main_menu">
                <div class="accordion accordion-flush" id="accordionFlushExample2">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">shop</a>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="#">men's</a></li>
                                        <li><a href="#">wemen's</a></li>
                                        <li><a href="#">kid's</a></li>
                                        <li><a href="#">others</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ route('vendor') }}">vendor</a></li>
                        <li><a href="blog.html">blog</a></li>
                        <li><a href="daily_deals.html">campain</a></li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree101" aria-expanded="false"
                                aria-controls="flush-collapseThree101">pages</a>
                            <div id="flush-collapseThree101" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="faqs.html">faq</a></li>
                                        <li><a href="invoice.html">invoice</a></li>
                                        <li><a href="about_us.html">about</a></li>
                                        <li><a href="team.html">team</a></li>
                                        <li><a href="product_grid_view.html">product grid view</a></li>
                                        <li><a href="product_grid_view.html">product list view</a></li>
                                        <li><a href="team_details.html">team details</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="track_order.html">track order</a></li>
                        <li><a href="daily_deals.html">daily deals</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
