<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Valide os dados do formulário
        $credentials = $request->only('email', 'password');

        // Lógica para autenticar o usuário
        if (!Auth::attempt($credentials)) {
            // Se as credenciais forem inválidas, redirecione ou retorne uma resposta de erro
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Se as credenciais forem válidas, continue com a requisição
        return $next($request);
    }
}