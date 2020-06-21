@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">用户信息</div>
                    <div class="card-body">
                        @foreach($users as $user)
                            <p> user is {{ $user->player_id }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

