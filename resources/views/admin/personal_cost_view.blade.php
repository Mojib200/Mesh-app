@extends('layouts.dashboard.dashboard_master')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12 mt-5 mb-5">
                <div class="">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-14 mt-5">
                                <div class="card bg-success ">
                                    <div class="card-header text-center  ">
                                        <h3>Over All Information</h3>
                                    </div>
                                    <div class="card-body table-responsive-sm  card-control">
                                        <table class="table   text-center text-white fw-bolder">
                                            <tr class="tr-control">
                                                <th>Image</th>
                                                <th>Personal Meal</th>
                                                <th>Total Meal </th>
                                                <th>Total Amount </th>
                                                <th>Exta</th>
                                                <th>Room Rent</th>
                                                <th>Amount</th>
                                                <th>Meal Rate</th>
                                                <th>Cost</th>
                                                <th>Due</th>
                                                <th>Action</th>
                                            </tr>
                                         
                                            @foreach ($person_cost_info as $person_cost_info)
                                                <tr class="fw-bold ">
                                                    <td><img src="{{ 'uploads/image' }}/{{ $person_cost_info->relation_to_name->image }}"
                                                        width="100" height="100" alt="" class="rounded-circle"alt=""></td>
                                                    {{-- <td>{{ $person_cost_info->relation_to_name->name }}</td>
                                                    <td>{{ $person_cost_info->relation_to_name->phone }} </td> --}}
                                                    <td>{{ $person_cost_info->meal }} </td>
                                                    <td>{{ $total_meal}} </td>  
                                                    <td>{{ $total_amount }} </td>
                                                    <td>
                                                        @if ($person_cost_info->member_id == 1)
                                                            {{ $person_cost_info->relation_to_cost->total }}
                                                        @elseif($person_cost_info->member_id == 2)
                                                            {{ $person_cost_info->relation_to_cost->per_old_total }}
                                                        @else
                                                            {{ $person_cost_info->relation_to_cost->per_new_total }}
                                                        @endif
                                                    </td>
                                                    <td>{{ $person_cost_info->rome_rent_per }} </td>
                                                    <td>{{ $person_cost_info->amount }} </td>
                                                    <td>{{ $total_meal_rate }} </td>
                                                    <td>   @if ($person_cost_info->member_id == 1)
                                                        {{ $total_cost=($person_cost_info->meal*$total_meal_rate )+$person_cost_info->relation_to_cost->total+$person_cost_info->rome_rent_per }}
                                                    @elseif($person_cost_info->member_id == 2)
                                                        {{ $total_cost_o=(($person_cost_info->meal*$total_meal_rate)+$person_cost_info->relation_to_cost->per_old_total)}}
                                                    @else
                                                        {{ $total_cost_n=(($person_cost_info->meal*$total_meal_rate )+$person_cost_info->relation_to_cost->per_new_total +$person_cost_info->rome_rent_per)}}
                                                    @endif
                                                      </td>
                                                      <td> @if($person_cost_info->member_id == 1)
                                                        {{$total_cost-$person_cost_info->amount}}
                                                      @elseif($person_cost_info->member_id == 2)
                                                      {{$total_cost_o-$person_cost_info->amount}}
                                                      @else  
                                                      {{$total_cost_n-$person_cost_info->amount}}
                                                          
                                                      @endif
                                                      </td>
                                                  
                                                    <td>
                                                        <a href="{{ route('per_person_view_cost_info', $person_cost_info->id) }}"
                                                            class=" btn-sm fa fa-edit " title="View"></a>
                                                       

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
