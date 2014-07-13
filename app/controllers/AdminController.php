<?php
class AdminController extends Controller{
    public function showAdmin(){
        return View::make('admin')->with('data',Check::display());
    }
}