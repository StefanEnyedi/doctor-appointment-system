@extends('layouts.app')

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
                <div class="card-header" style="background-color: #CFE2FF; font-weight: 700; color: #0D6EFD;">Programarile mele ({{$appointments->count()}})</div>

                <div class="card-body table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Doctor</th>
                          <th scope="col">Ora</th>
                          <th scope="col">Data</th>
                          <th scope="col">Creat la</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($appointments as $key=>$appointment)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td>{{$appointment->doctor->name}}</td>
                          <td>{{$appointment->time}}</td>
                          <td>{{$appointment->date}}</td>
                          <td>{{$appointment->created_at}}</td>
                          <td>
                              @if($appointment->status==0)
                              <button class="btn btn-primary"  style="line-height: 1; white-space: nowrap;">Te asteptam la consultație!</button>
                              <form action="{{route('booking.destroy', $appointment->id) }}" class="forms-sample" style="display: inline; margin-left: 5px;"  method="POST">@csrf
                             @method('DELETE')
                              <button type="submit" class="btn btn-danger mr-2" style="line-height: 1; white-space: nowrap;">Anuleaza</button>
                              </form>
                              @else 
                              <button class="btn btn-success" style="line-height: 1; white-space: nowrap;">Vizitat</button>
                              @endif
                          </td>
                        </tr>
                        @empty
                        <td>Nu ai alte programări!</td>
                        @endforelse
                       
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 