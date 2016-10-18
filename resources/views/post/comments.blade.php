@foreach($comments as $comment)

    &lt;ul&gt;

    &lt;li&gt;{{$comment->body}} - By - {{$comment->owner->name}}&lt;/li&gt;



    @if($comment->relationLoaded('allRepliesWithOwner'))

        @include('post.comments', ['comments' => $comment->allRepliesWithOwner])

    @endif

    &lt;/ul&gt;

@endforeach
