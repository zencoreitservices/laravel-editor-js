<figure class="block-image{{ ($data['withBorder'] ? ' block-image--with-border' : '') }}{{ ($data['withBackground'] ? ' block-image--with-background' : '') }}{{ ($data['stretched'] ? ' block-image--stretched' : '') }}">
<img src="{{ $data['file']->url }}" class="block-image__image" @if(isset($data['caption'])) alt="{{ strip_tags($data['caption']) }}" @endif>
@if(isset($data['caption']) && $data['caption'])
<figcaption class="block-image__caption">{!! $data['caption'] !!}</figcaption>
@endif
</figure>