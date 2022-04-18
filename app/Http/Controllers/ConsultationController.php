<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;

class ConsultationController extends Controller
{
    public function consultations(Request $request) {

        $consultation = New Consultation;
        $consultation->name = $request->input('name');
        $consultation->email = $request->input('email');
        $consultation->save();

        if($consultation->id) {
            return redirect()->back()->with('success', 'Your Request has been received. We shall contact you as soon as possible!');
        } else {
            return redirect()->back()->withErrors('Error: something went wrong. Try resending your request.');
        }

    }
}
