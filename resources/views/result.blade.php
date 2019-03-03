@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Result</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Auth::user()->name }} , here is your Gmail Contacts List :
                    <br> </br>
                    </br>
                        @foreach($emails as $email)
                        <ul class="list-group">
                          <li class="list-group-item ">{{$email}} </li>

                        </ul>
                         @endforeach
                    </div>
                    <a href="{{ url('/home') }}" class="btn btn-dark">Back to home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
