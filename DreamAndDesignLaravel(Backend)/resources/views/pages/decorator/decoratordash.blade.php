@extends('layouts.app')
@section('content')
<div class="container register-form">
            <div class="form">
            <div class="note">
                    <p>Welcome, {{$d->d_name}} </p>
                </div>
                <center><h1></h1></center>
                
                  
                
            </div>
        </div>
        <table class="table table-borded">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Name</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Years of Experience</th>
            <th></th>
        </tr>
            <tr>
                <td>{{$d->d_id}}</td>
                <td>{{$d->d_uname}}</td>
                <td>{{$d->d_name}}</td>
                <td>{{$d->d_password}}</td>
                <td>{{$d->d_phone}}</td>
                <td>{{$d->d_email}}</td>
                <td>{{$d->d_address}}</td>
                <td>{{$d->d_yoe}}</td>
                <td><a href="{{  route('decoEdit')  }}">Edit</a></td>
            </tr>
    </table>
        @endsection