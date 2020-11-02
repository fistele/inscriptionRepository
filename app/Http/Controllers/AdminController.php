<?php

namespace App\Http\Controllers;

use App\Models\Interesse;
use Illuminate\Http\Request;

/**
 * Controlleur principal de l'application
 * 
 * @category Admin
 * @package  App
 * @author   Onyx Moffo <onesimemoffo@gmail.com>
 * @license  Localhost http://127.0.0.1:8000/dashboard
 * @link     http://127.0.0.1:8000/dashboard
 */
class AdminController extends Controller
{
    /**
     * Accueil du dashboard
     * 
     * @return null
     */
    public function index()
    {
        $data = [
            'title' => "",
            'last_interesses' => Interesse::orderBy("id", "desc")->limit(5)->get(),
        ];

        return view("admin.index", $data);
    }
}
