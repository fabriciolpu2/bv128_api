<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
//use Hash;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::whereHas('roles', function ($q) {
            $q->whereIn('name', ['administrador', 'editor']);
        })->latest()->paginate();

        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::whereIn('name', ['administrador', 'editor'])->get();
        return view('usuarios.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'roles' => ['required']
        ]);

        $password = 'mudar123';
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($password),
        ]);

        $user->syncRoles($request->roles);

        $usuarios = User::whereHas('roles', function ($q) {
            $q->whereIn('name', ['administrador', 'editor']);
        })->latest()->paginate();

        return redirect('/backend/usuarios/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $roles = Role::whereIn('name', ['administrador', 'editor'])->get();
        $usuario = User::find($id);
        return view('usuarios.create', compact('usuario', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //dd($request->all());

        $user = User::find($id);
        $user->update($request->all());
        $user->syncRoles($request->roles);

        $usuarios = User::whereHas('roles', function ($q) {
            $q->whereIn('name', ['administrador', 'editor']);
        })->latest()->paginate();

        return redirect('/backend/usuarios/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($usuario)
    {
        try {

            $usuario = User::findOrFail($usuario);
        } catch (\Throwable $th) {
            throw $th;
        }

        $usuario->delete();

        return back()->with('success', 'Deleted Record successfully.');
    }

    /**
     * bloquear um anunciante.
     *
     * @return \Illuminate\Http\Response
     */
    public function bloquear(Request $request)
    {
        $date = \Carbon\Carbon::now();

        $bloqueado = false;

        $user = User::where('id', $request->usuario)->first();
        if (!$user->isBlocked()) {

            $user->update(['blocked_at' => $date->format('Y-m-d H:m:s')]);
            $bloqueado = true;
        } else {

            $user->update(['blocked_at' => null]);
            $bloqueado = false;

        }
                return response([
                    'bloqueado' => $bloqueado
                ], 200);

        abort(401, 'Unauthorized');

    }


}
