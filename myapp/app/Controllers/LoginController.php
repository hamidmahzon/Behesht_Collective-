<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Files\File;

class LoginController extends BaseController
{
	public function __construct()
    {
        helper('app');
    }
	
    //protected $request;
    public function index()
    {
        return view('login/home');
    }
    
    public function logining()
    {
        
        $request    = \Config\Services::request();
        
        $record    = db('user')->where('email',$request->getPost('email'))->get()->getResult();
        if ($record && password_verify($request->getPost('password'), $record[0]->password)) 
        {
            $udata = 
            [
                'name'  => $record[0]->name,
                'email' => $record[0]->email,
                'role'  => $record[0]->role,
                'login' => true,
            ];
            sess()->set($udata);
            
            if($record[0]->reset)
            {
                return view('login/reset');
            }

            return redirect()->to('home');
        } 
        
        else 
        {
            sess()->setFlashdata('flash', "<b class='w3-text-red'>".lang('app.login_fail')."</b>");
            return redirect()->to('home');
        }
    }
    
    public function newpassword()
    {
        $request    = \Config\Services::request();
        $validation = \Config\Services::validation();

        if($request->getPost('password') == $request->getPost('rpassword') && $validation->check($request->getPost('password'), 'min_length[8]'))
        {
            
            $npassword  = password_hash($request->getPost('rpassword'), PASSWORD_DEFAULT);
            db('user')
            ->set('password', $npassword)
            ->set('reset', false)
            ->where('email', sess()->get('email'))
            ->update();
            sess()->setFlashdata('flash', "<b class='w3-text-blue'>".lang('app.opr_done')."</b>");
            return redirect()->to('/');
        }
        else
        {
            sess()->setFlashdata('flash', "<b class='w3-text-red'>".lang('app.opr_fail')."</b>");
            return redirect()->to('/');
        }     
    }
    
    public function reset()
    {
        return view('login/reset');
    }
    
    public function logout()
    {
        session()->set('login', false);
        session()->set('role', false);
        return redirect()->back();
    }
}
