@extends('website.website-layout.website-app')
@section('content')
<header class="header-style-1 nav-on-banner fixed-bg-secondary">
  <div class="top-header xs-mx-none">
      <div class="container">
          <div class="row row-cols-md-2 row-cols-1">
              <div class="col">
                  <ul class="top-contact list-color-white">
                      <li><a href="https://wa.me?07816243703">
                        <i class="fa fa-phone" aria-hidden="true"></i> 07816243703</a>
                        <bdo dir="rtl"> <span class="noto-kufi-arabic-arab">الدعم</span></bdo>
                      </li>
                  </ul>
              </div>
              <div class="col">
                  <ul class="nav-bar-top right list-color-white d-flex">
                    <li><a href="#"><span>ahmed-naif@yahoo.com</span></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <div dir="rtl" class="main-nav">
      <div class="container">
          <div class="row">
              <div class="col">
                  <nav class="navbar navbar-expand-lg nav-white nav-primary-hover nav-line-active">
                      
                      <button id="navbarSupportedContentButton" class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ms-auto">
                            
                            <li class="nav-item">
                              <a class="nav-link" href="#"><span class="noto-kufi-arabic-arab">الرئيسية</span></a>
                            </li>

                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#"><span class="noto-kufi-arabic-arab">الأصناف</span></a>
                              <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{route('website.categories' , ['category_id' => 1] )}}"><span class="noto-kufi-arabic-arab">ساعات</span></a></li>
                                  <li><a class="dropdown-item" href="{{route('website.categories' , ['category_id' => 2] )}}"><span class="noto-kufi-arabic-arab">خواتم</span></a></li>
                                  <li><a class="dropdown-item" href="{{route('website.categories' , ['category_id' => 3] )}}"><span class="noto-kufi-arabic-arab">قلادات</span></a></li>
                                  <li><a class="dropdown-item" href="{{route('website.categories' , ['category_id' => 4] )}}"><span class="noto-kufi-arabic-arab">أساور</span></a></li>
                                  <li><a class="dropdown-item" href="{{route('website.categories' , ['category_id' => 5] )}}"><span class="noto-kufi-arabic-arab">حلقات</span></a></li>
                              </ul>
                          </li>

                            <li class="nav-item">
                              <a class="nav-link" href="#portfolio"><span class="noto-kufi-arabic-arab"><span class="noto-kufi-arabic-arab">المنتجات</span></span></a>
                            </li> 

                            <li class="nav-item">
                              <a class="nav-link" href="#testimonials"><span class="noto-kufi-arabic-arab">آراء العملاء</span></a>
                          </li>

                            <li class="nav-item">
                                <a style="border-radius: 20px; padding: 5px 25px;" class="btn btn-primary add-listing-btn " href="#contact"><p class="noto-kufi-arabic-arab">تواصل معنا</p></a>
                            </li>
                          </ul>
                          <!-- <a  href="#contact" > </a> -->
                      </div>
                      <a class="navbar-brand" href="#"><img class="nav-logo" src="{{asset('assets/frontEnd/images/logo/logo-1.png')}}" alt="Image not found !"></a>
                  </nav>
              </div>
          </div>
      </div>
  </div>

</header>


<div class="full-row p-0 overflow-hidden">
    <div id="slider" class="overflow-hidden" style="width:1200px; height:780px; margin:0 auto;margin-bottom: 0px;">

        <!-- Slide 1-->
        <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:12000; transition2d:104; kenburnsscale:1.00;">
            <img width="1920" height="960" src="{{asset('assets/frontEnd/images/slider/4.jpg')}}" class="ls-bg" alt="" />
            <p style="font-size:30px; font-weight:400; top:320px; left:50%;" class="noto-kufi-arabic-arab ls-l ls-hide-phone text-white" data-ls="offsetyin:100%; durationin:1500; delayin:500; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">مرحباً بكم</p>
            <p style="font-size:48px; font-weight:700; top:370px; left:50%; " class="noto-kufi-arabic-arab ls-l ls-hide-phone text-white" data-ls="offsetyin:100%; durationin:1500; delayin:1000; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">شركة الودق</p>
            <p style="top:450px; left:50%; text-align:center; font-weight:400; font-style:normal; text-decoration:none; width:650px; font-size:18px; color:#ffffff; line-height:30px; white-space:normal;" class="noto-kufi-arabic-arab ls-l ls-hide-phone" data-ls="offsetyin:100%; durationin:1500; delayin:1500; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">لتجارة الذهب واستيراد المصوغات الذهبية محدودة المسؤولية</p>
            <a style="" class="ls-l ls-hide-phone" href="https://wa.me?07816243703" target="_self" data-ls="offsetyin:40; delayin:2000; clipin:0 0 100% 0; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#222; hovercolor:#cab273;">
                <p style="font-weight:500; text-align:center; cursor:pointer; padding-right:35px; padding-left:35px; font-weight: 500; font-size:16px; line-height:40px; top:550px; left:50%; color:#fff; border-radius:30px; padding-top:10px; padding-bottom:10px; background:green; white-space:normal;"
                    class="noto-kufi-arabic-arab"> <i class="bi bi-whatsapp"></i> إتصل بنا</p>
            </a>
        </div>

        <!-- Slide 2 -->
        <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:12000; transition2d:104; kenburnsscale:1.00;">
            <img width="1920" height="960" src="{{asset('assets/frontEnd/images/slider/5.jpg')}}" class="ls-bg" alt="" />
            <p style="font-size:30px; font-weight:400; top:320px; left:50%; text-align:center;" class="noto-kufi-arabic-arab ls-l ls-hide-phone text-white" data-ls="offsetyin:100%; durationin:1500; delayin:500; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">مرحباً بكم</p>
            <p style="font-size:48px; font-weight:700; top:370px; left:50%; text-align:center;" class="noto-kufi-arabic-arab ls-l ls-hide-phone text-white" data-ls="offsetyin:100%; durationin:1500; delayin:1000; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">شركة الودق</p>
            <p style="top:450px; left:50%; text-align:center; font-weight:400; font-style:normal; text-decoration:none; width:650px; font-size:18px; color:#ffffff; line-height:30px; white-space:normal;" class="noto-kufi-arabic-arab ls-l ls-hide-phone" data-ls="offsetyin:100%; durationin:1500; delayin:1500; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">نأخذكم في رحلة عبر الزمن، حيث تمتزج الحرفية التقليدية مع لمسات عصرية، لتقدم لكم مجوهرات تنبض بالأناقة وتعكس جمال الثقافة والتراث.</p>
            <a style="" class="noto-kufi-arabic-arab ls-l ls-hide-phone" href="https://wa.me?07816243703" target="_self" data-ls="offsetyin:40; delayin:2000; clipin:0 0 100% 0; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#222; hovercolor:#cab273;">
                <p style="font-weight:500; text-align:center; cursor:pointer; padding-right:35px; padding-left:35px; font-weight: 500; font-size:16px; line-height:40px; top:550px; left:50%; color:#fff; border-radius:30px; padding-top:10px; padding-bottom:10px; background:green; white-space:normal;"
                    class="noto-kufi-arabic-arab"> <i class="bi bi-whatsapp"></i> إتصل بنا</p>
            </a>
        </div>

        <!-- Slide 3 -->
        <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:12000; transition2d:104; kenburnsscale:1.00;">
            <img width="1920" height="960" src="{{asset('assets/frontEnd/images/slider/6.jpg')}}" class="ls-bg" alt="" />
            <p style="font-size:30px; font-weight:400; top:320px; left:32px; " class="noto-kufi-arabic-arab ls-l ls-hide-phone text-white" data-ls="offsetyin:100%; durationin:1500; delayin:500; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">مرحباً بكم</p>
            <p style="font-size:48px; font-weight:700; top:370px; left:32px; " class="noto-kufi-arabic-arab ls-l ls-hide-phone text-white" data-ls="offsetyin:100%; durationin:1500; delayin:1000; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">شركة الودق</p>
            <p style="top:450px; left:32px; text-align:left; font-weight:400; font-style:normal; text-decoration:none; width:650px; font-size:18px; color:#ffffff; line-height:30px; white-space:normal;" class="noto-kufi-arabic-arab ls-l ls-hide-phone" data-ls="offsetyin:100%; durationin:1500; delayin:1500; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">كل قطعة من مجموعتنا تحكي قصة فريدة، مستلهمة من الألوان والتفاصيل التي تعكس تنوع الحضارات، لتكون تعبيرًا عن الذوق الرفيع والشغف بالجمال.</p>
            
            <a style="" class="ls-l ls-hide-phone" href="https://wa.me?07816243703" target="_self" data-ls="offsetyin:40; delayin:2000; clipin:0 0 100% 0; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#222; hovercolor:#cab273;">
              <p style="font-weight:500; text-align:center; cursor:pointer; padding-right:35px; padding-left:35px; font-weight: 500; font-size:16px; line-height:40px; top:550px; left:32px; color:#fff; border-radius:30px; padding-top:10px; padding-bottom:10px; background:green; white-space:normal;"
              class="noto-kufi-arabic-arab"> <i class="bi bi-whatsapp"></i>  إتصل بنا</p>

            </a>
        </div>

    </div>
</div>


<section style="padding-bottom: 0px;">
  <div style="padding: 0px;" class="full-row">
    <div class="container">
        <div class="row row-cols-lg-5 row-cols-md-5 row-cols-sm-2 row-cols-1">
          @forelse ($categories as $item)
            <div class="col">
              <div class="hover-img-zoom text-center mb-4">
                  <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                      <img src="{{$item->squerImage}}" alt="{{$item->name}}">
                  </div>
                  <div class="mt-3">
                    <h5 class="transation font-400 noto-kufi-arabic-arab"><a href="#">{{$item->name}}</a></h5>
                    <div class="text-center mt-2">
                      <a href="{{route('website.categories' , ['category_id' => $item->id])}}" class="btn btn-primary bg-primary rounded">
                        <i class="bi bi-plus "></i>
                        <span class="noto-kufi-arabic-arab">المزيد</span>
                      </a>
                    </div>
                  </div>
              </div>
          </div>
          @empty
            <div class="col">
                <div class="hover-img-zoom text-center mb-4">
                    <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                        <img src="{{asset('assets/frontEnd/images/location/6.jpg')}}" alt="image not found">
                    </div>
                    <div class="mt-3">
                      <h5 class="transation font-400 noto-kufi-arabic-arab"><a href="#">ساعات</a></h5>
                      <div class="text-center mt-2">
                        <a href="#" class="btn btn-primary bg-primary rounded">
                          <i class="bi bi-plus "></i>
                          <span class="noto-kufi-arabic-arab">المزيد</span>
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="hover-img-zoom text-center mb-4">
                    <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                        <img src="{{asset('assets/frontEnd/images/location/9.jpg')}}" alt="image not found">
                    </div>
                    <div class="mt-3">
                      <h5 class="transation font-400 noto-kufi-arabic-arab"><a href="#">خواتم</a></h5>
                      <div class="text-center mt-2">
                        <a href="category-single.html" class="btn btn-primary bg-primary rounded">
                          <i class="bi bi-plus "></i>
                          <span class="noto-kufi-arabic-arab">المزيد</span>
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="hover-img-zoom text-center mb-4">
                    <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                        <img src="{{asset('assets/frontEnd/images/location/5.jpg')}}" alt="image not found">
                    </div>
                    <div class="mt-3">
                      <h5 class="transation font-400 noto-kufi-arabic-arab"><a href="#">قلادات</a></h5>
                      <div class="text-center mt-2">
                        <a href="category-single.html" class="btn btn-primary bg-primary rounded">
                          <i class="bi bi-plus "></i>
                          <span class="noto-kufi-arabic-arab">المزيد</span>
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="hover-img-zoom text-center mb-4">
                    <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                        <img src="{{asset('assets/frontEnd/images/location/8.jpg')}}" alt="image not found">
                    </div>
                    <div class="mt-3">
                      <h5 class="transation font-400 noto-kufi-arabic-arab"><a href="#">أسوار</a></h5>
                      <div class="text-center mt-2">
                        <a href="category-single.html" class="btn btn-primary bg-primary rounded">
                          <i class="bi bi-plus "></i>
                          <span class="noto-kufi-arabic-arab">المزيد</span>
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="hover-img-zoom text-center mb-4">
                    <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                        <img src="{{asset('assets/frontEnd/images/location/10.jpg')}}" alt="image not found">
                    </div>
                    <div class="mt-3">
                      <h5 class="transation font-400 noto-kufi-arabic-arab"><a href="#">حلقات</a></h5>
                      <div class="text-center mt-2">
                        <a href="category-single.html" class="btn btn-primary bg-primary rounded">
                          <i class="bi bi-plus "></i>
                          <span class="noto-kufi-arabic-arab">المزيد</span>
                        </a>
                      </div>
                    </div>
                </div>
            </div>
          @endforelse
        </div>
    </div>
  </div>
</section>

<!-- Portfolio Section -->
  <main class="main">
    <section dir="rtl" id="portfolio" class="portfolio section">
      <div class="row">
        <div class="col mb-5">
            <span class="noto-kufi-arabic-arab text-primary tagline pb-2 d-table m-auto">المنتجات</span>
            <h2 class="noto-kufi-arabic-arab down-line w-50 mx-auto mb-4 text-center w-sm-100">تفقد أحدث القطع</h2>
        </div>
      </div>

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active"><span class="noto-kufi-arabic-arab"> الكل</span></li>
            <li data-filter=".filter-1"><span class="noto-kufi-arabic-arab">ساعات</span></li>
            <li data-filter=".filter-2">   <span class="noto-kufi-arabic-arab">خواتم</span></li>
            <li data-filter=".filter-3"><span class="noto-kufi-arabic-arab"> قلادات</span></li>
            <li data-filter=".filter-4"><span class="noto-kufi-arabic-arab"> أساور</span></li>
            <li data-filter=".filter-5"><span class="noto-kufi-arabic-arab"> حلقات</span></li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            @forelse ($products as $item)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item  filter-{{$item->category->id}}">
              <div class="portfolio-content h-100">
                <img style="min-height: 235px" src="{{$item->homeProduct}}" class="img-fluid portfolio-images" alt="{{$item->category->name ?? ''}}">
                <div class="portfolio-info">
                  {{-- <h4>App 1</h4> --}}
                  <p>{{$item->description}}</p>
                  <a href="{{$item->originalImage}}" title="{{$item->description}}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            @empty
              
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item  filter-2">
                <div class="portfolio-content h-100">
                  <img src="{{asset('assets/frontEnd/img/portfolio/jewelry/r1.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/r1.jpg')}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-4">
                <div class="portfolio-content h-100">
                  <img src="{{asset('assets/frontEnd/img/portfolio/jewelry/b1.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>Product 1</h4>
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/b1.jpg')}}" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-5"> 
                <div class="portfolio-content h-100">
                  <img src="{{asset('assets/frontEnd/img/portfolio/jewelry/e1.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>Branding 1</h4>
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/e1.jpg')}}" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-3">
                <div class="portfolio-content h-100">
                  <img src="{{asset('assets/frontEnd/img/portfolio/jewelry/n1.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>Books 1</h4>
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/n1.jpg')}}" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item  filter-2">
                <div class=" portfolio-content h-100">
                  <img  src="{{asset('assets/frontEnd/img/portfolio/jewelry/r2.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>App 2</h4>
                    <!-- <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div> -->
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/r2.jpg')}}" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-4">
                <div class="portfolio-content h-100">
                  <img src="{{asset('assets/frontEnd/img/portfolio/jewelry/b2.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>Product 2</h4>
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/b2.jpg')}}" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-5">
                <div class="portfolio-content h-100">
                  <img src="{{asset('assets/frontEnd/img/portfolio/jewelry/e2.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>Branding 2</h4>
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/e2.jpg')}}" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-3">
                <div class="portfolio-content h-100">
                  <img src="{{asset('assets/frontEnd/img/portfolio/jewelry/n2.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>Books 2</h4>
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/n2.jpg')}}" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item  filter-2">
                <div class="portfolio-content h-100">
                  <img src="{{asset('assets/frontEnd/img/portfolio/jewelry/r3.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/r3.jpg')}}" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-4">
                <div class="portfolio-content h-100">
                  <img src="{{asset('assets/frontEnd/img/portfolio/jewelry/b3.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>Product 3</h4>
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/b3.jpg')}}" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-5">
                <div class="portfolio-content h-100">
                  <img src="{{asset('assets/frontEnd/img/portfolio/jewelry/e3.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>Branding 3</h4>
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/e3.jpg')}}" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-3">
                <div class="portfolio-content h-100">
                  <img src="{{asset('assets/frontEnd/img/portfolio/jewelry/n3.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>Books 3</h4>
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/n3.jpg')}}" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-1">
                <div class="portfolio-content h-100">
                  <img src="{{asset('assets/frontEnd/img/portfolio/jewelry/w1.jpg')}}" class="img-fluid portfolio-images" alt="">
                  <div class="portfolio-info">
                    <h4>Books 3</h4>
                    <p> </p>
                    <a href="{{asset('assets/frontEnd/img/portfolio/jewelry/w1.jpg')}}" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
            @endforelse

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section>
  </main>
<!-- /Portfolio Section -->

<!--============== Testimonial Section Start =====-->
  <div class="full-row">
      <div class="container">
          <div class="row">
              <div class="col mb-5">
                  <span class="noto-kufi-arabic-arab text-primary tagline pb-2 d-table m-auto">قطع مميزة</span>
                  <h2 class="noto-kufi-arabic-arab down-line w-50 mx-auto mb-4 text-center w-sm-100">إليك تشكيلة من أكثر القطع تميزاً</h2>
              </div>
          </div>
          <div class="row">
            <div class="col">
                <div class="3block-carusel nav-disable owl-carousel">
                    @forelse ($featuredProducts as $item)
                    <div class="item">
                      <!-- Property Grid -->
                      <div class="property-grid-2 property-block transation">
                        <div class="item text-center">
                          <img style="border-color: #cab273 !important; border-radius: 20px" class="border border-3" src="{{$item->categoryPageImage}}" alt="">
                          <h4 class="mt-4 font-400 noto-kufi-arabic-arab">{{$item->description}}</h4>
                          <span class="text-primary font-fifteen">$ {{$item->price}}</span>
                          <p class="text-primary font-fifteen">{{$item->weight}} .g</p>
                        </div>
                      </div>
                      <div class="text-center mt-2">
                        <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                          
                          <i class="bi bi-cart "></i>
                          <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                          
                        </a>
                      </div>
                  </div>
                    @empty
                      
                      <div class="item">
                          <!-- Property Grid -->
                          <div class="property-grid-2 property-block transation">
                            <div class="item text-center">
                              <img style="border-color: #cab273 !important;" class="border border-3 rounded" src="{{asset('assets/frontEnd/images/products/1.jpg')}}" alt="">
                              <h4 class="mt-4 font-400 noto-kufi-arabic-arab">أحجار كريمة</h4>
                              <span class="text-primary font-fifteen">$1300</span>
                              <p class="text-primary font-fifteen">13.g</p>
                            </div>
                          </div>
                          <div class="text-center mt-2">
                            <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                              
                              <i class="bi bi-cart "></i>
                              <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                              
                            </a>
                          </div>
                      </div>
                      <div class="item">
                          <!-- Property Grid -->
                          <div class="property-grid-2 property-block transation">
                            <div class="item text-center">
                              <img style="border-color: #cab273 !important;" class="border border-3 rounded" src="{{asset('assets/frontEnd/images/products/2.jpg')}}" alt="">
                              <h4 class="mt-4 font-400 noto-kufi-arabic-arab">لؤلؤ</h4>
                                <span class="text-primary font-fifteen">$1300</span>
                                <p class="text-primary font-fifteen">25.g</p>
                            </div>
                          </div>
                          <div class="text-center mt-2">
                            <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                              
                              <i class="bi bi-cart "></i>
                              <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                              
                            </a>
                          </div>
                      </div>
                      <div class="item">
                          <!-- Property Grid -->
                          <div class="property-grid-2 property-block transation">
                            <div class="item text-center">
                              <img style="border-color: #cab273 !important;" class="border border-3 rounded" src="{{asset('assets/frontEnd/images/products/3.jpg')}}" alt="">
                                <h4 class="mt-4 font-400 noto-kufi-arabic-arab">ذهب خالص</h4>
                                <span class="text-primary font-fifteen">$800</span>
                                <p class="text-primary font-fifteen">37.g</p>
                            </div>
                          </div>
                          <div class="text-center mt-2">
                            <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                              
                              <i class="bi bi-cart "></i>
                              <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                              
                            </a>
                          </div>
                      </div>
                      <div class="item">
                          <!-- Property Grid -->
                          <div class="property-grid-2 property-block transation">
                            <div class="item text-center">
                              <img style="border-color: #cab273 !important;" class="border border-3 rounded" src="{{asset('assets/frontEnd/images/products/4.jpg')}}" alt="">
                                <h4 class="mt-4 font-400 noto-kufi-arabic-arab">ذهب خالص</h4>
                                <span class="text-primary font-fifteen">$650</span>
                                <p class="text-primary font-fifteen">187.g</p>
                            </div>
                          </div>
                          <div class="text-center mt-2">
                            <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                              
                              <i class="bi bi-cart "></i>
                              <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                              
                            </a>
                          </div>
                      </div>
                      <div class="item">
                          <!-- Property Grid -->
                          <div class="property-grid-2 property-block transation">
                            <div class="item text-center">
                              <img style="border-color: #cab273 !important;" class="border border-3 rounded" src="{{asset('assets/frontEnd/images/products/5.jpg')}}" alt="">
                                <h4 class="mt-4 font-400 noto-kufi-arabic-arab">ذهب خالص</h4>
                                <span class="text-primary font-fifteen">$146</span>
                                <p class="text-primary font-fifteen">10.g</p>
                            </div>
                          </div>
                          <div class="text-center mt-2">
                            <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                              
                              <i class="bi bi-cart "></i>
                              <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                              
                            </a>
                          </div>
                      </div>
                      <div class="item">
                          <!-- Property Grid -->
                          <div class="property-grid-2 property-block transation">
                            <div class="item text-center">
                              <img style="border-color: #cab273 !important;" class="border border-3 rounded" src="{{asset('assets/frontEnd/images/products/6.jpg')}}" alt="">
                                <h4 class="mt-4 font-400 noto-kufi-arabic-arab">ذهب خالص</h4>
                                <span class="text-primary font-fifteen">$1300</span>
                                <p class="text-primary font-fifteen">13.g</p>
                            </div>
                            
                          </div>
                          <div class="text-center mt-2">
                            <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                              
                              <i class="bi bi-cart "></i>
                              <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                              
                            </a>
                          </div>
                      </div>
                    @endforelse
                </div>
            </div>
        </div>
      </div>
  </div>


<!--============== Reg Banner Start ==============-->
  <div class="full-row bg-center paraxify dark-background" style="background-image: url({{asset('assets/frontEnd/images/background/5.jpg')}}); background-repeat: no-repeat; background-position: center top; height: 350px;    backdrop-filter: blur(4px);
    background-color: rgba(68,60,72,0.05);">
      <div class="container position-relative z-index-9">
          <div class="row align-items-center">

          </div>
      </div>
  </div>
<!--============== Reg Banner End ================-->

<!--============== Testimonial Section End ==============-->
  <div class="full-row">
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="3block-carusel nav-disable owl-carousel">
              @forelse ($rFeaturedProducts as $item)
              <div class="item">
                <!-- Property Grid -->
                <div class="property-grid-2 property-block transation">
                  <div class="item text-center">
                    <img style="border-color: #cab273 !important; border-radius: 20px" class="border border-3" src="{{$item->categoryPageImage}}" alt="">
                    <h4 class="mt-4 font-400 noto-kufi-arabic-arab">{{$item->description}}</h4>
                    <span class="text-primary font-fifteen">$ {{$item->price}}</span>
                    <p class="text-primary font-fifteen">{{$item->weight}} .g</p>
                  </div>
                </div>
                <div class="text-center mt-2">
                  <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                    
                    <i class="bi bi-cart "></i>
                    <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                    
                  </a>
                </div>
            </div>
              @empty
                
                <div class="item">
                    <!-- Property Grid -->
                    <div class="property-grid-2 property-block transation">
                      <div class="item text-center">
                        <img style="border-color: #cab273 !important;" class="border border-3 rounded" src="{{asset('assets/frontEnd/images/products/1.jpg')}}" alt="">
                        <h4 class="mt-4 font-400 noto-kufi-arabic-arab">أحجار كريمة</h4>
                        <span class="text-primary font-fifteen">$1300</span>
                        <p class="text-primary font-fifteen">13.g</p>
                      </div>
                    </div>
                    <div class="text-center mt-2">
                      <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                        
                        <i class="bi bi-cart "></i>
                        <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                        
                      </a>
                    </div>
                </div>
                <div class="item">
                    <!-- Property Grid -->
                    <div class="property-grid-2 property-block transation">
                      <div class="item text-center">
                        <img style="border-color: #cab273 !important;" class="border border-3 rounded" src="{{asset('assets/frontEnd/images/products/2.jpg')}}" alt="">
                        <h4 class="mt-4 font-400 noto-kufi-arabic-arab">لؤلؤ</h4>
                          <span class="text-primary font-fifteen">$1300</span>
                          <p class="text-primary font-fifteen">25.g</p>
                      </div>
                    </div>
                    <div class="text-center mt-2">
                      <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                        
                        <i class="bi bi-cart "></i>
                        <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                        
                      </a>
                    </div>
                </div>
                <div class="item">
                    <!-- Property Grid -->
                    <div class="property-grid-2 property-block transation">
                      <div class="item text-center">
                        <img style="border-color: #cab273 !important;" class="border border-3 rounded" src="{{asset('assets/frontEnd/images/products/3.jpg')}}" alt="">
                          <h4 class="mt-4 font-400 noto-kufi-arabic-arab">ذهب خالص</h4>
                          <span class="text-primary font-fifteen">$800</span>
                          <p class="text-primary font-fifteen">37.g</p>
                      </div>
                    </div>
                    <div class="text-center mt-2">
                      <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                        
                        <i class="bi bi-cart "></i>
                        <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                        
                      </a>
                    </div>
                </div>
                <div class="item">
                    <!-- Property Grid -->
                    <div class="property-grid-2 property-block transation">
                      <div class="item text-center">
                        <img style="border-color: #cab273 !important;" class="border border-3 rounded" src="{{asset('assets/frontEnd/images/products/4.jpg')}}" alt="">
                          <h4 class="mt-4 font-400 noto-kufi-arabic-arab">ذهب خالص</h4>
                          <span class="text-primary font-fifteen">$650</span>
                          <p class="text-primary font-fifteen">187.g</p>
                      </div>
                    </div>
                    <div class="text-center mt-2">
                      <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                        
                        <i class="bi bi-cart "></i>
                        <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                        
                      </a>
                    </div>
                </div>
                <div class="item">
                    <!-- Property Grid -->
                    <div class="property-grid-2 property-block transation">
                      <div class="item text-center">
                        <img style="border-color: #cab273 !important;" class="border border-3 rounded" src="{{asset('assets/frontEnd/images/products/5.jpg')}}" alt="">
                          <h4 class="mt-4 font-400 noto-kufi-arabic-arab">ذهب خالص</h4>
                          <span class="text-primary font-fifteen">$146</span>
                          <p class="text-primary font-fifteen">10.g</p>
                      </div>
                    </div>
                    <div class="text-center mt-2">
                      <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                        
                        <i class="bi bi-cart "></i>
                        <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                        
                      </a>
                    </div>
                </div>
                <div class="item">
                    <!-- Property Grid -->
                    <div class="property-grid-2 property-block transation">
                      <div class="item text-center">
                        <img style="border-color: #cab273 !important;" class="border border-3 rounded" src="{{asset('assets/frontEnd/images/products/6.jpg')}}" alt="">
                          <h4 class="mt-4 font-400 noto-kufi-arabic-arab">ذهب خالص</h4>
                          <span class="text-primary font-fifteen">$1300</span>
                          <p class="text-primary font-fifteen">13.g</p>
                      </div>
                      
                    </div>
                    <div class="text-center mt-2">
                      <a href="https://wa.me?07816243703" class="btn btn-primary bg-primary rounded">
                        
                        <i class="bi bi-cart "></i>
                        <span class="noto-kufi-arabic-arab">أضف إلى السلة</span>
                        
                      </a>
                    </div>
                </div>
              @endforelse
          </div>
          </div>
      </div>
    </div>
  </div>

<!-- Testimonials Section -->
  <section dir="rtl" id="testimonials" class="testimonials section dark-background">

    <img src="{{asset('assets/frontEnd/images/background/1.jpg')}}" class="testimonials-bg" alt="">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>
        <div class="swiper-wrapper">
          <div class="row">
            <div class="col">
              
              <div class="swiper-slide">
                <div style="width: inherit;" class="testimonial-item">
                  <img src="{{asset('assets/frontEnd/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                  <h3 class="noto-kufi-arabic-arab text-primary">Saul Goodman</h3>
                  <h4 class="noto-kufi-arabic-arab">Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span class="noto-kufi-arabic-arab">لقد كانت تجربتي في متجر المجوهرات رائعة! الخدمة كانت ممتازة، والمجوهرات ذات جودة عالية. اشتريت خاتمًا مميزًا، وأنا سعيدة جدًا به. أنصح الجميع بزيارة هذا المتجر!</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
            </div>
            <div class="col">
              <div class="swiper-slide">
                <div style="width: inherit;" class="testimonial-item">
                  <img src="{{asset('assets/frontEnd/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                  <h3 class="noto-kufi-arabic-arab text-primary">Sara Wilsson</h3>
                  <h4 class="noto-kufi-arabic-arab">Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span class="noto-kufi-arabic-arab">متجر المجوهرات هذا هو الأفضل! لديهم تشكيلة واسعة من التصاميم الفريدة. الموظفون كانوا ودودين ومتعاونين للغاية. سأعود بالتأكيد لشراء المزيد!</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
            </div>
            <div class="col">

              <div class="swiper-slide">
                <div style="width: inherit;" class="testimonial-item">
                  <img src="{{asset('assets/frontEnd/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                  <h3 class="noto-kufi-arabic-arab text-primary">Jena Karlis</h3>
                  <h4 class="noto-kufi-arabic-arab">Store Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span class="noto-kufi-arabic-arab">لقد قمت بشراء قلادة من هذا المتجر، وهي ببساطة رائعة! التصميم أنيق والجودة ممتازة. أحببت أيضًا طريقة التعبئة، كانت جميلة جدًا. شكرًا لكم على هذه التجربة الرائعة!</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
            </div>
          </div>


        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section>
<!-- /Testimonials Section -->


<!-- Contact Section -->
  <section dir="rtl" id="contact" class="contact section">

    <div class="row">
      <div class="col mb-5">
          <span class="noto-kufi-arabic-arab text-primary tagline pb-2 d-table m-auto">التواصل</span>
          <h2 class="noto-kufi-arabic-arab down-line w-50 mx-auto mb-4 text-center w-sm-100">لا تتردد في التواصل معنا</h2>
      </div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6 ">
          <div class="row gy-4">

            <div class="col-lg-12">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3 class="noto-kufi-arabic-arab">العنوان</h3>
                <p class="noto-kufi-arabic-arab">العراق - النجف الأشرف - السوق الكبير - قيصرية عبد علي ناجي</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3 class="noto-kufi-arabic-arab">إتصل بنا</h3>
                <p class="noto-kufi-arabic-arab">07816243703</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3 class="noto-kufi-arabic-arab">راسلنا</h3>
                <p class="noto-kufi-arabic-arab">ahmed-naif@yahoo.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text"name="name" class="form-control" placeholder="الإسم" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="الموضوع" required="">
              </div>

              <div class="col-md-12">
                <!-- <textarea name="" id="" class="form-control" rows="4">asd</textarea> -->
                <textarea style="height: auto;" class="form-control" name="message" rows="4" placeholder="الرسالة" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit" class="noto-kufi-arabic-arab">إرسال</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section>
<!-- /Contact Section -->
@endsection