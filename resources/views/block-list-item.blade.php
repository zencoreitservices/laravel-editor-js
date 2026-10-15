@php($item = is_array($item) ? $item : ['content' => $item])
<li class="block-list__item">
{!! $item['content'] !!}
@if(!empty($item['items']))
@include('laravel-editor-js::block-list', ['data' => ['style' => $style, 'items' => $item['items']]])
@endif
</li>
