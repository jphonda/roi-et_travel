<!DOCTYPE html>
<html lang="en">
  <head>
    <title>เที่ยวร้อยเอ็ด - สถานที่ท่องเที่ยวเมืองร้อยเกิน</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="wefixit">
    <!-- description -->
    <meta name="description" content="เที่ยวร้อยเอ็ด - สถานที่ท่องเที่ยวเมืองร้อยเกิน">
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/daterangepicker.css')}}">
    <!-- Nice Select css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/nice-select.css')}}">
    <!--Plugin CSS file with desired skin-->
    <link rel="stylesheet" href="{{asset('css/ion.rangeSlider.css')}}"/>
    <!--WaitMe CSS-->
    <link rel="stylesheet" href="{{asset('css/waitMe.css')}}"/>
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Main Header Style CSS -->
    <link rel="stylesheet" href="{{asset('css/main-header.css')}}">
  </head>
  <body>
    <!-- Page loading start -->
    <div class="travel_page_loader">
      <div class="travel_loading_bar_wrapper">
        <div class="travel_loading_bar">
          <span class="from">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="49px" viewbox="0 0 30 49" enable-background="new 0 0 30 49" xml:space="preserve">
              <path fill="#86B940" d="M15.053,4.626c6.334,0,11.488,5.166,11.488,11.514c0,6.35-5.153,11.515-11.488,11.515c-6.335,0-11.489-5.166-11.489-11.515C3.564,9.792,8.718,4.626,15.053,4.626 M15.053,1.26c-8.201,0-14.849,6.661-14.849,14.881c0,8.22,14.849,32.359,14.849,32.359s14.849-24.14,14.849-32.359S23.255,1.26,15.053,1.26z M17.197,21.558v1.444h1.701V6.772h-7.69V7.7h6.876v1.186h-6.876v14.115h1.776v-1.443L17.197,21.558L17.197,21.558z M15.718,10.146h2.292v2.298h-2.292V10.146z M15.7,14.108h2.292v2.299H15.7V14.108z M15.7,18.037h2.292v2.295H15.7V18.037z M12.133,10.146h2.292v2.298h-2.292V10.146z M12.114,14.108h2.292v2.299h-2.292V14.108z M12.114,20.333v-2.295h2.292v2.295H12.114z M17.197,23.188v-0.186h-4.213v0.186H8.695v1.631h12.717v-1.631H17.197z"></path>
            </svg>
          </span>
          <span class="to">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="49px" viewbox="0 0 30 49" enable-background="new 0 0 30 49" xml:space="preserve">
              <path fill="#ffffff" d="M15.001,3.636c6.369,0,11.55,5.193,11.55,11.577c0,6.383-5.181,11.58-11.55,11.58c-6.372,0-11.551-5.197-11.551-11.58C3.45,8.829,8.629,3.636,15.001,3.636 M15.001,0.25C6.753,0.25,0.07,6.952,0.07,15.213c0,8.265,14.931,32.537,14.931,32.537s14.93-24.272,14.93-32.537C29.931,6.952,23.244,0.25,15.001,0.25z M13.871,20.894l1.182-0.003V20.88h-0.005l0.005-0.038V20.62c-0.013-0.187,0-1.001,0-1.001c-0.118-1.364-0.671-3.527-2.869-4.981c-0.042-0.025-1.077-0.676-1.439-2.202c-0.355-1.505,0.07-3.29,1.265-5.305c-1.594,1.002-2.658,2.775-2.658,4.803c0,1.745,0.795,3.307,2.034,4.343c0,0,0.39,0.301,0.506,0.378C14.083,18.362,13.871,20.894,13.871,20.894z M17.594,14.451c0.013-0.002,1.19-0.681,1.269-2.161c0.086-1.549-0.23-3.436-1.508-5.498C16.72,6.497,16.02,6.32,15.283,6.283v12.016C15.612,17.022,15.927,15.552,17.594,14.451z M11.364,12.256c0.082,1.476,1.257,2.156,1.27,2.161c1.666,1.102,1.983,2.571,2.312,3.847V6.248c-0.738,0.036-1.436,0.214-2.071,0.508C11.6,8.819,11.282,10.707,11.364,12.256z M17.354,6.787v0.004l0.031,0.012L17.354,6.787z M18.113,7.107c1.295,2.104,1.836,3.727,1.465,5.288c-0.357,1.523-1.395,2.176-1.438,2.201c-2.14,1.412-2.718,3.504-2.856,4.873v1.423h1.237c0,0-0.03-2.824,1.757-4.35c1.617-1.093,2.369-2.708,2.369-4.606C20.646,9.819,19.823,8.08,18.113,7.107z M15.252,20.911h0.032v-0.02h-0.031L15.252,20.911z M13.695,24.404h3.116v-3.116h-3.116V24.404z"></path>
            </svg>
          </span>
          <div class="travel_loading_bar_overlay" style="width:0%;">
            <span class="pointer"><img src="images/icons/loading_plane.svg" alt=""></span> 
          </div>
        </div>
      </div>
    </div>
    <!-- Page loading End -->
    <!-- Search Modal start -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <div class="widget widget_search">
        <form method="get" class="searchform search-form" action="{{url('/search')}} " >
          <div class="input-group">
            <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">ค้นหา</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Search Modal End -->
    <!-- Header Section start -->
    <div class="header_absolute ds cover-background">
      <!-- Topline Start -->
      <section class="page_topline ds c-my-10 s-overlay">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-8 col-sm-12 col-xs-12 text-left align-self-center">
              <ul class="small-text">
                <li><span class="fa fa-phone"></span><a href="tel:855374-6211">(855) 374-6211</a></li>
                <li><span class="fa fa-envelope-o"></span><a href="mailto:hello@yoursite.com">hello@yoursite.com</a></li>
                <li><span class="fa fa-map-marker"></span><a>5 Sylvan Way, Parsippany, NJ 07054, USA</a></li>
              </ul>
            </div>
            <div class="col-12 col-md-4 col-sm-12 col-xs-12 text-right align-self-center">
              <span class="social-icons">
              <a href="#" class="fa fa-facebook " title="facebook"></a>
              <a href="#" class="fa fa-youtube " title="youtube"></a>
              <a href="#" class="fa fa-linkedin" title="linkedin"></a>
              <a href="#" class="fa fa-twitter " title="twitter"></a>
              <a href="#" class="fa fa-google " title="google"></a>
              </span>
            </div>
          </div>
        </div>
      </section>
      <!-- Topline End -->
      <!-- Header Start -->
      <header class="page_header ls justify-nav-end">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-3 col-lg-4 col-md-5 col-11">
              <a href="home.html" class="logo">
                <img src="{{asset('images/logo.svg')}}" alt="Roamers">
              </a>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7 col-1">
              <div class="nav-wrap">
                <!-- main nav start -->
                <nav class="top-nav">
                  <ul class="nav sf-menu">
                    <li class="active">
                      <a href="{{url('/index')}}">หน้าแรก</a>
                    </li>
                    <li>
                      <a href="">เที่ยวร้อยเอ็ด</a>
                      <ul>                      
                        <li><a href="{{url('/select/1')}}">เส้นทางสายบุญ/ไหว้พระ</a></li>
                        <li><a href="{{url('/select/2')}}" style="color: rgb(191, 191, 191);">เส้นทางสายธรรมชาติ</a></li>
                        <li><a href="{{url('/select/3')}}" style="color: rgb(191, 191, 191);">เส้นทางแหล่งเรียนรู้
                            /การศึกษา/ประวัติศาสตร์</a></li>
                        <li><a href="{{url('/select/4')}}" style="color: rgb(191, 191, 191);">เส้นทางสายแช๊ะ ชิม ช๊อป ชิลล์</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="about.html">เกี่ยวกับเรา</a>
                    </li>
  
                  </ul>
                </nav>
                <!-- main nav End -->
                <!--hidding includes on small devices. They are duplicated in topline-->
                <ul class="top-includes d-none d-xl-block">
                  <li>
                    <!--modal search-->
                    <span>
                      <a href="#" class="search_modal_button">
                        <i class="fa fa-search"></i>
                      </a>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- header toggler -->
        <span class="toggle_menu"><span></span></span>
      </header>
      <!-- Header End -->
    </div>
    <!-- Header Section End -->
    <div id="wrapper">
      <!-- parallax Title Start -->
      <div class="page-title-para" style="background-image: url(../images/page-top.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="page-title-wrapper">
                <h1>เที่ยวร้อยเอ็ด อิ่มบุญ สุขใจ</h1>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- parallax Title End -->
      
      <div class="search-result">
        <div class="container">
          <div class="row">            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 filter-result">
              <div class="row">
                <div class="col-12 col-lg-9 col-md-6 col-sm-6 col-xs-12 result-count">
                  <h4>24 tours found</h4>
                </div>
                <div class="col-8 col-lg-2 col-md-4 col-sm-4 col-xs-8 sort-option">
                  <select class="nice-sel wide">
                    <option value="" disabled selected>Sort By</option>
                    <option value="1">Newest on top</option>
                    <option value="2">Oldest on top</option>
                    <option value="3">Price Low to High</option>
                    <option value="4">Price High to Low</option>
                    <option value="5">Days ascending</option>
                    <option value="6">Days descending</option>
                  </select>
                </div>
                <div class="col-4 col-lg-1 col-md-2 col-sm-2 col-xs-4 result-view-option">
                  <i class="result-sort-icon fa" data-value='list'>
                    <svg width="18px" height="18px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g class="list-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g class="serch-result-layout" transform="translate(-1255.000000, -920.000000)" stroke="#A0A9B2">
                          <g id="list-hotel" transform="translate(435.000000, 910.000000)">
                            <g id="sort" transform="translate(818.000000, 10.000000)">
                              <g id="ico_list-active" transform="translate(2.000000, 0.000000)">
                                <g id="layout-bullets">
                                  <rect id="Rectangle-path" x="6.875" y="0.6225" width="12.5" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="6.875" y="8.1225" width="12.5" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="6.875" y="15.6225" width="12.5" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="0.625" y="0.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="0.625" y="8.1225" width="3.75" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="0.625" y="15.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                </g>
                              </g>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </i>
                  <i class="result-sort-icon fa active" data-value='grid'>
                    <svg width="18px" height="18px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g class="grid-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g class="serch-result-layout" transform="translate(-1285.000000, -920.000000)" stroke="#A0A9B2">
                          <g id="list-hotel" transform="translate(435.000000, 910.000000)">
                            <g id="sort" transform="translate(818.000000, 10.000000)">
                              <g id="ico_grid" transform="translate(32.000000, 0.000000)">
                                <g id="layout-module">
                                  <rect id="Rectangle-path" x="0.625" y="0.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="8.125" y="0.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="15.625" y="0.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="0.625" y="8.1225" width="3.75" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="8.125" y="8.1225" width="3.75" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="15.625" y="8.1225" width="3.75" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="0.625" y="15.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="8.125" y="15.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                  <rect id="Rectangle-path" x="15.625" y="15.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                </g>
                              </g>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </i>
                </div>
              </div>
              <div class="row filter-result-main grid-view">                
                @foreach ($datas as $item)
                <div class="col-6 col-lg-4 col-md-6 col-sm-6 col-xs-6 filter-result-item">
                    <a href="{{url('/detail_travel/' . $item->id_place)}}" class="tour-list-item">
                      <div class="tour-list-item-img">
                        <img src="{{asset('avatar/'. $item->image)}}">
                        <span class="tour-item-feature">สายธรรมะ</span>
                      </div>
                      <div class="item-description">
                        <div class="tours-left-desc">
                          <div class="item-location">
                            <i class="fa-icon"><img src="images/icons/pin.svg"></i><span>Roi-Et</span>
                          </div>
                          <p class="tour-item-title">{{$item->name}}</p>
                          <div class="tour-item-review">
                            <ul class="tour-review-stars">
                              <li><i class="fa  fa-star"></i></li>
                              <li><i class="fa  fa-star"></i></li>
                              <li><i class="fa  fa-star-half-o"></i></li>
                              <li><i class="fa  fa-star-o"></i></li>
                              <li><i class="fa  fa-star-o"></i></li>
                            </ul>
                            <span class="tour-review">4 Reviews</span>
                          </div>
                          <p class="tour-item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tour-footer">
                          <div class="tour-duration">
                            <i class="input-icon field-icon fa"><img src="images/icons/clock.svg"></i><span>12 hours</span>
                          </div>
                          <div class="tour-category">
                            <i class="input-icon field-icon fa"><img src="images/icons/category.svg"></i><span>City Tour</span>
                          </div>
                          <div class="tour-price">
                            <span class="tour-act-price"><span class="tour-price-start">From</span><span class="act-price">$ - </span></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>  
                @endforeach                                                
              </div>
              
            </div>
            <!-- Tour Result End -->
          </div>
        </div>
      </div>
      <!-- Subscriber Form Start -->
      <div class="subscriber-form">
        <div class="row no-gutters">
          <div class="col-xs-12  col-md-6 col-lg-6">
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="images/icons/ico_email_subscribe.svg" alt="">
              </div>
              <div class="media-body">
                <h4>Get Updates &amp; More</h4>
                <p>Thoughtful thoughts to your inbox</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-6">
            <form action="" class="subcribe-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" required>
                <input type="submit" name="submit" value="Subcribe" class="subscribe-btn">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Subscriber Form End -->
      <!-- Footer Start -->
      <footer class="footer">
        <div class="container">
          <div class="row">
            <!-- widget footer-->
            <div class="col-md-3 col-sm-6">
              <div class="clearfix">
                <div class="footer-logo"><a href="index.html"><img src="{{asset('images/logo.svg')}}" alt="Roamers"></a></div>
              </div>
              <p class="small-story">Vestibulum tincidunt venenatis scelerisque. Proin quis enim lacinia, vehicula massa et, mollis urna. Proin nibh mauris, blandit vitae convallis at, tincidunt vel tellus. Praesent posuere nec lectus non.</p>
            </div>
            <!-- ! widget footer-->
            <!-- widget footer-->
            <div class="col-md-3 col-sm-6">
              <div class="widget-footer">
                <h4>OUR RECENT POSTS</h4>
                <ul class="footer-blog">
                  <li>
                    <a href="blog-detail.html" title="Visit Thailand, Bali And China">
                      Visit Thailand, Bali And China
                      <p>September 4, 2019</p>
                    </a>
                  </li>
                  <li>
                    <a href="blog-detail.html" title="The Sound Of Our Jungle">
                      The Sound Of Our Jungle
                      <p>August 27, 2019</p>
                    </a>
                  </li>
                  <li>
                    <a href="blog-detail.html" title="Kuala Lumpur Ladies Special">
                      Kuala Lumpur Ladies Special
                      <p>April 12, 2019</p>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- End widget footer-->
            <!-- widget footer-->
            <div class="col-md-3 col-sm-6">
              <div class="widget-footer">
                <h4>Tag cloud</h4>
                <div class="widget-tags-wrap">
                  <a href="#" rel="tag" class="tag">Adventure</a>
                  <a href="#" rel="tag" class="tag">Romantic</a>
                  <a href="#" rel="tag" class="tag">Wildlife</a>
                  <a href="#" rel="tag" class="tag">Beach</a>
                  <a href="#" rel="tag" class="tag">Honeymoon</a>
                  <a href="#" rel="tag" class="tag">Island</a>
                  <a href="#" rel="tag" class="tag">Parks</a>
                  <a href="#" rel="tag" class="tag">Family</a>
                  <a href="#" rel="tag" class="tag">Travel</a>
                </div>
              </div>
            </div>
            <!-- End widget footer-->
            <!-- widget footer-->
            <div class="col-md-3 col-sm-6 mb-sm-30">
              <div class="widget-footer">
                <h4>NEED HELP?</h4>
                <div class="footer-contact">
                  <p>Call Us</p>
                  <h5>+ 00 222 44 5678</h5>
                </div>
                <div class="footer-contact">
                  <p>Email for Us</p>
                  <h5>hello@yoursite.com</h5>
                </div>
                <div class="footer-contact">
                  <p>Follow Us</p>
                  <div class="social-link">
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End widget footer-->
          </div>
        </div>
        <!-- copyright-->
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p>© Copyright 2019 <span>Roamers</span> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved</p>
              </div>
              <div class="col-sm-6 text-right">
                <a href="index.html" class="footer-nav">Home</a>
                <a href="about-us.html" class="footer-nav">About Us</a>
                <a href="tour-list.html" class="footer-nav">Tours</a>
                <a href="blog-list.html" class="footer-nav">Blog</a>
                <a href="faq.html" class="footer-nav">FAQs</a>
                <a href="contact-us.html" class="footer-nav">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End copyright-->
      </footer>
      <!-- Footer End -->
    </div>
    <!--/#wrapper--> 
    <!-- scroll top-->
    <a id="back2Top" title="Back to top" href="#"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    <!-- Latest jQuery Library File --> 
    <script src="{{asset('js/jquery.js')}}"></script> 
    <!-- Latest Bootstrap --> 
    <script src="{{asset('js/bootstrap.min.js')}}"></script> 
    <!-- Affix JS --> 
    <script src="{{asset('js/affix.js')}}"></script>
    <!-- Superfish JS -->  
    <script src="{{asset('js/superfish.js')}}"></script>
    <!-- Moment JS -->  
    <script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
    <!-- Daterangepicker JS -->  
    <script type="text/javascript" src="{{asset('js/daterangepicker.min.js')}}"></script>
    <!-- Nice Select JS -->  
    <script type="text/javascript" src="{{asset('js/jquery.nice-select.js')}}"></script>
    <!-- Range slider JS -->  
    <script src="{{asset('js/ion.rangeSlider.js')}}"></script>
    <!-- Sticky Sidebar JS -->  
    <script type="text/javascript" src="{{asset('js/jquery.sticky-sidebar.js')}}"></script>
    <!-- Wait Me JS -->  
    <script type="text/javascript" src="{{asset('js/waitMe.js')}}"></script>
    <!-- Main Header JS -->
    <script src="{{asset('js/main-header.js')}}"></script> 
    <!-- Main Script --> 
    <script src="{{asset('js/general-scripts.js')}}"></script>
  </body>
</html>