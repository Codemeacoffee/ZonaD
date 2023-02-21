<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Information;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index(){
        return view('index')->with('information', Information::orderBy('id', 'DESC')->take(10)->get());
    }

    function admin(Request $request){
        $adminCookie = $request->cookie('adminIdentifier');
        $adminRememberToken = $request->cookie('adminRememberToken');

        if($adminCookie && $adminRememberToken) return redirect('admin/home');
        else return view('adminLogin');
    }

    function login(Request $request){
        $user = htmlspecialchars($request['user']);
        $password = htmlspecialchars($request['password']);

        $admin = Admin::where('user', $user)->first();

        if ($admin){
            if(Hash::check($password, $admin->password)){
                $token = bin2hex(random_bytes(10));

                Cookie::queue('adminIdentifier', $admin->user, 10080);
                Cookie::queue('adminRememberToken', $token, 10080);

                $admin->token = $token;
                $admin->save();

                return redirect('admin/home');
            }
        }
        return redirect()->back()->withErrors('Usuario o contraseña incorrectos.');
    }

    function createAdmin(Request $request){
        $user = htmlspecialchars($request['user']);
        $password = htmlspecialchars($request['password']);

        try{
            Admin::create([
                'user' => $user,
                'password' => bcrypt($password)
            ]);
        }catch (\Exception $e){
            return redirect()->back()->withErrors('Ha ocurrido un error al crear al administrador.');
        }

        return redirect()->back()->withErrors('El administrador ha sido creado con éxito.');
    }

    function home(){
        return view('adminHome')->with('information', Information::orderBy('id', 'DESC')->get());
    }

    function createNew(Request $request){
        $name = htmlspecialchars($request['name']);
        $text = htmlspecialchars($request['text']);
        $media = $request->file('media');

        if(strstr($media->getClientMimeType(), "image/")){
            $type = "image";
        }else if(strstr($media->getClientMimeType(), "video/")){
            $type = "video";
        }else return redirect()->back()->withErrors('El tipo de archivo debe ser una imagen o un video.');

        $filename = time().$media->getClientOriginalName();

        $media->move(public_path("uploads"), $filename);

        Information::create([
            'name' => $name,
            'text' => $text,
            'media' => $filename,
            'type'  => $type
        ]);

        return redirect()->back()->withErrors('La noticia se ha creado con éxito.');
    }

    function editNew(Request $request, $id){
        $information = Information::where('id',$id)->first();

        $information->name = htmlspecialchars($request['name']);
        $information->text = htmlspecialchars($request['text']);

        $media = $request->file('media');

        if($media){
            if(strstr($media->getClientMimeType(), "image/")){
                $type = "image";
            }else if(strstr($media->getClientMimeType(), "video/")){
                $type = "video";
            }else return redirect()->back()->withErrors('El tipo de archivo debe ser una imagen o un video.');

            $filename = time().$media->getClientOriginalName();

            $media->move(public_path("uploads"), $filename);

            File::delete(public_path("uploads/".$information->media));

            $information->type = $type;
            $information->media = $filename;
        }

        $information->save();

        return redirect()->back()->withErrors('La noticia se ha editado con éxito.');
    }

    function deleteNew($id){
        $information = Information::where('id',$id)->first();

        File::delete(public_path("uploads/".$information->media));

        $information->delete();

        return redirect()->back()->withErrors('La noticia se ha borrado con éxito.');
    }

    function logout(){
        Cookie::queue(Cookie::forget('adminIdentifier'));
        Cookie::queue(Cookie::forget('adminRememberToken'));
        return redirect('/');
    }
}
