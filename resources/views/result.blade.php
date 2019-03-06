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
                  </br>

                    </div>
                    <div id="example"></div>
                </br>

                <a href="{{ url('/contact/import/google') }}" class="btn btn-primary">Click Here to Refresh Contact List</a>


                    <a href="{{ url('/home') }}" class="btn btn-dark">Back to home</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
