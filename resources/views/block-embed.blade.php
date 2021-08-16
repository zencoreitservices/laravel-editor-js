<div class="block block-embed">
<div class="block-embed__holder">
<iframe @if(isset($data['width'])) width="{{ $data['width'] }}" @endif @if(isset($data['height'])) height="{{ $data['height'] }}" @endif src="{{ $data['embed'] }}" frameborder="0"></iframe>
</div>
@if(isset($data['caption']) && $data['caption'])
<span class="block-embed__caption">{{ $data['caption'] }}</span>
@endif
</div>