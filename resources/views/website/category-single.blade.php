@extends('website.website-layout.website-app')
@section('content')
        <!--============== Header Section Start ==============-->
        <header class="header-style nav-on-top bg-white">
          <div class="top-header xs-mx-none ">
              <div class="container">
                  <div class="row row-cols-md-2 row-cols-1">
                      <div class="col">
                          <ul class="top-contact list-color-dark">
                              <li><a href="https://wa.me?07816243703">
                                <i class="fa fa-phone" aria-hidden="true"></i> 07816243703</a>
                                <bdo dir="rtl"> <span class="noto-kufi-arabic-arab">الدعم</span></bdo>
                              </li>
                          </ul>
                      </div>
                      <div class="col">
                          <ul class="nav-bar-top right list-color-dark d-flex">
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
                          <nav class="navbar navbar-expand-lg nav-secondary nav-primary-hover nav-line-active">
                              <button id="navbarSupportedContentButton" class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <ul class="navbar-nav ms-auto">

                                    <li class="nav-item">
                                      <a class="nav-link" href="{{route('website.home')}}"><span class="noto-kufi-arabic-arab">الرئيسية</span></a>
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
                              <a class="navbar-brand" href="#"><img class="nav-logo" src="{{asset('assets/frontEnd/images/logo/logo-1-black.jpg')}}" alt="Image not found !"></a>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <!--============== Header Section End ==============-->

      <!--============== Page title Start ==============-->
      <div class="full-row py-5">
          <div class="container">
              <div class="row">
                  <div class="col">
                      <nav aria-label="breadcrumb" class="mb-2">
                          <ol class="breadcrumb mb-0 bg-transparent p-0">
                              <li class="breadcrumb-item"><a href="{{route('website.home')}}"><span class="noto-kufi-arabic-arab">الرئيسية</span></a></li>
                              <li class="breadcrumb-item active text-primary " aria-current="page"><span class="noto-kufi-arabic-arab">الأصناف</span></li>
                          </ol>
                      </nav>
                      <h3 class="text-secondary"><span class="noto-kufi-arabic-arab">الأصناف</span></h3>
                  </div>
              </div>
          </div>
      </div>
      <!--============== Page title End ==============-->

      <!--============== Photos Start ==============-->
      <div class="full-row pt-0">
          <div class="container">
              <div class="row row-cols-md-3 row-cols-1 g-4">
                  @forelse ($products as $item)
                    <div class="col">
                      <div style="border-radius: 20px;" class="gallery-one photo-overlay border border-4 border-primary">
                          
                          <a href="{{$item->categoryPageImage}}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                              <span class="flaticon-zoom-in"></span>
                          </a>
                          <img src="{{$item->originalImage}}" alt="real estate template">
                      </div>
                    </div>
                  @empty
                    
                    <div class="col">
                        <div style="border-radius: 20px;" class="gallery-one photo-overlay border border-4 border-primary">
                            
                            <a href="assets/images/property/1.jpg" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                <span class="flaticon-zoom-in"></span>
                            </a>
                            <img src="assets/images/property/1.jpg" alt="real estate template">
                        </div>
                    </div>
                    <div class="col">
                        <div style="border-radius: 20px;" class="gallery-one photo-overlay border border-4 border-primary">
                            
                            <a href="assets/images/property/2.jpg" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                <span class="flaticon-zoom-in"></span>
                            </a>
                            <img src="assets/images/property/2.jpg" alt="real estate template">
                        </div>
                    </div>
                    <div class="col">
                        <div style="border-radius: 20px;" class="gallery-one photo-overlay border border-4 border-primary">
                            
                            <a href="assets/images/property/5.jpg" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                <span class="flaticon-zoom-in"></span>
                            </a>
                            <img src="assets/images/property/5.jpg" alt="real estate template">
                        </div>
                    </div>
                    <div class="col">
                        <div style="border-radius: 20px;" class="gallery-one photo-overlay border border-4 border-primary">
                            
                            <a href="assets/images/property/6.jpg" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                <span class="flaticon-zoom-in"></span>
                            </a>
                            <img src="assets/images/property/6.jpg" alt="real estate template">
                        </div>
                    </div>
                    <div class="col">
                        <div style="border-radius: 20px;" class="gallery-one photo-overlay border border-4 border-primary">
                            
                            <a href="assets/images/property/3.jpg" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                <span class="flaticon-zoom-in"></span>
                            </a>
                            <img src="assets/images/property/3.jpg" alt="real estate template">
                        </div>
                    </div>
                    <div class="col">
                        <div style="border-radius: 20px;" class="gallery-one photo-overlay border border-4 border-primary">
                            <a href="assets/images/property/4.jpg" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                <span class="flaticon-zoom-in"></span>
                            </a>
                            <img src="assets/images/property/4.jpg" alt="real estate template">
                        </div>
                    </div>
                  @endforelse
              </div>
          </div>
      </div>
      <!--============== Photos End ==============-->
@endsection