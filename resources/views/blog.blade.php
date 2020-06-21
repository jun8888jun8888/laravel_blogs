<!-- 博客主页面 -->
@extends('layouts.app')

@section('title', '博客')

@section('sidebar')
    @parent

    <p>sidebar</p>
@endsection

@section('content')
    <p>内容</p>
@endsection
