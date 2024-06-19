<div>
    @auth
    <form action="{{ route('insights.comments.store', $insight->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <textarea name="comment" class="fs-6 form-control" rows="1"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-sm"> Post Comment </button>
        </div>
        @endauth

        @foreach($insight->comments as $comment)
            <div class="col-lg-12">
                <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                        <h2></h2>
                    </div>
                    <div class="content">
                        <ul>
                            <li>
                                <div class="right-content">
                                    <h4>{{ $comment->user->name }}<span>{{ $comment->updated_at->diffForHumans() }}</span></h4>
                                    <p>{{ $comment->comment }}.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach

    </form>
</div>



