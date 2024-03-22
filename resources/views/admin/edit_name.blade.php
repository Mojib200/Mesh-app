@extends('layouts.dashboard.dashboard_master')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12 mt-5 mb-5">
                <div class="">
                    <div class="container">
                        <div class="row ">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header text-white ">
                                        <h3>Edit Information</h3>
                                    </div>
                                    <div class="card-body bg-info">
                                        <form action="{{ route('person_name_info_update') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Name*</label>
                                                        <input type="text" placeholder="name" name="name" class="form-control" value="{{$name_info->name}}">
                                                        <input type="hidden" placeholder="name" name="id" class="form-control" value="{{$name_info->id}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Email*</label>
                                                        <input type="email" placeholder="email@gmail.com" name="email" class="form-control" value="{{$name_info->email}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Phone*</label>
                                                        <input type="number" placeholder="01365754334" name="phone" class="form-control" value="{{$name_info->phone}}">
                                                    </div>
                                                </div>
                                           
                                                <div class="col-lg-4 mb-3">
                                                    <label for=""> Image*</label>
                                                    <div>
                                                        <img src="{{'uploads/image'}}/{{ $name_info->image }}" width="80" alt="">
                                                    </div>
                                                    <div>
                                                        <input type="file" placeholder="" name="image" class="form-control">
                                                    </div>
                                                </div>
                                               
                                            </div>


                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-danger">Click Me</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
