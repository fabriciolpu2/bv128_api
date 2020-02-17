<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servico;
use App\Mail\ContatoDoSite;
use App\Models\Filial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['contact', 'sendMessage']
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($status = null)
    {
        $servicos = $status !== null ? Servico::where('ativo', $status)->paginate(8) : Servico::paginate(8);

        return view('admin.servicos.index', compact('servicos', 'status'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {

        return view('cliente.contact');
    }

    public function sendMessage(Request $request)
    {
        $this->validate($request, [
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'telefone' => ['required', 'string', 'max:15', 'min:14'],
            'mensagem' => ['required', 'string', 'max:510']
        ]);



        Mail::send(new ContatoDoSite($request->all()));
    }

    // /**
    //  * Show the application landing.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function welcome()
    // {
    //     $clientes = Cliente::all();


    /**
     * show password update view
     */
    public function showChangePasswordForm()
    {
        return view('admin.auth.passwords.change-password');
    }

    /**
     * password update method
     */
    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {

            return redirect()->back()->with(
                "error",
                "Your current password does not match the password you provided. Please try again."
            );
        }
        if (strcmp($request->get('current_password'), $request->get('new_password')) === 0) {

            return redirect()->back()->with(
                "error",
                "The new password cannot be the same as your current password. Please choose a different password."
            );
        }
        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return redirect()->back()->with("success", "Password changed successfully!");
    }


    public function myAccount(Request $request)
    {
        $user = Auth::user();
        if ($request->isMethod('post')) {
            //dd($request->all());
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'mobile' => ['required', 'string', 'max:15', 'min:15'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id]
            ]);

            $user->fill($request->all());
            $user->save();
            return redirect()->back()->with("success", "Update successful");
        }
        return view('auth.account')->with('user', $user);
    }
}
