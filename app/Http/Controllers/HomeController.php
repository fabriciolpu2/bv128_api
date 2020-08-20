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
        return view('auth.passwords.change-password');
    }

    /**
     * password update method
     */
    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {

            return redirect()->back()->with(
                "error",
                "Sua senha atual não coincide com a senha informada. Tente novamente."
            );
        }
        if (strcmp($request->get('current_password'), $request->get('new_password')) === 0) {

            return redirect()->back()->with(
                "error",
                "A senha informada é igual a antiga. Porfavor escolha uma senha diferente."
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
        return redirect()->back()->with("success", "Senha alterada com sucesso!");
    }


    public function myAccount(Request $request)
    {
        $user = Auth::user();
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'mobile' => ['nullable', 'string', 'max:15', 'min:15'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id]
            ]);

            $user->fill($request->all());
            $user->save();
            return redirect()->back()->with("success", "Atualizado com sucesso");
        }
        return view('auth.account')->with('user', $user);
    }
}
