<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modules.login.index');
    }


    /**
     *  Process a login action
     */
    public function login(LoginRequest $request)
    {
        $request->validated();

        $authenticated = Auth::attempt(['email'=>$request->email, 'password'=>$request->password]);

        if (!$authenticated) {
            Log::warning('Erro na tentativa de efetuar login.', ['email'=>$request->email]);
            return back()->withInput()->with('error', 'Usuário ou senha inválidos');
        }

        $user = Auth::user();
        $user = User::find($user->id);

        if ($user->hasRole('root')) {
            $permissions = Permission::pluck('name')->toArray();
        } else {
            $permissions = $user->getPermissionsViaRoles()->pluck('name')->toArray();
        }

        $user->syncPermissions($permissions);

        return redirect()->route('home.index');
    }
}
