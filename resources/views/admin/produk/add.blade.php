@extends('layouts.app')
@section('head')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .addimagegalery{
        font-size:2.5rem;
        color: #c5c2c5;
        cursor: pointer;
    }

    .boxgalery img{
        max-width: 100%;
    }

    .boxgalery .col-3{
        padding-right:5px;
        padding-left: 5px;
    }

    .boxgalery .card-body{
        padding: 5px;
    }

    .hpsgalery{
        background: #f00;
        color: #fff;
        width: 30px;
        padding: 5px 0;
        text-align: center;
        border-radius: 20px;
        position: absolute;
        top: -10px;
        right: -10px;
        cursor: pointer;

    }
</style>
@endsection
@section('content')
<div class="container">
    <form method="POST" action="{{ route('admin.produk.add.post') }}">
    @csrf
    <div class="row">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                        <label for="sort" class="form-label">Sort Description</label>
                        <textarea name="sort" class="my-editor form-control" id="my-editor" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea name="desc" class="my-editor form-control" id="my-editor2" cols="30" rows="10"></textarea>
                        </div>
                        
                    
                </div>
            </div>

            <div class="card mb-3 mt-3">
                <div class="card-header">
                    HARGA
                </div>

                <div class="card-body">
                    <p class="text-end">
                        <a href="#" id="tmbharga" class="btn btn-outline-success">Tambah Harga</a>
                    </p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">HARGA</th>
                            <th scope="col">QTY</th>
                            <th scope="col">#</th>
                        </tr>
                        </thead>
                        <tbody class="tbharga">
                            <tr>
                                <td>
                                    <input type="number" class="text-center" name="price[]" value="0" >
                                </td>
                                <td>
                                    <input type="number" class="text-center" name="qty[]" value="0" >
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        <tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    SHIPPING
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Weight (g)</th>
                            <th scope="col">Length (cm)</th>
                            <th scope="col">Width (cm)</th>
                            <th scope="col">Height (cm)</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="number" class="text-center" name="weight" value="0" >
                                </td>
                                <td>
                                    <input type="number" class="text-center" name="d_length" value="0" >
                                </td>
                                <td>
                                    <input type="number" class="text-center" name="d_width" value="0" >
                                </td>
                                <td>
                                    <input type="number" class="text-center" name="d_height" value="0" >
                                </td>
                                
                            </tr>
                        <tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">
                    Kategori
                  </div>
                <div class="card-body">

                    <select class="selector2" name="kategori" multiple="multiple" >
                        @foreach ( $kategori as $kat )
                        <option value="{{$kat->id}}">{{ $kat->title }}</option>
                        @endforeach
                      </select>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    Brand
                  </div>
                <div class="card-body">

                    <select class="selector2" name="brand">
                        @foreach ( $brand as $br )
                        <option value="{{$br->id}}">{{ $br->title }}</option>
                        @endforeach
                      </select>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    IMAGE
                  </div>
                <div class="card-body">
                    <div class="imguplod">
                        <input type="file" nama="primeryupload" class=" form-control imgeprimery">
                    </div>
                    <div class="imgview" style="display: none">
                        <input type="hidden" class="imgprimer" name="image_primer" value="">

                        <img style="width: 100%" class="showimg" src="" alt>
                        <p>
                            <a href="#" class="hpsimg">Hapus Image</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    GALERY IMAGE
                  </div>
                <div class="card-body">
                    <div class="row boxgalery">
                        <div class="col-3">
                            <div class="card addimagegalery">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: none">
                        <input type="file" class="filegalery">
                    </div>
                    
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    </form>
</div> 
@endsection

@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
    CKEDITOR.replace('my-editor2');


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $(document).ready(function() {
        $('.selector2').select2({theme: "bootstrap-5",width: '100%'});

        $("#tmbharga").click(function(){
            var bd = '<tr>'+
                     '<td>'+
                     '   <input type="number" class="text-center" name="price[]" value="0" >'+
                     '</td>'+
                     '<td>'+
                     '<input type="number" class="text-center" name="qty[]" value="0" >'+
                     ' </td>'+
                     '<td>'+
                     '    <a href="#" class="btn btn-danger deletetl"><i class="fa-solid fa-trash"></i></a>'+
                     '</td>'+
                     '</tr>';
            $(".tbharga").append(bd);
            
            $(".deletetl").click( function(event) {
                $(this).parent().parent().remove();
                return false;
            });

            return false;
        
        });

        $('.imgeprimery').on( 'change' , function(event){
            
            var myFormData = new FormData();
            myFormData.append('file', this.files[0]);

            //console.log(this.files[0]);
            $.ajax({
                url: "{{ route('admin.produk.upload') }}",
                type: 'POST',
                processData: false, // important
                contentType: false, // important
                dataType : 'json',
                data: myFormData,
                complete: function(data) {
                    hasil = $.parseJSON(data.responseText);
                    console.log(hasil);
                    $('.imguplod').hide();
                    $('.imgview').show();
                    $('.showimg').attr( "src" , "{{ url('/') }}/"+hasil);
                    $('.imgprimer').val(hasil);
                }
            });
        });

        $(".hpsimg").click(function(){
            $('.imguplod').show();
            $('.imgview').hide();
            $('.showimg').attr( "src" , "");
            $('.imgprimer').val("");
            $('.imgeprimery').val("");
            return false;
        });

        $(".addimagegalery").click(function(){
            $(".filegalery").click();
        });

        $('.filegalery').on( 'change' , function(event){
            
            var myFormData = new FormData();
            myFormData.append('file', this.files[0]);

            //console.log(this.files[0]);
            $.ajax({
                url: "{{ route('admin.produk.upload') }}",
                type: 'POST',
                processData: false, // important
                contentType: false, // important
                dataType : 'json',
                data: myFormData,
                complete: function(data) {
                    hasil = $.parseJSON(data.responseText);
                    console.log(hasil);
                    var url = "{{ url('/') }}/"
                    var box = '<div class="col-3">'+
                              '<div class="card">'+
                              '<div class="card-body">'+
                              '<div class="hpsgalery"><i class="fa-solid fa-xmark"></i></div>'+
                              '<img src="'+url+hasil+'" alt>'+
                              '<input type="hidden" value="'+hasil+'" name="galery[]" />'+
                              '</div>'+
                              '</div>'+
                              '</div>';

                    $('.boxgalery').append(box);

                    $('.hpsgalery').click(function(){
                        $(this).parent().parent().parent().remove();
                    });
                }
            });
        });

    });


    </script>
@endsection