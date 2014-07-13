<?php
class CheckController extends Controller{
    public function addCheckinLog(){

        $email = trim(Input::get('email'));
        $validator = Validator::make(['email'=>$email],['email'=>['email','required']]);
        if($validator->fails()){
            return $validator->messages()->first();
            // dd($validator);
        }
        if(Namelist::exist($email)){
            if(!Check::exist($email)){
                Check::add($email);
                return '簽到成功';
            }else{
                return '請勿重複簽到';
            }
        }else{
            return '查無此人';
        }
    }
}