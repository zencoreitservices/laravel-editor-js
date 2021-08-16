<?php

return [
    /*
    | Basically url fetcher retrieves also image from provided url from @editorjs/link
    | Here you can define callback to store images in your system
    | Define class and method
    |
    | example: [\App\Models\Media::class, 'storeFromUrl']
    | params: $args[0]: $imageUrl
    */
    'fetch_url_store_image_callback' => null,

    /*
    | File upload callback from @editorjs/image
    | 
    | example: [\App\Models\Media::class, 'storeFromUploadedFile']
    | params: $args[0]: $uploadedFile
    */
    'file_upload_callback' => null,

    /*
    | Image fetch callback from @editorjs/image
    | 
    | example: [\App\Models\Media::class, 'storeFromFileContents']
    | params: $args[0]: $fileContents
    */
    'image_upload_callback' => null,
];