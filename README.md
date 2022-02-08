# Laravel Editor JS

## Install

1. Install package

```composer require zencoreitservices/laravel-editor-js```

2. Add provider in `config/app.php`

```LaravelEditorJs\LaravelEditorJsProvider::class```

## Configuration

Publish config

```artisan vendor:publish --tag=laravel-editor-js-config```

Publish views

```artisan vendor:publish --tag=laravel-editor-js-views```

Publish translation

```artisan vendor:publish --tag=laravel-editor-js-lang```

Add routes

```php
Route::get('/fetch-url', function(\Illuminate\Http\Request $request){
    return response()->json(LaravelEditorJs\Misc\UrlFetcher::fetch($request));
});
Route::post('/upload-file', function(\Illuminate\Http\Request $request){
    return response()->json(LaravelEditorJs\Misc\FileUpload::upload($request));
});
Route::post('/fetch-url-image', function(\Illuminate\Http\Request $request){
    return response()->json(LaravelEditorJs\Misc\FileUpload::fetchImage($request));
});
```

## Usage

Convert blocks into HTML
```php
$blocksManager = new \LaravelEditorJs\BlocksManager($data);
$html = $blocksManager->renderHtml();
```