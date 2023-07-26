@props(['trigger'])

<div x-data="{ show: false}" @click.away="show =false">
   <div @click="show = ! show">
        {{$trigger}}
   </div>

    <div x-show="show" class="py-2 w-32" style="display: none">
        {{$slot}}
    </div>
</div>