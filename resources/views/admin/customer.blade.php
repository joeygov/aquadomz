@extends('layouts.app')
@section('content')
<div class="table-title">
    <div class="row">
        <div class="col-sm-10">
            <h2>Customer List</h2>
        </div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
        </div>
    </div>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Lastname</th>
            <th>Address</th>
            <th>Contact No.</th>
            <th>Points</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>100001</td>
            <td>Tiger</td>
            <td>Marion</td>
            <td>Jay</td>
            <td>Balugo</td>
            <td>Talamban, Cebu</td>
            <td>09876543211</td>
            <td>10</td>
            <td> 
                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
        <tr>
            <td>100001</td>
            <td>Tiger</td>
            <td>Marion</td>
            <td>Jay</td>
            <td>Balugo</td>
            <td>Talamban, Cebu</td>
            <td>09876543211</td>
            <td>3</td>
            <td> 
                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
        <tr>
            <td>100001</td>
            <td>Tiger</td>
            <td>Marion</td>
            <td>Jay</td>
            <td>Balugo</td>
            <td>Talamban, Cebu</td>
            <td>09876543211</td>
            <td>4</td>
            <td> 
                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
        <tr>
            <td>100001</td>
            <td>Tiger</td>
            <td>Marion</td>
            <td>Jay</td>
            <td>Balugo</td>
            <td>Talamban, Cebu</td>
            <td>09876543211</td>
            <td>7</td>
            <td> 
                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
    </tbody>
</table>
@stop