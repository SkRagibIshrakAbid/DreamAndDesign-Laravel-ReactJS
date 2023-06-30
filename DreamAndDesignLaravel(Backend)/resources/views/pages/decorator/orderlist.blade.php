@extends('layouts.app')
@section('content')
<div class="container register-form">
            <div class="form">
            <div class="note">
                    <p>Orders</p>
                </div>
                <center><h1></h1></center>
            </div>
        </div>
    <table class="table table-borded">
        <tr>
            <th>Order ID</th>
            <th>Order Name</th>
            <th>Order Type</th>
            <th>Order Description</th>
            <th>Order Price</th>
            <th>Order Placed By</th>
        </tr>
        @foreach($Orders as $Order)
            <tr>
                <td>{{$Order->o_id}}</td>
                <td>{{$Order->o_name}}</td>
                <td>{{$Order->o_type}}</td>
                <td>{{$Order->o_description}}</td>
                <td>{{$Order->o_price}}</td>
                <td>{{$Order->o_ordered_by}}</td>
                <td><a href="/accept/{{$Order->o_id}}">Accecpt</a></td>
                <td><a href="/reject/{{$Order->o_id}}">Reject</a></td>
            </tr>
        @endforeach
    </table>
@endsection