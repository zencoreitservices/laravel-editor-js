<?php

namespace LaravelEditorJs;

class BlocksManager
{
    protected $data;

    public function __construct($data)
    {
        $this->data = json_decode($data);
    }

    public function getData()
    {
        return $this->data;
    }

    public function getBlocks()
    {
        return $this->data->blocks ?? [];
    }

    public function getTimestamp()
    {
        return $this->data->time;
    }

    public function getVersion()
    {
        return $this->data->version;
    }

    public function renderHtml()
    {
        $html = '';
        foreach($this->getBlocks() as $block){
            $html .= $this->renderHtmlBlock($block);
        }

        return $html;
    }

    public function renderHtmlBlock($block)
    {
        return view('laravel-editor-js::block-'.$block->type, [
            'data' => (array)$block->data,
        ])->render();
    }
}