

Skip to content
Using Passerelles numériques Mail with screen readers
1 of 1,535
(no subject)
Inbox

joe weeh
Attachments
9:01 PM (14 minutes ago)
to me


6 Attachments
Meet
New meeting
My meetings
Hangouts


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
    @foreach($customers as $customer)
        <tr>
            <td>{{$customer->customer_id}}</td>
            <td>{{$customer->firstname}}</td>
            <td>{{$customer->middlename}}</td>
            <td>{{$customer->lastname}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->contact_number}}</td>
            <td>{{$customer->points}}</td>
            <td> 
                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a class="delete" href="{{url('/deleteCustomer',$customer->id)}}" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop
customer.blade.php
Displaying header.blade.php.