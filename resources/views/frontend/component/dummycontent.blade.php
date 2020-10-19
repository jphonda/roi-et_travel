@extends('frontend.app')
@section('content')
<div id="wrapper">
    <div class="tour-details-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-12s col-md-12 col-sm-12 col-xs-12">
            <!-- Title Section Start -->
            <div class="tour-main-header">
              <div class="left-part">
                <h2 class="main-heading">12 ชั่วโมงในร้อยเอ็ด ทริปนี้รับรองอิ่มทั้งท้องอิ่มทั้งบุญ!</h2>
                <div class="second-heading">
                  <i class="input-icon field-icon fa"><img src="images/icons/pin.svg"></i>Bali, Indonesia
                </div>
              </div>
              <div class="right-part">
                <div class="review-score">
                  <span class="head-rating">Excellent</span>
                  <div class="score-stars">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                  </div>
                  <p class="score-link">from 0 review</p>
                </div>
              </div>
            </div>
            <!-- Title Section End -->
            
            <!-- Tour Slider Start -->
            <div class="tour-gallery">
              <div class="fotorama" data-width="100%" data-fit="scaledown" data-nav="thumbs" data-thumbwidth="128" data-thumbheight="128" data-allowfullscreen="true" data-loop="true" data-autoplay="7000" data-keyboard="true">
                <a href="{{asset('images/tour-details/a11_Test.jpg')}}"><img src="{{asset('images/tour-details/a11_Test.jpg')}}"></a>
                <a href="{{asset('images/tour-details/a16_Test.jpg')}}"><img src="{{asset('images/tour-details/a16_Test.jpg')}}"></a>
                <a href="https://www.youtube.com/watch?v=6u5LX6SOoc4">Bali, Indonesia</a>
                <a href="{{asset('images/tour-details/a6_Test.jpg')}}"><img src="{{asset('images/tour-details/a6_Test.jpg')}}"></a>
                <a href="{{asset('images/tour-details/content5.jpeg')}}"><img src="{{asset('images/tour-details/content5.jpeg')}}"></a>
                
              </div>
            </div>
            <!-- Tour Slider End -->
            <!-- Tour Description Start -->
            <div class="read-more collapsed">
              <h4 class="read-more-title">12 ชั่วโมงในร้อยเอ็ด ทริปนี้รับรองอิ่มทั้งท้องอิ่มทั้งบุญ!</h4>                
                  <p>จังหวัดร้อยเอ็ดอาจจะไม่ใช่จังหวัดใหญ่หรือปลายทางที่หลายคนมุ่งหน้าไปมากนัก อาจจะเพราะไม่ได้เป็นจังหวัดที่มีสถานที่ท่องเที่ยวยิ่งใหญ่หวือหวา แต่เราเชื่อว่าจังหวัดนี้ยังมีอะไรที่น่าค้นหาอีกมากพอตัวเลยละ โดยเฉพาะสำหรับใครที่ชอบการเข้าวัด ไหว้พระ มุ่งหน้าเก็บแต้มบุญเป็นงานอดิเรก ขอบอกว่านี่ละเมืองที่คุณตามหา เพราะสงบ สบาย และเต็มไปด้วยวัดวาอารามที่น่าสนใจ ไม่เกริ่นละ เสียเวลา ไปดูกันเลยดีกว่าว่าสองวันที่ร้อยเอ็ดน่ะ มีอะไรเด็ดๆ ให้ทำมั่ง!</p>
              
            </div>
            <!-- Tour Description End -->
            <!-- Tour Highlights Start -->
            <div class="tour-highlight">
              <h4 class="read-more-title">1. วัดบูรพาภิราม</h4>                
              <div class="row">
                <div class="col-6 d-flex justify-content-end"><a class="popup-link" href="{{asset('images/tour-details/content1.jpg')}}"><img class="style2-img" style="width: auto; height: 300px; object-fit: cover;" src="{{asset('images/tour-details/content1.jpg')}}"alt="Image Description"></a></div>
                <div class="col-6 d-flex justify-content-start"><a class="popup-link" href="{{asset('images/tour-details/content2.jpg')}}"><img class="style2-img" style="width: auto; height: 300px; object-fit: cover;" src="{{asset('images/tour-details/content2.jpg')}}"alt="Image Description"></a></div>
              </div>
              <br>
              
              <ul>
                <li>เปิดประเดิมวันที่สองกันกับอีกหนึ่งวัดที่มองเห็นได้แต่ไกล เพราะมีองค์พระพุทธรูปปางประทานพรที่สูงที่สุดในประเทศไทย คือ พระพุทธรัตนมงคลมหามุนี หรือหลวงพ่อใหญ่ ที่ถือได้ว่าเป็นอีกหนึ่งสัญลักษณ์สำคัญของจังหวัดร้อยเอ็ด ซึ่งมีความสูงถึง 67 เมตรเลยทีเดียว บริเวณด้านใต้ฐานองค์พระยังทำเป็นพิพิธภัณฑ์และห้องสำหรับปฏิบัติศาสนกิจที่หลากหลาย ชาวร้อยเอ็ดต่างให้ความนับถือศรัทธาและนิยมมากราบขอพรหลวงพ่อใหญ่องค์นี้กันถ้วนหน้า ดังนั้น ถ้าคุณมีเวลาได้ไปร้อยเอ็ดละก็ห้ามพลาดเชียว!</li>                 
              </ul>
            </div>
            <div class="tour-highlight">
              <h4 class="read-more-title">2. วัดเจดีย์ชัยมงคล</h4>                
              <div class="row">
                <div class="col-12 d-flex justify-content-center"><a class="popup-link" href="{{asset('images/tour-details/content3.jpg')}}"><img class="style2-img" style="width: auto; height: 300px; object-fit: cover;" src="{{asset('images/tour-details/content3.jpg')}}"alt="Image Description"></a></div>                  
              </div>
              <br>                
              <ul>
                <li>กราบนมัสการพระมหาเจดีย์ชัยมงคลที่วัดผาน้ำทิพย์เทพประสิทธิ์วราราม ตำบลผาน้ำย้อย อำเภอหนองพอก ชื่อบอกอยู่แล้วว่าเป็นพระมหาเจดีย์ก็แปลว่าต้องมีขนาดใหญ่โตมโหฬาร ซึ่งพิสูจน์ได้ด้วยตาเพราะสามารถมองเห็นที่นี่ได้จากในระยะไกลเลยละ ด้วยความสูง 101 เมตร (ไม่รวมยอดทองคำด้านบนนะ) เจดีย์องค์นี้สร้างในรูปแบบร่วมสมัยโดยใช้ศิลปะผสมผสานที่ดูคล้ายการนำพระปฐมเจดีย์และพระธาตุพนมมารวมกันไว้ในองค์เดียว ตรงยอดด้านบนสุดเป็นทองคำน้ำหนักประมาณ 60 กิโลกรัม รอบด้านยังมีเจดีย์องค์เล็กๆ ล้อมอยู่ทั้ง 8 ทิศ ส่วนภายในตกแต่งด้วยลวดลายละเอียดอ่อนช้อยอลังการเป็นสีทองอร่าม ให้ความรู้สึกคล้ายอยู่บนสวรรค์กันเลยละ มาถึงสถานที่ศักดิ์สิทธิ์ขนาดนี้กันทั้งทีนะ ใครอยากมูแบบไหน ขออะไร เอาจ้ะ เริ่ม!!</li>                 
              </ul>
            </div>
            <div class="tour-highlight">
              <h4 class="read-more-title">3. กู่กาสิงห์ </h4>                
              <div class="row">
                <div class="col-6 d-flex justify-content-end"><a class="popup-link" href="{{asset('images/tour-details/content5.jpeg')}}"><img class="style2-img" style="width: auto; height: 300px; object-fit: cover;" src="{{asset('images/tour-details/content5.jpeg')}}"alt="Image Description"></a></div>
                <div class="col-6 d-flex justify-content-start"><a class="popup-link" href="{{asset('images/tour-details/content6.jpeg')}}"><img class="style2-img" style="width: auto; height: 300px; object-fit: cover;" src="{{asset('images/tour-details/content6.jpeg')}}"alt="Image Description"></a></div>
              </div>
              <br>                
              <ul>
                <li>กู่กาสิงห์ ตั้งอยู่ในวัดบูรพากู่กาสิงห์ ตำบลกู่กาสิงห์ อำเภอเกษตรวิสัย จังหวัดร้อยเอ็ด เป็นโบราณสถานสถาปัตยกรรมแบบเขมรอีกแห่งหนึ่ง มีขนาดค่อนข้างใหญ่และยังอยู่ในสภาพดี ปัจจุบันสำนักงานโบราณคดี และพิพิธภัณฑสถานแห่งชาติที่ 8 อุบลราชธานี สังกัดกรมศิลปากรได้ดำเนินการขุดแต่งและบูรณะกู่กาสิงห์ ให้สวยงามยิ่งขึ้น เพื่อพัฒนาเป็นแหล่งท่องเที่ยวที่สำคัญอีกแห่งหนึ่งในภาคอีสานของไทย กู่กาสิงห์ ประกอบด้วย ปรางค์ 3 องค์ ตั้งอยู่บนฐานศิลาแลงเดียวกันในแนวเหนือ-ใต้ แผนผังเป็นรูปสี่เหลี่ยมจัตุรัส หันหน้าไปทางทิศตะวันออก ปรางค์องค์กลางมีขนาดใหญ่กว่าอีก 2 องค์ที่ขนาบข้าง และมีมุขยื่นทางด้านหน้าเป็นห้องยาว ส่วนฐานขององค์ปรางค์ก่อด้วยศิลาทรายยังคงปรากฏลวดลายสลักเป็นชั้นเป็นแนว เช่น ลายกลีบบัวและลายกนก ได้ค้นพบศิวลึงค์ ซึ่งเป็นตัวแทนของเทพสูงสุด (พระอิศวร) และความอุดมสมบูรณ์ตามลัทธิความเชื่อในศาสนาพราหมณ์ลัทธิไศวนิกาย และมีวิหารหรืออาคารรูปสี่เหลี่ยมผืนผ้าที่เรียกว่าบรรณาลัย อยู่ทางด้านหน้าทั้งสองข้าง ทั้งหมดล้อมรอบด้วยกำแพงซึ่งมีซุ้มประตูทั้ง 4 ทิศ ถัดออกไปเป็นคูน้ำรูปเกือกม้าล้อมรอบอีกชั้นหนึ่ง นอกจากนี้ยังพบทับหลังอีกหลายชิ้น ชิ้นหนึ่งสลักเป็นภาพพระอินทร์ทรงช้างเอราวัณในซุ้มเรือนแก้ว และยังพบซุ้มหน้าบันสลักเป็นภาพพระอินทร์ทรงช้างเอราวัณท่ามกลางลายก้านขดอีกด้วย ส่วนปรางค์อีก 2 องค์ที่ขนาบนั้น มีขนาดและลักษณะเดียวกัน ฐานก่อด้วยศิลาทราย ผนังก่ออิฐมีประตูเพียงด้านหน้า ภายในมีแท่นรูปเคารพวางอยู่จากลวดลายของศิลปกรรม ดังนั้น จากแบบแผนผังและโบราณวัตถุที่พบ แสดงให้เห็นว่า กู่กาสิงห์สร้างขึ้นในแบบศิลปะเขมรที่เรียกว่า "แบบบาปวน" ในราวช่วง พ.ศ. 1560-1630 เพื่อเป็นเทวสถานอุทิศถวายแด่พระอิศวร เทพเจ้าสูงสุดองค์หนึ่งในศาสนาพราหมณ์</li>                 
              </ul>
            </div>
            <!-- Tour Highlights End -->
            <!-- Tour Itinerary Start -->
            <div class="tour-itinerary">
              <div class="row justify-content-center align-self-center">
                <div class="col-lg-3 col-md-3 mb-7 mb-md-0">
                  <div class="tab-vertical tab-vertical-md">
                    <div class="itinerary-main-title">
                      <h4>เส้นทางตลอดทริป</h4>
                    </div>
                    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                      <a class="nav-link tab-vertical__nav-link active show" id="day-one-tab" data-toggle="pill" href="#day-one" role="tab" aria-controls="day-one" aria-selected="true"><span><i class="far fa-circle"></i></span> สถานีขนส่งร้อยเอ็ด</a>                                                
                      <a class="nav-link tab-vertical__nav-link" id="day-two-tab" data-toggle="pill" href="#day-two" role="tab" aria-controls="day-two" aria-selected="false"><span><i class="far fa-circle"></i></span> วัดบรูภาพิราม</a>
                      <a class="nav-link tab-vertical__nav-link" id="day-three-tab" data-toggle="pill" href="#day-three" role="tab" aria-controls="day-three" aria-selected="false"><span><i class="far fa-circle"></i></span> บึงพลาญชัย</a>
                      <a class="nav-link tab-vertical__nav-link" id="day-four-tab" data-toggle="pill" href="#day-four" role="tab" aria-controls="day-four" aria-selected="false"><span><i class="far fa-circle"></i></span> สถานีขนส่งธวัช</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-9 col-md-9">
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="day-one" role="tabpanel" aria-labelledby="day-one-tab">
                      <div class="row align-items-lg-center itinerary-style2">
                        <div class="col-4 col-md-5 col-sm-5">
                          <a class="popup-link" href="{{asset('images/tour-details/tour1.jpg')}}"><img class="style2-img" src="{{asset('images/tour-details/tour1.jpg')}}" alt="Image Description"></a>
                        </div>
                        <div class="col-8 col-md-7 col-sm-7 style2-desc">                            
                          <h4>สถานีขนส่ง จังหวัดร้อยเอ็ด</h4>
                          <p>สถานีขนส่งจังหวัดร้อยเอ็ด มีบริการรถขนส่ง สามารถซื้อตั๋วเดินทางไปต่างจังหวัดทั่วประเทศไทยได้และเป็นสถานที่แรกที่นั่งท่องเที่ยวต้องอยู่เมื่อใช้บริการจาก สถานีขนส่งจากทั่วประเทศ</p>
                          <p>ที่สถานีขนส่งจังหวัดร้อยเอ็ด เรามีบริการขนส่งภายในจังหวัดไม่ว่าจะเป็น ตู๊กๆ taxi รถสามล้อ รถสองแถว รวมถึง รถมอเตอร์ไซส์รับจ้าง หรือหากใครสนใจบริการเช้ารถส่วนตัวก็สามารถติดต่อได้ที่สถานีขนส่งโดยตรง</p>
                          <p><span><i class="fas fa-phone-alt"></i> 062-6341121</span></p>
                          <a href="#">Learn More<span class="fa fa-angle-right align-middle ml-2"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="day-two" role="tabpanel" aria-labelledby="day-two-tab">
                      <div class="row align-items-lg-center itinerary-style2">
                        <div class="col-4 col-md-5 col-sm-5">
                          <a class="popup-link" href="{{asset('images/tour-details/tour2.jpg')}}"><img class="style2-img" src="{{asset('images/tour-details/tour2.jpg')}}" alt="Image Description"></a>
                        </div>
                        <div class="col-8 col-md-7 col-sm-7 style2-desc">                            
                          <h4>วัดบูรภาพิราม</h4>
                          <p>พระพุทธรัตนมงคลมหามุนี หรือชื่อที่นิยมเรียกติดปากของคนในพื้นที่ว่า หลวงพ่อใหญ่ เป็นพระพุทธรูปปางประทานพรขนาดใหญ่ ประดิษฐานอยู่ ณ วัดบูรพาภิราม ตำบลในเมือง อำเภอเมือง จังหวัดร้อยเอ็ด จัดเป็นรูปปั้นที่สูงที่สุดเป็นอันดับที่ 4 ของประเทศไทย</p>
                          <p>มีนักท่องเที่ยวจำนวนมากต่อวัน เป็นสถานที่แรกที่นักท่องเท่ี่ยวส่วนมากให้ความสนใจ มากราบไหว้หลวงพ่อใหญ่ ก่อนจะเดินทางไปเที่ยวในสถานที่อื่น </p>
                          <h4>ค่าใช้จ่าย</h4>
                          <p><span style="color:green"> <b><i class="fas fa-dollar-sign"></i> เดินทาง 20 นาที ระยะทาง 4km</b></span> | สถานีขนส่งจังหวัดร้อยเอ็ด > วัดบูรพาภิราม</p>                            
                          <a href="#">Learn More<span class="fa fa-angle-right align-middle ml-2"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="day-three" role="tabpanel" aria-labelledby="day-three-tab">
                      <div class="row align-items-lg-center itinerary-style2">
                        <div class="col-4 col-md-5 col-sm-5">
                          <a class="popup-link" href="{{asset('images/tour-details/tour3.jpg')}}"><img class="style2-img" src="{{asset('images/tour-details/tour3.jpg')}}" alt="Image Description"></a>
                        </div>
                        <div class="col-8 col-md-7 col-sm-7 style2-desc">                            
                          <h4>วัดเจดีย์ชัยมงคล</h4>
                          <p>พระมหาเจดีย์ชัยมงคล ตั้งอยู่บริเวณวัดผาน้ำทิพย์เทพประสิทธิ์วราราม ตำบลผาน้ำย้อย อำเภอหนองพอก จังหวัดร้อยเอ็ด ระยะทางจากตัวเมืองร้อยเอ็ดประมาณ80 ก.</p>                      
                          <p>เป็นสถานที่ท่องเที่ยวสำหรับสายบุญ ที่เป็นจุดสำคัญสำหรับนักท่องเที่ยวจากทั่วประเทศหากมาจังหวัดร้อยเอ็ดแล้วจะเดินทางมากราบไหว้ พระธาตุ ที่วัดเจดีย์ชัยมงคล </p>
                          <h4>ค่าใช้จ่าย</h4>
                          <p><span style="color:green"> <b><i class="fas fa-dollar-sign"></i> เดินทาง 1 ชม.​ ระยะทาง 80km</b></span> | วัดบูรพาภิราม > วัดเจดีย์ชัยมงคล</p>                            
                          <a href="#">Learn More<span class="fa fa-angle-right align-middle ml-2"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="day-four" role="tabpanel" aria-labelledby="day-four-tab">
                      <div class="row align-items-lg-center itinerary-style2">
                        <div class="col-4 col-md-5 col-sm-5">
                          <a class="popup-link" href="{{asset('images/tour-details/tour4.jpg')}}"><img class="style2-img" src="{{asset('images/tour-details/tour4.jpg')}}" alt="Image Description"></a>
                        </div>
                        <div class="col-8 col-md-7 col-sm-7 style2-desc">
                          <!-- <span class="small-heading">Day one</span> -->
                          <h4>กู่กาสิงห์</h4>
                          <p>กู่กาสิงห์ ตั้งอยู่ในวัดบูรพากู่กาสิงห์ ตำบลกู่กาสิงห์ อำเภอเกษตรวิสัย จังหวัดร้อยเอ็ด เป็นโบราณสถานสถาปัตยกรรมแบบเขมรอีกแห่งหนึ่ง มีขนาดค่อนข้างใหญ่และยังอยู่ในสภาพดี ปัจจุบันสำนักงานโบราณคดี และพิพิธภัณฑสถานแห่งชาติที่ 8 อุบลราชธานี สังกัดกรมศิลปากรได้ดำเนินการขุดแต่งและบูรณะกู่กาสิงห์ </p>
                          <h4>ค่าใช้จ่าย</h4>
                          <p><span style="color:green"> <b><i class="fas fa-dollar-sign"></i> เดินทาง 1 ชม.​ ระยะทาง 80km</b></span> | วัดบูรพาภิราม > วัดเจดีย์ชัยมงคล</p>                            
                          <a href="#">Learn More<span class="fa fa-angle-right align-middle ml-2"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Tour Itinerary End -->
            <!-- Tour Map Start -->
            <div class="tour-map ">
              <h4 class="tour-map-title">แผนที่นำทาง</h4>
              <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d491020.5066036526!2d103.70601353636376!3d15.956273117023569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x3117fdc6bf9574ab%3A0x643919c0dd89dc0f!2sWat%20Klang%20Ming%20Mueang%2C%2024%20Khahabaudee%20Uthit%20Rd%2C%20Nai%20Mueang%2C%20Mueang%20Roi%20Et%20District%2C%20Roi%20Et%2045000!3m2!1d16.0613726!2d103.6534506!4m5!1s0x313d9dd9bb072eb3%3A0x392e21517add017c!2z4Lie4Lij4Liw4Lih4Lir4Liy4LmA4LiI4LiU4Li14Lii4LmM4Lio4Lij4Li14LiK4Lix4Lii4Lih4LiH4LiE4LilIFBoYSBOYW0gWW9pLCBOb25nIFBob2sgRGlzdHJpY3QsIFJvaSBFdA!3m2!1d16.3324325!2d104.320332!4m5!1s0x31178fcde42299ed%3A0x8fcd496f4c9289f0!2z4LiB4Li54LmI4LiB4Liy4Liq4Li04LiH4Lir4LmMIEt1IEthIFNpbmcsIEthc2V0IFdpc2FpIERpc3RyaWN0LCBSb2kgRXQ!3m2!1d15.576572899999999!2d103.6759956!5e0!3m2!1sen!2sth!4v1602182649235!5m2!1sen!2sth"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>

            <!-- Tour Map End -->

            <!-- Tour Reviews Start -->
            <div class="tour-reviews-section">
              <h4 class="tour-reviews-title">ผลโหวต / คะแนน รายการทริปท่องเที่ยว</h4>
              <div class="tour-reviews-count">
                <div class="reviews-left-part">
                  <div class="ratings-average-number">
                    <div class="ratings-average-number-text">4.5</div>
                    <div class="ratings-average-number-overall"><span class=" notranslate">Out of 5</span></div>
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
                  <div class="rating-bar">
                    <div class="rating-label"><span class=" notranslate">สนุกสุดๆ</span></div>
                    <div class="rating-rod-wrapper">
                      <div class="rating-rod-base">
                        <div class="rating-rod-fill" style="width: 54.7264%;"></div>
                      </div>
                    </div>
                    <div class="rating-count"><span>220</span></div>
                  </div>
                  <div class="rating-bar">
                    <div class="rating-label"><span class=" notranslate">ดีมาก</span></div>
                    <div class="rating-rod-wrapper">
                      <div class="rating-rod-base">
                        <div class="rating-rod-fill" style="width: 43.2836%;"></div>
                      </div>
                    </div>
                    <div class="rating-count"><span>174</span></div>
                  </div>
                  <div class="rating-bar">
                    <div class="rating-label"><span class=" notranslate">ดี</span></div>
                    <div class="rating-rod-wrapper">
                      <div class="rating-rod-base">
                        <div class="rating-rod-fill" style="width: 2%;"></div>
                      </div>
                    </div>
                    <div class="rating-count"><span>6</span></div>
                  </div>
                  <div class="rating-bar">
                    <div class="rating-label"><span class=" notranslate">ปานกลาง</span></div>
                    <div class="rating-rod-wrapper">
                      <div class="rating-rod-base">
                        <div class="rating-rod-fill" style="width: 2%;"></div>
                      </div>
                    </div>
                    <div class="rating-count"><span>1</span></div>
                  </div>
                  <div class="rating-bar">
                    <div class="rating-label"><span class=" notranslate">น้อย</span></div>
                    <div class="rating-rod-wrapper">
                      <div class="rating-rod-base">
                        <div class="rating-rod-fill" style="width: 2%;"></div>
                      </div>
                    </div>
                    <div class="rating-count"><span>1</span></div>
                  </div>
                </div>
              </div>
              <div class="tour-reviews">
                <div class="review-element">
                  <div class="review-element-left">
                    <div class="visible on-visible">
                      <img src="images/customers/avtar-01.jpeg" class="reviewer-image" alt="Charlotte Heaver" width="48" height="48">
                    </div>
                    <span class="reviewer-name">Charlotte</span>
                  </div>
                  <div class="review-element-right">
                    <div class="rating-container">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                    <span class="review-time notranslate">Reviewed in June, 2019</span>
                    <p class="review-content translate">ไปเที่ยวมาแล้ว ทริปนี้สนุกสุดๆ ไปเลยครับ พึ่งมาร้อยเอ็ดครั้งแรก ได้สถานที่ที่สวยงามขนาดนี้ น่าประทับใจมากครับสำหรับผมเป็นสายบุญอยู่แล้ว</p>
                  </div>
                </div>
                <div class="review-element">
                  <div class="review-element-left">
                    <div class="visible on-visible">
                      <img src="images/customers/avtar-02.jpeg" class="reviewer-image" alt="Charlotte Heaver" width="48" height="48">
                    </div>
                    <span class="reviewer-name">Charlotte</span>
                  </div>
                  <div class="review-element-right">
                    <div class="rating-container">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                    <span class="review-time notranslate">Reviewed in June, 2019</span>
                    <p class="review-content translate">น่าประทับใจมากค่ะ</p>
                  </div>
                </div>
                <div class="review-element">
                  <div class="review-element-left">
                    <div class="visible on-visible">
                      <img src="images/customers/avtar-03.jpeg" class="reviewer-image" alt="Charlotte Heaver" width="48" height="48">
                    </div>
                    <span class="reviewer-name">Charlotte</span>
                  </div>
                  <div class="review-element-right">
                    <div class="rating-container">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                    <span class="review-time notranslate">Reviewed in June, 2019</span>
                    <p class="review-content translate">เป็นความทรงจำที่ดีที่สุดของผมเลยครับ</p>
                  </div>
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
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#bookingmodal">Book Now</button>
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
    <!-- Tour Similar Packages Start -->
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