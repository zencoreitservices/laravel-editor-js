<?php

namespace LaravelEditorJs\Misc;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class UrlFetcher
{
    public static function fetch(Request $request)
    {
        $client = new Client([
            'timeout'  => 5.0,
        ]);

        try{
            $response = $client->request('GET', $request->url);
        }catch(RequestException $e){
            return response()->json([
                'message' => 'Could not load URL content',
            ], 422);
        }
        
        $html = (string)$response->getBody();

        $doc = new \DOMDocument();
        @$doc->loadHTML($html);
        $nodes = $doc->getElementsByTagName('title');

        $title = $nodes->item(0)->nodeValue;

        $metas = $doc->getElementsByTagName('meta');

        $description = '';
        $imageUrl = '';

        for($i = 0; $i < $metas->length; $i++)
        {
            $meta = $metas->item($i);
            if($meta->getAttribute('name') == 'description')
                $description = $meta->getAttribute('content');
            if($meta->getAttribute('property') == 'og:image')
                $imageUrl = $meta->getAttribute('content');
        }

        if(
            $imageUrl
            && ($callbackStoreImage = config('laravel-editor-js.fetch_url_store_image_callback'))
        ){
            $imageUrl = call_user_func_array($callbackStoreImage, [
                $imageUrl,
            ]);
        }

        return [
            'success' => 1,
            'meta' => [
                'title' => $title,
                'description' => $description,
                'image' => [
                    'url' => $imageUrl,
                ],
            ],
        ];
    }
}