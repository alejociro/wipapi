<?php

namespace App\Http\Controllers\Api;

use App\Models\AreaPlanClone;
use Barryvdh\DomPDF\Facade\Pdf;

class ExportPlanCloneController
{
    public function exportpdf(AreaPlanClone $areaPlan): \Illuminate\Http\Response
    {
        $pdf = Pdf::loadView('exportClone', compact('areaPlan'));
        return $pdf->download('planeación'. $areaPlan->getKey() .'.pdf');
    }

    public function exportdocx(AreaPlanClone $areaPlan): \Illuminate\Http\Response
    {
        $pdf = Pdf::loadView('exportClone', compact('areaPlan'));
        return $pdf->download('planeación'. $areaPlan->getKey() .'.docx');
    }
}
