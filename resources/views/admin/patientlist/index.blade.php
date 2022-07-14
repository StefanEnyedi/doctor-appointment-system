@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
            <div class="card">
                <div class="card-header" style="color: #0D6EFD; font-weight: 700; background-color: #CFE2FF;">Programari ({{$bookings->count()}})</div>
                <form action="{{route('patient')}}" method="GET">

<div class="card-header">
    <div class="row">
    <div class="col-md-10">
        <input type="text" class="form-control datetimepicker-input" data-date-format="YYYY-MM-DD" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
    </div>
    <div class="col-md-2">
       <button type="submit" class="btn btn-primary">Cauta</button>
        
    </div>
</div>

</div>
</form>
                <div class="card-header">

                </div>


                <div class="card-body table-responsive">
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
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($bookings as $key=>$booking)
                        <tr>
                          <td scope="row">{{$key+1}}</td>
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
                              @if($booking->status==0)
                              <a href="{{route('update.status', [$booking->id])}}"><button class="btn btn-primary" style="white-space: nowrap;">Confirma</button></a>
                              @else 
                              <a href="{{route('update.status', [$booking->id])}}"><button class="btn btn-success" style="white-space: nowrap;">Vizitat</button></a>
                              @endif
                          </td>
                        </tr>
                        @empty
                        <td>Nu sunt programari pentru aceasta data!</td>
                        @endforelse
                       
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 