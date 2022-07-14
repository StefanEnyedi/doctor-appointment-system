@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pagina principala') }}</div>

                <div class="card-body">
                 Te-ai logat cu succes, {{Auth()->user()->name}}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
