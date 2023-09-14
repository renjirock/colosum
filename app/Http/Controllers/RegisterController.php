<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Categorie;

class RegisterController extends Controller
{
    /**
     * Display register page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        $this->createCategories($user->id);

        auth()->login($user);

        return redirect('/admin/dashboard')->with('success', "Account successfully registered.");
    }

    private function createCategories($id)
    {
        $categories = [
            'Servicios digitales',
            'Cosmética y cuidado corporal',
            'Alimentos y bebidas',
            'Muebles y decoración',
            'Salud y bienestar',
            'Artículos para el hogar ',
            'Cuidado de mascotas',
            'Equipamiento de oficinas',
            'Ropa'
        ];
        foreach ($categories as $category) {
            Categorie::create([
                'name' => $category,
                'user_id' => $id,
                'is_active' => true
            ]);
        }
    }
}
