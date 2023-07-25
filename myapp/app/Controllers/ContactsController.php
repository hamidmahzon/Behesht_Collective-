<?php

namespace App\Controllers;

class ContactsController extends BaseController
{
    	public function __construct()
    {
        helper('app');
    }
    public function index()
    {
		$data['records']	=  db('contacts')->orderBy('id', 'DESC')->get()->getResult();
        return view('contacts/home',$data);
    }
}
