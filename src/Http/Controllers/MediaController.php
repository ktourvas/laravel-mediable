<?php

namespace ktourvas\LaravelMediable\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use ktourvas\LaravelBlog\Entities\Article;
use ktourvas\LaravelMediable\Entities\MediaObject;

trait MediaController {

    public function createMedia(Request $request) {

        $path = $request->file('gallery')->store('gallery');

        return MediaObject::create([
            'path' => $path
        ]);
    }


//    public function create(Request $request) {
//
//        $article = $request->user()->articles()->create( $request->all() );
//
//        $article->body()->create( $request->all() );
//
//        foreach ($request->titles as $title) {
//
//            $article->titles()->create( [
//                'title' => $title['payload'],
//                'type_id' => $title['type_id']
//            ] );
//
//        }
//
//        return $article;
//
//    }
//
//    public function index(Request $request) {
//
//        return Article::with(['titles', 'body'])->get();
//
//    }
//
//    public function view(Request $request, Article $article) {
//
//        return $article->load('titles', 'body');
//
//    }
//
//    public function update(Request $request, Article $article) {
//
//        foreach ($request->titles as $title) {
//
//            $article->titles()->where('type_id', $title['type_id'])->update( [
//                'title' => $title['payload'],
//            ] );
//
//        }
//
//        $article->body()->update([
//            'body' => $request->body
//        ]);
//
//        $article->slug = $request->slug;
//        $article->save();
//
//        return $article->toArray();
//
//    }

}
