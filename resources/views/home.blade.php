@extends('layouts.depan')
@section('head')
    <style>
        .owl-carousel .nav-btn{
            height: 47px;
            position: absolute;
            width: 26px;
            cursor: pointer;
            top: 191px !important;
            font-size: 300%;
        }

        .owl-carousel .owl-prev.disabled,
        .owl-carousel .owl-next.disabled{
        pointer-events: none;
        opacity: 0;
        }

        .owl-carousel .prev-slide{
        left: 11px;
        }
        .owl-carousel .next-slide{
        right: -5px;
        }
    </style>
@endsection

@section('content')
<div class="bg-white container">
    <!-- slider-area-start -->
    <div class="slider-area pt-30">
        
            <div class="row">
                <div class="col-xl-7 pr-5">
                    <div class="swiper-container slider__active" style="height: 340px;">
                        <div class="slider-wrapper swiper-wrapper">
                            <div class="single-slider swiper-slide slider-height-3 d-flex align-items-center" data-background="assets/img/banner/banner-left.jpg">
                                <div class="slider-content slider-content-2">
                                    
                                </div>
                            </div><!-- /single-slider -->
                            <div class="single-slider swiper-slide slider-height-3 d-flex align-items-center" data-background="assets/img/banner/banner-left.jpg">
                                <div class="slider-content slider-content-2">
                                    
                                </div>
                            </div><!-- /single-slider -->
                            <div class="single-slider swiper-slide slider-height-3 d-flex align-items-center" data-background="assets/img/banner/banner-left.jpg">
                                <div class="slider-content slider-content-2">
                                    
                                </div>
                            </div><!-- /single-slider -->
                            <div class="main-slider-paginations"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 pl-5">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-sm-6">
                                    <div class="banner__item p-relative w-img mb-5">
                                        <div class="banner__img banner__img-2 ">
                                            <a href="#"><img src="assets/img/banner/banner-right-top.jpg" alt=""></a>
                                        </div>
                                    
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-sm-6">
                                    <div class="banner__item p-relative w-img">
                                        <div class="banner__img banner__img-2 ">
                                            <a href="#"><img src="assets/img/banner/banner-right-bottom.jpg" alt=""></a>
                                        </div>
                                    
                                    </div>
                                </div>

                            </div>
                        </div>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->

    <div class="header__bottom d-lg-block pt-30 pb-30">
    
        <div class="row">
            <div class="col-xl-12">
                <div class="section__head d-flex justify-content-between mb-30">
                    <div class="section__title section__title-2">
                        <h5 class="st-titile">Shop by Categories</h5>
                    </div>
                
                </div>
                <div style="overflow: auto;">
                    <div class="box-items-inner pt-10 pb-10">
                        <div class="box-item">
                            <a href="#"><img alt="" src="assets/img/svg/icon_souvenir_kantor.svg">
                            Souvenir <br>kantor
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="#"><img alt="" src="assets/img/svg/icon_iklan_percetakan.svg">
                            Iklan & <br>Percetakan
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="#"><img alt="" src="assets/img/svg/icon_pakaian_konveksi.svg">
                            Pakaian & <br>Konveksi
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="#"><img alt="" src="assets/img/svg/icon_catridge_printer.svg">
                            Catridge <br>Printer
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="#"><img alt="" src="assets/img/svg/icon_alat_tulis.svg">
                            Alat Tulis <br>Kantor
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="#"><img alt="" src="assets/img/svg/icon_interior_konstruksi.svg">
                            Interior & <br>Konstruksi
                            </a>
                        </div>
                    </div>
                <div class="box-items-inner pt-10 pb-10">
                        <div class="box-item">
                            <a href="#"><img alt="" src="assets/img/svg/icon_hiasan_meja.svg">
                            Hiasan <br>Meja
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="#"><img alt="" src="assets/img/svg/icon_hiasan_dinding.svg">
                            Hiasan <br>Dinding
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="#"><img alt="" src="assets/img/svg/icon_gadget_keren.svg">
                            Gadget <br>Keren
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="#"><img alt="" src="assets/img/svg/icon_penunjang_kerja.svg">
                            Penunjang <br>Kerja
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="#"><img alt="" src="assets/img/svg/icon_aktivitas_harian.svg">
                            Aktivitas <br>Harian
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="#"><img alt="" src="assets/img/svg/icon_produk_kesehatan.svg">
                            Produk <br>Kesehatan
                            </a>
                        </div>
                    </div>
                </div>
       
            </div>
        
        </div>
    </div>

</div>

<!-- banner__area-start -->
<section class="banner__area pt-60 pb-10">
    <div class="container bg-white pt-10 pb-10">
        <div class="row">
          <div class="col-xl-12">
              <div class="section__head d-flex justify-content-between mb-30">
                  <div class="section__title section__title-2">
                      <h5 class="st-titile">Shop by Brands</h5>
                  </div>
              </div>

          </div>
          <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="banner__item p-relative w-img mb-30">
                  <div class="banner__img">
                      <a href="#"><img src="{{ asset('assets/img/brand/brand-bjs.png') }}" alt=""></a>
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="banner__item p-relative mb-30 w-img">
                  <div class="banner__img">
                      <a href="#"><img src="{{ asset('assets/img/brand/brand-aura-jaya.png') }}" alt=""></a>
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="banner__item p-relative mb-30 w-img">
                  <div class="banner__img">
                      <a href="#"><img src="{{ asset('assets/img/brand/brand-kinaya.png') }}" alt=""></a>
                  </div>
              </div>
          </div>
        </div>

    </div>
</section>
<!-- banner__area-end -->


<!-- trending-product-area-start -->
<section class="trending-product-area pt-20 pb-15">
    <div class="container bg-white pt-10 pb-10">
        <div class="row">
            <div class="col-xl-12">
                <div class="section__head d-flex justify-content-between mb-30">
                    <div class="section__title section__title-2">
                        <h5 class="st-titile">Produk Terlaris</h5>
                    </div>
             
                </div>
            </div>
        </div>

        <div class="row home_produk_terlaris slidprodukterlaris owl-carousel owl-theme">
            @foreach ( $populer as $p )
                <div class="owl-item">
                    <a href="{{ route('produk.detail' , $p->url) }}">
                        <div class="card h-100">
                            @php
                            $image = $p->image->where('type' , '=' , 'primary');
                            //dd($image);
                            @endphp
                            <img src="{{ url($image[0]->img) }}" class="card-img-top" alt="{{ $p->title }}">
            
                            <div class="card-body">
                                <h3 class="mb-4 mt-4 price">
                                    @php
                                    $price = $p->price
                                    @endphp
                                    @if (count($price) == 1)
                                    Rp. {{ number_format($price[0]['price']) }}
                                    @else
                                    Rp. {{ number_format($price[0]['price']) }} - Rp. {{ number_format($price[ count($price) - 1 ]['price']) }}
                                    @endif
                                </h3>
                                <h4 class="card-title">{{ $p->title }}</h4>
                                
                            </div>
                        </div>
                        </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- trending-product-area-end -->

<!-- bjs home area -->
<section class="trending-product-area pt-20 pb-15">
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-3 home-brand-box home-brand-bjs text-center p-5">
                <img class="mt-50 mb-25" src="{{ asset('assets/img/logo/bjs_about_us_logo.png') }}" alt>
                <h3 class="mt-100 mb-100"><a href="#">SOUVENIR & KONVEKSI</a></h3>
                <a class="mt-100 mb-10" href="">Cari Lebih banyak ></a>

            </div>
            <div class="col-md-9">
                <div class="row p-5 h-100 home-produk-brand">
                    @foreach ( $brand_bjs as $p )
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <a href="{{ route('produk.detail' , $p->url) }}">
                        <div class="card h-100">
                            @php
                            $image = $p->image->where('type' , '=' , 'primary');
                            //dd($image);
                            @endphp
                            <img src="{{ url($image[0]->img) }}" class="card-img-top" alt="{{ $p->title }}">
            
                            <div class="card-body">
                                <h3 class="mb-4 mt-4 price">
                                    @php
                                    $price = $p->price
                                    @endphp
                                    @if (count($price) == 1)
                                    Rp. {{ number_format($price[0]['price']) }}
                                    @else
                                    Rp. {{ number_format($price[0]['price']) }} - Rp. {{ number_format($price[ count($price) - 1 ]['price']) }}
                                    @endif
                                </h3>
                                <h4 class="card-title">{{ $p->title }}</h4>
                                
                            </div>
                        </div>
                        </a>
                </div>
            @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!--End bjs home area -->

<!-- aura home area -->
<section class="trending-product-area pt-20 pb-15">
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-3 home-brand-box home-brand-aura text-center p-5">
                <img class="mt-50 mb-25" src="{{ asset('assets/img/logo/cv_aura_jaya_about_us.png') }}" alt>
                <h3 class="mt-50 mb-100"><a href="#">PERCETAKAN , CARTRIDGE & ATK</a></h3>
                <a class="mt-100 mb-10" href="">Cari Lebih banyak ></a>

            </div>
            <div class="col-md-9">
                <div class="row p-5 h-100 home-produk-brand">
                    @foreach ( $brand_aura as $p )
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <a href="{{ route('produk.detail' , $p->url) }}">
                        <div class="card h-100">
                            @php
                            $image = $p->image->where('type' , '=' , 'primary');
                            //dd($image);
                            @endphp
                            <img src="{{ url($image[0]->img) }}" class="card-img-top" alt="{{ $p->title }}">
            
                            <div class="card-body">
                                <h3 class="mb-4 mt-4 price">
                                    @php
                                    $price = $p->price
                                    @endphp
                                    @if (count($price) == 1)
                                    Rp. {{ number_format($price[0]['price']) }}
                                    @else
                                    Rp. {{ number_format($price[0]['price']) }} - Rp. {{ number_format($price[ count($price) - 1 ]['price']) }}
                                    @endif
                                </h3>
                                <h4 class="card-title">{{ $p->title }}</h4>
                                
                            </div>
                        </div>
                        </a>
                </div>
            @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!--End aura home area -->

<!-- kinaya home area -->
<section class="trending-product-area pt-20 pb-15 mb-30">
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-3 home-brand-box home-brand-kinaya text-center p-5">
                <img class="mt-50 mb-25" src="{{ asset('assets/img/logo/kinaya_about_us.png') }}" alt>
                <h3 class="mt-100 mb-100"><a href="#">PERCETAKAN , CARTRIDGE & ATK</a></h3>
                <a class="mt-100 mb-10" href="">Cari Lebih banyak ></a>

            </div>
            <div class="col-md-9">
                <div class="row p-5 h-100 home-produk-brand">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <a href="#">
                            <div class="card h-100">
                            
                                <img src="{{ asset('assets/img/product/kinaya-furniture.png') }}" class="card-img-top" alt="Furniture">
                
                                <div class="card-body">
                                    <h3 class="mb-4 mt-4 ">
                                        Furniture
                                    </h3>
                                    <p>Perlengkapan hunian untuk rumah, kantor , hotel apartemen dll</p>
                                    
                                </div>
                            </div>
                            </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <a href="#">
                            <div class="card">
                            
                                <img src="{{ asset('assets/img/product/kinaya-interior.png') }}" class="card-img-top" alt="Furniture">
                
                                <div class="card-body">
                                    <h3 class="mb-4 mt-4 ">
                                        Interior
                                    </h3>
                                    <p>Tatanan Keselarasan antara ruang dan elemen pendukung nya</p>
                                    
                                </div>
                            </div>
                            </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <a href="#">
                            <div class="card">
                            
                                <img src="{{ asset('assets/img/product/kinaya-kontruksi.png') }}" class="card-img-top" alt="Furniture">
                
                                <div class="card-body">
                                    <h3 class="mb-4 mt-4 ">
                                        Konstruksi
                                    </h3>
                                    <p>Pembangunan Ruangan fungsi sarana dan prasaranan</p>
                                    
                                </div>
                            </div>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--End aura home area -->



@endsection
@section('footer')
    <script>
        $(".slidprodukterlaris").owlCarousel({
		//add owl carousel in activation class
		loop: true,
		margin: 20,
		items: 5,
		navText: ['<div class="nav-btn prev-slide"><i class="far fa-angle-left"></i></div>', '<div class="nav-btn next-slide"><i class="far fa-angle-right"></i></div>'],
		nav: true,
		dots: true,
		responsive: {
			0: {
				items: 1
			},
			767: {
				items: 2
			},
			992: {
				items: 3
			},
			1200: {
				items: 4
			},
			1408: {
				items: 5
			}
		}
	});
    </script>
@endsection
