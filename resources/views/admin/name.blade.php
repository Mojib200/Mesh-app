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
                                        <h3>Name Information</h3>
                                    </div>
                                    <div class="card-body bg-info">
                                        <form action="{{ route('person_name_info') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Name*</label>
                                                        <input type="text" placeholder="name" name="name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Email*</label>
                                                        <input type="email" placeholder="email@gmail.com" name="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Phone*</label>
                                                        <input type="number" placeholder="01365754334" name="phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Image*</label>
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
                            <div class="col-md-14 mt-5">
                                <div class="card">
                                    <div class="card-header text-center  bg-primary">
                                        <h3>Personal Information</h3>
                                    </div>
                                    <div class="card-body bg-info">
                                        <table class="table table-dark text-center">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach ($name_info as $name_info)
                                                <tr>
                                                    <td>{{ $name_info->name }}</td>
                                                    <td>{{ $name_info->email }}</td>
                                                    <td>0{{ $name_info->phone }} </td>
                                                    <td><img src="{{'uploads/image'}}/{{ $name_info->image }}" width="80" alt="">
                                                       </td>
                                                  
                                                    <td>
                                                      
                                                        <a href="{{ route('edit_name_info', $name_info->id) }}"
                                                            class=" btn-sm fa fa-edit " title="Edit"></a>
                                                            <a href="{{route('delete_name_info',$name_info->id)}}" class=" btn-sm fa fa-trash "  title="Delete"></a>
                                                       

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </table>

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
