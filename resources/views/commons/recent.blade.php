<div class="col-lg-12">
    <div class="sidebar-item recent-posts">
        <div class="sidebar-heading">
            <h2>Recent Posts</h2>
        </div>
        <div class="content">
            <ul>
                @foreach( $insights as $insight)
                <li><a href="{{ route('insights.show', $insight->id) }}">
                        <h5>{{ $insight->title }}</h5>
                        <span>{{ $insight->updated_at->diffForHumans() }}</span>
                    </a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
