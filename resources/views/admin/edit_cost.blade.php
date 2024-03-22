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
                                        <h3>Cost Edit</h3>
                                    </div>
                                    <div class="card-body bg-info">
                                        <form action="{{ route('update_cost_info') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Room Rent*</label>
                                                        <input type="number" placeholder="Amount" name="room_rent" class="form-control" value="{{$cost_info->room_rent}}">
                                                        <input type="hidden" placeholder="Amount" name="id" class="form-control" value="{{$cost_info->id}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Gas Current*</label>
                                                        <input type="number" placeholder="Amount" name="gas_current" class="form-control" value="{{$cost_info->gas_current}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Aunty Salary*</label>
                                                        <input type="number" placeholder="Amount" name="aunty_salary" class="form-control" value="{{$cost_info->aunty_salary}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for="">Wi-Fi*</label>
                                                        <input type="number" placeholder="Amount" name="wi_fi" class="form-control" value="{{$cost_info->wi_fi}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for="">Wi-Fi*</label>
                                                        <input type="number" placeholder="Amount" name="water" class="form-control" value="{{$cost_info->water}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for="">Caretaker*</label>
                                                        <input type="number" placeholder="Amount" name="caretaker" class="form-control" value="{{$cost_info->caretaker}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for="">Exta*</label>
                                                        <input type="number" placeholder="Amount" name="exta" class="form-control" value="{{$cost_info->exta}}" >
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
