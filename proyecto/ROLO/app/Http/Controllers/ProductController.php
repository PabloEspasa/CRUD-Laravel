<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Http\Request;


/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->cargo_id == 2) {
            return redirect()->route('index');
        } else {
            $products = Product::orderBy('id', 'desc')->paginate(5);

            return view('product.index', compact('products'));
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $categorias = Categoria::all();
        return view('product.create', compact('product', 'categorias'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Product::$rules);

        $imagen_nombre = time() . '_' . $request->file('imagen')->getClientOriginalName();
        $imagen = $request->file('imagen')->storeAs('productos', $imagen_nombre, 'public');


        $productData = [
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion,
            'imagen' => $imagen_nombre,
            'id_categoria' => $request->id_categoria,
        ];

        $product = Product::create($productData);

        return redirect()->route('products.index')
            ->with('swal_success', 'Producto agregado!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categorias = Categoria::all();

        return view('product.edit', compact('product', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate(Product::$rules);

        $imagen_nombre = time() . '_' . $request->file('imagen')->getClientOriginalName();
        $imagen = $request->file('imagen')->storeAs('productos', $imagen_nombre, 'public');


        $productData = [
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion,
            'imagen' => $imagen_nombre,
            'id_categoria' => $request->id_categoria,
        ];

        $product->update($productData);

        return redirect()->route('products.index')
            ->with('swal_success', 'Producto actualizado!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

        $product = Product::find($id)->delete();

        return redirect()->route('products.index')->with('swal_success', 'Producto eliminado!');
    }
}
