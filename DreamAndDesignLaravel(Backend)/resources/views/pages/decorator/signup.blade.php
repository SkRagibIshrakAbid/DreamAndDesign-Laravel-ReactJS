@extends('layouts.app')
@section('content')
<div class="container register-form">
            <div class="form">
            <div class="note">
                    <p>SignUp Form for Decorator</p>
                </div>
                <form action="signup" class="form-content" method="post">
        {{csrf_field()}}
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *" value=""/>
                                @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="uname" class="form-control" placeholder="User Name *" value=""/>
                                @error('uname')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="pn" class="form-control" placeholder="Phone Number *" value=""/>
                                @error('pn')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email *" value=""/>
                                @error('email')
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
                            <div class="form-group">
                                <input type="text" name="password_confirmation" class="form-control" placeholder="Confirm Password *" value=""/>
                                @error('password_confirmation')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" placeholder="Address *" value=""/>
                                @error('address')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="yoe" class="form-control" placeholder="Years of Experience *" value=""/>
                                @error('yoe')
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