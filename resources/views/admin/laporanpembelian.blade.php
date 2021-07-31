@extends('template.container')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Laporan Pembelian</h4>
        <div class="panel-body">
            <div class="row">
                <input type="hidden" class="form-control" value="laporan">
                <div class="col-sm-12 col-mg-3 col-lg-4">
                    <div class="form-group">
				        <label>From</label>
				        <input type="date" class="form-control">
			        </div>
                </div> 
                <div class="col-sm-12 col-mg-3 col-lg-4">
                    <div class="form-group">
				        <label>To</label>
				        <input type="date" class="form-control">
			        </div>
                </div> 
                <div class="col-sm-12 col-mg-2 col-lg-2">
                    <div class="form-group">
                        <br>
                        <button type="submit" class="btn btn-primary btn-block" name="check">Check</button>
			        </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
