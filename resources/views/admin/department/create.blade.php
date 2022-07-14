@extends('admin.layouts.master')

@section('content')
<div id='app'></div>
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Departament</h5>
                    <span>Adaugare departament</span>
                </div>
            </div>
        </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Department</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol> -->
        </nav>
    </div>
    </div>
</div>

<div class="row justify-content-center">
	<div class="col-lg-10">
        @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
       
	<div class="card">
	<div class="card-header" style="background-color: #CFE2FF;"><h3 style="color: #0D6EFD; font-weight: 700;">Adaugă departament</h3></div>
	<div class="card-body">
		<form class="forms-sample" action="{{route('department.store')}}" method="post" >@csrf
			<div class="row">
				<div class="col-lg-6">
                    <div class="form-group">

					<label for="">Denumire departament</label>
					<input type="text" name="department" class="form-control @error('department') is-invalid @enderror" placeholder="department name" value="                   {{old('department')}}">
                    @error('department')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
				</div>
           
            <div class="form-group">

				
              <button type="submit" class="btn btn-primary mr-2">Trimite</button>
            </div>
        </div>
           


				</form>
			</div>
            </div>
		</div>
	</div>
</div>


@endsection