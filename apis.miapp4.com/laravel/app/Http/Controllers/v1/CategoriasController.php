<?php
 
namespace App\Http\Controllers\v1;
 
use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class CategoriasController extends Controller
{
    public function getAll()
    {
        $response = new \stdClass();

        $categorias = Categoria::all();

        $response->success=true;
        $response->data=$categorias;
            
        return response()->json($response,200);
    }

    public function getItem($id)
    {
        $response = new \stdClass();

        $categoria = Categoria::find($id);
        
        $response->success=true;
        $response->data=$categoria;

        return response()->json($response,200);
    }

    public function store(Request $request)
    {
        $response = new \stdClass();

        $categoria = new Categoria();
        $categoria->codigo=$request->codigo;
        $categoria->nombre=$request->nombre;
        $categoria->descripcion=$request->descripcion;
        $categoria->save();

        $response->success=true;
        $response->data=$categoria;

        return response()->json($response,200);
    }

    public function updatePut(Request $request,$id)
    {
        $response = new \stdClass();
        $categoria = Categoria::find($id);

        $categoria->codigo = $request->codigo;
        $categoria->nombre=$request->nombre;
        $categoria->descripcion=$request->descripcion;
        $categoria->save();

        $response->success=true;
        $response->data=$categoria;

        return response()->json($response,200);


    }


    public function updatePatch(Request $request,$id)
    {
        $response = new \stdClass();
        $categoria = Categoria::find($id);

        if($request->codigo!=null)
        {
            $categoria->codigo = $request->codigo;
        }
        
        if($request->nombre!=null)
        {
            $categoria->nombre=$request->nombre;
        }
        
        if($request->descripcion!=null)
        {
            $categoria->descripcion=$request->descripcion;
        }
        
        $categoria->save();

        $response->success=true;
        $response->data=$categoria;

        return response()->json($response,200);


    }

    public function delete($id)
    {
        $response = new \stdClass();

        $categoria = Categoria::find($id);
        $categoria->delete();

        $response->success=true;

        return response()->json($response,200);

    }

}