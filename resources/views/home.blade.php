@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @if(auth()->user()->role->name == 'admin')
                        <div class="container text-center">
                            <a href="{{route('admin.dashboard')}}" class="btn btn-lg btn-primary">Go to Dashboard</a>
                        </div>
                    @endif    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
