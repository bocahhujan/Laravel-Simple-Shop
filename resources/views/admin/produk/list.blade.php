@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif


                    <div class="row">
                        <div class="col"><a href="{{ route('admin.produk.add') }}" class="btn btn-success btn-sm">Create Produk</a></div>
                        <div class="col-4">
                            <form method="POST" action="{{ route('admin.produk.search') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="{{ old('search') }}" placeholder="Title Produk" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                                  </div>
                            </form>
                        </div>
                    </div>
                    
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tools</th>
                        </tr>
                        </thead>
                        <tbody>


                        @if ( count($produk) != 0 )

                            @php
                                $num = 1 ;
                            @endphp

                            @foreach ( $produk as $pr )

                                <tr>
                                    <th scope="row">{{ $num }}</th>
                                    <td>
                                        @php
                                        $image = $pr->image->where('type' , '=' , 'primary');
                                        //dd($image);
                                        @endphp
                                        <img width="100" src="{{ url($image[0]->img) }}" alt>
                                    </td>
                                    <td>{{ $pr->title }}</td>
                                    <td>
                                        @php
                                            $price = $pr->price
                                        @endphp
                                        
                                        @if (count($price) == 1)
                                           Rp. {{ number_format($price[0]['price']) }}
                                        @else
                                           Rp. {{ number_format($price[0]['price']) }} - Rp. {{ number_format($price[ count($price) - 1 ]['price']) }}
                                        @endif
                                    </td>
                                    <td>
                                        @foreach ( $pr->kategori as $pk )
                                            {{ $pk->title }} , 
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ( $pr->brand as $pk )
                                        {{ $pk->title }} , 
                                        @endforeach
                                    </td>
                                    <td>
                                        @if( $pr->status == 1 )
                                            <span class="badge bg-success">In Stok</span>
                                        @else
                                            <span class="badge bg-danger">Not In Stok</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="{{  route('admin.produk.edit',$pr['id']) }}">UBAH</a>
                                        <a class="btn btn-outline-danger" href="{{  route('admin.produk.delete',$pr['id']) }}">HAPUS</a>
                                    </td>
                                        
                                        
                                </tr>

                                @php
                                    $num++;
                            @endphp
                            @endforeach
                            
                        @else

                        <tr>
                            <th scope="row">-</th>
                            
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>

                            
                        @endif
                        
                        

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
