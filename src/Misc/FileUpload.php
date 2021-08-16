<?php

namespace LaravelEditorJs\Misc;

use Illuminate\Http\Request;

class FileUpload
{
    public static function upload(Request $request)
    {
        $fileUrl = '';

        if(
            $request->file('image')
            && ($callbackFileUpload = config('laravel-editor-js.file_upload_callback'))
        ){
            $fileUrl = call_user_func_array($callbackFileUpload, [
                $request->file('image'),
            ]);
        }

        return [
            'success' => 1,
            'file' => [
                'url' => $fileUrl,
            ],
        ];
    }

    public static function fetchImage(Request $request)
    {
        $fileContents = @file_get_contents($request->url);

        $imageUrl = $request->url;

        if(
            $fileContents
            && ($callbackUploadImage = config('laravel-editor-js.image_upload_callback'))
        ){
            $imageSize = getimagesizefromstring($fileContents);
            $imageUrl = call_user_func_array($callbackUploadImage, [
                $fileContents,
                Tools::mime2ext($imageSize['mime']),
                $imageSize['mime'],
                $imageSize[0],
                $imageSize[1],
            ]);
        }

        return [
            'success' => 1,
            'file' => [
                'url' => $imageUrl,
            ],
        ];
    }
}