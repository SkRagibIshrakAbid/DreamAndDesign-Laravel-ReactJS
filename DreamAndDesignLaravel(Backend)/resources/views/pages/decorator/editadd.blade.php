@extends('layouts.app')
@section('content')
<div class="container register-form">
            <div class="form">
            <div class="note">
                    <p>Fill Add Information</p>
                </div>
                <form action="{{route('editadd')}}" class="form-content" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$Add->id}}">

                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name of the add*" value="{{$Add->add_name}}"/>
                                @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="type" class="form-control" placeholder="Type of the add*" value="{{$Add->add_type}}"/>
                                @error('type')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="price" class="form-control" placeholder="Price *" value="{{$Add->add_price}}"/>
                                @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                        </div>








                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <input type="text" name="desc" class="form-control" placeholder="Description *" value="{{$Add->add_desc}}"/>
                                @error('desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
                            </div>
                            <div class="form-group">
                                <input type="file" name="iimage" class="form-control"/>
                                @error('image')
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