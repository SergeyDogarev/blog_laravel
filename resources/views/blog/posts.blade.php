@extends('layouts.app')
@section('content')
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Blog</h1>
                            <p>Blog with right sidebar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->
    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                        @if($count == 0)
                            <h1>На данный момент записей нет</h1>
                        @endif
                         @foreach($posts as $post)
                            <div class="col-sm-12 col-md-12">
                                <div class="single-blog single-column">
                                    <div class="post-thumb">
                                        <a href="posts/{{ $post->id }}"><img src="storage/posts/{{$post->images }}" class="img-responsive" alt=""></a>
                                        <div class="post-overlay">
                                            <span class="uppercase"><a href="#">{{ \Carbon\Carbon::parse($post->created_at)->format('d')  }} <br><small>{{ \Carbon\Carbon::parse($post->created_at)->format('M') }}</small></a></span>
                                        </div>
                                    </div>
                                    <div class="post-content overflow">
                                        <h2 class="post-title bold"><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                                        <h3 class="post-author"><a href="#">Posted by {{ $post->user_posted }}</a></h3>
                                        <p>{{ Str::substr($post->content, 0 , 300) }}[...]</p>
                                        <a href="posts/{{ $post->id }}" class="read-more">View More</a>
                                        <div class="post-bottom overflow">
                                            <ul class="nav navbar-nav post-nav">
                                                <li><a href="#"><i class="fa fa-tag"></i>{{ $post->tag }}</a></li>
                                                <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                                <li><a href="#"><i class="fa fa-clock-o"></i>{{ $post->created_at }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         @endforeach
                    </div>
                    <div class="blog-pagination">
                        <ul class="pagination">
{{--                          <li><a href="#">left</a></li>--}}
{{--                          <li><a href="#">1</a></li>--}}
{{--                          <li><a href="#">2</a></li>--}}
{{--                          <li class="active"><a href="#">3</a></li>--}}
{{--                          <li><a href="#">4</a></li>--}}
{{--                          <li><a href="#">5</a></li>--}}
{{--                          <li><a href="#">6</a></li>--}}
{{--                          <li><a href="#">7</a></li>--}}
{{--                          <li><a href="#">8</a></li>--}}
{{--                          <li><a href="#">9</a></li>--}}
{{--                          <li><a href="#">right</a></li>--}}
                            {{ $posts->links() }}
                        </ul>
                    </div>
                 </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
    <!--/#blog-->
    @endsection
