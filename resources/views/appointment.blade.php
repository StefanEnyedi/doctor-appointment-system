@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body align-items-center">
                    <h4 class="text-center">Informații medic</h4>
                    <br>
                    <center><img  src="{{asset('img')}}/{{$user->image}}" width="100px" style="border-radius: 50%;"></center>
                    <br>
                    <br>
                   <p class="lead"> <span style="color: rgb(13, 110, 253); font-weight: 700;">Nume:</span> {{ucfirst($user->name)}}</p>
                   <p class="lead"> <span style="color: rgb(13, 110, 253); font-weight: 700;">Studii:</span> {{$user->education}}</p>
                   <p class="lead"> <span style="color: rgb(13, 110, 253); font-weight: 700;">Specializare:</span> {{$user->department}}</p>
                </div>
                
            </div>
            
        </div>
        <div class="col-md-9">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach

            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif

            @if(Session::has('errmessage'))
                <div class="alert alert-danger">
                    {{Session::get('errmessage')}}
                </div>
            @endif
            
           
            <form action="{{route('booking.appointment')}}" method="post">@csrf
            <div class="card">
                <div class="card-header lead"><span style="color: rgb(13, 110, 253); font-weight: 700; margin-right: 5px;">Data:</span>{{$date}}</div>
                <div class="card-body">
                    <div class="row">
                        @foreach($times as $time)
                        <div class="col-md-3">
                            <label class="btn btn-outline-primary">
                                <input type="radio" name="time" value="{{$time->time}}" >
                                <span>{{$time->time}}
                                    </span>
                            </label>
                        </div>
                        <input type="hidden" name="doctorId" value="{{$doctor_id}}">
                        <input type="hidden" name="appointmentId" value="{{$time->appointment_id}}">
                        <input type="hidden" name="date" value="{{$date}}">
                        @endforeach
                    </div>
                </div>
               </div>
               <div class="card-footer">
                @if(Auth::check())
                <button type="submit" class="btn btn-success" style="width: 100%; text-align: center; line-height: 0;">Programeaza-te</button>
                @else 
                    <p style="color: rgb(13, 110, 253); font-weight: 700;">Conecteaza-te pentru a face o programare!</p>
                    <a href="/register" class="btn btn-outline-success active" style="line-height: 1.2;">Inregistrare</a>
                    <a href="/login"  class="btn btn-outline-secondary active" style="line-height: 1.2; margin-left: 5px;">Conectare</a>
                @endif

                   
               </div>


           </form>

           </div>
    </div>
</div>

@endsection
 