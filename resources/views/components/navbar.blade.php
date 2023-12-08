<!-- =========== Navbar Start =========== -->
<header id="navbar"
    class="@@link-color fixed top-0 inset-x-0 flex items-center z-40 w-full lg:bg-transparent bg-white transition-all py-5">
    <div class="container">
        <nav class="flex items-center">
            <!-- Navbar Brand Logo -->
            <a href="index.html">
                <img src="assets/images/logo-dark.png" class="h-8 logo-dark" alt="Logo Dark">
                <img src="assets/images/logo-light.png" class="h-8 logo-light" alt="Logo Light">
            </a>

            <!-- Nevigation Menu -->
            <div class="hidden lg:block ms-auto">
                <ul class="navbar-nav flex gap-x-3 items-center justify-center">
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>

                    <!-- Home Page Dropdown -->
                    <li class="nav-item">
                        <a href="javascript:void(0);"
                            class="nav-link after:absolute hover:after:-bottom-10 after:inset-0" data-fc-type="dropdown"
                            data-fc-trigger="hover" data-fc-target="landingDropdownMenu" data-fc-placement="bottom">
                            Landing <i class="fa-solid fa-angle-down ms-2 align-middle"></i>
                        </a>

                        <div id="landingDropdownMenu"
                            class="hidden opacity-0 mt-4 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 w-96 fc-dropdown-open:grid grid-cols-2 gap-1.5">
                            <div class="nav-item">
                                <a class="nav-link" href="home-app.html">
                                    <div class="flex items-center -ms-1.5">
                                        <span
                                            class="bg-blue-600/10 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                            <svg class="text-blue-600 w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <path
                                                        d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z"
                                                        id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                                    <path
                                                        d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z"
                                                        id="Combined-Shape" fill="currentColor"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="flex-grow-1">
                                            App
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="home-saas.html">
                                    <div class="flex items-center -ms-1.5">
                                        <span
                                            class="bg-green-500/20 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                            <svg class="text-green-500 w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <path
                                                        d="M6,8 L6,16 L18,16 L18,8 L6,8 Z M20,16 L21.381966,16 C21.7607381,16 22.1070012,16.2140024 22.2763932,16.5527864 L22.5,17 C22.6706654,17.3413307 22.5323138,17.7563856 22.190983,17.927051 C22.0950363,17.9750244 21.9892377,18 21.881966,18 L2.11803399,18 C1.73641461,18 1.42705098,17.6906364 1.42705098,17.309017 C1.42705098,17.2017453 1.45202663,17.0959467 1.5,17 L1.7236068,16.5527864 C1.89299881,16.2140024 2.23926193,16 2.61803399,16 L4,16 L4,8 C4,6.8954305 4.8954305,6 6,6 L18,6 C19.1045695,6 20,6.8954305 20,8 L20,16 Z"
                                                        id="Combined-Shape" fill="currentColor"></path>
                                                    <polygon id="Combined-Shape" fill="currentColor" opacity="0.3"
                                                        points="6 8 6 16 18 16 18 8"></polygon>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="flex-grow-1">Saas Modern</div>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="home-saas2.html">
                                    <div class="flex items-center -ms-1.5">
                                        <span
                                            class="bg-primary/10 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                            <svg class="text-primary w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <polygon id="Combined-Shape" fill="currentColor" opacity="0.3"
                                                        points="6 7 6 15 18 15 18 7"></polygon>
                                                    <path
                                                        d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z"
                                                        id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                                    <path
                                                        d="M6,7 L6,15 L18,15 L18,7 L6,7 Z M6,5 L18,5 C19.1045695,5 20,5.8954305 20,7 L20,15 C20,16.1045695 19.1045695,17 18,17 L6,17 C4.8954305,17 4,16.1045695 4,15 L4,7 C4,5.8954305 4.8954305,5 6,5 Z"
                                                        id="Combined-Shape" fill="currentColor"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="flex-grow-1">Saas Classic</div>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="home-startup.html">
                                    <div class="flex items-center -ms-1.5">
                                        <span
                                            class="bg-orange-600/10 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                            <svg class="text-orange-600 w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <rect id="Combined-Shape" fill="currentColor" opacity="0.3"
                                                        x="2" y="3" width="20" height="18" rx="2">
                                                    </rect>
                                                    <path
                                                        d="M9.9486833,13.3162278 C9.81256925,13.7245699 9.43043041,14 9,14 L5,14 C4.44771525,14 4,13.5522847 4,13 C4,12.4477153 4.44771525,12 5,12 L8.27924078,12 L10.0513167,6.68377223 C10.367686,5.73466443 11.7274983,5.78688777 11.9701425,6.75746437 L13.8145063,14.1349195 L14.6055728,12.5527864 C14.7749648,12.2140024 15.1212279,12 15.5,12 L19,12 C19.5522847,12 20,12.4477153 20,13 C20,13.5522847 19.5522847,14 19,14 L16.118034,14 L14.3944272,17.4472136 C13.9792313,18.2776054 12.7550291,18.143222 12.5298575,17.2425356 L10.8627389,10.5740611 L9.9486833,13.3162278 Z"
                                                        id="Path-108" fill="currentColor"></path>
                                                    <circle id="Oval" fill="currentColor" opacity="0.3"
                                                        cx="19" cy="6" r="1"></circle>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="flex-grow-1">Startup</div>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="home-software.html">
                                    <div class="flex items-center -ms-1.5">
                                        <span
                                            class="bg-amber-400/10 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                            <svg class="text-amber-400 w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <path
                                                        d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                        id="Combined-Shape" fill="currentColor"></path>
                                                    <path
                                                        d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                        id="Path" fill="currentColor" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="flex-grow-1">Software</div>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="home-agency.html">
                                    <div class="flex items-center -ms-1.5">
                                        <span
                                            class="bg-black/10 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                            <svg class="text-black w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <path
                                                        d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z"
                                                        id="Combined-Shape" fill="currentColor" opacity="0.3">
                                                    </path>
                                                    <circle id="Oval-14" fill="currentColor" cx="12"
                                                        cy="9" r="5"></circle>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="flex-grow-1">Agency</div>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="home-coworking.html">
                                    <div class="flex items-center -ms-1.5">
                                        <span
                                            class="bg-primary/10 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                            <svg class="text-primary w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <path
                                                        d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z"
                                                        id="Combined-Shape" fill="currentColor"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="flex-grow-1">Coworking</div>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="home-crypto.html">
                                    <div class="flex items-center -ms-1.5">
                                        <span
                                            class="bg-orange-600/10 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                            <svg class="text-orange-600 w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <rect id="Rectangle" fill="currentColor" opacity="0.3" x="11"
                                                        y="2" width="2" height="5" rx="1"></rect>
                                                    <rect id="Rectangle-Copy-3" fill="currentColor" opacity="0.3"
                                                        x="11" y="16" width="2" height="5" rx="1">
                                                    </rect>
                                                    <path
                                                        d="M17.875,14.086 C17.875,14.8206703 17.7293348,15.4381642 17.438,15.9385 C17.1466652,16.4388358 16.7603357,16.8409985 16.279,17.145 C15.7976643,17.4490015 15.2498364,17.6674993 14.6355,17.8005 C14.0211636,17.9335007 13.3910032,18 12.745,18 L7,18 L7,4.548 L12.745,4.548 C13.2643359,4.548 13.7963306,4.60183279 14.341,4.7095 C14.8856694,4.8171672 15.3796644,5.00083204 15.823,5.2605 C16.2663356,5.52016796 16.6273319,5.87166445 16.906,6.315 C17.1846681,6.75833555 17.324,7.32199658 17.324,8.006 C17.324,8.75333707 17.1213354,9.3708309 16.716,9.8585 C16.3106646,10.3461691 15.77867,10.6976656 15.12,10.913 C15.5000019,11.0143337 15.8578317,11.1314991 16.1935,11.3025 C16.5291683,11.4735009 16.8204988,11.6919987 17.0675,11.958 C17.3145012,12.2240013 17.5108326,12.5343316 17.6565,12.889 C17.8021674,13.2436684 17.875,13.6426645 17.875,14.086 Z M14.189,8.443 C14.189,7.98699772 14.0148351,7.65450105 13.6665,7.4455 C13.3181649,7.23649896 12.8020034,7.132 12.118,7.132 L10.522,7.132 L10.522,9.906 L12.27,9.906 C12.878003,9.906 13.3498317,9.78250124 13.6855,9.5355 C14.0211683,9.28849877 14.189,8.92433574 14.189,8.443 Z M14.626,13.782 C14.626,13.2246639 14.4170021,12.8383344 13.999,12.623 C13.5809979,12.4076656 13.0236701,12.3 12.327,12.3 L10.522,12.3 L10.522,15.378 L12.346,15.378 C12.5993346,15.378 12.8621653,15.3558336 13.1345,15.3115 C13.4068347,15.2671664 13.6538322,15.1880006 13.8755,15.074 C14.0971678,14.9599994 14.277666,14.798501 14.417,14.5895 C14.556334,14.380499 14.626,14.111335 14.626,13.782 Z"
                                                        id="Combined-Shape" fill="currentColor"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="flex-grow-1">Crypto</div>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="home-marketing.html">
                                    <div class="flex items-center -ms-1.5">
                                        <span
                                            class="bg-blue-500/10 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                            <svg class="text-blue-500 w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <path
                                                        d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                        id="Combined-Shape" fill="currentColor" opacity="0.3">
                                                    </path>
                                                    <path
                                                        d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                        id="Combined-Shape" fill="currentColor"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="flex-grow-1">Marketing</div>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="home-portfolio.html">
                                    <div class="flex items-center -ms-1.5">
                                        <span
                                            class="bg-red-500/10 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                            <svg class="text-red-500 w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path
                                                        d="M6,5 L18,5 C19.6568542,5 21,6.34314575 21,8 L21,17 C21,18.6568542 19.6568542,20 18,20 L6,20 C4.34314575,20 3,18.6568542 3,17 L3,8 C3,6.34314575 4.34314575,5 6,5 Z M5,17 L14,17 L9.5,11 L5,17 Z M16,14 C17.6568542,14 19,12.6568542 19,11 C19,9.34314575 17.6568542,8 16,8 C14.3431458,8 13,9.34314575 13,11 C13,12.6568542 14.3431458,14 16,14 Z"
                                                        id="Rectangle-25" fill="currentColor"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="flex-grow-1">Portfolio</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- Inner Page Dropdown -->
                    <li class="nav-item">
                        <a href="javascript:void(0);"
                            class="nav-link after:absolute hover:after:-bottom-10 after:inset-0"
                            data-fc-trigger="hover" data-fc-target="innerPageDropdownMenu" data-fc-type="dropdown"
                            data-fc-placement="bottom">
                            Pages <i class="fa-solid fa-angle-down ms-2 align-middle"></i>
                        </a>

                        <div id="innerPageDropdownMenu"
                            class="hidden opacity-0 mt-4 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 w-48 space-y-1.5">
                            <!-- Dropdown item -->
                            <div class="nav-item">
                                <a class="nav-link after:absolute after:inset-0 after:-end-10" data-fc-offset="8"
                                    data-fc-placement="right-start" data-fc-trigger="hover" data-fc-type="dropdown"
                                    type="button">
                                    Account <i class="fa-solid fa-angle-right ms-auto align-middle"></i>
                                </a>

                                <div
                                    class="ms-2 hidden w-48 opacity-0 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 space-y-1.5">
                                    <div class="nav-item">
                                        <a class="nav-link" href="account-dashboard.html">Dashboard</a>
                                    </div>

                                    <div class="nav-item">
                                        <a class="nav-link" href="account-settings.html">Settings</a>
                                    </div>

                                    <div class="nav-item">
                                        <a class="nav-link" href="account-login.html">Login</a>
                                    </div>

                                    <div class="nav-item">
                                        <a class="nav-link" href="account-signup.html">Sign Up</a>
                                    </div>

                                    <div class="nav-item">
                                        <a class="nav-link" href="account-forget-password.html">Forget Password</a>
                                    </div>

                                    <div class="nav-item">
                                        <a class="nav-link" href="account-confirm.html">Confirm Account</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Dropdown item -->
                            <div class="nav-item">
                                <a class="nav-link after:absolute after:inset-0 after:-end-10" data-fc-offset="8"
                                    data-fc-placement="right-start" data-fc-trigger="hover" data-fc-type="dropdown"
                                    type="button">
                                    Blog <i class="fa-solid fa-angle-right ms-auto align-middle"></i>
                                </a>

                                <div
                                    class="ms-2 hidden w-48 opacity-0 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 space-y-1.5">
                                    <div class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog</a>
                                    </div>

                                    <div class="nav-item">
                                        <a class="nav-link" href="blog-post.html">Blog Post</a>
                                    </div>
                                </div>
                            </div>

                            <hr class="-mx-2 my-2">

                            <!-- Dropdown item -->
                            <div class="nav-item">
                                <a class="nav-link" href="company.html">Company</a>
                            </div>

                            <!-- Dropdown item -->
                            <div class="nav-item">
                                <a class="nav-link" href="career.html">Career</a>
                            </div>

                            <!-- Dropdown item -->
                            <div class="nav-item">
                                <a class="nav-link" href="pricing.html">Pricing</a>
                            </div>

                            <!-- Dropdown item -->
                            <div class="nav-item">
                                <a class="nav-link after:absolute after:inset-0 after:-end-10" data-fc-offset="8"
                                    data-fc-placement="right-start" data-fc-trigger="hover" data-fc-type="dropdown"
                                    type="button">
                                    Portfolio <i class="fa-solid fa-angle-right ms-auto align-middle"></i>
                                </a>

                                <div
                                    class="ms-2 hidden w-48 opacity-0 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 space-y-1.5">
                                    <div class="nav-item">
                                        <a class="nav-link" href="portfolio-grid.html">Portfolio Grid</a>
                                    </div>

                                    <div class="nav-item">
                                        <a class="nav-link" href="portfolio-masonry.html">Portfolio Masonry</a>
                                    </div>

                                    <div class="nav-item">
                                        <a class="nav-link" href="portfolio-item.html">Portfolio Item</a>
                                    </div>
                                </div>
                            </div>

                            <hr class="-mx-2 my-2">

                            <!-- Dropdown item -->
                            <div class="nav-item">
                                <a class="nav-link" href="help.html">Help</a>
                            </div>
                        </div>
                    </li>

                    <!-- Contact Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact us</a>
                    </li>
                </ul>
            </div>

            <!-- Download Button -->
            <div class="hidden lg:flex items-center ms-3">
                <a href="https://1.envato.market/prompt-tailwind" target="_blank"
                    class="bg-primary text-white px-4 py-2 rounded inline-flex items-center text-sm">Download</a>
            </div>

            <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
            <div class="lg:hidden flex items-center ms-auto px-2.5">
                <button type="button" data-fc-target="mobileMenu" data-fc-type="offcanvas">
                    <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
                </button>
            </div>
        </nav>
    </div>
</header>
<!-- =========== Navbar End =========== -->

<!-- =========== Mobile Menu Start (Offcanvas) =========== -->
<div id="mobileMenu"
    class="fc-offcanvas-open:translate-x-0 translate-x-full fixed top-0 end-0 transition-all duration-200 transform h-full w-full max-w-md z-50 bg-white border-s hidden">
    <div class="flex flex-col h-full divide-y-2 divide-gray-200">
        <!-- Mobile Menu Topbar Logo (Header) -->
        <div class="p-6 flex items-center justify-between">
            <a href="index.html">
                <img src="assets/images/logo-dark.png" class="h-8" alt="Logo">
            </a>

            <button data-fc-dismiss class="flex items-center px-2">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu Link List -->
        <div class="p-6 overflow-scroll h-full">
            <ul class="navbar-nav flex flex-col gap-2" data-fc-type="accordion">
                <!-- Home Page Link -->
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Home</a>
                </li>

                <!-- Landing Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Landing <i
                            class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="home-app.html">App</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-saas.html">Saas Modern</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-saas2.html">Saas Classic</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-startup.html">Startup</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-software.html">Software</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-agency.html">Agency</a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="home-coworking.html">Coworking</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-crypto.html">Crypto</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-marketing.html">Marketing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-portfolio.html">Portfolio</a>
                        </li>
                    </ul>
                </li>

                <!-- Inner Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Pages <i
                            class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="company.html">Company</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="career.html">Career</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pricing.html">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="help.html">Help</a>
                        </li>
                    </ul>
                </li>

                <!-- Blog Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Blog Page <i
                            class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog-post.html">Blog Post</a>
                        </li>
                    </ul>
                </li>

                <!-- Portfolio Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Portfolio <i
                            class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="portfolio-grid.html">Portfolio Grid</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="portfolio-masonry.html">Portfolio Masonry</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="portfolio-item.html">Portfolio Item</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="account-confirm.html">Confirm Account</a>
                        </li>
                    </ul>
                </li>

                <!-- Auth Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Account <i
                            class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="account-login.html">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="account-signup.html">Sign Up</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="account-forget-password.html">Forget Password</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="account-confirm.html">Confirm Account</a>
                        </li>
                    </ul>
                </li>

                <!-- Contact Page Link -->
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact us</a>
                </li>
            </ul>
        </div>

        <!-- Mobile Menu Download Button (Footer) -->
        <div class="p-6 flex items-center justify-center">
            <a href="https://1.envato.market/prompt-tailwind" target="_blank"
                class="bg-primary w-full text-white p-3 rounded flex items-center justify-center text-sm">Download</a>
        </div>
    </div>
</div>
<!-- =========== Mobile Menu End =========== -->
