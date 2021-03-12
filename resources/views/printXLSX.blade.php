<html>
    <table class="table table-striped">
      <thead>
       <tr>
          <th>BUKTI</th>
          <th>TANGGAL TRANSAKSI</th>
          <th>JAM</th>
          <th>LOKASI</th>
          <th>KODE BARANG</th>
          <th>TANGGAL MASUK</th>
          <th>QUANTITY TRANSCATION</th>
          <th>UM</th>
          <th>PROGRAM</th>
          <th>USERID</th>
       </tr>
      </thead>
      <tbody>
        @foreach($transactions as $transaction)
        <tr>
            <td>{{$transaction->name}}</td>
            <td>{{$transaction->transaction_date}}</td>
            <td>{{$transaction->hours}}</td>
            <td>{{$transaction->transaction_location->name}}</td>
            <td>{{$transaction->transaction_product->part_number}}</td>
            <td>{{$transaction->transaction_stock->received_date}}</td>
            <td>{{$transaction->quantity}}</td>
            <td>{{$transaction->transaction_um->name}}</td>
            <td>{{$transaction->program}}</td>
            <td>{{$transaction->transaction_user->name}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
  </html>
  