@extends('products.layout')

<!-- 
    index title
-->
@section('title')
<title>Index page</title>
@endsection
<!-- 
    content
-->
@section('content')
<br/><br/>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel Product List</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="create" style="margin-top: 20px;">Creat New Products</a>
        </div>
    </div>


    @if($message = Session::get('success'))
    
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Product Name</th>
            <th>Product Code</th>
            <th style="width: 40%;">Product Details</th>
            <th>Product Logo</th>
            <th>Actions</th>
        </tr>
        @foreach($products as $pro)
        <tr>
            <td>{{$pro->product_name}}</td>
            <td>{{$pro->product_code}}</td>
            <td>{{$pro->details}}</td>
            <td><img src='{{$pro->logo}} ' style="width: 100px; height:100px"/>   </td>
            <td>
                <a class="btn btn-success" href={{url('show/'.$pro->id)}}>Show</a>
                <a class="btn btn-info" href={{url('edit/'.$pro->id)}}>Edit</a>
                <a class="btn btn-danger" href={{url('delete/'.$pro->id)}}>Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection