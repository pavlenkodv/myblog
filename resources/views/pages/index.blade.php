@extends('layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach ($posts as $post)
                        <article class="post">
                            <div class="post-thumb">
                                <a href="{{route('post.show', $post->slug)}}"><img src="{{$post->getImage()}}" alt=""></a>
                                <a href="{{route('post.show', $post->slug)}}" class="post-thumb-overlay text-center">
                                    <div class="text-uppercase text-center">View Post</div>
                                </a>
                            </div>
                            <div class="post-content">
                                <header class="entry-header text-center text-uppercase">
									@if($post->hasCategory())
										<h6><a href="{{route('category.show', $post->getCategoryTitle())}}"> {{$post->category->title}}</a></h6>
									@endif
                                    <h1 class="entry-title"><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h1>
                                </header>
                            <div class="entry-content">
                                <div class="text-center">{!!$post->description!!}</div>
                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="{{route('post.show', $post->slug)}}" class="more-link">Continue Reading</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">By <a href="#">{{$post->author->name}}</a> On {{$post->getDate()}}</span>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="https://www.facebook.com/pavlenko89"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="s-github" href="https://github.com/dimap89"><i class="fa fa-github"></i></a></li>
                                    <li><a class="s-linkedin" href="https://linkedin.com/in/dmitriy-pavlenko/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="s-skype" href="skype:dimasik405?call"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        </article>
                    @endforeach
                    {{$posts->links()}}
                </div>
                @include('pages._sidebar')
            </div>
        </div>
    </div>
@endsection