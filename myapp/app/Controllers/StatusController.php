<?php

namespace App\Controllers;

class StatusController extends BaseController
{
    	public function __construct()
    {
        helper('app');
    }
    public function index()
    {
		$data['records']	=  db('status')->orderBy('id', 'DESC')->get()->getResult();
        return view('status/home',$data);
    }
}
