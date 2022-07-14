@extends ('admin.layouts.master')


@section('content')
<div id='app'></div>
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Doctor</h5>
                    <span>Creare doctor & admin</span>
                </div>
            </div>
        </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Doctor</a></li>
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
            <div class="card-header" style="background-color: #CFE2FF;"><h3 style="color: #0D6EFD; font-weight: 700;">Adauga personal medical & administratori</h3></div>
            <div class="card-body">
                <form class="forms-sample" action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Nume complet</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">Adresa de e-mail</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{old('email')}}">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Parola</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">Genul</label>
                            <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                <option value="">Selecteaza genul</option>
                                <option value="male">Masculin</option>
                                <option value="female">Feminin</option>
                            </select>
                            @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Studii</label>
                            <input type="text" name="education"class="form-control @error('education') is-invalid @enderror"  value="{{old('education')}}">
                            @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">Adresa</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"  value="{{old('address')}}">
                            @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="">Specializare</label>
                            <select name="department" class="form-control">
                            <option value="">Please select</option>

                            @foreach(App\Models\Department::all() as $d)
                                <option value="{{$d->department}}">{{$d->department}}</option>
                            @endforeach
                        </select>


                         @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="">Telefon</label>
                            <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{old('phone_number')}}">
                            @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>

            <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control file-upload-info @error('image') is-invalid @enderror" placeholder="Upload Image" name="image">
                            @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                </div>
                    <div class="col-md-6">
                        <label>Rol</label>
                        <select name="role_id" class="form-control @error('role_id') is-invalid @enderror">
                            <option value="">Selecteaza rolul</option>
                            @foreach(App\Models\Role::where('name', '!=','patient')->get() as $role)
                                <option value="{{$role->id}}">
                                    {{$role->name}}</option>
                            @endforeach
                        </select>
                        @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                </div>
            
            <div class="form-group">
                <label for="exampleTextarea1">Despre</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="exampleTextarea1" row="4" name="description"> {{old('description')}}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                <button type="submit" class="btn btn-primary mr-2" style="background-color: green;">Trimite</button>
                <button class="btn btn-light">Anulare</button>

                    


                </form>
            </div>
        </div>
    </div>
</div>

@endsection