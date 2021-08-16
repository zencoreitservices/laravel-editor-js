@if($data['style'] == 'ordered')
<ol class="block-list block-list--ordered">
@elseif($data['style'] == 'unordered')
<ul class="block-list block-list--unordered">
@endif

@foreach($data['items'] as $item)
<li class="block-list__item">{!! $item !!}</li>
@endforeach

@if($data['style'] == 'ordered')
</ol>
@elseif($data['style'] == 'unordered')
</ul>
@endif