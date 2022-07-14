@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner/doctorbanner3.jpg" class="img-fluid" style="border:1px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2 style="color: #5A6268; font-weight: bold;">Programeaza-te din contul tau!</h2>
            <p style="font-size: 15px; font-style: oblique;">Aici puteti solicita o programare pentru serviciile noastre de oriunde va aflati, fara telefon si fara vizita in unitațile medicale. Cum? Foarte simplu! Vizualizand orarul de mai jos si selectand data la care doriti sa faceti programarea. Daca medicul este disponibil in data respectiva, puteti alega ora la care doriti sa mergeti si voila! Programarea s-a facut! <br> In urma consultarilor, prescriptiile medicale pot fi accesate din meniul dvs., sectiunea "Prescriptiile mele".</p>
            <div class="mt-5">
               <a href="{{url('/register')}}"> <button class="btn btn-success" style="line-height: 0;">Inregistreaza-te ca pacient</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary" style="line-height: 0;">Conectare</button></a>
            </div>
        </div>
    </div>
    <hr>

 <!--date picker component-->
 <find-doctor></find-doctor>
</div>

  <!--date picker component-->

@endsection 