<?php

namespace App\Controllers;

class NeventsController extends BaseController
{
	public function __construct()
    {
        helper('app');
    }
    public function index()
    {
		$data['records']	=  db('nevents')->orderBy('id', 'DESC')->get()->getResult();
        return view('nevents/home',$data);
    }
	
	
    
    public function inevents($id='')
    {   
        $data['records']	=  db('nevents')->where('id <=',$id)->orderBy('id', 'DESC')->get()->getResult();
        return view('inevents/home',$data);
    }
}
