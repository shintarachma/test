@extends('layouts.app')

@section('content')
<div class="card-body">
  <table class="table table-striped">
    <thead>
     <tr>
        <th>LOCATION</th>
        <th>KODE BARANG</th>
        <th>NAMA BARANG</th>
        <th>SALDO</th>
        <th>UM</th>
        <th>TANGGAL MASUK</th>
     </tr>
    </thead>
    <tbody>
      @foreach($stocks as $stock)
      <tr>
          <td>{{$stock->stock_location->loc_loc}}</td>
          <td>{{$stock->stock_product->part}}</td>
          <td>{{$stock->stock_product->product_item->desc}}</td>
          <td>{{$stock->saldo}}</td>
          <td>{{$stock->um}}</td>
          <td>{{$stock->received_date}}</td>
      </tr>
      @endforeach
  </tbody>
  </table>
<div>
@endsection