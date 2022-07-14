@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
    <div class="row ">
        
        <div class="col-md-3">
            <div class="card">
                <div class="card-header" style="background-color: #CFE2FF; font-weight: 700; color: #0D6EFD;">Profilul meu</div>

                <div class="card-body">
                    <p><span>Nume:</span> {{auth()->user()->name}}</p>
                    <p><span>Email:</span> {{auth()->user()->email}}</p>
                    <p><span>Adresa:</span> {{auth()->user()->address}}</p>
                    <p><span>Telefon:</span> {{auth()->user()->phone_number}}</p>
                    <p><span>Genul:</span>
                        @if(auth()->user()->gender == "male")
                            Masculin
                        @elseif(auth()->user()->gender == "female")
                            Feminin
                        @endif
                    </p>
                    <p><span>Despre mine:</span> {{auth()->user()->description}}</p>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color: #CFE2FF; font-weight: 700; color: #0D6EFD;">Actualizeaza profilul</div>

                <div class="card-body">
                    <form action="{{route('profile.store')}}" method="post">@csrf
                        <div class="form-group">
                            <label>Nume</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{auth()->user()->name}}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="form-group">
                            <label>Adresa</label>
                            <input type="text" name="address" class="form-control" value="{{auth()->user()->address}}">
                            
                        </div>
                        <div class="form-group">
                            <label>Telefon</label>
                            <input type="text" name="phone_number" class="form-control" value="{{auth()->user()->phone_number}}">
                            
                        </div>
                        <div class="form-group">
                            <label>Genul</label>
                            <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                <option value="">Selecteaza genul</option>
                                <option value="male" @if(auth()->user()->gender==='male')selected @endif >Masculin</option>
                                <option value="female" @if(auth()->user()->gender==='female')selected @endif>Feminin</option>
                            </select>
                            @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       
                            <div class="form-group">
                            <label>Despre mine</label>
                            <textarea name="description" class="form-control">{{auth()->user()->description}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            
                            <button class="btn btn-primary" style="line-height: 0;" type="submit">Actualizeaza</button>
                            
                        </div>
                            
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header" style="background-color: #CFE2FF; font-weight: 700; color: #0D6EFD;">Actualizeaza imaginea</div>
                <form action="{{route('profile.pic')}}" method="post" enctype="multipart/form-data">@csrf
                <div class="card-body" style="display: flex; align-items: center; flex-direction: column;">
                    @if(!auth()->user()->image)
                    <img src="/img/avatar.png" width="120">
                    @else 
                     <img src="/profile/{{auth()->user()->image}}" width="120">
                     <br>
                    @endif
                    <br>
                    <input type="file" name="file" class="form-control" required="">
                    <br>
                     @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <button type="submit" class="btn btn-primary" style="line-height: 0;">Actualizeaza</button>
                    
                </div>
            </form>
            </div>
        </div>

    </div>
</div>
@endsection
<style type="text/css">
    .card-body > p > span{
        color: rgb(13, 110, 253);
        font-weight: 700;
    }
</style>
