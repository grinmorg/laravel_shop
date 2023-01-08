<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ThumbnailController extends Controller
{
    public function __invoke(
        string $dir,
        string $method,
        string $size,
        string $file,
    ): BinaryFileResponse
    {
        // Если в конфиге нет поддержки такого размера выдаст - 403 ошибку
        abort_if( 
            !in_array($size, config('thumbnail.allowed_sizes', [])), 
            403, 
            'Size not allowed' 
        );

        $storage = Storage::disk('images');

        
        $realPath = "$dir/$file";
        $newDirPath = "$dir/$method/$size";
        $resultPath = "$newDirPath/$file";

        // Если первое обращение и директории ещё нет - создаём её
        if ( !$storage->exists($newDirPath) ) {
            $storage->makeDirectory($newDirPath);
        }

        if ( !$storage->exists($resultPath) ) {
            // Создаём изображаение по нужному пути
            $image = Image::make( $storage->path($realPath) );

            // Используем экстракт для получения ширины и высоты из строки типа "350x350"
            [$w, $h] = explode('x', $size);

            // Методы бывают типа crop/resize
            $image->{$method}($w, $h);

            // Сохраняю
            $image->save( $storage->path( $resultPath ) );
        }

        return response()->file( $storage->path( $resultPath ) );
    }
}
