<blockquote class="block-quote{{ isset($data['alignment']) && $data['alignment'] ? ' block-quote--align-'.$data['alignment'] : '' }}" @if(isset($data['caption'])) cite="{{ $data['caption'] }}" @endif>
    {!! $data['text'] !!}
</blockquote>
