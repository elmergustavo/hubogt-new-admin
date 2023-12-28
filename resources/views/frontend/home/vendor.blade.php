@extends('frontend.layouts.master', ['title' => 'Tiendas BuhoGT', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>Tiendas BUHOGT</h4>
                        <p class="text-white">Encuentra los mejores articulos </p>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">Tiendas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="wsus__product_page" class="wsus__vendors">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="wsus__sidebar_filter">
                        <p>filter</p>
                        <span class="wsus__filter_icon">
                            <i class="far fa-minus" id="minus"></i>
                            <i class="far fa-plus" id="plus"></i>
                        </span>
                    </div>
                    <div class="wsus__product_sidebar wsus__vendor_sidebar" id="sticky_sidebar">
                        <form>
                            <input type="text" placeholder="Search...">
                            <button class="common_btn" type="submit"><i class="far fa-search"></i></button>
                        </form>
                        <div class="wsus__vendor_sidebar_select">
                            <h4>filter by category</h4>
                            <select class="select_2" name="state">
                                <option>choose category</option>
                                <option>men's</option>
                                <option>wemen's</option>
                                <option>kid's</option>
                                <option>electronics</option>
                                <option>electrick</option>
                            </select>
                        </div>
                        <div class="wsus__vendor_sidebar_select">
                            <h4>filter by location</h4>
                            <select class="select_2" name="state">
                                <option>choose location</option>
                                <option>short by rating</option>
                                <option>short by latest</option>
                                <option>low to high </option>
                                <option>high to low</option>
                            </select>
                        </div>
                        <div class="wsus__vendor_sidebar_select">
                            <select class="select_2" name="state">
                                <option>choose state</option>
                                <option>korea</option>
                                <option>japan</option>
                                <option>china</option>
                                <option>singapore</option>
                                <option>thailand</option>
                            </select>
                        </div>
                        <div class="wsus__vendor_sidebar_select">
                            <select class="select_2" name="state">
                                <option>search by city</option>
                                <option>korea</option>
                                <option>japan</option>
                                <option>china</option>
                                <option>singapore</option>
                                <option>thailand</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        <div class="col-xl-12 d-none d-lg-block">
                            <div class="wsus__product_topbar">
                                <div class="wsus__topbar_select">
                                    <select class="select_2" name="state">
                                        <option>default shorting</option>
                                        <option>short by rating</option>
                                        <option>short by latest</option>
                                        <option>low to high </option>
                                        <option>high to low</option>
                                    </select>
                                </div>
                                <div class="wsus__topbar_select wsus__topbar_select2">
                                    <select class="select_2" name="state">
                                        <option>show 12</option>
                                        <option>show 15</option>
                                        <option>show 18</option>
                                        <option>show 21</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="wsus__vendor_single">
                                <img src="images/vendor_1.jpg" alt="vendor" class="img-fluid w-100">
                                <div class="wsus__vendor_text">
                                    <div class="wsus__vendor_text_center">
                                        <h4>Tienda 1</h4>
                                        <p class="wsus__vendor_rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </p>
                                        <a href="callto:+6955548721111"><i class="far fa-phone-alt"></i>
                                            +6955548721111</a>
                                        <a href="mailto:example@gmail.com"><i class="fal fa-envelope"></i>
                                            example@gmail.com</a>
                                        <a href="vendor_details.html" class="common_btn">visit store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="wsus__vendor_single">
                                <img src="images/vendor_2.jpg" alt="vendor" class="img-fluid w-100">
                                <div class="wsus__vendor_text">
                                    <div class="wsus__vendor_text_center">
                                        <h4>Tienda 2</h4>
                                        <p class="wsus__vendor_rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </p>
                                        <a href="callto:+6955548721111"><i class="far fa-phone-alt"></i>
                                            +6955548721111</a>
                                        <a href="mailto:example@gmail.com"><i class="fal fa-envelope"></i>
                                            example@gmail.com</a>
                                        <a href="vendor_details.html" class="common_btn">visit store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="wsus__vendor_single">
                                <img src="images/vendor_3.jpg" alt="vendor" class="img-fluid w-100">
                                <div class="wsus__vendor_text">
                                    <div class="wsus__vendor_text_center">
                                        <h4>Tienda 3</h4>
                                        <p class="wsus__vendor_rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </p>
                                        <a href="callto:+6955548721111"><i class="far fa-phone-alt"></i>
                                            +6955548721111</a>
                                        <a href="mailto:example@gmail.com"><i class="fal fa-envelope"></i>
                                            example@gmail.com</a>
                                        <a href="vendor_details.html" class="common_btn">visit store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="wsus__vendor_single">
                                <img src="images/vendor_4.jpg" alt="vendor" class="img-fluid w-100">
                                <div class="wsus__vendor_text">
                                    <div class="wsus__vendor_text_center">
                                        <h4>Tienda 4</h4>
                                        <p class="wsus__vendor_rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </p>
                                        <a href="callto:+6955548721111"><i class="far fa-phone-alt"></i>
                                            +6955548721111</a>
                                        <a href="mailto:example@gmail.com"><i class="fal fa-envelope"></i>
                                            example@gmail.com</a>
                                        <a href="vendor_details.html" class="common_btn">visit store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="wsus__vendor_single">
                                <img src="images/vendor_5.jpg" alt="vendor" class="img-fluid w-100">
                                <div class="wsus__vendor_text">
                                    <div class="wsus__vendor_text_center">
                                        <h4>Tienda 5</h4>
                                        <p class="wsus__vendor_rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </p>
                                        <a href="callto:+6955548721111"><i class="far fa-phone-alt"></i>
                                            +6955548721111</a>
                                        <a href="mailto:example@gmail.com"><i class="fal fa-envelope"></i>
                                            example@gmail.com</a>
                                        <a href="vendor_details.html" class="common_btn">visit store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="wsus__vendor_single">
                                <img src="images/vendor_6.jpg" alt="vendor" class="img-fluid w-100">
                                <div class="wsus__vendor_text">
                                    <div class="wsus__vendor_text_center">
                                        <h4>Tienda 6</h4>
                                        <p class="wsus__vendor_rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </p>
                                        <a href="callto:+6955548721111"><i class="far fa-phone-alt"></i>
                                            +6955548721111</a>
                                        <a href="mailto:example@gmail.com"><i class="fal fa-envelope"></i>
                                            example@gmail.com</a>
                                        <a href="vendor_details.html" class="common_btn">visit store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <section id="pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link page_active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
