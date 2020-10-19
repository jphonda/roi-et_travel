@extends('frontend.layout')
@section('content')

    <div id="wrapper">
        @foreach ($datas as $item)
            <div class="tour-details-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12s col-md-12 col-sm-12 col-xs-12">
                            <!-- Title Section Start -->
                            <div class="tour-main-header">
                                <div class="left-part">
                                    <h2 class="main-heading">{{ $item->name }}</h2>
                                    <div class="second-heading">
                                        <i class="input-icon field-icon fa"><img
                                                src="{{ asset('images/icons/pin.svg') }}"></i>Bali, Indonesia
                                    </div>
                                </div>
                                <div class="right-part">
                                    <div class="review-score">
                                        <span class="head-rating">คะแนน</span>
                                        <div class="score-stars">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i
                                                class="fa fa-star-o"></i>
                                        </div>
                                        <p class="score-link">จำนวนผู้เข้าชม {{$item->score}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Title Section End -->

                            <!-- Tour Slider Start -->
                            <div class="tour-gallery">
                                <div class="fotorama" data-width="100%" data-fit="scaledown" data-nav="thumbs"
                                    data-thumbwidth="128" data-thumbheight="128" data-allowfullscreen="true"
                                    data-loop="true" data-autoplay="7000" data-keyboard="true">
                                    @foreach ($slider as $items)
                                        <a href="{{ asset('avatar/' . $items->image) }}"><img
                                                src="{{ asset('avatar/' . $items->image) }}" class="img-fluid" style="width:100%; heigth:auto; object-fit:cover "></a>                                        
                                    @endforeach
                                </div>
                            </div>
                            <!-- Tour Slider End -->
                            <!-- Tour Description Start -->
                            <p>{!! $item->content !!}</p>
                            
                            <script>                                
                                //   var str = document.getElementsByTagName("p"); 
                                //   var res = str.replace("dasdf", "<");
                                //   document.getElementsByTagName("p").innerHTML = res;                                

                            </script>                            
                            
                            <!-- Tour Highlights End -->
                            <!-- Tour Itinerary Start -->
                            {{-- <div class="tour-itinerary">
                                <div class="row justify-content-center align-self-center">
                                    <div class="col-lg-3 col-md-3 mb-7 mb-md-0">
                                        <div class="tab-vertical tab-vertical-md">
                                            <div class="itinerary-main-title">
                                                <h4>เส้นทางตลอดทริป</h4>
                                            </div>
                                            <div class="nav flex-column nav-pills" role="tablist"
                                                aria-orientation="vertical">
                                                <a class="nav-link tab-vertical__nav-link active show" id="day-one-tab"
                                                    data-toggle="pill" href="#day-one" role="tab" aria-controls="day-one"
                                                    aria-selected="true"><span><i class="far fa-circle"></i></span>
                                                    สถานีขนส่งร้อยเอ็ด</a>
                                                <a class="nav-link tab-vertical__nav-link" id="day-two-tab"
                                                    data-toggle="pill" href="#day-two" role="tab" aria-controls="day-two"
                                                    aria-selected="false"><span><i class="far fa-circle"></i></span>
                                                    วัดบรูภาพิราม</a>
                                                <a class="nav-link tab-vertical__nav-link" id="day-three-tab"
                                                    data-toggle="pill" href="#day-three" role="tab"
                                                    aria-controls="day-three" aria-selected="false"><span><i
                                                            class="far fa-circle"></i></span> บึงพลาญชัย</a>
                                                <a class="nav-link tab-vertical__nav-link" id="day-four-tab"
                                                    data-toggle="pill" href="#day-four" role="tab" aria-controls="day-four"
                                                    aria-selected="false"><span><i class="far fa-circle"></i></span>
                                                    สถานีขนส่งธวัช</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="day-one" role="tabpanel"
                                                aria-labelledby="day-one-tab">
                                                <div class="row align-items-lg-center itinerary-style2">
                                                    <div class="col-4 col-md-5 col-sm-5">
                                                        <a class="popup-link"
                                                            href="{{ asset('images/tour-details/tour1.jpg') }}"><img
                                                                class="style2-img"
                                                                src="{{ asset('images/tour-details/tour1.jpg') }}"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="col-8 col-md-7 col-sm-7 style2-desc">
                                                        <h4>สถานีขนส่ง จังหวัดร้อยเอ็ด</h4>
                                                        <p>สถานีขนส่งจังหวัดร้อยเอ็ด มีบริการรถขนส่ง
                                                            สามารถซื้อตั๋วเดินทางไปต่างจังหวัดทั่วประเทศไทยได้และเป็นสถานที่แรกที่นั่งท่องเที่ยวต้องอยู่เมื่อใช้บริการจาก
                                                            สถานีขนส่งจากทั่วประเทศ</p>
                                                        <p>ที่สถานีขนส่งจังหวัดร้อยเอ็ด
                                                            เรามีบริการขนส่งภายในจังหวัดไม่ว่าจะเป็น ตู๊กๆ taxi รถสามล้อ
                                                            รถสองแถว รวมถึง รถมอเตอร์ไซส์รับจ้าง
                                                            หรือหากใครสนใจบริการเช้ารถส่วนตัวก็สามารถติดต่อได้ที่สถานีขนส่งโดยตรง
                                                        </p>
                                                        <p><span><i class="fas fa-phone-alt"></i> 062-6341121</span></p>
                                                        <a href="#">Learn More<span
                                                                class="fa fa-angle-right align-middle ml-2"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="day-two" role="tabpanel"
                                                aria-labelledby="day-two-tab">
                                                <div class="row align-items-lg-center itinerary-style2">
                                                    <div class="col-4 col-md-5 col-sm-5">
                                                        <a class="popup-link"
                                                            href="{{ asset('images/tour-details/tour2.jpg') }}"><img
                                                                class="style2-img"
                                                                src="{{ asset('images/tour-details/tour2.jpg') }}"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="col-8 col-md-7 col-sm-7 style2-desc">
                                                        <h4>วัดบูรภาพิราม</h4>
                                                        <p>พระพุทธรัตนมงคลมหามุนี
                                                            หรือชื่อที่นิยมเรียกติดปากของคนในพื้นที่ว่า หลวงพ่อใหญ่
                                                            เป็นพระพุทธรูปปางประทานพรขนาดใหญ่ ประดิษฐานอยู่ ณ
                                                            วัดบูรพาภิราม ตำบลในเมือง อำเภอเมือง จังหวัดร้อยเอ็ด
                                                            จัดเป็นรูปปั้นที่สูงที่สุดเป็นอันดับที่ 4 ของประเทศไทย</p>
                                                        <p>มีนักท่องเที่ยวจำนวนมากต่อวัน
                                                            เป็นสถานที่แรกที่นักท่องเท่ี่ยวส่วนมากให้ความสนใจ
                                                            มากราบไหว้หลวงพ่อใหญ่ ก่อนจะเดินทางไปเที่ยวในสถานที่อื่น
                                                        </p>
                                                        <h4>ค่าใช้จ่าย</h4>
                                                        <p><span style="color:green"> <b><i class="fas fa-dollar-sign"></i>
                                                                    เดินทาง 20 นาที
                                                                    ระยะทาง 4km</b></span> | สถานีขนส่งจังหวัดร้อยเอ็ด >
                                                            วัดบูรพาภิราม</p>
                                                        <a href="#">Learn More<span
                                                                class="fa fa-angle-right align-middle ml-2"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="day-three" role="tabpanel"
                                                aria-labelledby="day-three-tab">
                                                <div class="row align-items-lg-center itinerary-style2">
                                                    <div class="col-4 col-md-5 col-sm-5">
                                                        <a class="popup-link"
                                                            href="{{ asset('images/tour-details/tour3.jpg') }}"><img
                                                                class="style2-img"
                                                                src="{{ asset('images/tour-details/tour3.jpg') }}"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="col-8 col-md-7 col-sm-7 style2-desc">
                                                        <h4>วัดเจดีย์ชัยมงคล</h4>
                                                        <p>พระมหาเจดีย์ชัยมงคล
                                                            ตั้งอยู่บริเวณวัดผาน้ำทิพย์เทพประสิทธิ์วราราม ตำบลผาน้ำย้อย
                                                            อำเภอหนองพอก จังหวัดร้อยเอ็ด
                                                            ระยะทางจากตัวเมืองร้อยเอ็ดประมาณ80 ก.</p>
                                                        <p>เป็นสถานที่ท่องเที่ยวสำหรับสายบุญ
                                                            ที่เป็นจุดสำคัญสำหรับนักท่องเที่ยวจากทั่วประเทศหากมาจังหวัดร้อยเอ็ดแล้วจะเดินทางมากราบไหว้
                                                            พระธาตุ ที่วัดเจดีย์ชัยมงคล </p>
                                                        <h4>ค่าใช้จ่าย</h4>
                                                        <p><span style="color:green"> <b><i class="fas fa-dollar-sign"></i>
                                                                    เดินทาง 1 ชม.​
                                                                    ระยะทาง 80km</b></span> | วัดบูรพาภิราม >
                                                            วัดเจดีย์ชัยมงคล</p>
                                                        <a href="#">Learn More<span
                                                                class="fa fa-angle-right align-middle ml-2"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="day-four" role="tabpanel"
                                                aria-labelledby="day-four-tab">
                                                <div class="row align-items-lg-center itinerary-style2">
                                                    <div class="col-4 col-md-5 col-sm-5">
                                                        <a class="popup-link"
                                                            href="{{ asset('images/tour-details/tour4.jpg') }}"><img
                                                                class="style2-img"
                                                                src="{{ asset('images/tour-details/tour4.jpg') }}"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="col-8 col-md-7 col-sm-7 style2-desc">
                                                        <!-- <span class="small-heading">Day one</span> -->
                                                        <h4>กู่กาสิงห์</h4>
                                                        <p>กู่กาสิงห์ ตั้งอยู่ในวัดบูรพากู่กาสิงห์ ตำบลกู่กาสิงห์
                                                            อำเภอเกษตรวิสัย จังหวัดร้อยเอ็ด
                                                            เป็นโบราณสถานสถาปัตยกรรมแบบเขมรอีกแห่งหนึ่ง
                                                            มีขนาดค่อนข้างใหญ่และยังอยู่ในสภาพดี
                                                            ปัจจุบันสำนักงานโบราณคดี และพิพิธภัณฑสถานแห่งชาติที่ 8
                                                            อุบลราชธานี
                                                            สังกัดกรมศิลปากรได้ดำเนินการขุดแต่งและบูรณะกู่กาสิงห์ </p>
                                                        <h4>ค่าใช้จ่าย</h4>
                                                        <p><span style="color:green"> <b><i class="fas fa-dollar-sign"></i>
                                                                    เดินทาง 1 ชม.​
                                                                    ระยะทาง 80km</b></span> | วัดบูรพาภิราม >
                                                            วัดเจดีย์ชัยมงคล</p>
                                                        <a href="#">Learn More<span
                                                                class="fa fa-angle-right align-middle ml-2"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Tour Itinerary End -->
                            <!-- Tour Map Start -->
                            <div class="tour-map ">
                                <h4 class="tour-map-title">แผนที่นำทาง</h4>
                                <div class="map-responsive">
                                    <iframe
                                        src="{{$item->map}}"
                                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                                        tabindex="0"></iframe>
                                </div>

                                <!-- Tour Map End -->

                                <!-- Tour Reviews Start -->
                                <div class="tour-reviews-section">
                                    <h4 class="tour-reviews-title">ผลโหวต / คะแนน รายการทริปท่องเที่ยว</h4>
                                    <div class="tour-reviews-count">
                                        <div class="reviews-left-part">
                                            <div class="ratings-average-number">
                                                <div class="ratings-average-number-text">{{ $item->score }}</div>
                                                <div class="ratings-average-number-overall"><span
                                                        class=" notranslate">จำนวนผู้เข้าชม</span></div>
                                            </div>
                                            <div class="rating-container">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>

                                        <div class="reviews-right-part">
                                            <div class="fb-comments" data-href="https://huaban.com" data-numposts="5"
                                                data-width="100%"></div>
                                        </div>
                                    </div>

                                    <div class="read-more-reviews">
                                        <a class="show-more-button" href="#">Show all reviews</a>
                                    </div>
                                </div>
                                <!-- Tour Reviews End -->
                            </div>
                        </div>
                    </div>
                    <div class="booking-mobile-btn">
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#bookingmodal">Book
                            Now</button>
                    </div>
                </div>


                <!-- Tour Similar Packages Start -->
                <div class="similar-tours">
                    <div class="container">
                        <div class="section-title">
                            <h4>market order</h4>
                            <h2>ผลิตภัณฑ์ชุมชนและของที่ระลึก</h2>
                        </div>
                        
                        <div class="row">
                            @foreach ($otops as $item)
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 col-xs-6 filter-result-item">
                                    <a href="tour-details-two.html" class="tour-list-item">
                                        <div class="tour-list-item-img">
                                            <img src="{{ asset('avatar/' . $item->image) }}">
                                            <span class="tour-item-feature">Featured</span>
                                        </div>
                                        <div class="item-description">
                                            <div class="tours-left-desc">
                                                <div class="item-location">
                                                    <i class="fa-icon"><img
                                                            src="{{ asset('images/icons/pin.svg') }}"></i><span>New
                                                        York, USA</span>
                                                </div>
                                                <p class="tour-item-title">{{ $item->name }}</p>
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

                                            </div>
                                            <div class="tour-footer">
                                                <div class="tour-duration">
                                                    <i class="input-icon field-icon fa"><img
                                                            src="{{ asset('images/icons/clock.svg') }}"></i><span>8
                                                        hours</span>
                                                </div>
                                                <div class="tour-category">
                                                    <i class="input-icon field-icon fa"><img
                                                            src="{{ asset('images/icons/category.svg') }}"></i><span>City
                                                        Tour</span>
                                                </div>
                                                <div class="tour-price">
                                                    <span class="tour-act-price"><span
                                                            class="tour-price-start">From</span><span
                                                            class="act-price">$12,000</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tour Similar Packages Start -->
            <!-- Subscriber Form Start -->
            <div class="subscriber-form">
                <div class="row no-gutters">
                    <div class="col-xs-12  col-md-6 col-lg-6">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{ asset('images/icons/ico_email_subscribe.svg') }}" alt="">
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
        @endforeach

    @endsection
