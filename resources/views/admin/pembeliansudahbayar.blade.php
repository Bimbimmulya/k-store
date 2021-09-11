@extends('template.container')

@section('content')

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
    <div class="panel-heading">Pembelian Sudah Bayar</div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Email</th>
                            <th>Berat</th>
							<th>Ekspedisi</th>
							<th>Ongkir</th>
                            <th>Pembelian</th>
							<th>Total</th>
							<th></th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>Suci Maharani</td>
                                <td>24 April 2021</td>
								<td>Bimbimmk24@gmail.com</td>
								<td>1kg</td>
								<td>JNE</td>
								<td>Rp. 26.000</td>
                                <td>Rp. 300.000</td>
                                <td>Rp. 326.000</td>
								<td><a href="#" class="btn btn-info">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</div>
</div>
@endsection