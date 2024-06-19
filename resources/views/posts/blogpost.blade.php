<div class="blog-post">

    <div class="down-content">
        <h4 class="font-bold text-2xl">
            <a href="{{ route('insights.show', $insight->id) }}"> {{ $insight->title }}</a>
        </h4>
        <ul class="post-info">
            <li><a href="{{ route('insights.show', $insight->id) }}">{{ $insight->user->name }}</a></li>
            <li><a href="{{ route('insights.show', $insight->id) }}">{{ $insight->updated_at->diffForHumans() }}</a></li>
        </ul>
        <p class="mt-2"> {{ $insight->content }}</p>
        <div class="comments">
            @include('posts.comments')
        </div>
    </div>
</div>


