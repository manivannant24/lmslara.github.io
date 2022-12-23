<?php

namespace App\Exports;
//use Illuminate\Http\Request;
use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Http\Controllers\HomeController;

class EmployeeExport implements FromCollection,withHeadings
{
    public function headings():array{
        return[     
            'id',       
            'country',
            'state',
            "created_at",
            "updated_at",
            "empsize"
        ];
        }
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    public function collection()
    {
        
            //return Employee::all();
      return collect(Employee::where('country','london')->where('empsize','51-200')
     ->get());
        


    }
}
