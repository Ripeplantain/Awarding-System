<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Department;
use App\Models\Student_db;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();

        // if(Auth::user()->can('college'))

        return view('award',[
            'departments' => $departments,
        ]);
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
            'award_name'=> 'required',
            'award_description'=> 'required',
            'sponsor'=> 'required',
            'congregation' => 'required',
            'session' => 'required | max:255',
            'price' => 'max:255',
            'deptid' => 'max:255'
        ]);
        

        $studid = Student_db::where('regno',$request->index_number)->first();
        $attribute['studid'] = $studid->studid;

        if(request()->user()->cannot('admin')){
            $attribute['deptid'] = Auth::user()->deptid;
        }

        $attribute['user_id'] = Auth::user()->user_id;

        Award::create($attribute);

        Session::flash('success','Thankyou for the service!');

        return redirect()->route('award.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $award = Award::find($id);

        return view ('update', ['award' => $award]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Award $award)
    {
        $attribute = request()->validate([
            'award_name'=> 'required',
            'award_description'=> 'required',
            'sponsor'=> 'required',
            'congregation' => 'required',
            'session' => 'required | max:255',
            'price' => 'max:255',
        ]);
        

        $studid = Student_db::where('regno',request('index_number'))->first();
        $attribute['studid'] = $studid->studid;


        $award->update($attribute);

        Session::flash('success','It has been updated successfully');

        return redirect()->route('award.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = Award::find($id);
        $delete_data->delete();
        return redirect()->route('home');
    }
}
