@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <div class="d-flex">
                            <h5>Quản lý người dùng: </h5>
                            <a href="{{ route('users.index') }}" class="btn btn-primary ms-3">Users</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
