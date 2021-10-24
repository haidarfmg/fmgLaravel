<?php

namespace App\Http\Controllers;


use App\Models\People;
use App\Models\Credit;
use Illuminate\Http\Request;


class creditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    ////////////////// insert ///////////////////////
    public function insertc(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request , [
                'name'=>'required|max:25|unique:peoples',
                'number'=>'required|min:4|max:10'
            ]);

            $credit1 = new Credit();
            $credit1->number=$request->input('number');
            $credit1->save();

            $employees=new People();
            $employees->name=$request->input('name');
            $employees->credit_id = $credit1->id;
            $employees->save();
        }
        return view('credit/insertc');

    }
    ////////////////// display ///////////////////////
    public function displayc()
    {
        $people=People::all();
        $arr= array('people' => $people );
        return view('credit/displayc',$arr);
    }
    ////////////////// delete ///////////////////////
    public function deletecredit($id)
    {
            $people=People::find($id);
            $people->delete();
            return redirect("displayc");
    }
    ////////////////// edit ///////////////////////
    public function editCredit(Request $request ,$id)
    {
        if ($request->isMethod('post')) {
            $fmm =people::find($id);;
            $fmm->name=$request->input('name');
            $fmm->save();

            $fmm2 =Credit::find($fmm->credit_id);;
            $fmm2->number=$request->input('number');
            $fmm2->save();

            return redirect('displayc');
        }
        else {
            $people=People::find($id);
            $arr= array('people' => $people );
            return view('credit/edit',$arr);
        }

    }

  ////////////////// insert name ///////////////////////
  public function insertName(Request $request)
  {
      if ($request->isMethod('post')) {

          $this->validate($request , [
              'name'=>'required|max:25|unique:peoples'
          ]);

          $employees=new People();
          $employees->name=$request->input('name');
          $employees->save();
      }
      return view('credit/insertName');

  }
    ////////////////// insert number ///////////////////////
    public function insertNumber(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request , [

                'number'=>'required|min:4|max:10'
            ]);

            $credit1 = new Credit();
            $credit1->number=$request->input('number');
            $credit1->save();
            $employees=People::find($request->input('name'));
            $employees->credit_id = $credit1->id;
            $employees->save();
            return redirect('displayc');
        }
        else {
            $people=People::all();
            $arr= array('people' => $people );
            return view('credit/insertNumber',$arr);
        }


    }

}
