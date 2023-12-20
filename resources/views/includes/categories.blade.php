<h4>{{ __('shop.categories') }}</h4>
<hr>
<div class="list-group categories">
    @include('includes.subcategories', ['categories' => $categories])
</div>