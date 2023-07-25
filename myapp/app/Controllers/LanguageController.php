<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LanguageController extends BaseController
{
    public function index()
    {
        $session = session();
        $lang = $this->request->getLocale();
        if($lang == 'fa')
        {    
            $session->remove('lang');
            $session->set('lang', 'en');
        }
        else
        {
            $session->remove('lang');
            $session->set('lang', 'fa');
        }
        $url = $_SERVER['HTTP_REFERER'];
        return redirect()->to($url);
    }
    
    public function color($val)
    {
        if($val == 'white')
        {    
            session()->set('color', 'black');
        }
        else
        {
            session()->set('color', 'white');
        }
        $url = $_SERVER['HTTP_REFERER'];
        return redirect()->to($url);
    }
}
