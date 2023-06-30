@extends('layouts.app')
@section('content')
<div class="container register-form">
            <div class="form">
            <div class="note">
                    <p>Adds Posted by You</p>
                </div>
                <center><h1></h1></center>
            </div>
        </div>
    <table class="table table-borded">
        <tr>
            <th>Add ID</th>
            <th>Add Name</th>
            <th>Add Type</th>
            <th>Add Description</th>
            <th>Add Price</th>
        </tr>
        @foreach($Adds as $Add)
            <tr>
                <td>{{$Add->id}}</td>
                <td>{{$Add->add_name}}</td>
                <td>{{$Add->add_type}}</td>
                <td>{{$Add->add_desc}}</td>
                <td>{{$Add->add_price}}</td>
                <td><a href="/edit/{{$Add->id}}">Edit</a></td>
            </tr>
        @endforeach
    </table>
@endsection