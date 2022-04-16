<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>@hasSection('title') @yield('title') | @endif Supplier Kantor Pajak Se-Indonesia</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
      <!-- CSS here -->
      <link rel="stylesheet" async href="{{ asset('assets/css/preloader.css') }}">
      <link rel="stylesheet" async href="{{ asset('assets/css/bootstrap.css') }}">
      <link rel="stylesheet" async href="{{ asset('assets/css/meanmenu.css') }}">
      <link rel="stylesheet" async href="{{ asset('assets/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/backtotop.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/flaticon/flaticon.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      <!-- y Head -->
      @yield('head')
      <!-- End y Head -->

   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->

    <!-- header-start -->
     <header class="header d-blue-bg">
       <div class="header-notif">
           <div class="container 0">
               <div class="header-inner">
                   <div class="row align-items-center">
                      <div class="col-xl-12 col-lg-12">
                        <div class="top-notif">
                          <p>Pengiriman gratis untuk total pemesanan diatas 2 juta rupiah*</p></div>
                        </div>
                      </div>
               </div>
           </div>
       </div>
        <div class="header-top">
            <div class="container 0">
                <div class="header-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-7">
                            <div class="header-inner-start">
                              <div class="ovic-menu-wrapper">
                                  <ul>
                                      <li><a href="#">Tentang Kami</a></li>
                                      <li><a href="#">Testimonial</a></li>
                                      <li><a href="#">Klien Kami</a></li>
                                      <li><p>Ikuti Kami di <a href=""><i class="fab fa-facebook"></i></a><a href=""><i class="fab fa-pinterest"></i></a><a href=""><i class="fab fa-instagram"></i></a></p></li>
                                  </ul>
                              </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                            <div class="header-inner-end text-md-end">
                                <div class="ovic-menu-wrapper ovic-menu-wrapper-2">
                                    <ul>
                                        <li><p class="p-0 m-0"><img src="{{ asset('assets/img/svg/icon_phone_white.svg') }}" alt="">Fast Response: <a href="tel:628177009922"> 081 - 7700 - 9922</a></p></li>
                                        <li><a href="#">Daftar</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid">
            <div class="container">
                <div class="heade-mid-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div class="header__info header__info-2">
                                <div class="logo logo-3">
                                    <a href="{{ url("/") }}" class="logo-image"><img src="{{ asset('assets/img/logo/logo@195.png') }}" alt="logo"></a>
                                </div>
                                <!-- <div class="side-menu mr-20">
                                    <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-4 d-none d-lg-block">
                            <div class="header__search">
                                <form action="#">
                                    <div class="header__search-box">
                                        <input class="search-input search-input-2" type="text" placeholder="Apa yang Anda cari?">
                                        <button class="button button-2 button-3" type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                            <div class="header-action">

                                <div class="block-cart action">
                                    <a class="icon-link icon-link-2" href="#">
                                    <i class="flaticon-custom"><img src="{{ asset('assets/img/svg/icon_custom_cart.svg') }}" alt=""></i>
                                    @if(session('cart'))
                                    <span class="count count-2">{{ count(session('cart')) }}</span>
                                    @endif
                                    <span class="text"><span class="sub">Belanja</span></span>
                                    </a>
                                    <div class="cart">
                                        <div class="cart__mini">
                                            <ul>
                                                <li>
                                                  <div class="cart__title">
                                                    <h4>Your Cart</h4>
                                                    <span>({{ count(session('cart')) }} Item in Cart)</span>
                                                  </div>
                                                </li>
                                                @php $total = 0 @endphp
                                                @if(session('cart'))
                                                    @foreach(session('cart') as $id => $details)
                                                    <li>
                                                        <div class="cart__item d-flex justify-content-between align-items-center">
                                                            <div class="cart__inner d-flex">
                                                            <div class="cart__thumb">
                                                                <a href="#">
                                                                <img src="{{ url($details['image']) }}"  alt="">
                                                                </a>
                                                            </div>
                                                            <div class="cart__details">
                                                                <h6><a href="#"> {{ $details['nama'] }} </a></h6>
                                                                <div class="cart__price">
                                                                <span>Rp. {{ number_format($details['harga']) }}</span>
                                                                </div>
                                                                
                                                            </div>
                                                            </div>
                                                            <div class="cart__del">
                                                                {{--<a href="#"><i class="fal fa-times"></i></a>--}}
                                                                <span> x {{ $details['qty'] }}</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @php
                                                        $total += $details['harga'] * $details['qty'];
                                                    @endphp
                                                    @endforeach
                                                @endif

                                                <li>
                                                  <div class="cart__sub d-flex justify-content-between align-items-center">
                                                    <h6>Subtotal</h6>
                                                    <span class="cart__sub-total">Rp. {{ number_format($total) }}</span>
                                                  </div>
                                                </li>
                                                <li>
                                                    <a href="{{ route('cart') }}" class="wc-cart mb-10">View cart</a>
                                                    <a href="{{ route('checkout') }}" class="wc-checkout">Checkout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-userlink">
                                    <a class="icon-link icon-link-2" href="#">
                                    <i class="flaticon-custom"><img src="{{ asset('assets/img/svg/icon_custom_user.svg') }}" alt=""></i>
                                    <span class="text">
                                    <span class="text"><span class="sub">Login</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container custom-conatiner">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-12 col-md-12 col-12">
                      <div class="header__bottom-left d-flex d-xl-block align-items-center">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul>
                                  <li><a href="#">Souvenir <i class="far fa-angle-down"></i></a>
                                      <ul class="submenu">
                                          <li><a href="#">My Account</a></li>
                                          <li><a href="#">Product Details</a></li>
                                          <li><a href="#">FAQs pages</a></li>
                                          <li><a href="#">Cart</a></li>
                                          <li><a href="#">Wishlist</a></li>
                                          <li><a href="#">Checkout</a></li>
                                          <li><a href="#">Contact Us</a></li>
                                          <li><a href="#">404 Error</a></li>
                                      </ul>
                                  </li>
                                    <li><a href="#">Percetakan <i class="far fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Konveksi <i class="far fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Catridge <i class="far fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Alat Tulis Kantor <i class="far fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Interior & Konstruksi <i class="far fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Produk Lainnya <i class="far fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="#">My Account</a></li>
                                            <li><a href="#">Product Details</a></li>
                                            <li><a href="#">FAQs pages</a></li>
                                            <li><a href="#">Cart</a></li>
                                            <li><a href="#">Wishlist</a></li>
                                            <li><a href="#">Checkout</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">404 Error</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                      </div>
                    </div>

                </div>
            </div>
        </div>
     </header>
     <!-- header-end -->

    <!-- //side-menu -->
    <div class="main-menu">
        <nav id="mobile-menu-2">
            <ul>
                <li>
                    <a href="index.html" class="active">Home <i class="far fa-angle-down"></i></a>
                    <ul class="megamenu-1">
                        <li><a href="index.html">Home Pages</a>
                            <ul class="mega-item">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html" class="active">Home Three</a></li>
                                <li><a href="#">Shop 3 Column</a></li>
                                <li><a href="#">Shop 4 Column</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Product Pages</a>
                            <ul class="mega-item">
                                <li><a href="#">Product Details</a></li>
                                <li><a href="#">Product V2</a></li>
                                <li><a href="#">Product V3</a></li>
                                <li><a href="#">Varriable Product</a></li>
                                <li><a href="#">External Product</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Other Pages</a>
                            <ul class="mega-item">
                                <li><a href="#">wishlist</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Phone &amp; Tablets</a>
                            <ul class="mega-item">
                                <li><a href="#">Catagory 1</a></li>
                                <li><a href="#">Catagory 2</a></li>
                                <li><a href="#">Catagory 3</a></li>
                                <li><a href="#">Catagory 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Phone &amp; Tablets</a>
                            <ul class="mega-item">
                                <li><a href="#">Catagory 1</a></li>
                                <li><a href="#">Catagory 2</a></li>
                                <li><a href="#">Catagory 3</a></li>
                                <li><a href="#">Catagory 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Shop <i class="far fa-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="#">shop</a></li>
                        <li><a href="shop-details.html">Shop Details</a></li>
                    </ul>
                </li>
                <li><a href="#">Blog <i class="far fa-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages <i class="far fa-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Product Details</a></li>
                        <li><a href="#">FAQs pages</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">404 Error</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__logo mb-40">
                <a href="index.html">
                <img src="{{ asset('assets/img/logo/logo@195.png') }}" alt="logo">
                </a>
            </div>
            <div class="offcanvas__search mb-25">
                <form action="#">
                    <input type="text" placeholder="What are you searching for?">
                    <button type="submit" ><i class="far fa-search"></i></button>
                </form>
            </div>
            <div class="sidebar__img mb-20">
                <div class="row gx-2">
                   <div class="col-4">
                      <div class="sidebar__single-img hover-effect w-img mb-10">
                         <a class="popup-image" href="assets/img/gallery/gal-1.jpg">
                            <img src="{{ asset('assets/img/gallery/gal-1.jpg') }}" alt="">
                         </a>
                      </div>
                   </div>
                   <div class="col-4">
                      <div class="sidebar__single-img hover-effect w-img mb-10">
                         <a class="popup-image" href="assets/img/gallery/gal-2.jpg">
                            <img src="{{ asset('assets/img/gallery/gal-2.jpg') }}" alt="">
                         </a>
                      </div>
                   </div>
                   <div class="col-4">
                      <div class="sidebar__single-img hover-effect w-img mb-10">
                         <a class="popup-image" href="assets/img/gallery/gal-3.jpg">
                            <img src="{{ asset('assets/img/gallery/gal-3.jpg') }}" alt="">
                         </a>
                      </div>
                   </div>
                   <div class="col-4">
                      <div class="sidebar__single-img hover-effect w-img mb-10">
                         <a class="popup-image" href="assets/img/gallery/gal-4.jpg">
                            <img src="{{ asset('assets/img/gallery/gal-4.jpg') }}" alt="">
                         </a>
                      </div>
                   </div>
                   <div class="col-4">
                      <div class="sidebar__single-img hover-effect w-img mb-10">
                         <a class="popup-image" href="assets/img/gallery/gal-5.jpg">
                            <img src="{{ asset('assets/img/gallery/gal-5.jpg') }}" alt="">
                         </a>
                      </div>
                   </div>
                   <div class="col-4">
                      <div class="sidebar__single-img hover-effect w-img mb-10">
                         <a class="popup-image" href="assets/img/gallery/gal-6.jpg">
                            <img src="{{ asset('assets/img/gallery/gal-6.jpg') }}" alt="">
                         </a>
                      </div>
                   </div>
                </div>
             </div>
            <div class="mobile-menu-2"></div>
            <div class="offcanvas__action">
            </div>
        </div>
        </div>
    </div>
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

        <main>
            @yield('content')
        </main>
    
 <!-- footer-start -->
 <footer>
    <div class="footer-area">
        <div class="footer__top pt-60 pb-10">
            <div class="container 0">
                <div class="row">

                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="footer__widget">
                            <div class="footer__widget-title mb-20">
                                <h4>Pelayanan Pelanggan</h4>
                            </div>

                        <div class="footer__widget-content">
                                <div class="footer__link footer__link-2">
                                    <ul>
                                        <li><a href="#">Kebijakan Pengembalian (Retur)</a></li>
                                        <li><a href="#">Pengantaran &amp; Pengiriman</a></li>
                                        <li><a href="#">Kebijakan Penjualan</a></li>
                                        <li><a href="#">Pelayanan</a></li>
                                        <li><a href="#">Klaim dan Garansi </a></li>

                                    </ul>
                                </div>
                            </div></div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="footer__widget">
                            <div class="footer__widget-title mb-20">
                                <h4>Perusahaan</h4>
                            </div>

                        <div class="footer__widget-content">
                                <div class="footer__link footer__link-2">
                                    <ul>
                                        <li><a href="#">Tentang Kami</a></li>
                                        <li><a href="#">Testimonial</a></li>
                                        <li><a href="#">Klien</a></li>
                                        <li><a href="#">Produk</a></li>
                                        <li><a href="#">Kontak</a></li>

                                    </ul>
                                </div>
                            </div></div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                      <div class="footer__widget">
                        <div class="footer__widget-title mb-20">
                          <h4>Kategori Produk</h4>
                        </div>
                        <div class="row"><div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12">
                          <div class="footer__widget-content">
                            <div class="footer__widget">
                              <div class="footer__widget-content">
                                <div class="footer__link footer__link-2">
                                  <ul>
                                    <li><a href="#">Souvenir Kantor</a></li>
                                    <li><a href="#">Iklan & Percetakan</a></li>
                                    <li><a href="#">Pakaian & Konveksi</a></li>
                                    <li><a href="#">Catridge Printer</a></li>
                                    <li><a href="#">Alat Tulis Kantor</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12">
                          <div class="footer__widget-content">
                            <div class="footer__widget">
                              <div class="footer__widget-content">
                                <div class="footer__link footer__link-2">
                                  <ul>
                                    <li><a href="#">Interior & Konstruksi</a></li>
                                    <li><a href="#">Hiasan Meja</a></li>
                                    <li><a href="#">Hiasan Dinding</a></li>
                                    <li><a href="#">Gadget Keren</a></li>
                                    <li><a href="#">Penunjang Kerja</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12">
                          <div class="footer__widget-content">
                            <div class="footer__widget">
                              <div class="footer__widget-content">
                                <div class="footer__link footer__link-2">
                                  <ul>
                                    <li><a href="#">Aktivitas Harian</a></li>
                                    <li><a href="#">Produk Kesehatan</a></li>
                                    <li><a href="#">Assesoris Mobil</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div></div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="footer__widget">
                            <div class="footer__widget-title mb-20">
                                <h4>Pembayaran</h4>
                            </div>
                            <div class="footer__widget-content">
                                <img alt="" src="{{ asset('assets/img/payment/icon_pembayaran.jpg') }}" style="width: 85%;">
                            </div>
                        </div>
                    </div><div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="footer__widget">
                            <div class="footer__widget-title mb-20">
                                <h4>Pengiriman</h4>
                            </div>
                            <div class="footer__widget-content">
                                <img alt="" src="{{ asset('assets/img/payment/icon_pengiriman.jpg') }}" style="width: 85%;">
                            </div>
                        </div>
                    </div><div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="footer__widget">
                            <div class="footer__widget-title mb-20">
                                <h4>Newsletter</h4>
                            </div>
                            <div class="footer__widget-content">
                                <p class="footer-text mb-25">Lebih dekat dengan kami untuk dapatkan update informasi terbaru, promo, dan penawaran terbaik dari produk-produk kami.</p>
                                <div class="footer__newsletter-form">
                                    <form action="#">
                                        <input class="ft-newsl b-radius" type="email" placeholder="Alamat Email Anda">
                                        <button class="ft-newsl-btn" type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container 0">
                <div class="footer__bottom-content footer__bottom-content-2 pt-15">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="copy-right-area copy-right-area-2">
                                <p>© 2022 Supplier Kantor Pajak Se-Indonesia</p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="copy-right-area copy-right-area-2">
                            <ul>
                              <li><a href=""><i class="fab fa-facebook"></i></a> <a href=""><i class="fab fa-pinterest"></i></a> <a href=""><i class="fab fa-instagram"></i></a></li>
                            </ul>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </footer>
  <!-- footer-end -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/tweenmax.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <script src="{{ asset('assets/js/backtotop.js') }}"></script>
    {{--<script src="{{ asset('assets/js/nice-select.js') }}"></script>--}}
    <script src="{{ asset('assets/js/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    @yield('footer')

  </body>
</html>