@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        
       
            <div class="card table-responsive">

               
                <div class="card-header" style="font-weight: 700; background-color: #CFE2FF; color: #0D6EFD;">
                    Prescriptie medicala
                </div>

                
                <div class="card-body extra">
                    <p><span class="color">Data:</span> {{$prescription->date}}</p>
                    <p><span class="color">Pacient:</span> {{$prescription->user->name}}</p>
                    <p><span class="color">Doctor:</span> {{$prescription->doctor->name}}</p>
                    <p><span class="color">Diagnostic:</span> {{$prescription->name_of_disease}}</p>
                    <p><span class="color">Simptome:</span> {{$prescription->symptoms}}</p>
                    <p><span class="color">Tratament:</span> {{$prescription->medicine}}</p>
                    <p><span class="color">Utilizarea tratamentului: </span> {{$prescription->procedure_to_use_medicine}}</p>
                    <p><span class="color">Observatii:</span> {{$prescription->feedback}}</p>
                    <p><span class="color">Semnatura:</span> {{$prescription->signature}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .color{
        color: #0D6EFD;
        font-weight: 700;
    }
    .extra > p{
        font-size: 18px;
    }
</style>
@endsection
 