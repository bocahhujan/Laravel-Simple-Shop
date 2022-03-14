@extends('layouts.depan')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        @foreach ( $produk as $p )
        <div class="col-md-4">
            
            <div class="card">
                @php
                $image = $p->image->where('type' , '=' , 'primary');
                //dd($image);
                @endphp
                <img src="{{ url($image[0]->img) }}" class="card-img-top" alt="{{ $p->title }}">

                <div class="card-body">
                    <h5 class="card-title">{{ $p->title }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection
