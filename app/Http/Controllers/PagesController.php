<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Kelas;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $bykelas = Kelas::all();
        return view('index', compact('bykelas'));
    }

    public function p()
    {
        $bykelas = Kelas::all();
        return view('detail-artikel', compact('bykelas'));
    }

    public function showKelas(Kelas $kelas) {
        $categories = Category::with(['kelas'])->get();
        $bykelas = Kelas::all();
        return view('kelas.index', compact('kelas', 'bykelas', 'categories'));
    }

    public function showCategory(Category $category) {
        $categories = Category::with(['kelas'])->get();
        $bykelas = Kelas::all();
        return view('kelas.index', compact('category', 'bykelas', 'categories'));
    }

    public function agrobisnis() {
        return view('main-page.agrobisnis.index');
    }

    public function barbershop() {
        return view('main-page.barbershop.index');
    }

    public function beverage() {
        return view('main-page.beverage.index');
    }

    public function desainKreatif() {
        return view('main-page.desain-kreatif.index');
    }

    public function komputerDasar() {
        return view('main-page.komputer-dasar.index');
    }

    public function kuliner() {
        return view('main-page.kuliner.index');
    }

    public function mengemudi() {
        return view('main-page.mengemudi.index');
    }
}