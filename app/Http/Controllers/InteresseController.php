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
 * @license  Localhost http://127.0.0.1:8000/dashboard/interesse
 * @link     http://127.0.0.1:8000/dashboard/interesse
 */
class InteresseController extends Controller
{
    /**
     * Affichage des personnes intéressées et #tes actions disponibles
     * 
     * @return null
     */
    public function index()
    {
        $data = [
            'title' => "Gestion des personnes intéressées | ",
            'interesses' => Interesse::all(),
        ];

        return view("admin.stats.index", $data);
    }
}
