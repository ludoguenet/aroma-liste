<?php
$categories = App\Category::all();
?>
<ul class="list-group">
    @foreach ($categories as $category)
        <li class="list-group-item"><a href="{{ route('recipe.category', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
    @endforeach
</ul>
