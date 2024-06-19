<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Insight') }}
        </h2>
    </x-slot>

    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @include('posts.submit-post')
                    <div class="all-blog-posts">
                        <div class="row">

                            @forelse ( $insights as $insight )
                            <div class="mt-3">
                                @include('posts.blogpost')
                            </div>
                            @empty
                                <p class="text-center mt-4">No Results Found</p>
                            @endforelse
                                <div class="mt-3">
                                    {{ $insights->withQueryString()->links() }}
                                </div>
                        </div>
                    </div>
                </div>
                @include('layouts.side-bar')
            </div>
        </div>
    </section>

    <footer>
        <div class="container">

        </div>
    </footer>

</x-app-layout>
