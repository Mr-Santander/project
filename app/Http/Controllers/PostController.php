<?php

namespace App\Http\Controllers;

use App\Models\Voyager\Cover;
use Illuminate\Http\Request;

use TCG\Voyager\Models\Post;

class PostController extends Controller
{
  public function index()
  {

    $covers = Cover::all();

    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $diassemana = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
    $fecha_hoy = $diassemana[date('w')] . ", " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');

    $posts = Post::paginate();
    return view('welcome', compact('posts', 'covers'))->with([
      'fecha_hoy' => $fecha_hoy
    ]);
  }
  public function show(Post $post)
  {
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $diassemana = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
    $fecha_hoy = $diassemana[date('w')] . ", " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');

    return view('posts.show', compact('post'))->with([
      'fecha_hoy' => $fecha_hoy
    ]);
  }
}
