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
                                        <h3>Personal Information</h3>
                                    </div>
                                    <div class="card-body bg-info">
                                        <form action="{{ route('personal_cost') }}" method="post"
                                            enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-4 mb-3">
                                                <div>
                                                    <label for=""> Member Name*</label>
                                                    <select name="person_id" class="form-control">
                                                        <option value="">---Select Member Name---</option>
                                                        @foreach ($person_name = App\Models\Name::all() as $person_name)
                                                            <option value="{{ $person_name->id }}">
                                                                {{ $person_name->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div>
                                                    <label for="">Member*</label>
                                                    <input type="hidden" name="cost_id" value="{{App\Models\Cost::all()->first()->id}}">
                                                
                                                    <select name="member_id" class="form-control">
                                                        <option value="">---Select Cost ID---</option>
                                                        <option value="1">Permanent Member</option>
                                                        <option value="2">Old Member</option>
                                                        <option value="3">New Member</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div>
                                                    <label for=""> Meal*</label>
                                                    <input type="number" placeholder="10.5" name="meal"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div>
                                                    <label for=""> Room Rent*</label>
                                                    <input type="number" placeholder="20000" name="rome_rent_per"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div>
                                                    <label for=""> Personal Amount*</label>
                                                    <input type="number" placeholder="2000000" name="amount"
                                                        class="form-control">
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
                                <div class="card bg-success ">
                                    <div class="card-header text-center  ">
                                        <h3>Over All Information</h3>
                                    </div>
                                    <div class="card-body table-responsive-sm  card-control">
                                        <table class="table   text-center text-white fw-bolder">
                                            <tr class="tr-control">
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Cost ID</th>
                                                <th>Personal Meal</th>
                                                <th> Member ID</th>
                                                <th>Room Rent</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                         
                                            @foreach ($value_person as $value_person)
                                                <tr class="fw-bold ">
                                                    <td><img src="{{ 'uploads/image' }}/{{ $value_person->relation_to_name->image }}"
                                                        width="100" height="100" alt="" class="rounded-circle"alt=""></td>
                                                    <td>{{ $value_person->relation_to_name->name }} </td>
                                                    <td>{{ $value_person->cost_id }} </td>
                                                    <td>{{ $value_person->meal }} </td>
                                                    <td>{{ $value_person->member_id }} </td>
                                                    <td>{{ $value_person->rome_rent_per }} </td>
                                                    <td>{{ $value_person->amount }} </td>
                                                  
                                                  
                                                    <td>
                                                        <a href="{{ route('edit_value_person', $value_person->id) }}"
                                                            class=" btn-sm fa fa-edit " title="edit"></a>
                                                       

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
