<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Kelas;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index', [
            "classnav" => Kelas::all()
        ]);
    }

    public function cShow(Kelas $kelas)
    {
        return view('kelas.index', [
            "title" => $kelas->name,
            "kelas" => $kelas,
            "categories" => Category::with(['kelas'])->get(),
            "classnav" => Kelas::all()
        ]);
    }

    public function scShow(Kelas $kelas, Category $category)
    {
        return view('card-artikel', [
            "kelas" => $kelas,
            "title" => $category->name,
            "category" => $category,
            "posts" => Post::all(),
            "classnav" => Kelas::all()
        ]);
    }

    public function pShow(Kelas $kelas, Category $category, Post $post)
    {
        return view('detail-artikel', [
            "title" => $post->name,
            "post" => $post,
            "classnav" => Kelas::all()
        ]);
    }
}