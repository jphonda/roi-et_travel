@extends('frontend.layout2')
@section('content')
<div id="wrapper">
  <!-- parallax Title Start -->
  <div class="page-title-para" style="background-image: url(images/page-top.jpg);">
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
            <div class="col-6 col-lg-4 col-md-6 col-sm-6 col-xs-6 filter-result-item">
              <a href="tour-details-two.html" class="tour-list-item">
                <div class="tour-list-item-img">
                  <img src="images/tour-details/trip_1.jpg">
                  <span class="tour-item-feature">สายธรรมะ</span>
                </div>
                <div class="item-description">
                  <div class="tours-left-desc">
                    <div class="item-location">
                      <i class="fa-icon"><img src="images/icons/pin.svg"></i><span>Roi-Et</span>
                    </div>
                    <p class="tour-item-title">12 ชั่วโมงในร้อยเอ็ด ทริปนี้รับรองอิ่มทั้งท้องอิ่มทั้งบุญ!</p>
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
            @foreach ($datas as $item)
            <div class="col-6 col-lg-4 col-md-6 col-sm-6 col-xs-6 filter-result-item">
                <a href="{{url('/detail_travel/' . $item->id_place)}}" class="tour-list-item">
                  <div class="tour-list-item-img">
                    <img src="{{asset('avatar/'. $item->image)}}">
                    <span class="tour-item-feature">
                      @if ($item->status == 0)
                          สายธรรมะ
                      @elseif($item->status == 1)
                          สายธรรมชาติ
                      @elseif($item->status == 2)
                          แหล่งเรียนรู้
                      @elseif($item->status == 3)
                          แช๊ะ ชิม ช๊อป ชิลล์
                      @endif
                    </span>
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
            <div class="col-6 col-lg-4 col-md-6 col-sm-6 col-xs-6 filter-result-item" >
              <a href="#" class="tour-list-item" >
                <div style="background: rgba(255, 255, 255, 0.865); width: 100%; height: 100%; position: absolute; z-index: 99; border-radius: 2px;" ></div>
                <div class="tour-list-item-img">
                  <img src="images/tour-details/tour10.jpg">
                  <span class="tour-item-feature">สายธรรมะ</span>
                </div>
                <div class="item-description">
                  <div class="tours-left-desc">
                    <div class="item-location">
                      <i class="fa-icon"><img src="images/icons/pin.svg"></i><span>Roi-Et</span>
                    </div>
                    <p class="tour-item-title">8 ชั่วโมงในร้อยเอ็ด สายธรรมะรับอากาศบริสุทธิจากป่าเขา!</p>
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
                      <span class="tour-act-price"><span class="tour-price-start">From</span><span class="act-price">$ -</span></span>
                    </div>
                  </div>
                </div>
              </a>
            </div>                                 
          </div>
          <div class="row filter-pagination">
            <ul class="pagination-pages">
              <li><a class="prev page-numbers" href="#"><i class="fa fa-angle-left"></i></a></li>
              <li><a class="page-numbers current" aria-current="page" href="#">1</a></li>
              <li><a class="page-numbers" href="#">2</a></li>
              <li><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
            <span class="count-string">1 - 12 of 24 Tours</span>
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
@endsection