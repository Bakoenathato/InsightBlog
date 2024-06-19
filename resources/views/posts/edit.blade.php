<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Insights') }}
        </h2>
    </x-slot>

    <section class="blog-posts">
        <div class="container">
            <h1>Edit Blog Post</h1>

            <form action="{{ route('insights.update', $insight->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $insight->title }}">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" class="form-control" rows="5">{{ $insight->content }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">

        </div>
    </footer>
</x-app-layout>
