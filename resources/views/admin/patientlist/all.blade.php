@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> 

                     <span style="font-weight: 700;">Programari ({{$bookings->count()}})</span>
                 </div>
             

                

                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Fotografie</th>
                          <th scope="col">Data</th>
                          <th scope="col">Nume</th>
                          <th scope="col">Email</th>
                          <th scope="col">Telefon</th>
                          <th scope="col">Genul</th>
                          <th scope="col">Ora</th>
                          <th scope="col">Doctor</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($bookings as $key=>$booking)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td><img src="/profile/{{$booking->user->image}}" width="80" style="border-radius: 50%;">
                          </td>
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
                              @if($booking->status==0)
                              <a href="{{route('update.status',[$booking->id])}}"><button class="btn btn-primary">In asteptare</button></a>
                              @else 
                               <a href="{{route('update.status',[$booking->id])}}"><button class="btn btn-success">Vizitat</button></a>
                              @endif
                          </td>
                        </tr>
                        @empty
                        <td>Nu sunt programari pentru aceasta data!</td>
                        @endforelse
                       
                      </tbody>
                    </table>

                </div>
                {{$bookings->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
