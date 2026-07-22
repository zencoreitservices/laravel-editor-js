@if($data['style'] == 'ordered')
<ol class="block-list block-list--ordered">
@elseif($data['style'] == 'unordered')
<ul class="block-list block-list--unordered">
@endif

@foreach($data['items'] as $item)
@include('laravel-editor-js::block-list-item', ['item' => $item, 'style' => $data['style']])
@endforeach

@if($data['style'] == 'ordered')
</ol>
@elseif($data['style'] == 'unordered')
</ul>
@endif