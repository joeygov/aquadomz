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
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>PRODUCT CODE</th>
            <th>PRODUCT NAME</th>
            <th>SUPPLIER</th>
            <th>QUANTITY</th>
            <th>QUANTITY REMAINING</th>
            <th>DATE PURCHASED</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>350-wtrbtle</td>
            <td>350ml water bottle</td>
            <td>Plastican</td>
            <td>5000</td>
            <td>4000</td>
            <td>January 25, 2020</td>
            <td> 
                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
        <tr>
            <td>500-ml-wtr-btl</td>
            <td>500ml-water bottle</td>
            <td>Faker</td>
            <td>1000</td>
            <td>780</td>
            <td>January 4, 2021</td>
            <td> 
                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
        <tr>
            <td>1l-wtr-btl</td>
            <td>1ltr Water bottle</td>
            <td>Nature Well</td>
            <td>500</td>
            <td>233</td>
            <td>January 20,2021</td>
            <td> 
                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
        <tr>
            <td>1.4ltr-bottle</td>
            <td>1.5ltr Water Bottle</td>
            <td>Wazzupp</td>
            <td>10000</td>
            <td>6775</td>
            <td>January 21, 2021</td>
            <td> 
                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
    </tbody>
</table>
@stop