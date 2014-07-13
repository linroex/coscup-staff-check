<?php
class Namelist extends Eloquent{
    protected $table = 'namelist';
    protected $guarded = ['id'];

    
    public static function exist($email){
        if(self::where('email','=',trim($email))->count() >= 1){
            return True;
        }else{
            return False;
        }
        
    }
}