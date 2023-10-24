<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        return view('home');
        // // Obtener todas las pizzas desde la base de datos
        // $pizzas = Pizza::all();

        // // Retornar la vista con las pizzas
        // return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function create()
    {
        // // Retornar la vista para crear una nueva pizza
        // return view('pizzas.create');
    }

    public function store(Request $request)
    {
    //     // Validar los datos del formulario
    //     $request->validate([
    //         'name' => 'required',
    //         'price' => 'required|numeric',
    //         // Agrega otras reglas de validación según tus necesidades
    //     ]);

    //     // Crear una nueva pizza en la base de datos
    //     Pizza::create([
    //         'name' => $request->input('name'),
    //         'price' => $request->input('price'),
    //         // Agrega otros campos según tu base de datos
    //     ]);

    //     // Redirigir a la página de inicio con un mensaje de éxito
    //     return redirect('/')->with('success', 'Pizza agregada correctamente');
    // }

    // Puedes agregar más métodos para editar y eliminar pizzas según tus necesidades
}
 }