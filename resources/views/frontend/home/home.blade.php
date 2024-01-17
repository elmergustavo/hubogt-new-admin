@extends('frontend.layouts.master', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <!--==================PRODUCT MODAL VIEW ===========================-->
    <section class="product_popup_modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="far fa-times"></i></button>
                        <div class="row">
                            <div class="col-xl-6 col-12 col-sm-10 col-md-8 col-lg-6 m-auto display">
                                <div class="wsus__quick_view_img">
                                    <a class="venobox wsus__pro_det_video" data-autoplay="true" data-vbtype="video"
                                        href="https://youtu.be/7m16dFI1AF8">
                                        <i class="fas fa-play"></i>
                                    </a>
                                    <div class="row modal_slider">
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="images/zoom1.jpg" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="images/zoom2.jpg" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="images/zoom3.jpg" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="images/zoom4.jpg" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="wsus__pro_details_text">
                                    <a class="title" href="#">Electronics Black Wrist Watch</a>
                                    <p class="wsus__stock_area"><span class="in_stock">in stock</span> (167 item)</p>
                                    <h4>$50.00 <del>$60.00</del></h4>
                                    <p class="review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>20 review</span>
                                    </p>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                    <div class="wsus_pro_hot_deals">
                                        <h5>offer ending time : </h5>
                                        <div class="simply-countdown simply-countdown-one"></div>
                                    </div>
                                    <div class="wsus_pro_det_color">
                                        <h5>color :</h5>
                                        <ul>
                                            <li><a class="blue" href="#"><i class="far fa-check"></i></a>
                                            </li>
                                            <li><a class="orange" href="#"><i class="far fa-check"></i></a>
                                            </li>
                                            <li><a class="yellow" href="#"><i class="far fa-check"></i></a>
                                            </li>
                                            <li><a class="black" href="#"><i class="far fa-check"></i></a>
                                            </li>
                                            <li><a class="red" href="#"><i class="far fa-check"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wsus_pro__det_size">
                                        <h5>size :</h5>
                                        <ul>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                        </ul>
                                    </div>
                                    <div class="wsus__quentity">
                                        <h5>quentity :</h5>
                                        <form class="select_number">
                                            <input class="number_area" type="text" min="1" max="100"
                                                value="1" />
                                        </form>
                                        <h3>$50.00</h3>
                                    </div>
                                    <div class="wsus__selectbox">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6">
                                                <h5 class="mb-2">select:</h5>
                                                <select class="select_2" name="state">
                                                    <option>default select</option>
                                                    <option>select 1</option>
                                                    <option>select 2</option>
                                                    <option>select 3</option>
                                                    <option>select 4</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <h5 class="mb-2">select:</h5>
                                                <select class="select_2" name="state">
                                                    <option>default select</option>
                                                    <option>select 1</option>
                                                    <option>select 2</option>
                                                    <option>select 3</option>
                                                    <option>select 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="wsus__button_area">
                                        <li><a class="add_cart" href="#">add to cart</a></li>
                                        <li><a class="buy_now" href="#">buy now</a></li>
                                        <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#"><i class="far fa-random"></i></a></li>
                                    </ul>
                                    <p class="brand_model"><span>model :</span> 12345670</p>
                                    <p class="brand_model"><span>brand :</span> The Northland</p>
                                    <div class="wsus__pro_det_share">
                                        <h5>share :</h5>
                                        <ul class="d-flex">
                                            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a>
                                            </li>
                                            <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                PRODUCT MODAL VIEW END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ===========================-->


    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                BANNER PART 2 START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section id="wsus__banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="wsus__banner_content">
                        <div class="row banner_slider">
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url(images/slider_1.jpg);">
                                    <div class="wsus__single_slider_text">
                                        <h3>new arrivals</h3>
                                        <h1>men's fashion</h1>
                                        <h6>start at $99.00</h6>
                                        <a class="common_btn" href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url(images/slider_2.jpg);">
                                    <div class="wsus__single_slider_text">
                                        <h3>new arrivals</h3>
                                        <h1>kid's fashion</h1>
                                        <h6>start at $49.00</h6>
                                        <a class="common_btn" href="#">shop now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url(images/slider_3.jpg);">
                                    <div class="wsus__single_slider_text">
                                        <h3>new arrivals</h3>
                                        <h1>winter collection</h1>
                                        <h6>start at $99</h6>
                                        <a class="common_btn" href="#">shop now</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url(images/single_banner_33.jpg);">
                                    <div class="wsus__single_slider_text">
                                        <h3>new arrivals</h3>
                                        <h1>winter collection</h1>
                                        <h6>start at $99</h6>
                                        <a class="common_btn" href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-xl-4 " style="margin-top: 30px;">
                    <div class="row py-5 mb-3" style="width: 100%; background-color: #FAF0F0">
                        <div class="col-md-6 pr-4">
                            <p style="font-weight: 600;">

                                Encuentra los mejores productos Buhogt
                            </p>

                            <span style="font-size: 0.875rem; line-height: 1.25rem;">
                                Obtén la mejor tecnología
                            </span>

                        </div>
                        <div class="col-md-6">
                            <img src="assets/images/banner1.png" class="img-fluid" alt="Banner">
                        </div>
                    </div>


                    <div class="row py-5" style="width: 100%; background-color: #EDF6FB">
                        <div class="col-md-6 pr-4">
                            <p style="font-weight: 600;">

                                Encuentra los mejores servicios
                            </p>

                            <span style="font-size: 0.875rem; line-height: 1.25rem;">
                                Obtén la mejor tecnología
                            </span>
                        </div>
                        <div class="col-md-6">
                            <img src="assets/images/banner2.png" class="img-fluid" alt="Banner">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!--============BANNER PART 2 END==============================-->



    <section id="wsus__blogs" class="home_blogs">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="">
                        <h3 style="text-decoration: underline;">Tiendas BUHOGT</h3>

                        <p>Encuentra los mejores artículos </p>

                    </div>
                </div>
            </div>
            <div class="row home_blog_slider">
                <div class="col-xl-3">

                    <div class="px-2">
                        <p>
                            Tienda Levis
                        </p>
                        <a class="wsus__blog_img" href="#">
                            <img src="assets/images/levis.png" alt="blog" class="img-fluid w-100">
                        </a>

                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <a href="#" class="text-dark text-decoration-underline" style="font-weight: 600;">
                                visitar tienda
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1925_211)">
                                        <path
                                            d="M13.1764 8.43047H1.22639C0.854611 8.43047 0.5625 8.06534 0.5625 7.60061C0.5625 7.13589 0.854611 6.77075 1.22639 6.77075H13.1764C13.5482 6.77075 13.8403 7.13589 13.8403 7.60061C13.8403 8.06534 13.5482 8.43047 13.1764 8.43047Z"
                                            fill="black" />
                                        <path
                                            d="M9.5971 14.2394C9.50057 14.2407 9.40487 14.2193 9.31613 14.1765C9.2274 14.1338 9.14761 14.0706 9.08189 13.9911C8.78748 13.6599 8.78748 13.1467 9.08189 12.8156L13.7188 7.60053L9.08189 2.38547C8.78748 2.05435 8.78748 1.54112 9.08189 1.21001C9.3763 0.878891 9.83263 0.878891 10.127 1.21001L15.2792 7.00452C15.5736 7.33564 15.5736 7.84887 15.2792 8.17998L10.127 13.9745C9.97983 14.1401 9.78847 14.2228 9.61182 14.2228L9.5971 14.2394Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1925_211">
                                            <rect width="16.5972" height="14.9375" fill="white"
                                                transform="translate(0.5625 0.181641)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3">

                    <div class="px-2">
                        <p>
                            Tienda Nike
                        </p>
                        <a class="wsus__blog_img" href="#">
                            <img src="assets/images/nike.png" alt="blog" class="img-fluid w-100">
                        </a>

                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <a href="#" class="text-dark text-decoration-underline" style="font-weight: 600;">
                                visitar tienda
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1925_211)">
                                        <path
                                            d="M13.1764 8.43047H1.22639C0.854611 8.43047 0.5625 8.06534 0.5625 7.60061C0.5625 7.13589 0.854611 6.77075 1.22639 6.77075H13.1764C13.5482 6.77075 13.8403 7.13589 13.8403 7.60061C13.8403 8.06534 13.5482 8.43047 13.1764 8.43047Z"
                                            fill="black" />
                                        <path
                                            d="M9.5971 14.2394C9.50057 14.2407 9.40487 14.2193 9.31613 14.1765C9.2274 14.1338 9.14761 14.0706 9.08189 13.9911C8.78748 13.6599 8.78748 13.1467 9.08189 12.8156L13.7188 7.60053L9.08189 2.38547C8.78748 2.05435 8.78748 1.54112 9.08189 1.21001C9.3763 0.878891 9.83263 0.878891 10.127 1.21001L15.2792 7.00452C15.5736 7.33564 15.5736 7.84887 15.2792 8.17998L10.127 13.9745C9.97983 14.1401 9.78847 14.2228 9.61182 14.2228L9.5971 14.2394Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1925_211">
                                            <rect width="16.5972" height="14.9375" fill="white"
                                                transform="translate(0.5625 0.181641)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3">

                    <div class="px-2">
                        <p>
                            Tienda New Balance
                        </p>
                        <a class="wsus__blog_img" href="#">
                            <img src="assets/images/balance.png" alt="blog" class="img-fluid w-100">
                        </a>

                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <a href="#" class="text-dark text-decoration-underline" style="font-weight: 600;">
                                visitar tienda
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1925_211)">
                                        <path
                                            d="M13.1764 8.43047H1.22639C0.854611 8.43047 0.5625 8.06534 0.5625 7.60061C0.5625 7.13589 0.854611 6.77075 1.22639 6.77075H13.1764C13.5482 6.77075 13.8403 7.13589 13.8403 7.60061C13.8403 8.06534 13.5482 8.43047 13.1764 8.43047Z"
                                            fill="black" />
                                        <path
                                            d="M9.5971 14.2394C9.50057 14.2407 9.40487 14.2193 9.31613 14.1765C9.2274 14.1338 9.14761 14.0706 9.08189 13.9911C8.78748 13.6599 8.78748 13.1467 9.08189 12.8156L13.7188 7.60053L9.08189 2.38547C8.78748 2.05435 8.78748 1.54112 9.08189 1.21001C9.3763 0.878891 9.83263 0.878891 10.127 1.21001L15.2792 7.00452C15.5736 7.33564 15.5736 7.84887 15.2792 8.17998L10.127 13.9745C9.97983 14.1401 9.78847 14.2228 9.61182 14.2228L9.5971 14.2394Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1925_211">
                                            <rect width="16.5972" height="14.9375" fill="white"
                                                transform="translate(0.5625 0.181641)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3">

                    <div class="px-2">
                        <p>
                            Tienda Shoes
                        </p>
                        <a class="wsus__blog_img" href="#">
                            <img src="assets/images/shoes.png" alt="blog" class="img-fluid w-100">
                        </a>

                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <a href="#" class="text-dark text-decoration-underline" style="font-weight: 600;">
                                visitar tienda
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1925_211)">
                                        <path
                                            d="M13.1764 8.43047H1.22639C0.854611 8.43047 0.5625 8.06534 0.5625 7.60061C0.5625 7.13589 0.854611 6.77075 1.22639 6.77075H13.1764C13.5482 6.77075 13.8403 7.13589 13.8403 7.60061C13.8403 8.06534 13.5482 8.43047 13.1764 8.43047Z"
                                            fill="black" />
                                        <path
                                            d="M9.5971 14.2394C9.50057 14.2407 9.40487 14.2193 9.31613 14.1765C9.2274 14.1338 9.14761 14.0706 9.08189 13.9911C8.78748 13.6599 8.78748 13.1467 9.08189 12.8156L13.7188 7.60053L9.08189 2.38547C8.78748 2.05435 8.78748 1.54112 9.08189 1.21001C9.3763 0.878891 9.83263 0.878891 10.127 1.21001L15.2792 7.00452C15.5736 7.33564 15.5736 7.84887 15.2792 8.17998L10.127 13.9745C9.97983 14.1401 9.78847 14.2228 9.61182 14.2228L9.5971 14.2394Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1925_211">
                                            <rect width="16.5972" height="14.9375" fill="white"
                                                transform="translate(0.5625 0.181641)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3">

                    <div class="px-2">
                        <p>
                            Tienda Adidas
                        </p>
                        <a class="wsus__blog_img" href="#">
                            <img src="assets/images/adidas.png" alt="blog" class="img-fluid w-100">
                        </a>

                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <a href="#" class="text-dark text-decoration-underline" style="font-weight: 600;">
                                visitar tienda
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1925_211)">
                                        <path
                                            d="M13.1764 8.43047H1.22639C0.854611 8.43047 0.5625 8.06534 0.5625 7.60061C0.5625 7.13589 0.854611 6.77075 1.22639 6.77075H13.1764C13.5482 6.77075 13.8403 7.13589 13.8403 7.60061C13.8403 8.06534 13.5482 8.43047 13.1764 8.43047Z"
                                            fill="black" />
                                        <path
                                            d="M9.5971 14.2394C9.50057 14.2407 9.40487 14.2193 9.31613 14.1765C9.2274 14.1338 9.14761 14.0706 9.08189 13.9911C8.78748 13.6599 8.78748 13.1467 9.08189 12.8156L13.7188 7.60053L9.08189 2.38547C8.78748 2.05435 8.78748 1.54112 9.08189 1.21001C9.3763 0.878891 9.83263 0.878891 10.127 1.21001L15.2792 7.00452C15.5736 7.33564 15.5736 7.84887 15.2792 8.17998L10.127 13.9745C9.97983 14.1401 9.78847 14.2228 9.61182 14.2228L9.5971 14.2394Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1925_211">
                                            <rect width="16.5972" height="14.9375" fill="white"
                                                transform="translate(0.5625 0.181641)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3">

                    <div class="px-2">
                        <p>
                            Tienda Levis
                        </p>
                        <a class="wsus__blog_img" href="#">
                            <img src="images/blog_1.jpg" alt="blog" class="img-fluid w-100">
                        </a>

                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <a href="#" class="text-dark text-decoration-underline" style="font-weight: 600;">
                                visitar tienda
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1925_211)">
                                        <path
                                            d="M13.1764 8.43047H1.22639C0.854611 8.43047 0.5625 8.06534 0.5625 7.60061C0.5625 7.13589 0.854611 6.77075 1.22639 6.77075H13.1764C13.5482 6.77075 13.8403 7.13589 13.8403 7.60061C13.8403 8.06534 13.5482 8.43047 13.1764 8.43047Z"
                                            fill="black" />
                                        <path
                                            d="M9.5971 14.2394C9.50057 14.2407 9.40487 14.2193 9.31613 14.1765C9.2274 14.1338 9.14761 14.0706 9.08189 13.9911C8.78748 13.6599 8.78748 13.1467 9.08189 12.8156L13.7188 7.60053L9.08189 2.38547C8.78748 2.05435 8.78748 1.54112 9.08189 1.21001C9.3763 0.878891 9.83263 0.878891 10.127 1.21001L15.2792 7.00452C15.5736 7.33564 15.5736 7.84887 15.2792 8.17998L10.127 13.9745C9.97983 14.1401 9.78847 14.2228 9.61182 14.2228L9.5971 14.2394Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1925_211">
                                            <rect width="16.5972" height="14.9375" fill="white"
                                                transform="translate(0.5625 0.181641)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3">

                    <div class="px-2">
                        <p>
                            Tienda Levis
                        </p>
                        <a class="wsus__blog_img" href="#">
                            <img src="images/blog_1.jpg" alt="blog" class="img-fluid w-100">
                        </a>

                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <a href="#" class="text-dark text-decoration-underline" style="font-weight: 600;">
                                visitar tienda
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1925_211)">
                                        <path
                                            d="M13.1764 8.43047H1.22639C0.854611 8.43047 0.5625 8.06534 0.5625 7.60061C0.5625 7.13589 0.854611 6.77075 1.22639 6.77075H13.1764C13.5482 6.77075 13.8403 7.13589 13.8403 7.60061C13.8403 8.06534 13.5482 8.43047 13.1764 8.43047Z"
                                            fill="black" />
                                        <path
                                            d="M9.5971 14.2394C9.50057 14.2407 9.40487 14.2193 9.31613 14.1765C9.2274 14.1338 9.14761 14.0706 9.08189 13.9911C8.78748 13.6599 8.78748 13.1467 9.08189 12.8156L13.7188 7.60053L9.08189 2.38547C8.78748 2.05435 8.78748 1.54112 9.08189 1.21001C9.3763 0.878891 9.83263 0.878891 10.127 1.21001L15.2792 7.00452C15.5736 7.33564 15.5736 7.84887 15.2792 8.17998L10.127 13.9745C9.97983 14.1401 9.78847 14.2228 9.61182 14.2228L9.5971 14.2394Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1925_211">
                                            <rect width="16.5972" height="14.9375" fill="white"
                                                transform="translate(0.5625 0.181641)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>



    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                FLASH SELL START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section id="wsus__flash_sell" class="wsus__flash_sell_2">
        <div class=" container">
            {{-- <div class="row">
                <div class="col-xl-12">
                    <div class="offer_time" style="background: url(images/flash_sell_bg.jpg)">
                        <div class="wsus__flash_coundown">
                            <span class=" end_text">flash sell</span>
                            <div class="simply-countdown simply-countdown-one"></div>
                            <a class="common_btn" href="#">see more <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row flash_sell_slider">
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/pro3.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/pro3_3.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">Electronics </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(133 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">hp 24" FHD monitore</a>
                            <p class="wsus__price">$159 <del>$200</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/pro4.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/pro4_4.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(17 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">men's casual fashion watch</a>
                            <p class="wsus__price">$159 <del>$200</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/pro9.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/pro9_9.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(120 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">men's fashion sholder bag</a>
                            <p class="wsus__price">$159 <del>$200</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/pro2.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/pro2_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(72 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">men's casual shoes</a>
                            <p class="wsus__price">$159 <del>$200</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/pro4.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/pro4_4.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(17 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">men's casual fashion watch</a>
                            <p class="wsus__price">$159 <del>$200</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                FLASH SELL END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->


    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                MONTHLY TOP PRODUCT START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section id="wsus__monthly_top" class="wsus__monthly_top_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="wsus__monthly_top_banner">
                        <div class="wsus__monthly_top_banner_img">
                            <img src="images/monthly_top_img3.jpg" alt="img" class="img-fluid w-100">
                            <span></span>
                        </div>
                        <div class="wsus__monthly_top_banner_text">
                            <h4>Black Friday Sale</h4>
                            <h3>Up To <span>70% Off</span></h3>
                            <H6>Everything</H6>
                            <a class="shop_btn" href="#">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header for_md">
                        <h3>Top Categories Of The Month</h3>
                        <div class="monthly_top_filter">
                            <button class=" active" data-filter="*">music</button>
                            <button data-filter=".cloth">clothing</button>
                            <button data-filter=".elec">Electronic</button>
                            <button data-filter=".spk">Speakers</button>
                            <button data-filter=".cam">Cameras</button>
                            <button data-filter=".wat">Watches</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="row grid">
                        <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  elec cam wat">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro8_8.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>wemen's one pcs</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  cloth spk">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro4_4.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's casual watch</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  elec cam wat">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro9.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's sholder bag</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  cloth spk">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro9_9.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's sholder bag</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  elec cam">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro10.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>MSI gaming chair</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  cloth cam wat">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro2.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's shoes</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  elec spk">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro2.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's shoes</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  cloth cam wat">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro10.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>MSI gaming chair</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  elec cam wat">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro8_8.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>wemen's one pcs</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  cloth spk">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro4_4.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's casual watch</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  elec wat">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro9.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's sholder bag</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  cloth spk">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro9_9.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's sholder bag</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                MONTHLY TOP PRODUCT END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->


    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                BRAND SLIDER START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section id="wsus__brand_sleder" class="brand_slider_2">
        <div class="container">
            <div class="brand_border">
                <div class="row brand_slider">
                    <div class="col-xl-2">
                        <div class="wsus__brand_logo">
                            <img src="images/brand_logo_1.jpg" alt="brand" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="wsus__brand_logo">
                            <img src="images/brand_logo_2.jpg" alt="brand" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="wsus__brand_logo">
                            <img src="images/brand_logo_3.jpg" alt="brand" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="wsus__brand_logo">
                            <img src="images/brand_logo_4.jpg" alt="brand" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="wsus__brand_logo">
                            <img src="images/brand_logo_5.jpg" alt="brand" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="wsus__brand_logo">
                            <img src="images/brand_logo_6.jpg" alt="brand" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="wsus__brand_logo">
                            <img src="images/brand_logo_3.jpg" alt="brand" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                BRAND SLIDER END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->


    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                SINGLE BANNER START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section id="wsus__single_banner" class="wsus__single_banner_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="wsus__single_banner_content">
                        <div class="wsus__single_banner_img">
                            <img src="images/single_banner_7.jpg" alt="banner" class="img-fluid w-100">
                        </div>
                        <div class="wsus__single_banner_text">
                            <h6>sell on <span>35% off</span></h6>
                            <h3>smart watch</h3>
                            <a class="shop_btn" href="#">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="wsus__single_banner_content single_banner_2">
                        <div class="wsus__single_banner_img">
                            <img src="images/single_banner_8.jpg" alt="banner" class="img-fluid w-100">
                        </div>
                        <div class="wsus__single_banner_text">
                            <h6>New Collection</h6>
                            <h3>bicycle</h3>
                            <a class="shop_btn" href="#">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                SINGLE BANNER END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->


    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                HOT DEALS START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section id="wsus__hot_deals" class="wsus__hot_deals_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header">
                        <h3>hot deals of the day</h3>
                    </div>
                </div>
            </div>
            <div class="row hot_deals_slider_2">
                <div class="col-xl-4 col-lg-6">
                    <div class="wsus__hot_deals_offer">
                        <div class="wsus__hot_deals_img">
                            <img src="images/pro0010.jpg" alt="mobile" class="img-fluid w-100">
                        </div>
                        <div class="wsus__hot_deals_text">
                            <a class="wsus__hot_title" href="{{ route('producto_detalle') }}">apple smart watch</a>
                            <p class="wsus__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(127 review)</span>
                            </p>
                            <p class="wsus__hot_deals_proce">$160 <del>$200</del></p>
                            <P class="wsus__details">
                                Lorem ipsum dolor sit amet, cons
                                ectetur incid duut labore et dol.
                                Re magna atellus in metus.
                            </P>
                            <ul>
                                <li><a class="add_cart" href="#">add to cart</a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-random"></i></a></li>
                            </ul>
                            <div class="simply-countdown simply-countdown-one"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="wsus__hot_deals_offer">
                        <div class="wsus__hot_deals_img">
                            <img src="images/pro0011.jpg" alt="mobile" class="img-fluid w-100">
                        </div>
                        <div class="wsus__hot_deals_text">
                            <a class="wsus__hot_title" href="{{ route('producto_detalle') }}">portable mobile Speaker</a>
                            <p class="wsus__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(176 review)</span>
                            </p>
                            <p class="wsus__hot_deals_proce">$200 <del>$220</del></p>
                            <P class="wsus__details">
                                Lorem ipsum dolor sit amet, cons
                                ectetur incid duut labore et dol.
                                Re magna atellus in metus.
                            </P>
                            <ul>
                                <li><a class="add_cart" href="#">add to cart</a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-random"></i></a></li>
                            </ul>
                            <div class="simply-countdown simply-countdown-one"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="wsus__hot_deals_offer">
                        <div class="wsus__hot_deals_img">
                            <img src="images/pro0012.jpg" alt="mobile" class="img-fluid w-100">
                        </div>
                        <div class="wsus__hot_deals_text">
                            <a class="wsus__hot_title" href="{{ route('producto_detalle') }}">apple smart watch</a>
                            <p class="wsus__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(127 review)</span>
                            </p>
                            <p class="wsus__hot_deals_proce">$160 <del>$200</del></p>
                            <P class="wsus__details">
                                Lorem ipsum dolor sit amet, cons
                                ectetur incid duut labore et dol.
                                Re magna atellus in metus.
                            </P>
                            <ul>
                                <li><a class="add_cart" href="#">add to cart</a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-random"></i></a></li>
                            </ul>
                            <div class="simply-countdown simply-countdown-one"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="wsus__hot_deals_offer">
                        <div class="wsus__hot_deals_img">
                            <img src="images/pro0013.jpg" alt="mobile" class="img-fluid w-100">
                        </div>
                        <div class="wsus__hot_deals_text">
                            <a class="wsus__hot_title" href="{{ route('producto_detalle') }}">portable mobile Speaker</a>
                            <p class="wsus__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(176 review)</span>
                            </p>
                            <p class="wsus__hot_deals_proce">$200 <del>$220</del></p>
                            <P class="wsus__details">
                                Lorem ipsum dolor sit amet, cons
                                ectetur incid duut labore et dol.
                                Re magna atellus in metus vulpue
                                te eu sceleri que felis.
                            </P>
                            <ul>
                                <li><a class="add_cart" href="#">add to cart</a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-random"></i></a></li>
                            </ul>
                            <div class="simply-countdown simply-countdown-one"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wsus__hot_large_item">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="wsus__section_header justify-content-start">
                            <div class="monthly_top_filter2 mb-1">
                                <button class="ms-0 active" data-filter="*">music</button>
                                <button data-filter=".clotha">clothing</button>
                                <button data-filter=".eleca">Electronic</button>
                                <button data-filter=".spka">Speakers</button>
                                <button data-filter=".cama">Cameras</button>
                                <button class="me-0" data-filter=".wata">Watches</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row grid2">
                    <div class="col-xl-3 col-sm-6 col-md-4 col-lg-4 clotha spka wata">
                        <div class="wsus__product_item">
                            <span class="wsus__minus">-20%</span>
                            <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                                <img src="images/charger_2.jpg" alt="product" class="img-fluid w-100 img_1" />
                                <img src="images/charger_1.jpg" alt="product" class="img-fluid w-100 img_2" />
                            </a>
                            <ul class="wsus__single_pro_icon">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-random"></i></a>
                            </ul>
                            <div class="wsus__product_details">
                                <a class="wsus__category" href="#">Electronics </a>
                                <p class="wsus__pro_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(74 review)</span>
                                </p>
                                <a class="wsus__pro_name" href="#">8.5 VA first charger</a>
                                <p class="wsus__price">$160</p>
                                <a class="add_cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-4 col-lg-4 eleca cama">
                        <div class="wsus__product_item">
                            <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                                <img src="images/headphone_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                                <img src="images/headphone_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                            </a>
                            <ul class="wsus__single_pro_icon">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-random"></i></a>
                            </ul>
                            <div class="wsus__product_details">
                                <a class="wsus__category" href="#">Electronics </a>
                                <p class="wsus__pro_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(120 review)</span>
                                </p>
                                <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                                <p class="wsus__price">$115</p>
                                <a class="add_cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-4 col-lg-4 clotha spka cama wata">
                        <div class="wsus__product_item">
                            <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                                <img src="images/tab_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                                <img src="images/tab_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                            </a>
                            <ul class="wsus__single_pro_icon">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-random"></i></a>
                            </ul>
                            <div class="wsus__product_details">
                                <a class="wsus__category" href="#">Electronics </a>
                                <p class="wsus__pro_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(120 review)</span>
                                </p>
                                <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                                <p class="wsus__price">$159</p>
                                <a class="add_cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-4 col-lg-4 clotha eleca cama">
                        <div class="wsus__product_item">
                            <span class="wsus__minus">-20%</span>
                            <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                                <img src="images/mobile_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                                <img src="images/mobile_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                            </a>
                            <ul class="wsus__single_pro_icon">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-random"></i></a>
                            </ul>
                            <div class="wsus__product_details">
                                <a class="wsus__category" href="#">Electronics </a>
                                <p class="wsus__pro_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(120 review)</span>
                                </p>
                                <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                                <p class="wsus__price">$189 <del>$199</del></p>
                                <a class="add_cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-4 col-lg-4 clotha spka wata">
                        <div class="wsus__product_item">
                            <span class="wsus__new">New</span>
                            <span class="wsus__minus">-20%</span>
                            <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                                <img src="images/charger_2.jpg" alt="product" class="img-fluid w-100 img_1" />
                                <img src="images/charger_1.jpg" alt="product" class="img-fluid w-100 img_2" />
                            </a>
                            <ul class="wsus__single_pro_icon">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-random"></i></a>
                            </ul>
                            <div class="wsus__product_details">
                                <a class="wsus__category" href="#">Electronics </a>
                                <p class="wsus__pro_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(74 review)</span>
                                </p>
                                <a class="wsus__pro_name" href="#">8.5 VA first charger</a>
                                <p class="wsus__price">$160</p>
                                <a class="add_cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-4 col-lg-4 eleca cama">
                        <div class="wsus__product_item">
                            <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                                <img src="images/headphone_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                                <img src="images/headphone_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                            </a>
                            <ul class="wsus__single_pro_icon">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-random"></i></a>
                            </ul>
                            <div class="wsus__product_details">
                                <a class="wsus__category" href="#">Electronics </a>
                                <p class="wsus__pro_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(120 review)</span>
                                </p>
                                <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                                <p class="wsus__price">$115</p>
                                <a class="add_cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-4 col-lg-4 clotha spka cama wata">
                        <div class="wsus__product_item">
                            <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                                <img src="images/tab_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                                <img src="images/tab_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                            </a>
                            <ul class="wsus__single_pro_icon">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-random"></i></a>
                            </ul>
                            <div class="wsus__product_details">
                                <a class="wsus__category" href="#">Electronics </a>
                                <p class="wsus__pro_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(120 review)</span>
                                </p>
                                <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                                <p class="wsus__price">$159</p>
                                <a class="add_cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-4 col-lg-4 clotha eleca cama">
                        <div class="wsus__product_item">
                            <span class="wsus__new">New</span>
                            <span class="wsus__minus">-20%</span>
                            <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                                <img src="images/mobile_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                                <img src="images/mobile_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                            </a>
                            <ul class="wsus__single_pro_icon">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-random"></i></a>
                            </ul>
                            <div class="wsus__product_details">
                                <a class="wsus__category" href="#">Electronics </a>
                                <p class="wsus__pro_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(120 review)</span>
                                </p>
                                <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                                <p class="wsus__price">$189 <del>$199</del></p>
                                <a class="add_cart" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section id="wsus__single_banner" class="home_2_single_banner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="wsus__single_banner_content banner_1">
                                <div class="wsus__single_banner_img">
                                    <img src="images/single_banner_44.jpg" alt="banner" class="img-fluid w-100">
                                </div>
                                <div class="wsus__single_banner_text">
                                    <h6>sell on <span>35% off</span></h6>
                                    <h3>smart watch</h3>
                                    <a class="shop_btn" href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="wsus__single_banner_content single_banner_2">
                                        <div class="wsus__single_banner_img">
                                            <img src="images/single_banner_55.jpg" alt="banner"
                                                class="img-fluid w-100">
                                        </div>
                                        <div class="wsus__single_banner_text">
                                            <h6>New Collection</h6>
                                            <h3>kid's fashion</h3>
                                            <a class="shop_btn" href="#">shop now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-lg-4">
                                    <div class="wsus__single_banner_content">
                                        <div class="wsus__single_banner_img">
                                            <img src="images/single_banner_66.jpg" alt="banner"
                                                class="img-fluid w-100">
                                        </div>
                                        <div class="wsus__single_banner_text">
                                            <h6>sell on <span>42% off</span></h6>
                                            <h3>winter collection</h3>
                                            <a class="shop_btn" href="#">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="wsus__hot_small_item wsus__hot_small_item_2">
                <div class="row">
                    <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3">
                        <a class="wsus__hot_deals__single" href="#">
                            <div class="wsus__hot_deals__single_img">
                                <img src="images/pro4_4.jpg" alt="bag" class="img-fluid w-100">
                            </div>
                            <div class="wsus__hot_deals__single_text">
                                <h5>men's casual watch</h5>
                                <p class="wsus__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                                <p class="wsus__tk">$120.20 <del>130.00</del></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3">
                        <a class="wsus__hot_deals__single" href="#">
                            <div class="wsus__hot_deals__single_img">
                                <img src="images/pro9.jpg" alt="bag" class="img-fluid w-100">
                            </div>
                            <div class="wsus__hot_deals__single_text">
                                <h5>men's sholder bag</h5>
                                <p class="wsus__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                                <p class="wsus__tk">$120.20 <del>130.00</del></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3">
                        <a class="wsus__hot_deals__single" href="#">
                            <div class="wsus__hot_deals__single_img">
                                <img src="images/pro9_9.jpg" alt="bag" class="img-fluid w-100">
                            </div>
                            <div class="wsus__hot_deals__single_text">
                                <h5>men's sholder bag</h5>
                                <p class="wsus__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                                <p class="wsus__tk">$120.20 <del>130.00</del></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3">
                        <a class="wsus__hot_deals__single" href="#">
                            <div class="wsus__hot_deals__single_img">
                                <img src="images/pro10.jpg" alt="bag" class="img-fluid w-100">
                            </div>
                            <div class="wsus__hot_deals__single_text">
                                <h5>MSI gaming chair</h5>
                                <p class="wsus__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                                <p class="wsus__tk">$120.20 <del>130.00</del></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3">
                        <a class="wsus__hot_deals__single" href="#">
                            <div class="wsus__hot_deals__single_img">
                                <img src="images/pro2.jpg" alt="bag" class="img-fluid w-100">
                            </div>
                            <div class="wsus__hot_deals__single_text">
                                <h5>men's shoes</h5>
                                <p class="wsus__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                                <p class="wsus__tk">$120.20 <del>130.00</del></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3">
                        <a class="wsus__hot_deals__single" href="#">
                            <div class="wsus__hot_deals__single_img">
                                <img src="images/pro2.jpg" alt="bag" class="img-fluid w-100">
                            </div>
                            <div class="wsus__hot_deals__single_text">
                                <h5>men's shoes</h5>
                                <p class="wsus__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                                <p class="wsus__tk">$120.20 <del>130.00</del></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3">
                        <a class="wsus__hot_deals__single" href="#">
                            <div class="wsus__hot_deals__single_img">
                                <img src="images/pro2.jpg" alt="bag" class="img-fluid w-100">
                            </div>
                            <div class="wsus__hot_deals__single_text">
                                <h5>men's shoes</h5>
                                <p class="wsus__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                                <p class="wsus__tk">$120.20 <del>130.00</del></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3">
                        <a class="wsus__hot_deals__single" href="#">
                            <div class="wsus__hot_deals__single_img">
                                <img src="images/pro2.jpg" alt="bag" class="img-fluid w-100">
                            </div>
                            <div class="wsus__hot_deals__single_text">
                                <h5>men's shoes</h5>
                                <p class="wsus__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                                <p class="wsus__tk">$120.20 <del>130.00</del></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3">
                        <a class="wsus__hot_deals__single" href="#">
                            <div class="wsus__hot_deals__single_img">
                                <img src="images/pro10.jpg" alt="bag" class="img-fluid w-100">
                            </div>
                            <div class="wsus__hot_deals__single_text">
                                <h5>MSI gaming chair</h5>
                                <p class="wsus__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                                <p class="wsus__tk">$120.20 <del>130.00</del></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3">
                        <a class="wsus__hot_deals__single" href="#">
                            <div class="wsus__hot_deals__single_img">
                                <img src="images/pro9_9.jpg" alt="bag" class="img-fluid w-100">
                            </div>
                            <div class="wsus__hot_deals__single_text">
                                <h5>men's sholder bag</h5>
                                <p class="wsus__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                                <p class="wsus__tk">$120.20 <del>130.00</del></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3">
                        <a class="wsus__hot_deals__single" href="#">
                            <div class="wsus__hot_deals__single_img">
                                <img src="images/pro9.jpg" alt="bag" class="img-fluid w-100">
                            </div>
                            <div class="wsus__hot_deals__single_text">
                                <h5>men's sholder bag</h5>
                                <p class="wsus__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                                <p class="wsus__tk">$120.20 <del>130.00</del></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3">
                        <a class="wsus__hot_deals__single" href="#">
                            <div class="wsus__hot_deals__single_img">
                                <img src="images/pro4_4.jpg" alt="bag" class="img-fluid w-100">
                            </div>
                            <div class="wsus__hot_deals__single_text">
                                <h5>men's casual watch</h5>
                                <p class="wsus__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                                <p class="wsus__tk">$120.20 <del>130.00</del></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                HOT DEALS END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->


    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ELECTRONIC PART START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section id="wsus__electronic">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header">
                        <h3>Consumer Electronics</h3>
                        <a class="see_btn" href="#">see more <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row flash_sell_slider">
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/charger_2.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/charger_1.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">Electronics </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(74 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">8.5 VA first charger</a>
                            <p class="wsus__price">$160</p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/headphone_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/headphone_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">Electronics </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(120 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                            <p class="wsus__price">$115</p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/tab_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/tab_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">Electronics </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(120 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                            <p class="wsus__price">$159</p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item ">
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/mobile_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/mobile_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">Electronics </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(120 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                            <p class="wsus__price">$189 <del>$199</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/mobile_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/mobile_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">Electronics </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(120 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">man casual fashion cap</a>
                            <p class="wsus__price">$189 <del>$199</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ELECTRONIC PART END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->


    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ELECTRONIC PART START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section id="wsus__electronic2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header">
                        <h3>Apparels & Clothings</h3>
                        <a class="see_btn" href="#">see more <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row flash_sell_slider">
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/pro8.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/pro8_8.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(10 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">weman's fashion one pcs</a>
                            <p class="wsus__price">$99</p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/kids_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/kids_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(41 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">kid's fashion party dress</a>
                            <p class="wsus__price">$110</p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/blazer_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/blazer_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(40 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">man's fashion blazer</a>
                            <p class="wsus__price">$180 <del>$200</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/wemans_2.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/wemans_1.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(99 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">weman's fashion one pcs</a>
                            <p class="wsus__price">$59</p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>

                        <a class="wsus__pro_link" href="{{ route('producto_detalle') }}">
                            <img src="images/wemans_2.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/wemans_1.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(99 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">weman's fashion one pcs</a>
                            <p class="wsus__price">$59</p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ELECTRONIC PART END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->


    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                LARGE BANNER  START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section id="wsus__large_banner">
        <div class="container">
            <div class="row">
                <div class="cl-xl-12">
                    <div class="wsus__large_banner_content" style="background: url(images/large_banner_img.jpg);">
                        <div class="wsus__large_banner_content_overlay">
                            <div class="row">
                                <div class="col-xl-6 col-12 col-md-6">
                                    <div class="wsus__large_banner_text">
                                        <h3>This Week's Deal</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem repudiandae in
                                            ipsam
                                            nesciunt.</p>
                                        <a class="shop_btn" href="#">view more</a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12 col-md-6">
                                    <div class="wsus__large_banner_text wsus__large_banner_text_right">
                                        <h3>headphones</h3>
                                        <h5>up to 20% off</h5>
                                        <p>Spring's collection has discounted now!</p>
                                        <a class="shop_btn" href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                LARGE BANNER  END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->


    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                WEEKLY BEST ITEM START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section id="wsus__weekly_best" class="home2_wsus__weekly_best_2 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="wsus__section_header">
                        <h3>weekly best rated Products</h3>
                    </div>
                    <div class="row weekly_best2">
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro9.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's sholder bag</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro4_4.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's casual watch</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro3.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>hp 24" FHD monitore</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro10.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>MSI gaming chair</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro9_9.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's sholder bag</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro4_4.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's casual watch</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="wsus__section_header">
                        <h3>weekly best Sale Products</h3>
                    </div>
                    <div class="row weekly_best2">
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro9.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's sholder bag</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro4_4.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's casual watch</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro3.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>hp 24" FHD monitore</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro10.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>MSI gaming chair</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro9_9.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's sholder bag</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro4_4.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's casual watch</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                WEEKLY BEST ITEM END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->


    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                HOME SERVICES START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section id="wsus__home_services" class="home_service_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-3 pe-lg-0">
                    <div class="wsus__home_services_single home_service_single_2 border_left">
                        <i class="fal fa-truck"></i>
                        <h5>Free Worldwide Shipping</h5>
                        <p>Free shipping coast for all country</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 pe-lg-0">
                    <div class="wsus__home_services_single home_service_single_2">
                        <i class="fal fa-headset"></i>
                        <h5>24/7 Customer Support</h5>
                        <p>Friendly 24/7 customer support</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 pe-lg-0">
                    <div class="wsus__home_services_single home_service_single_2">
                        <i class="far fa-exchange-alt"></i>
                        <h5>Money Back Guarantee</h5>
                        <p>We return money within 30 days</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3">
                    <div class="wsus__home_services_single home_service_single_2">
                        <i class="fal fa-credit-card"></i>
                        <h5>Secure Online Payment</h5>
                        <p>We posess SSL / Secure Certificate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                HOME SERVICES END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->


    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                HOME BLOGS START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section id="wsus__blogs" class="home_blogs">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header">
                        <h3>recent blogs</h3>
                        <a class="see_btn" href="#">see more <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row home_blog_slider">
                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="images/blog_1.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top red" href="#">women's</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">New found the women’s shirt for summer season</a>
                                <p class="date">nov 04 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="images/blog_2.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top blue" href="#">lifestyle</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">Fusce lacinia arcuet nulla menasious</a>
                                <p class="date">nov 04 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="images/blog_3.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top orange" href="#">lifestyle</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">found the men’s shirt for summer season</a>
                                <p class="date">nov 04 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="images/blog_4.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top orange" href="#">fashion</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">winter collection for women’s</a>
                                <p class="date">nov 04 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="images/blog_5.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top red" href="#">lifestyle</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">Comes a cool blog post with Images</a>
                                <p class="date">nov 04 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                HOME BLOGS END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->



    <div class="buho-container">
        <div class="buho-content">
            <h1 class="buho-title">Buho Vendedores</h1>
            <p class="buho-description">
                Buho es un marketplace que ha estado potenciando a los pequeños
                negocios ¿Quieres vender en Buhogt? Abre un puesto y empieza a
                vender.
            </p>
            <div class="buho-buttons">
                <a href="{{ route('landing') }}" class="button-link">Comenzar a vender</a>
                <a href="{{ route('landing') }}" class="button-link">Requisitos para vender</a>
            </div>
        </div>
    </div>


    <div class="">

        <livewire:info />
    </div>
@endsection
