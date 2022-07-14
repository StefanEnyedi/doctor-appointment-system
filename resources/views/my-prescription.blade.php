@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #CFE2FF; font-weight: 700; color: #0D6EFD;">Prescriptiile mele ({{$prescriptions->count()}})</div>

                <div class="card-body">
                 
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          
                          <th scope="col">Data</th>
                          <th scope="col">Doctor</th>
                          <th scope="col">Diagnostic</th>
                          <th scope="col">Simptome</th>
                          <th scope="col">Tratament</th>
                          <th scope="col">Utilizarea tratamentului</th>
                          <th scope="col">Observatii</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($prescriptions as $prescription)
                        <tr>
                         
                          <td>{{$prescription->date}}</td>
                          <td>{{$prescription->doctor->name}}</td>
                          <td>{{$prescription->name_of_disease}}</td>
                          <td>{{$prescription->symptoms}}</td>
                          <td>{{$prescription->medicine}}</td>
                          <td>{{$prescription->procedure_to_use_medicine}}</td>
                          <td>{{$prescription->feedback}}</td>
                        </tr>
                        @empty
                        <td>Nu ai prescriptii!</td>
                        @endforelse
                       
                      </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
