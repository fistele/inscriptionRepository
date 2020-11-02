<?php

namespace App\Http\Controllers;

use Flashy;
use App\Models\Interesse;
use App\Notifications\InteresseNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification as NotificationsNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

/**
 * Controlleur principal de l'application
 * 
 * @category App
 * @package  App
 * @author   Onyx Moffo <onesimemoffo@gmail.com>
 * @license  Localhost http://127.0.0.1:8000
 * @link     http://127.0.0.1:8000
 */
class AppController extends Controller
{
    /** 
     * L'affichage principal du site
     * 
     * @return null
     */
    public function index()
    {
        $data = [
            'title' => "Receuil d'informations | ",
        ];

        return view("app.index", $data);
    }

    /**
     * Sauvegarder les informations de l'intéressé
     * 
     * @return null
     */
    public function submitInformations(Request $request)
    {
        $this->validate(
            $request, [
            'lastname' => "required",
            'firstname' => "required",
            'phone' => "required",
            'filiere' => "required",
            'email' => "required|email|unique:interesses",
        ]);

        $interest = Interesse::create(
            [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phone' => $request->phone,
                'filiere' => $request->filiere,
                'email' => $request->email,
                'date_creation' => time()
                ]
        );
        
        $interest->notify(new InteresseNotification($interest));

        return redirect()->route('index');
    }
}
