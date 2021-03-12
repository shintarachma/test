@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <a href="/home" class="btn btn-primary">Back</a>
            <br />
            <br />
            <form method="POST" action="/stock/store" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Kode Bukti:</label>
                    <input class="form-control" type="text" id="name" name="name" value="TAMBAH{{$stock->count()+1}}" readonly>

                </div>

                <div class="form-group">
                    <label for="location">Lokasi:</label>
                    <div class="input-group mb-8">
                        <select class="form-control" name="location" id="location">
                            <option selected disabled>Lokasi harus dipilih</option>

                            if(is_array($location) || is_object($location)){
                            @foreach($location as $locations)
                            <option value="{{$locations->id}}">{{$locations->loc_loc}}</option>
                            @endforeach
                            }
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="part">Kode Barang:</label>
                    <select name="part" class="form-control" id="part" onchange="getProductName()" name="part">
                        <option value="" selected disabled>Kode barang harus dipilih</option>
                        if(is_array($product) || is_object($product)){
                        @foreach ($product as $products)
                        <option value="{{$products->id}}">{{ $products->part }}</option>
                        @endforeach
                        }
                    </select>
                </div>

                <div class="form-group">
                    <label for="product_name">Nama Barang:</label>
                    <input class="form-control" type="text" name="product_name" id="product_name" name="product_name" readonly>
                </div>

                <div class="form-group">
                    <label for="received_date">Tanggal Masuk:</label>
                    <input class="form-control" id="received_date" name="received_date" type="text" value="{{date('d/m/y')}}" readonly>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" placeholder="masukan quantity barang. .">
                </div>

                <div class="form-group">
                    <label for="um">Satuan</label>
                    <div class="input-group mb-8">
                        <select class="form-control" name="um" id="um">
                            <option selected>Satuan harus dipilih</option>
                            if(is_array($product) || is_object($product)){
                            @foreach($um as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            }
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function getProductName() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let product_id = $('#part').val();
        if (product_id !== '') {
            $.ajax({
                url: "{{url('items/get-name')}}",
                type: "POST",
                dataType: "json",
                data: {
                    'id_produk': product_id
                },
                success: function (data) {
                    $('#product_name').empty();
                    $('#product_name').val(data.item.desc);
                }
            });
        }

    }
</script>
@endsection