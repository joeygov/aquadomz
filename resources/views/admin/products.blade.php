@extends('layouts.app')
@section('content')
<div class="table-title">
    <div class="row">
        <div class="col-sm-10">
            <h2>Product List</h2>
        </div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
        </div>
    </div>
</div>
<table id="product_list" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>PRODUCT ID</th>
            <th>PRODUCT CODE</th>
            <th>PRODUCT NAME</th>
            <th>SUPPLIER</th>
            <th>QUANTITY</th>
            <th>QUANTITY SOLD</th>
            <th>QUANTITY REMAINING</th>
            <th>DATE PURCHASED</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>    
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product_code}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->supplier}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->quantity_sold}}</td>
            <td>{{$product->quantity_remaining}}</td>
            <td>{{$product->date_purchased}}</td>
            <td> 
                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a class="delete" href="#delete_modal" title="Delete" data-toggle="modal"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<form action="{{ route('deleteProduct',$product->id) }}" method="get">
    <div id="delete_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>						
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form> 
@stop