@extends('layouts.depan')
@section('title', $produk->title )

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />

    <style>
        .carousel-indicators {
            position: static;
        }

        .carousel-indicators>li {
            width: 100px;
            height: auto;
            margin: 10px 3px;
        }

        .carousel-indicators .active{
            border:1px solid #0314ff;
        }

        .carousel-indicators [data-bs-target]{
            width: 30% ;
            height: auto;
        }

        .title-option{
            color:#0052f5ff;
            font-weight: 800;
        }

        .title-produk{
            overflow-wrap: break-word;
        }

        .btn-addtocart{
            height: 55px;
        }

        .subtotal{
            color: #0052f5ff;
            font-size: 40px;
            font-weight: 800;
        }

        .btn-ongkir{
            color: #fff;
            background: #0052f5ff;
            border: #0052f5ff;
            width:100%;
        }

        .ongkir-nama{
            font-size: 23px;
            font-weight: 800;
        }

        .ongkir-lokal , .ongkir-nasional{
            color: #0052f5ff;
            font-size: 25px;
            font-weight: 700;
        }
        
        .boxnamekpp .select2-selection{
            padding-top: 15px;
            padding-bottom: 35px;
            text-align: center;
        }
    </style>
@endsection

@section('content')
<div class="container pt-30 mb-30 bg-white">
    <div class="row justify-content-start">
       
        <div class="col-md-4">
        
                <div id="carouselExampleControlsNoTouching" class="carousel slide light-shadow carousel-fade carousel-thumbnails" data-ride="carousel">
                    

                    <div class="carousel-inner" role="listbox">
                    @php
                        $num = 1 ;
                    @endphp
                    @foreach ($produk->image as $img )
                        <div class="carousel-item {{ ($num == 1 ) ? 'active' : ''  }} ">
                        <img src="{{ url($img->img) }}" class="d-block w-100" alt="{{ $produk->title }}">
                      </div>
                      @php
                          $num++;
                      @endphp
                    @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                    <ol class="carousel-indicators">
                        @php
                            $num = 0 ;
                        @endphp
                        @foreach ($produk->image as $img )
                            <li data-bs-target="#carouselExampleControlsNoTouching"  data-bs-slide-to="{{ $num }}" class="{{ ($num == 0 ) ? 'active' : ''  }}"> 
                                <img class="d-block w-100 img-fluid" src="{{ url($img->img) }}" >
                            </li>
                        @php
                            $num++;
                        @endphp
                        @endforeach
  
                    </ol>
                </div>

                
        </div>

        <div class="col-md-5">
            <h1 class="title-produk">{{ $produk->title }}</h1>
            
            <div class="row mb-3">
            
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/bintang.png') }}" alt >
                </div>

                <div class="col-md-6 fw-bold">
                    Terjual : 1.2K
                </div>
            </div>

            <div class="row mb-3">
            
                <div class="col-md-6 fw-bold">
                    <img width="25px" src="{{ asset('assets/img/hart.png') }}" alt > Tambah ke Favorit
                </div>
                <div class="col-md-6 fw-bold">
                    <img width="25px" src="{{ asset('assets/img/share.png') }}" alt > Bagukan Produk
                </div>
            </div>

            <h2 class="mb-4">
                @php
                $price = $produk->price
                @endphp
                @if (count($price) == 1)
                Rp. {{ number_format($price[0]['price']) }}
                @else
                Rp. {{ number_format($price[0]['price']) }} - Rp. {{ number_format($price[ count($price) - 1 ]['price']) }}
                @endif
            </h2>

            <div class="samery-produk">
                
                <div class="accordion" id="detailproduk">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Spesifikasi
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#detailproduk">
                        <div class="accordion-body">
                            {!!  $produk->summary !!}
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Descritpion
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#detailproduk">
                        <div class="accordion-body">
                            {!! $produk->description  !!}
                        </div>
                      </div>
                    </div>
                    
                  </div>
            </div>

        </div>

        <div class="col-md-3">
            <h5 class="title-option mb-2">Atur Jumlah Dan Catatan</h5>
            <form class="row g-3 m-0" action="{{ route('add.cart') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $produk->id }}">
                <div class="col-4 mt-1 border border-dark rounded-2">
                  <label for="exampleFormControlInput1" class="form-label col-form-label-sm m-0 p-0">Quantity</label>
                  <input type="number" class="form-control text-start border-0 m-0 p-0" id="qty" name="qty" value="1">
                </div>
                <div class="col-8 mt-1 h-100">
                    <div class="d-grid gap-1">
                        <button type="submit" class="btn btn-danger btn-lg btn-addtocart">ADD TO CART</button>
                    </div>
                </div>
              </form>
              <div class="row mt-2 mb-2">
                <div class="col-md-12 text-center">
                    <img width="150px" src="{{ asset('assets/img/tambah-catatan.png') }}" alt>
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-md-12">
                    Subtotal
                    <p  class="subtotal pt-1">
                        Rp. {{ number_format($price[0]['price']) }}
                    </p>
                </div> 
              </div>

              <hr />

              <div class="row">
                <div class="col-md-12 boxnamekpp">
                    <select  class="form-control select2-single" id="namekpp" placeholder="Masukan Nama KPP">
                        <option></option>               

                        @foreach ( $shipping as $sp )
                            <option value="{{ $sp['id'] }}">{{ $sp['nama'] }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-danger btn-lg btn-ongkir">Hitung Ongkos Kirim</button>
                </div> 
                <div class="mt-4 text-center">
                    <img width="130px" src="{{ asset('assets/img/kirim-ke.png') }}" alt >
                </div>
                <div class="mt-4 text-center ongkir-nama">
                    {{ $shipping_now['nama'] }}
                </div>
                <div class="mt-4 text-center">
                    Pengiriman Lokal
                    <p class="text-center mt-2 ongkir-lokal">Rp {{ number_format($shipping_now['harga']) }}/Kg</p>
                </div>
                <div class="mt-4 text-center">
                    Pengiriman Nasional
                    <p class="text-center mt-2 ongkir-nasional">Rp {{ number_format($shipping_now['harga_nasional']) }}/Kg</p>
                </div>


              </div>
           
        </div>

       
    </div>
</div>

<!-- trending-product-area-start -->
<section class="trending-product-area pt-20 pb-15">
    <div class="container bg-white pt-10 pb-10">
        <div class="row">
            <div class="col-xl-12">
                <div class="section__head d-flex justify-content-between mb-30">
                    <div class="section__title section__title-2">
                        <h5 class="st-titile">Produk Terkait</h5>
                    </div>
             
                </div>
            </div>
        </div>

        <div class="row home_produk_terlaris">
            @foreach ( $terkait as $p )
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <a href="{{ route('produk.detail' , $p->url) }}">
                        <div class="card">
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


<!-- trending-product-area-start -->
<section class="trending-product-area pt-20 pb-15 mb-30">
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

        <div class="row home_produk_terlaris">
            @foreach ( $populer as $p )
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <a href="{{ route('produk.detail' , $p->url) }}">
                        <div class="card">
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


@endsection
@section('footer')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
    
    <script>
        function addCommas(nStr)
        {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }

        $(document).ready(function() {
            $('#namekpp').select2( {
				placeholder: 'Masukan Nama KPP',
                theme: 'bootstrap-5'
			} );

            $('#namekpp').on('select2:select', function (e) {
                var data = e.params.data;
                console.log(data.id);
                $.getJSON( "{{ route('shiping.get' , '') }}/"+data.id, function( data ) {
                    console.log(data);
                    $('.ongkir-nama').html(data.nama);
                    $('.ongkir-lokal').html('Rp. '+addCommas(data.harga)+'/Kg');
                    $('.ongkir-nasional').html('Rp. '+addCommas(data.harga_nasional)+'/Kg');
                });
            });
        });
    </script>
@endsection
