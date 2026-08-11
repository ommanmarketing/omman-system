<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Realiza o Login e gera o Token
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'remember' => 'boolean'
        ]);

        $user = User::where('email', $request->email)->first();

        // Verifica se o usuário existe e se a senha está correta
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['As credenciais fornecidas estão incorretas.'],
            ]);
        }

        // Remove os tokens antigos (opcional, evita acúmulo no banco)
        $user->tokens()->delete();

        // Cria um novo token de acesso pelo Sanctum
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login realizado com sucesso',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ]);
    }

    /**
     * Envia o link de Esqueci a Senha
     */
    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        // O Laravel cuida do envio usando a tabela password_reset_tokens
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? response()->json(['message' => 'Enviamos um link de recuperação para o seu e-mail.'])
            : response()->json(['message' => 'Não conseguimos encontrar um usuário com esse endereço de e-mail.'], 400);
    }

    /**
     * Realiza o Logout (Invalida o Token)
     */
    public function logout(Request $request)
    {
        // Deleta o token atual que foi usado para fazer a requisição
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logout realizado com sucesso.']);
    }

    /**
     * Retorna os dados do usuário logado
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}