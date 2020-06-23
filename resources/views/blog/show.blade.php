@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">文章详情</div>
                <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-info">编辑文章</a>
                <div class="card-body">
                    <h1 class="text-center">{{ $blog->title }}</h1>

                    <p>发布时间<small>{{ $blog->created_at }}</small></p>

                    <hr>

                    <p> {{ $blog->content }} </p>
                    <h3>评论</h3>
                    <ul>
                        @foreach($comments as $comment)
                            <li><small>{{$comment->userName()}} 评论: </small>"   {{$comment->content}}   "</li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-footer">
                    @guest
                        <div><label class="col-form-label">只有登录后才可以评论的!</label></div>
                    @else
                        <form method="POST" action="{{ route('comment.store') }}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">

                            <div class="form-group">
                                <label for="content"></label>
                                <textarea id="content" class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}" cols="30" rows="10" name="content">你对文章有什么看法呢？</textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">发表评论</button>
                        </form>
                        @include('components._error')
                        @if($errors->has('content'))
                            <span class="invalid-feedback"><strong>{{$errors->first('content')}}</strong></span>
                        @endif

                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection
