@extends('layouts.app')

@section('content')
<div class="container login-page">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You can now access
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            Intern Calendar
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
