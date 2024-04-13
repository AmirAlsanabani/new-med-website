<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Models\MedicineWarning;

class MedicineController extends Controller
{
    public function show($id)
    {
        $medicine = Medicine::findOrFail($id);

        $medicineWarnings = MedicineWarning::where('medicine_id', $id)->get();

        $warnings = $medicineWarnings->map(function ($medicineWarning) {
            return $medicineWarning->warning;
        });

        return view('medicine', compact('medicine', 'warnings'));
    }
}