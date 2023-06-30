@extends('layouts.app')
@section('content')
<div class="container register-form">
            <div class="form">
            <div class="note">
                    <p>Edit Your Information</p>
                </div>
                <form action="{{route('decoEdit')}}" class="form-content" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$d->d_id}}">
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *" value="{{$d->d_name}}"/>
                                @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="uname" class="form-control" placeholder="User Name *" value="{{$d->d_uname}}"/>
                                @error('uname')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="pn" class="form-control" placeholder="Phone Number *" value="{{$d->d_phone}}"/>
                                @error('pn')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email *" value="{{$d->d_email}}"/>
                                @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                        </div>








                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="password" class="form-control" placeholder="Your Password *" value="{{$d->d_password}}"/>
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
                                <input type="text" name="address" class="form-control" placeholder="Address *" value="{{$d->d_address}}"/>
                                @error('address')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="yoe" class="form-control" placeholder="Years of Experience *" value="{{$d->d_yoe}}"/>
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