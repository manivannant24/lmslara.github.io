<?php

namespace App\Http\Controllers;
use App\Http\Auth\ForgotPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\EmployeeImport;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Excel;
use App\Models\cus;
use Session;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
//use App\Models\File;









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
    // public function index()
    // {
    //     return view('');
    // }
   
    
    public function filter(Request $request)
    {
        $ucountry=$request->search;
        $paginate=$request->pagin;
       
        $dta=DB::table('filter')
        ->where('country',$ucountry)
        ->paginate(200);
          //echo($ucountry);
          //print($ucountry);
        return view('leadsearch')->with([ 'dta'=> $dta]);
        
    }
    public function filter2(Request $request)
    {
        $dta=DB::table('filter')
        ->where('country','sss')
        ->paginate(500);
        return view('leadsearch')->with([ 'dta'=> $dta]);
    }

    public function prac(Request $req){
        $cus=new cus;
        $cus->productname='cloth';
        $cus->price='30';
        $cus->itemscount='2';
        $cus->save();
        return $cus;
    }

    public function addcountry(Request $request){
        $country=$request->country;
        $state=$request->state;
        if (DB::table('filter')->where('country',$country )->orWhere('state',$state )->exists()) {
            echo "already in db try newone..";
        }else{
        DB::table('filter')->insert(['country'=>$country,'state'=>$state]);
        return back()->with('success','Country added');
        }
    }

    public function addcategory(Request $request){
        $country=$request->country;
        $state=$request->state;
        if (DB::table('filter')->where('country',$country )->orWhere('state',$state )->exists()) {      
            echo "it's already exists..pls try new one..";
        }else{
        DB::table('filter')->insert(['country'=>$country,'state'=>$state]);        
        return redirect('addcategory')->with('success','category added');
        }
    }

    public function importForm()
    {
        return view('import-form');
    }

    public function import(Request $req)
    {
      
        Excel::import(new EmployeeImport,$req->file('file')->store('files'));
    
        return back()->with('success','upload success'); 
          

    }
    public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);
        $fileModel = new Employee;
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            dd($fileModel);
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
   }
    public function adminHome()
    {
        return view('admin');
    }

    public function exportintoexcel()
    {
        
        return Excel::download(new EmployeeExport,'employeelist.xlsx');
    }

    public function update($id){
        $n=DB::table('filter')->find($id);
        //$n=DB::select("select * from filter where id='$id'");
        return view('update',['varr'=>$n]);
        //return $n;
    }

    public function updatesave(Request $request){
        $id= $request->id;
        $country= $request->country;
        $state= $request->state;
        DB::table('filter')->where(['id'=>$id])->update(['country'=>$country,'state'=>$state]);
        
        return back()->with('success','update success');
    }

    public function delete(Request $request){
        //return $request->id;
        DB::table('filter')->delete($request->id);
        Session::flash('message','delete record success');
        return back()->with('warning','Deleted success');
    }
    public function home(Request $request){
        $v=DB::table('filter')->distinct()->get(['country']);
        //$w=DB::table('filter')->selectRaw('select DISTINCT country,id from filter GROUP BY country');
         $w=DB::table('filter')->get('id');
        $data="";
        
        //dd($nw);
       foreach($v as $val)
       {
           $data.="['".$val->country."'],";
               
           
       }
       $chardata=$data;
       return view('home',['chardata'=>$chardata]);
    }

    public function filteranddownload(Request $request){
        $country=$request->country;
        $fromdate=$request->fromdate;
        $todate=$request->todate;
        $state=$request->state;
        $empsize=$request->Empsize;
        
        $data= DB::table('filter')->where('country',$country)->where('state',$state)->where('empsize',$empsize)->whereDate('created_at','>=', [$fromdate],'&&','updated_at','<=', [$todate])->paginate(5) ; 
        $ez=DB::table('filter')->distinct()->get(['empsize']);
        $cy=DB::table('filter')->distinct()->get(['country']);
        $st=DB::table('filter')->distinct()->get(['state']);
       // $full=DB::table('filter')->select('country','state','empsize')->distinct()->get(); 
      // print_r($full) ;  
            return view('filterpage',['data'=>$data,'ez'=>$ez,'cy'=>$cy,'st'=>$st]);

    }
    public function pro(Request $request){
        $password=$request->cp;
        $name=$request->name;
        $newpwd=$request->np;
        $cnfpwd=$request->confirm;
        $id= DB::table('users')->where('name',$name)->get('id');
             

       if(!empty($newpwd)){
        if($newpwd==$cnfpwd)
        {
            
            User::find(auth()->user()->id)->update(['password'=> Hash::make($newpwd)]);
            Session::flash('message', 'Password change successfully'); 
        
        }
        else{
            Session::flash('message', 'mismatch'); 
           
        }
    }else{
           //print(' password should not mt ');
    }
      
       
  return view('profile');
 }
 public function map(Request $req){
    $v=DB::table('filter')->distinct()->get(['country']);
    //$w=DB::table('filter')->selectRaw('select DISTINCT country,id from filter GROUP BY country');
     $w=DB::table('filter')->get('id');
    $data="";
    
    //dd($nw);
   foreach($v as $val)
   {
       $data.="['".$val->country."'],";
           
       
   }
   $data2="";
   foreach($w as $val)
   {
       $data2.="['".$val->id."'],";
           
       
   }

//dd($w);
    $chardata=$data;
    $chardata2=$data2;
   // dd($chardata2);
//dd($chardata2);
    return view('leadtakenanalysis',compact('chardata','chardata2','data2'));
}
public function ls(Request $request)
{
    //Paginator::useBootstrap();
    //$ucountry=$request->search;
    $dta=DB::table('filter')
    ->where('country','us')
    ->paginate(3);
    
    //print $request->paginate;
    return view('ls');    
}
public function Chartjs(){

    $Events=array();
 $lta=DB::table('lta')->get('*');
   foreach($lta as $lt)
    $Events []=[
                            
                           "title" => $lt->name,
                           "start" => $lt->date,
                
            
    ];
   
    return view('lta',['Events' => $Events]);
}

  
}
 
 