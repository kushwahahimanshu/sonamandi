@php
    $fcat = DB::table('jewellery_category')->where('parent', null)->orderBy('name', 'asc')->get();
@endphp
<div class="filter-btn-container d-flex justify-content-center align-items-center" onclick="toggleFilter()">
    <i id="icon" class="fas fa-filter text-white"></i>
</div>

<div id="filter-container" class="filter-container" style="display: none;">
    <div class="filter-title">Search Filters</div>
    <form method="get" action="{{ url($page) }}">
        <ul class="filter-list">
            <li class="filter-category">Deals In</li>
            <li class="filter-name"> 
                <input id="Silver" type="checkbox" name="filter[]" value="Silver" @if(strpos($applied_filter, '[Silver]') !== false) checked @endif> 
                <label for="Silver">Silver</label>
            </li>
            <li class="filter-name"> 
                <input id="Gold" type="checkbox" name="filter[]" value="Gold" @if(strpos($applied_filter, '[Gold]') !== false) checked @endif> 
                <label for="Gold">Gold</label>
            </li>
            <li class="filter-name"> 
                <input id="Diamond" type="checkbox" name="filter[]" value="Diamond" @if(strpos($applied_filter, '[Diamond]') !== false) checked @endif> 
                <label for="Diamond">Diamond</label>
            </li>
            <li class="filter-name"> 
                <input id="Platinum" type="checkbox" name="filter[]" value="Platinum" @if(strpos($applied_filter, '[Platinum]') !== false) checked @endif> 
                <label for="Platinum">Platinum</label>
            </li>
            <li class="filter-name"> 
                <input id="FashionJewellery" type="checkbox" name="filter[]" value="Fashion Jewellery" @if(strpos($applied_filter, '[Fashion Jewellery]') !== false) checked @endif> 
                <label for="FashionJewellery">Fashion Jewellery</label>
            </li>
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