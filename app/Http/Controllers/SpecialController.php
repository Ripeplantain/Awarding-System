<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Special_Award;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(request()->user()->cannot('college')){
            $specials = Special_Award::latest()->where('year',now()->year);
        } else {
            $specials = Special_Award::latest()->where('year',now()->year)->where('collegeid',Auth::user()->department->faculty->college->collegeid);
        }

        if (request('search')){
            $specials
                ->where('congregation','like','%'.request('search').'%')
                ->orWhere('year','like','%'.request('search').'%')
                ->orWhere('name','like','%'.request('search').'%')
                ->orWhere('sponsor','like','%'.request('search').'%');
        }

        return view ('special_table',[
            'specials' => $specials->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('special_create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attribute = request()->validate([
            'name'=> 'required',
            'description'=> 'required',
            'sponsor'=> 'required',
            'congregation' => 'required',
            'session' => 'required',
            'winner' =>  'required','array','min:3',
            'winner.*' => 'max:255',
            'cgpa' =>  'required','array','min:3',
            'cgpa.*' => 'max:255',
            'program' => 'required','array','min:3',
            'program.*' => 'max:255',
            'price' => 'required','array','min:3',
            'price.*' => 'max:255',
        ]); 

        $attribute['user_id'] = Auth::user()->user_id;
        $attribute['collegeid'] = Auth::user()->department->faculty->college->collegeid;

        Special_Award::create($attribute);

        Session::flash('success','Thankyou for the service!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $param = $request->route()->parameters();

        $instance = Special_Award::latest()->where('session',$param);

        if (request('search')){
            $instance
                ->where('congregation','like','%'.request('search').'%')
                ->orWhere('year','like','%'.request('search').'%')
                ->orWhere('name','like','%'.request('search').'%')
                ->orWhere('sponsor','like','%'.request('search').'%');
        }

        if($instance->count() ==  0){
            $instance = Special_Award::latest();
        }

        return view ('special_table',[
            'specials' => $instance->paginate(10)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $special = Special_Award::find($id);

        return view ('edit', ['special' => $special]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Special_Award $special)
    {
        $attribute = request()->validate([
            'name'=> 'required',
            'description'=> 'required',
            'sponsor'=> 'required',
            'congregation' => 'required',
            'session' => 'required',
            'winner' =>  'required','array','min:3',
            'winner.*' => 'max:255',
            'cgpa' =>  'required','array','min:3',
            'cgpa.*' => 'max:255',
            'program' => 'required','array','min:3',
            'program.*' => 'max:255',
            'price' => 'required','array','min:3',
            'price.*' => 'max:255',
        ]);

        $special->update($attribute);

        Session::flash('success','It has been updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = Special_Award::find($id);
        $delete_data->delete();
        return redirect()->back();
    }
}
