@auth
<div class="col-lg-12">
    <div class="sidebar-item submit-comment">
        <div class="sidebar-heading">
            <h2>Share Insight</h2>
        </div>
        <div class="content">
            <form id="insight" action="{{ route('insights.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <fieldset>
                            <input name="title" type="text" id="title" placeholder="Title" autocomplete="off">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset>
                            <textarea name="content" rows="6" id="content" placeholder="Type your insight"></textarea>
                            @error('content')
                            <span class="d-block fs-6 text-danger mt-2">
                                {{ $message }}
                            </span>
                            @enderror
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <button type="submit" id="form-submit" class="main-button">Share</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endauth
