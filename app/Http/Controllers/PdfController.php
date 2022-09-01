<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;
use App\Models\Special_Award;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class PdfController extends Controller
{
    public function index(){

        $awards = Award::latest()->where('year',now()->year);

        if (request('search')){
            $awards
                ->where('congregation','like','%'.request('search').'%')
                ->orWhereHas('department',function($query){
                    $query->where('short_name','like','%'.request('search').'%');    
                })
                ->orWhereHas('department',function($query){
                    $query->where('long_name','like','%'.request('search').'%');    
                })
                ->orWhere('year','like','%'.request('search').'%')
                ->orWhere('sponsor','like','%'.request('search').'%')
                ->orWhere('award_name','like','%'.request('search').'%');
        }

        if(request()->user()->can('admin')){
            $awards;
        } else if(request()->user()->can('college')){
            $awards->whereHas('department',function($query){
                $query->whereHas('faculty',function($sql){
                    $sql->whereHas('college',function($relation){
                        $relation->where('collegeid',auth()->user()->department->faculty->college->collegeid);
                    });
                });
            });
        }else {

            $awards->where('deptid',auth()->user()->deptid);
        }

        return view('invoice',[
            'awards' => $awards->paginate(10)
        ]);



       

        return view('invoice',[
            'awards' => $awards->paginate(10)
        ]);
    } 


    public function create(){
        $awards = Award::latest()->where('year',now()->year)->get();

        $pdf = Pdf::loadView('pdf',compact('awards'));
        return $pdf->download('pdf.pdf');
    }

    public function preview(){
        if(request()->user()->cannot('college')){
            $specials = Special_Award::latest()->where('year',now()->year)->get();
        } else {
            $specials = Special_Award::latest()->where('year',now()->year)->where('collegeid',Auth::user()->department->faculty->college->collegeid)->get();
        }

        return view('special_invoice',[
            'specials' => $specials,
        ]);
    }

    public function download(){
        if(request()->user()->cannot('college')){
            $specials = Special_Award::latest()->where('year',now()->year)->get();
        } else {
            $specials = Special_Award::latest()->where('year',now()->year)->where('collegeid',Auth::user()->department->faculty->college->collegeid)->get();
        }

        $pdf = Pdf::loadView('download',compact('specials'));
        return $pdf->download('download.pdf');
    }
    
}
