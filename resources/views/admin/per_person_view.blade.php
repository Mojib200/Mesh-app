@extends('layouts.dashboard.dashboard_master')
@section('content')
    <div class="container">
        
                        <div class="row ">
                            <div class="col-md-14 mt-5">
                                <div class="card bg-danger ">
                                    <div class="card-header text-center  ">
                                        <h3>Personal Information</h3>
                                    </div>
                                    <div class="card-body table-responsive-sm  card-control">
                                        <table class="table   text-center text-white fw-bolder">
                                           <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            {{-- <th>Email</th> --}}
                                            <th>Number</th>
                                            <th>Meal <br>
                                            Rate</th>
                                            <th>Amount</th>
                                            <th>Cost</th>
                                            <th>Due</th>
                                           
                                           </tr>
                                          <tr class="">
                                            <td><img src="{{ 'uploads/image' }}/{{ $per_person_info->relation_to_name->image }}"
                                                width="200" height="200" alt="" class="rounded-circle"></td>
                                                <td><h2>{{ $per_person_info->relation_to_name->name }}</h2></td>
                                                {{-- <td  ><h6>{{ $per_person_info->relation_to_name->email }}</h6></td> --}}
                                                <td><h6>{{ $per_person_info->relation_to_name->phone }}</h6></td>
                                              
                                                <td><h2>Meal-{{ $per_person_info->meal }} <br> Rate- {{$total_meal_rate}}</h2></td>
                                                <td><h2>{{ $per_person_info->amount }}</h2></td>
                                                <td>  <h2>
                                                    @if ($per_person_info->member_id == 1)
                                                    {{ $total_cost=($per_person_info->meal*$total_meal_rate )+$per_person_info->relation_to_cost->total+$per_person_info->rome_rent_per }}
                                                @elseif($per_person_info->member_id == 2)
                                                    {{ $total_cost_o=(($per_person_info->meal*$total_meal_rate)+$per_person_info->relation_to_cost->per_old_total)}}
                                                @else
                                                    {{ $total_cost_n=(($per_person_info->meal*$total_meal_rate )+$per_person_info->relation_to_cost->per_new_total +$per_person_info->rome_rent_per)}}
                                                @endif
                                                </h2>
                                                  </td>
                                                  <td>
                                                    <h2>
                                                         @if($per_person_info->member_id == 1)
                                                            {{$total_cost-$per_person_info->amount}}
                                                          @elseif($per_person_info->member_id == 2)
                                                          {{$total_cost_o-$per_person_info->amount}}
                                                          @else  
                                                          {{$total_cost_n-$per_person_info->amount}}
                                                              
                                                          @endif
                                                         
                                                    </h2>
                                                  </td>
                                          </tr>
                                         
                                                <tr class="fw-bold ">
                                                  
                                                    {{-- <td>{{ $per_person_info->relation_to_name->name }}</td>
                                                    <td>{{ $per_person_info->relation_to_name->phone }} </td> --}}
                                                    {{-- <td>{{ $per_person_info->meal }} </td>
                                                    <td>{{ $total_meal}} </td>  
                                                    <td>{{ $total_amount }} </td>
                                                    <td>
                                                        @if ($per_person_info->member_id == 1)
                                                            {{ $per_person_info->relation_to_cost->total }}
                                                        @elseif($per_person_info->member_id == 2)
                                                            {{ $per_person_info->relation_to_cost->per_old_total }}
                                                        @else
                                                            {{ $per_person_info->relation_to_cost->per_new_total }}
                                                        @endif
                                                    </td>
                                                    <td>{{ $per_person_info->rome_rent_per }} </td>
                                                    <td>{{ $per_person_info->amount }} </td>
                                                    <td>{{ $total_meal_rate }} </td>
                                                    <td>   @if ($per_person_info->member_id == 1)
                                                        {{ $total_cost=($per_person_info->meal*$total_meal_rate )+$per_person_info->relation_to_cost->total+$per_person_info->rome_rent_per }}
                                                    @elseif($per_person_info->member_id == 2)
                                                        {{ $total_cost_o=(($per_person_info->meal*$total_meal_rate)+$per_person_info->relation_to_cost->per_old_total)}}
                                                    @else
                                                        {{ $total_cost_n=(($per_person_info->meal*$total_meal_rate )+$per_person_info->relation_to_cost->per_new_total +$per_person_info->rome_rent_per)}}
                                                    @endif
                                                      </td>
                                                      <td> @if($per_person_info->member_id == 1)
                                                        {{$total_cost-$per_person_info->amount}}
                                                      @elseif($per_person_info->member_id == 2)
                                                      {{$total_cost_o-$per_person_info->amount}}
                                                      @else  
                                                      {{$total_cost_n-$per_person_info->amount}}
                                                          
                                                      @endif
                                                      </td>
                                                  
                                                    <td>
                                                     
                                                       

                                                    </td> --}}
                                                </tr>
                                          


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
