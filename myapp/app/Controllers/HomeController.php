<?php

namespace App\Controllers;

class HomeController extends BaseController
{
	public function __construct()
    {
        helper('app');
    }
    public function index()
    {
		$data['records']  =  db('home')->get()->getResult();
		$data['services'] =  db('services')->get()->getResult();
		$data['abouts']   =  db('about')->get()->getResult();
        return view('home/home',$data);
    }
	
	
	public function edit($sec='', $id='')
	{
        
		if(sess()->get('login'))
		{
			if($_POST)
			{
                $imageFile = $this->request->getFile('img');
                if ($imageFile && $imageFile->isValid() && $imageFile->getClientMimeType() === 'image/jpeg')
				{                    
                    $imagName   = $this->request->getVar('oimg');
				    $imageFile->move('assets/img/'.$sec,$imagName,true);
                    array_pop($_POST);
				}
                db($sec)->set($_POST)->where('id',$id)->update();
				session()->setFlashdata('flash', "<b class='w3-text-blue'>".lang('app.opr_done')."</b>");
				return redirect()->back();
			}
			else
			{
				$data['record']	=  db($sec)->where('id',$id)->get()->getResult();
				return view($sec.'/edit',$data);
			}
			
		}
		else
		{
			return redirect()->back();
		}
	}
    
    public function del($sec='',$id='')
    {
        if(auth('edit'))
		{
            if($_POST)
            {
                $img = db($sec)->where('id',$id)->get()->getResult()[0]->img;
                if($img && file_exists('assets/img/'.$sec.'/'.$img))
                {
                    unlink('assets/img/'.$sec.'/'.$img);
                }
                db($sec)->where('id', $id)->delete();
                session()->setFlashdata('flash', "<b class='w3-text-blue'>".lang('app.opr_done')."</b>");
                return redirect()->back();
            }
            else
            {
                $data['id'] = $id;
                return view($sec.'/del',$data);
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}
