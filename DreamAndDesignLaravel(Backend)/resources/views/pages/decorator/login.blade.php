@extends('layouts.app')
@section('content')
<div class="container register-form">
            <div class="form">
            <div class="note">
                    <p>Login Form for Decorator</p>
                </div>
                <form action="{{route('login')}}" class="form-content" method="post">
        {{csrf_field()}}
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="uname" class="form-control" placeholder="Your UserName *" value=""/>
                                @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="password" class="form-control" placeholder="Your Password *" value=""/>
                                @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            
                        </div>
                    </div>
</form>
                    <button type="submit" class="btnSubmit">Submit</button>
                </div>
            </div>
        </div>
        @endsection