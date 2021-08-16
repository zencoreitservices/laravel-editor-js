<figure class="block-image{{ ($data['withBorder'] ? ' block-image--with-border' : '') }}{{ ($data['withBackground'] ? ' block-image--with-background' : '') }}{{ ($data['stretched'] ? ' block-image--stretched' : '') }}">
<img src="{{ $data['fileUrl'] }}" class="block-image__image" alt="{{ strip_tags($data['caption']) }}">
@if($data['caption'])
<figcaption class="block-image__caption">{!! $data['caption'] !!}</figcaption>
@endif
</figure>