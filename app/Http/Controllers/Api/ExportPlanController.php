<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AreaPlan;
use App\Models\AreaPlanClone;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ExportPlanController extends Controller
{
    public function exportpdf(AreaPlan $areaPlan): \Illuminate\Http\Response
    {
        $pdf = Pdf::loadView('export', compact('areaPlan'));
        return $pdf->download('planeación'. $areaPlan->getKey() .'.pdf');
    }

    public function exportdocx(AreaPlan $areaPlan): \Illuminate\Http\Response
    {
        $pdf = Pdf::loadView('export', compact('areaPlan'));
        return $pdf->download('planeación'. $areaPlan->getKey() .'.docx');
    }
}
