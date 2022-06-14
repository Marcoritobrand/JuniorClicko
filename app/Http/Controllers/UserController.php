<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function save(Request $request){
        $userdata = request()->except('_token');
        $userdata['password'] = Hash::make($userdata['password']);
        logger($userdata);
        Users::insert($userdata);
        return back();

    }

    public function read(){
        // DEVUELVA TODO
        $sql = 'SELECT * FROM users';
        $products = DB::select($sql);

        $sql5 = 'SELECT email as nombresUsers FROM users';
        $sql6 = 'SELECT COUNT(email) as contadorEmails FROM users';
        $consulta = DB::select($sql5);
        $contador = DB::select($sql6);


        // ARRAYS
        $array = collect([$consulta]);
        $gmailtotal = array();
        $todo = array();


        for ($i=0; $i < $contador[0]->contadorEmails; $i++) {
            $variable = explode( '@', $consulta[$i]->nombresUsers );
            $info = $variable[1];
            array_push($todo, $info);

            if (in_array($info, $gmailtotal) == false) {
                array_push($gmailtotal, $info);

            }

            logger($todo);
            logger($gmailtotal);
        }
        $valors = array_count_values($todo);







        return view('pages/read', compact('products','array','consulta','contador','variable','gmailtotal','valors'));
    }


    public function delete($id){
        Users::destroy($id);
        return back();
    }
    public function editform($id){
        $usuario = Users::findOrFail($id);
        return view('pages.update', compact('usuario'));
    }
    public function edit(Request $request, $id){
        $datosusuario = request()->except((['_token','_method']));
        Users::where('id','=',$id)->update($datosusuario);

        return redirect('read');
    }



}
