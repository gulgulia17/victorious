<?php

namespace App\Exports;

use App\AddmisionRequest;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Request;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class AddmissionRequestExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         $data = AddmisionRequest::all();
         foreach ($data as $key => $value) {
            $value->stdimage = Request::root().'/'.$value->stdimage;
         }
         return $data;
    }
    
    public function headings(): array
    {
        return [
            "Sr No",
            "Image URL",
            "Studen Name",
            "Father Name",
            "Mother Name",
            "Date Of Birth",
            "Gender",
            "Address",
            "Address",
            "Address",
            "Mobile Number",
            "Email",
            "Nationality",
            "Religion",
            "Category",
            "Occupation",
            "New Class",
            "Last Class",
            "Previous School",
        ];
    }
}
