<?php
class Check extends Eloquent{
    protected $table = 'checkin_history';
    protected $guarded = ['id'];

    public static function add($email){
        self::create(['email'=>trim($email)]);
    }
    public static function exist($email){
        if(self::where('email','=',trim($email))->count() >= 1){
            return True;
        }else{
            return False;
        }
        
    }
    // select n.email,n.name,n.job from namelist n join checkin_history c on n.email != c.email
    public static function display(){
        // 顯示已簽到與未簽到清單
        $not_yet = [];
        foreach(DB::table('checkin_history')->select('email')->get() as $obj){
            array_push($not_yet, $obj->email);
        }
        
        $result = [
            'done'=>DB::table('namelist')->select('namelist.name','namelist.email','namelist.job')->join('checkin_history','checkin_history.email','=','namelist.email')->get(),
            'not_yet'=>DB::table('namelist')->select('namelist.name','namelist.email','namelist.job')->whereNotIn('email',$not_yet)->get()
        ];
        return $result;

    }

}