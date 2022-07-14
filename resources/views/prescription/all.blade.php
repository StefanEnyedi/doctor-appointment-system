@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
      
            <div class="card table-responsive">
                <div class="card-header" style="color: #0D6EFD; font-weight: 700; background-color: #CFE2FF;">Programari ({{$patients->count()}})</div>
               
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
                          <!-- <th scope="col">Ora</th> -->
                          <th scope="col">Doctor</th>
                          <!-- <th scope="col">Status</th> -->
                          <th scope="col">Prescriptie</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($patients as $key=>$patient)
                        <tr>
                          <td scope="row">{{$key+1}}</td>
                          <td><img src="/profile/{{$patient->user->image}}" width="80" style="border-radius: 50%;"></td>
                          <td>{{$patient->date}}</td>
                          <td>{{$patient->user->name}}</td>
                          <td>{{$patient->user->email}}</td>
                          <td>{{$patient->user->phone_number}}</td>
                          <td>
                            @if($patient->user->gender=="male")
                              Masculin
                            @elseif($patient->user->gender=="female")
                              Feminin
                            @endif
                          </td>
                          <!-- <td>{{$patient->time}}</td> -->
                          <td>{{$patient->doctor->name}}</td>
                          <!-- <td>
                            @if($patient->status==1)
                             Vizitat
                             @endif
                          </td> -->
                          <td>
                          <!-- Button trigger modal -->
                        
                          <a href="{{route('prescription.show', [$patient->user_id, $patient->date])}}" class="btn btn-secondary">Vezi prescripția</a>
                         
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
 