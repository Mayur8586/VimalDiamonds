<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setup;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\CommonMark\Renderer\Block\ThematicBreakRenderer;
use Illuminate\Support\Facades\Auth;

class SetupController extends Controller
{
    public function index()
    {
    /*     $setups= Setup::orderBy('sid','desc')->paginate(5);
        return view('FrontEnd\index'); */

    }

    public function create()
    {

    }
    public function save(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'companyname'=> 'required',
           ],[
            'title.required'=>'Enter Title',
            'companyname.required'=>'Enter Company Name'
           ]);
        Setup::create($request->post());
        return redirect()->route('setup')->with('success','Setting has been saved.');
    }
    public function show() 
        
    {
        $data = DB::table('setups')->latest()->first();
        return view('BackEnd\setup',['data'=>$data]);
    }

    public function ShowSettingsInFront() 
        
    {
        $data = DB::table('setups')->latest()->first();
        return view('FrontEnd\index',['data'=>$data]);
    }
    public function ShowRegisterPage() 
        
    {
        $data = DB::table('setups')->latest()->first();
        return view('Auth\register',['data'=>$data]);
    }
    public function ShowVerificationPage() 
            {
        $data = DB::table('setups')->latest()->first();
        return view('Auth\verification', ['data' => $data]);
    }
    public function ShowAboutPage() 
    {
$data = DB::table('setups')->latest()->first();
return view('FrontEnd/about', ['data' => $data]);
}
public function ShowEducationPage() 
{
$data = DB::table('setups')->latest()->first();
return view('FrontEnd/education', ['data' => $data]);
}
public function ShowContactPage() 
{
$data = DB::table('setups')->latest()->first();
return view('FrontEnd/contact', ['data' => $data]);
}
public function ShowJewelryPage() 
{
$data = DB::table('setups')->latest()->first();
return view('FrontEnd/jewelry', ['data' => $data]);
}
public function ShowTermsConditionPage() 
{
$data = DB::table('setups')->latest()->first();
return view('FrontEnd/termscondition', ['data' => $data]);
}
public function ShowReturnPolicyPage() 
{
$data = DB::table('setups')->latest()->first();
return view('FrontEnd/ReturnPolicy', ['data' => $data]);
}


}
