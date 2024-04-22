<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\MedicineCategory;
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

    public function category(Request $request)
    {
        $categoryName = $request->input('category_name');
        $medicineCategory = MedicineCategory::where('name', $categoryName)->firstOrFail();
        $medicines = Medicine::where('category_id', $medicineCategory->id)->get();

        return view('medicine.category', compact('medicineCategory', 'medicines'));
    }
}