<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Listar os usuários
    public function index(){

        // Recuperar os registros do banco de dados
        $users = User::orderByDesc('created_at')->paginate(10);

        // Carregar a VIEW
        return view('users.index', ['users' => $users]);


    }

    // Carregar o formulário cadastrar novo usuário
    public function create()
    {

        // Carregar a VIEW 
        return view('users.create');
    }

    // Cadastrar no banco de dados o novo curso
    public function store(UserRequest  $request)
    {

        // Validar o formulário
        $request->validated();

        // Iniciar a transação 
        DB::beginTransaction();

        try {

            $user = User::create([
                'name'=> $request->name,
                'email' => $request->email,
                'cpf' => preg_replace('/[^0-9]/', '', $request->cpf),
                'password' => $request->password,
            ]);

            // Operação é concluída com êxito
            DB::commit();      

            // Redirecionar os usuários, enviar a mensagem de sucesso
            return redirect()->route('users.index', ['user' => $user->id])->with
            ('success', 'Usuário cadastrado com sucesso!');

        }catch (Exception $e) {

            // Operação não concluída com êxito
            DB::rollBack(); 

            // Redirecionar o usuário, enviar mensagem de erro
            return back()->withInput()->with('error', 'Usuário não cadastrado!' . $e->getMessage());
            
        }

        
    }
}
