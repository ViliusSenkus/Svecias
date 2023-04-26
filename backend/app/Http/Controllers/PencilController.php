<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pencil;

class PencilController extends Controller
{
    public function index() {
        try{
            return Pencil::all();
        } catch (\Exception $e) {
            return response('Nepavyko gauti produktų sąrašo', 500);
        }
        

        }
}
