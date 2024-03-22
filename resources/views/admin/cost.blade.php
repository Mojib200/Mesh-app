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
                                        <h3>Cost Information</h3>
                                    </div>
                                    <div class="card-body bg-info">
                                        <form action="{{ route('cost_info') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Room Rent*</label>
                                                        <input type="number" placeholder="Amount" name="room_rent" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Gas Current*</label>
                                                        <input type="number" placeholder="Amount" name="gas_current" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for=""> Aunty Salary*</label>
                                                        <input type="number" placeholder="Amount" name="aunty_salary" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for="">Wi-Fi*</label>
                                                        <input type="number" placeholder="Amount" name="wi_fi" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for="">Wi-Fi*</label>
                                                        <input type="number" placeholder="Amount" name="water" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for="">Caretaker*</label>
                                                        <input type="number" placeholder="Amount" name="caretaker" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div>
                                                        <label for="">Exta*</label>
                                                        <input type="number" placeholder="Amount" name="exta" class="form-control">
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
                                        <h3>Cost Information</h3>
                                    </div>
                                    <div class="card-body bg-info">
                                        <table class="table table-dark text-center">
                                            <tr>
                                                <th>Room Rent</th>
                                                <th>Gas Current</th>
                                                <th>Aunty Salary</th>
                                                <th>Wi_Fi</th>
                                                <th> Water</th>
                                                <th>Caretaker</th>
                                                <th> Exta</th>
                                                <th> P_E_Total</th>
                                                <th> P_N_E_Total</th>
                                                <th> P_O_E_Total</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach ($cast_info as $cast_info)
                                                <tr>
                                                    <td>{{ $cast_info->room_rent }}</td>
                                                    <td>{{ $cast_info->gas_current }}</td>
                                                    <td>{{ $cast_info->aunty_salary }}</td>
                                                    <td>{{ $cast_info->wi_fi }}</td>
                                                    <td>{{ $cast_info->water }}</td>
                                                    <td>{{ $cast_info->caretaker }}</td>
                                                    <td>{{ $cast_info->exta }}</td>
                                                    <td>{{ $cast_info->total }}</td>
                                                    <td>{{ $cast_info->per_new_total }}</td>
                                                    <td>{{ $cast_info->per_old_total }}</td>
                                                  
                                                    <td>
                                                      
                                                        <a href="{{ route('edit_cast_info', $cast_info->id) }}"
                                                            class=" btn-sm fa fa-edit " title="Edit"></a>
                                                       

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
