@extends('products.layout')
@section('content')
<br/><br/>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-left: 20px;">Show Products</h2>
        </div>
        
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name :</strong>
                {{$data->product_name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Code :</strong>
                {{$data->product_code}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Details :</strong>
                {{$data->details}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Images :</strong>
                <img src='../{{$data->logo}} ' style="width: 200px; height:200px"/>
                
            </div>
        </div>
    </div>
</div>
@endsection