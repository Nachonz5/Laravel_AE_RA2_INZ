<?php
namespace App\Http\Controllers;
use App\Models\LibroInz;
class LibroInzController extends Controller
{
    public function index()
    {

        $libros =LibroInz::all();
        return view('libros.index', compact('libros'));
    }
}
