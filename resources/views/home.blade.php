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
                    Hello  {{ Auth::user()->name }}
                    you are logged in!
                    </br>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">

                            <a href="{{ url('/contact/import/google') }}" class="btn btn-primary">Import Gmail Contacts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
