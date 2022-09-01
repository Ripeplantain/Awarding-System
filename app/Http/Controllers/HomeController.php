<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $awards = Award::with('student', 'department')->latest();

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

        return view('home',[
            'awards' => $awards->paginate(10),
        ]);
    }


    public function filter(Request $request)
    {
        $param = $request->route()->parameters();
        
        $instance = Award::latest()->where('session',$param);

  

        if($instance->count() ==  0){
            $instance = Award::latest();
        }

        if (request('search')){
            $instance
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
            $instance;
        } else if(request()->user()->can('college')){
            $instance->whereHas('department',function($query){
                $query->whereHas('faculty',function($sql){
                    $sql->whereHas('college',function($relation){
                        $relation->where('collegeid',auth()->user()->department->faculty->college->collegeid);
                    });
                });
            });
        }else {

            $instance->where('deptid',auth()->user()->deptid);
        }

        return view('home',[
            'awards' => $instance->paginate(10),
        ]);
    }
}
