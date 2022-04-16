@extends('layouts.depan')
@section('head')
    <style>
        .thumbnail {
            position: relative;
            padding: 0px;
            margin-bottom: 20px;
        }
        .thumbnail img {
            width: 80%;
        }
        .thumbnail .caption{
            margin: 7px;
        }
        .main-section{
            background-color: #F8F8F8;
        }
        .dropdown{
            float:right;
            padding-right: 30px;
        }
        .btn{
            border:0px;
            margin:10px 0px;
            box-shadow:none !important;
        }
        .dropdown .dropdown-menu{
            padding:20px;
            top:30px !important;
            width:350px !important;
            left:-110px !important;
            box-shadow:0px 5px 30px black;
        }
        .total-header-section{
            border-bottom:1px solid #d2d2d2;
        }
        .total-section p{
            margin-bottom:20px;
        }
        .cart-detail{
            padding:15px 0px;
        }
        .cart-detail-img img{
            width:100%;
            height:100%;
            padding-left:15px;
        }
        .cart-detail-product p{
            margin:0px;
            color:#000;
            font-weight:500;
        }
        .cart-detail .price{
            font-size:12px;
            margin-right:10px;
            font-weight:500;
        }
        .cart-detail .count{
            color:#C2C2DC;
        }
        .checkout{
            border-top:1px solid #d2d2d2;
            padding-top: 15px;
        }
        .checkout .btn-primary{
            border-radius:50px;
            height:50px;
        }
        .dropdown-menu:before{
            content: " ";
            position:absolute;
            top:-20px;
            right:50px;
            border:10px solid transparent;
            border-bottom-color:#fff;
        }
    </style>
@endsection
  
@section('content')
<div class="container pt-30 mb-30 bg-white">
    <div class="row justify-content-start">
        <div class="col-md-11">
            <table id="carts" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Harga</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0 @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            @php $total += $details['harga'] * $details['qty'] @endphp
                            <tr data-id="{{ $id }}">
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs"><img src="{{ url($details['image']) }}" width="100" height="100" class="img-responsive"/></div>
                                        <div class="col-sm-9">
                                            <h4 class="nomargin">{{ $details['nama'] }}</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">Rp. {{ number_format($details['harga']) }}</td>
                                <td data-th="Quantity">
                                    {{ $details['qty'] }}
                                </td>
                                <td data-th="Subtotal" class="text-center">Rp. {{ number_format($details['harga'] * $details['qty']) }}</td>
                                
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-end"><h3><strong>Total Rp. {{ $total }}</strong></h3></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-end">
                            <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                            <button class="btn btn-success">Checkout</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
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
<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
        console.log('test')
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection