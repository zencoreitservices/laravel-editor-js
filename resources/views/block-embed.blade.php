<div class="block block-embed">
<div class="block-embed__holder">
<iframe width="{{ $data['width'] }}" height="{{ $data['height'] }}" src="{{ $data['embed'] }}" frameborder="0"></iframe>
</div>
@if($data['caption'])
<span class="block-embed__caption">{{ $data['caption'] }}</span>
@endif
</div>