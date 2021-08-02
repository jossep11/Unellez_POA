<?php

namespace App\Exports;

use App\Models\DatosResponsablesProyecto;
use App\Models\ObjetivoGeneralProyecto;
use App\Models\ResumenMatriculaIngresoPostGrado;
use App\Models\ResumenMatriculaIngresoPreGrado;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;


class InvoicesExport implements WithDrawings
{
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/logounellez.jpg'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('B3');

        return $drawing;
    }
}



class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

        public function view(): View{
            return view('Proyecto1.ExportExcel.Proyecto1_Excel', [
                'Users'=> User::get(),
                'ObjetivoGeneral'=> ObjetivoGeneralProyecto::get(),
                'DatosResponsable'=> DatosResponsablesProyecto::get(),
                'ResumenMatriculaPregrado'=> ResumenMatriculaIngresoPreGrado::get(),
                'ResumenMatriculaPostgrado'=> ResumenMatriculaIngresoPostGrado::get(),    
            ]);
            
        }
    
}
