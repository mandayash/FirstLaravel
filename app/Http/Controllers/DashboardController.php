<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class DashboardController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(5)->get();
        return view('dashboard', compact('articles'));
    }
}
