@extends('products.layout')
<br/><br/>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-left: 20px;">Add New Products</h2>
        </div>
        <div class="pull-right" style="margin-right: 20px;">
            <a class="btn btn-success" href="index">Back</a>
        </div>
    </div>
</div>

<form action="store" method="POST" enctype="multipart/form-data" style="margin-right:20px ;margin-left: 20px;">
@csrf
    <div class="row" >
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong >Product Name :</strong>
                <input type="text" name="product_name" class="form-control" placeholder="Product Name"/>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong >Product Code :</strong>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code"/>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong >Details :</strong>
                <textarea  name="details" class="form-control" placeholder="Details" style="height: 150px;"></textarea>
            </div>
        </div>
        <br/>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong >Logo :</strong>
                <input type="file" name="logo" class="form-control" placeholder="logo"/>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>
</form>
@section('content')

@endsection