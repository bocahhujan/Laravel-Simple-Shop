@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Brand Add
                  </div>
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

                    <form action="{{ route('admin.produk.brand.add.post') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                        <label for="desc" class="form-label">Desc</label>
                            <textarea name="desc" class="my-editor form-control" id="my-editor" cols="30" rows="10"></textarea>
                        </div>
                        <p class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Brand List
                  </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Tools</th>
                        </tr>
                        </thead>
                        <tbody>


                        @if ( count($brand) != 0 )

                            @php
                                $num = 1 ;
                            @endphp

                            @foreach ( $brand as $pr )

                                <tr>
                                    <th scope="row">{{ $num }}</th>
                                    <td>{{ $pr->title }}</td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="{{  route('admin.produk.brand.edit',$pr['id']) }}">UBAH</a>
                                        <a class="btn btn-outline-danger" href="{{  route('admin.produk.brand.delete',$pr['id']) }}">HAPUS</a>

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
