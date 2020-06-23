@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">文章列表</div>

                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead class="bg-info">
                        <tr>
                            <th>文章标题</th>
                            <th>发布时间</th>
                            <th>相关操作</th>
                        </tr>
                        </thead>
                        <tbody id="delete_blog">
                        {{-- 这里通过 @foreach 遍历数据 --}}
                        @foreach ($blogs as $blog)
                            <tr>
                                <td style='vertical-align: middle;'>{{ $blog->title }}</td>
                                <td style='vertical-align: middle;'>{{ $blog->created_at }}</td>
                                @guest
                                    <td><a href="{{route('blog.show', $blog->id)}}" class="btn btn-link">预览</a></td>
                                @elseif(Auth::id() === 1)
                                    <td>
                                        <a href="{{route('blog.show', $blog->id)}}" class="btn btn-link">预览</a>|
                                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-link">编辑文章</a>|
                                        <a class="btn btn-link" href="javascript:deleteConfirm({{ $blog->id }});">删除</a>
                                        <form method="POST" action="{{ route('blog.destroy', $blog) }}" id="delete-blog-{{ $blog->id }}">
                                            @csrf
                                            {{--  这里伪造DELETE请求  --}}
                                            @method("DELETE")
                                        </form>
                                    </td>
                                @else
                                    <td><a href="{{route('blog.show', $blog->id)}}" class="btn btn-link">预览</a></td>
                                @endguest
                            </tr>
                        @endforeach
                        </tbody>
{{--                        <tfoot>--}}
                        {{-- 这里通过 $blogs->links() 来显示分页按钮 --}}
{{--                        </tfoot>--}}
                    </table>
                    <div>
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
