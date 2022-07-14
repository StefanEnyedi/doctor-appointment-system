@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
            <div class="card table-responsive">
                <div class="card-header" style="color: #0D6EFD; font-weight: 700; background-color: #CFE2FF;">Programari ({{$bookings->count()}})</div>
               
                <div class="card-header">

                </div>


                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Fotografie</th>
                          <th scope="col">Data</th>
                          <th scope="col">Nume</th>
                          <th scope="col">E-mail</th>
                          <th scope="col">Telefon</th>
                          <th scope="col">Genul</th>
                          <th scope="col">Ora</th>
                          <th scope="col">Doctor</th>
                          <th scope="col">Status</th>
                          <th scope="col">Prescriptie</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($bookings as $key=>$booking)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td><img src="/profile/{{$booking->user->image}}" width="80" style="border-radius: 50%;"></td>
                          <td>{{$booking->date}}</td>
                          <td>{{$booking->user->name}}</td>
                          <td>{{$booking->user->email}}</td>
                          <td>{{$booking->user->phone_number}}</td>
                          <td>
                            @if($booking->user->gender=="male")
                              Masculin
                            @elseif($booking->user->gender=="female")
                              Feminin
                            @endif
                          </td>
                          <td>{{$booking->time}}</td>
                          <td>{{$booking->doctor->name}}</td>
                          <td>
                            @if($booking->status==1)
                             Vizitat
                             @endif
                          </td>
                          <td>
                          <!-- Button trigger modal -->
                          @if(!App\Models\Prescription::where('date', date('Y-m-d'))->where('doctor_id', auth()->user()->id)->where('user_id', $booking->user->id)->exists())
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$booking->user_id}}">Scrie o prescripție</button>
                          @include('prescription.form')
                          @else
                          <a href="{{route('prescription.show', [$booking->user_id, $booking->date])}}" class="btn btn-secondary">Vezi prescripția</a>
                          @endif
                          </td>
                        </tr>
                        @empty
                        <td class="text-muted font-weight-bold">Nu există programări pentru această dată!</td>
                        @endforelse
                       
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 