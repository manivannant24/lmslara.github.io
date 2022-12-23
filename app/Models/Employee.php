<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    protected $guarded = [];

    use HasFactory;
    protected $table = "filter";

    protected $fillabe = ["id","country","state","created_at","updated_at","empsize"];
    public static function getEmployee(Request $request)
    {
        //$records = DB::table("filter")->select("id","country","state","created_at","updated_at","empsize")->get()->toArray();
        $country=$request->country;
        $fromdate=$request->fromdate;
        $todate=$request->todate;
        $state=$request->state;
        $empsize=$request->Empsize;
        
        $records= DB::table('filter')->where('country',$country)->where('state',$state)->where('empsize',$empsize)->whereDate('created_at','>=', [$fromdate],'&&','updated_at','<=', [$todate])->get() ; 
        
        return $records;
    }
}