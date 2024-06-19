<div class="sidebar-item search">
    <form id="search_form" name="gs" method="GET" action="{{ route('dashboard') }}">
        <input value="{{ request('search', '') }}" type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
    </form>
</div>
