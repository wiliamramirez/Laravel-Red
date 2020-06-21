<?php

namespace App\Http\Controllers;

use App\Receta;
use App\CategoriaReceta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    //


    public function index()
    {
        // MOstrar ls recetas por cantidad de votos
        // $votadas = Receta::has("likes",">",0)->get();
        $votadas = Receta::withCount("likes")
            ->orderBy("likes_count", "desc")
            ->take(3)
            ->get();


        // Obtener las recetas mas nuevas
        $nuevas = Receta::orderBy("created_at", "DESC")->take(9)->get();


        // $nuevas= Receta::latest()->get();
        // $nuevas= Receta::oldest()->get();

        // Obtener la recetas por categoria
        $categorias = CategoriaReceta::all();


        // Agrupar las recetas por categoria
        $recetas = [];

        foreach ($categorias as $categoria) {
            $recetas[Str::slug($categoria->nombre)][]
                = Receta::where("categoria_id", $categoria->id)->take(3)->get();
        }


        return view("inicio.index", compact("nuevas", "recetas", "votadas"));
    }
}
