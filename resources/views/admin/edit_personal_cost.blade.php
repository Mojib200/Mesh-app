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
                                        <form action="{{ route('personal_cost_update') }}" method="post"
                                            enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-4 mb-3">
                                                <div>
                                                    <label for=""> Member Name*</label>
                                                    <select name="person_id" class="form-control">
                                                        <option value="">{{$per_person_cost->relation_to_name->name}}</option>
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
                                                    <input type="hidden" name="id" value="{{$per_person_cost->id}}">
                                                
                                                    <select name="member_id" class="form-control">
                                                        <option value="">{{$per_person_cost->member_id}}</option>
                                                        <option value="1">1.Permanent Member</option>
                                                        <option value="2">2.Old Member</option>
                                                        <option value="3">3.New Member</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div>
                                                    <label for=""> Meal*</label>
                                                    <input type="number" placeholder="10.5" name="meal"
                                                        class="form-control" value="{{$per_person_cost->meal}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div>
                                                    <label for=""> Room Rent*</label>
                                                    <input type="number" placeholder="20000" name="rome_rent_per"
                                                        class="form-control" value="{{$per_person_cost->rome_rent_per}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div>
                                                    <label for=""> Personal Amount*</label>
                                                    <input type="number" placeholder="2000000" name="amount"
                                                        class="form-control" value="{{$per_person_cost->amount}}">
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
