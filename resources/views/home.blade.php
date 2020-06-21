@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">欢迎! 这里是 "我知时光" 的个人博客</div>

                <div class="card-body">
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
                    我知时间匆匆
                    <a href="{{ route('blog.index') }}" class="btn btn-link btn-lg btn-block">
                        我的博客
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
