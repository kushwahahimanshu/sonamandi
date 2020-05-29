@php
    $fcat = DB::table('news_blog_category')->where('parent', null)->orderBy('name', 'asc')->get();
@endphp
<div class="filter-btn-container d-flex justify-content-center align-items-center" onclick="toggleFilter()">
    <i id="icon" class="fas fa-filter text-white"></i>
</div>

<div id="filter-container" class="filter-container" style="display: none;">
    <div class="filter-title">Search Filters</div>
    <form method="get" action="{{ url($blogpage) }}">
        <ul class="filter-list">
            @foreach($fcat as $r1)
                <li class="filter-category">{{ $r1->name }}</li>
                @php
                    $fprop = DB::table('news_blog_category')->where('parent', $r1->name)->orderBy('name', 'asc')->get();
                @endphp
                @foreach($fprop as $r2)
                    <li class="filter-name"> 
                        <input id="{{ $r2->name }}" type="checkbox" name="filter[]" value="{{ $r2->name }}" @if(strpos($applied_filter, '['.$r2->name.']') !== false) checked @endif> 
                        <label for="{{ $r2->name }}">{{ $r2->name }}</label>
                    </li>
                @endforeach
            @endforeach
        </ul>
        <div class="filter-submit">
            <button class="btn btn-small btn-deep-pink width-100" type="submit">Apply</button>
        </div>
    </form>
</div>

<script>
    function toggleFilter() {
        var icon = document.getElementById('icon');
        icon.classList.remove('fa-filter');
        icon.classList.remove('fa-times');
        var x = document.getElementById('filter-container');
        if(x.style.display == 'none') {
            x.style.display = 'block';
            icon.classList.add('fa-times');
        } else {
            x.style.display = 'none';
            icon.classList.add('fa-filter');
        }
    }
</script>