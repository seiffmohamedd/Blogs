@props(['posts'])

@if($posts->count() == 0)
<p class="text-center">There is no posts</p>

@else   
<x-post-featured-card :post="$posts[0] "/>
<div class="lg:grid lg:grid-cols-6">
@foreach ($posts->skip(1) as $post)
<x-post-card 
:post="$post"
class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }} bg-red-500"
/>
@endforeach
@endif 
</div>