@extends('frontend.layouts.master', ['title' => 'Blogs BuhoGT', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <!--============================
                                BREADCRUMB START
                            ==============================-->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h4 class="text-white">our latest blogs</h4>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">blogs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                                BREADCRUMB END
                            ==============================-->


    <!--============================
                                BLOGS PAGE START
                            ==============================-->
    <section id="wsus__blogs">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-sm-6 col-lg-4 col-xxl-3">
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
                <div class="col-xl-4 col-sm-6 col-lg-4 col-xxl-3">
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
                <div class="col-xl-4 col-sm-6 col-lg-4 col-xxl-3">
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
                <div class="col-xl-4 col-sm-6 col-lg-4 col-xxl-3">
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
                <div class="col-xl-4 col-sm-6 col-lg-4 col-xxl-3">
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
                <div class="col-xl-4 col-sm-6 col-lg-4 col-xxl-3">
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
                <div class="col-xl-4 col-sm-6 col-lg-4 col-xxl-3">
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
                <div class="col-xl-4 col-sm-6 col-lg-4 col-xxl-3">
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
            </div>
            <div id="pagination">
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
            </div>
        </div>
    </section>
    <!--============================
                                BLOGS PAGE END
                            ==============================-->
@endsection