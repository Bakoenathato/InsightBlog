<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Insights') }}
        </h2>
    </x-slot>

    @auth
        @if ( auth()->user()->id === $insight->user_id )
            <a href="{{ route('insights.edit', $insight->id) }}" class="btn btn-primary flex">Edit Insight</a>
        @endif
    @endauth

    <section class="blog-posts">
        <div class="container bg-white">
            <div class="row">
                <div class="blog-post">
                    <div class="down-content">
                        <h4 class="font-bold text-2xl">
                            <a href="{{ route('insights.show', $insight->id) }}"> {{ $insight->title }}</a>
                        </h4>
                        <ul class="post-info">
                            <li><a href="#">{{ $insight->user->name }}</a></li>
                            <li><a href="#">{{ $insight->updated_at->diffForHumans() }}</a></li>
                            <li><a href="#">Comments</a></li>
                        </ul>
                        <p class="mt-2"> {{ $insight->content }}</p>
                    </div>
                </div>
                @include('posts.comments')
            </div>
        </div>
    </section>

    <footer>
        <div class="container">

        </div>
    </footer>
</x-app-layout>
