<div class="single-widget widget_search">
    <div class="widget-title">
        <h2><span>Search</span></h2>
    </div>
    <form role="search" method="get" class="search-form" action="{{ route('news.search') }}">

        <div class="from-grupe">
            <input type="text" placeholder="Search your keyword..." value="{{ Request::input('term') }}" name="term" class="search-field">
            <button type="submit" ><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
