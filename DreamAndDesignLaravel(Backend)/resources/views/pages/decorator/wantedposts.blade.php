@extends('layouts.app')
@section('content')
<div class="container register-form">
            <div class="form">
            <div class="note">
                    <p>Wanted Posts</p>
                </div>
                <center><h1></h1></center>
            </div>
        </div>
    <table class="table table-borded">
        <tr>
            <th>Post ID</th>
            <th>Post Type</th>
            <th>Post Description</th>
            <th>Post Price</th>
            <th>Posted By</th>
        </tr>
        @foreach($wps as $wp)
            <tr>
                <td>{{$wp->id}}</td>
                <td>{{$wp->wp_type}}</td>
                <td>{{$wp->wp_description}}</td>
                <td>{{$wp->wp_budget}}</td>
                <td>{{$wp->wp_posted_by}}</td>
            </tr>
        @endforeach
    </table>
@endsection