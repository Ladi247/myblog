@extends('layouts.master')

@section('content')

    &lt;div class='post'&gt;
    &lt;h2 class='post_title'->{{$post->title}}&lt;/h2&gt;
    &lt;p class='post_body'->{{$post->body}}&lt;/p&gt;
    &lt;/div&gt;

    &lt;div class='comments'&gt;
    &lt;h3 class='comment_header'&gt;
    {{$count = $post->comments->count()}} Comments
    &lt;/h3&gt;

    @if($count -> $post->relationLoaded('parentComments'))

        @include('post.comments', ['comments'=> $post->parentComments])

    @endif

    &lt;/div&gt;
@stop