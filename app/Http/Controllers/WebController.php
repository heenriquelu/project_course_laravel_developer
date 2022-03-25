<?php

namespace App\Http\Controllers;

use App\Post;
use App\Support\Seo;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        $head = $this->seo->render(
            env('APP_NAME') . ' - LH Info Web',
            'Descrição da página home',
            url('/'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.home', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function course()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Sobre o curso',
            'Descrição da página de cursos',
            route('course'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.course', ['head' => $head]);

    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' - LH Info Web',
            'Descrição da página de blog',
            route('blog'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.blog', [
            'head' => $head,
            'posts' => $posts]);
    }

    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();

        $head = $this->seo->render(
            env('APP_NAME') . ' - ' . $post->title,
            $post->subtitle,
            route('article', $post->uri),
            \Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($post->cover, 1200, 628))
        );

        return view('front.article', [
            'head' => $head,
            'post' => $post
        ]);

    }

    public function contact()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - LH Info Web',
            'Descrição da página de contato',
            route('contact'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.contact', ['head' => $head]);

    }
}
