@extends('admin.layouts.master')

@section('content')
<div id='app'></div>
<div class="page-header">
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <i class="ik ik-inbox bg-blue"></i>
            <div class="d-inline">
                <h5>Departament</h5>
                <span>Lista cu toate departamentele</span>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Departament</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
            </ol> -->
        </nav>
    </div>
</div>
</div>


<div class="row">
<div class="col-md-12">
       @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
    <div class="card">
        <!-- <div class="card-header"><h3>Data Table</h3>

        </div> -->
        <div class="card-body">
            <table id="data_table" class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nume</th>
                        
                        <th class="nosort">&nbsp;</th>
                        <th class="nosort">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($departments)>0)
                    @foreach($departments as $key=> $department)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$department->department}}</td>
                        
                        <td>
                            <div class="table-actions">
                                
                                <a href="{{route('department.edit',[$department->id])}}"><i class="ik ik-edit-2"></i></a>
                                
                                
                                <form action="{{route('department.destroy',[$department->id])}}" method="post" style="display: inline;">@csrf
                                    @method('DELETE')
                                    <button type="submit"><i class="ik ik-trash-2"></i></button>
                                    
                                </form>

                            </div>
                        </td>
                        <td></td>

                    </tr>
           
                  



                    @endforeach
                   
                    @else 
                    <td>No departments to display</td>
                    @endif
                
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection