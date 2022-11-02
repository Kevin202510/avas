<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Reservations;

class ReservationsController extends Controller
{
    public function index()
    {
        $reservations=Reservations::whereNull('deleted_at')->get();
        return response()->json($reservations);
    }

    public function list(Request $request)
    {
        $reservations = Reservations::whereNull('deleted_at')->get();
        return $reservations;
    }

    public function save(Request $request)
    {
        $input = $request->all();
        $reservations=Reservations::create($input); 
        return response()->json($reservations);
    }

    public function update(Request $request, Reservations $reservations)
    {
        $input = $request->all();
        $reservations->update($input);
        return response()->json($reservations, 200);
    }

    public function destroy(Reservations $reservations)
    {
        $reservations->deleted_at = Carbon::now();
        $reservations->update();
        return response()->json(array('success'=>true));
    }
}
