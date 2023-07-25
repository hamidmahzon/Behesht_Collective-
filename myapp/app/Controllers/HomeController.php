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
		$data['records']	=  db('home')->get()->getResult();
        return view('home/home',$data);
    }
	
	public function add($sec=false)
    {
		if(auth('add'))
		{
			if($_POST)
			{
				if(isset($_FILES['img']['name']))
				{
					$img        = $this->request->getFile('img');
					$imagName   = $img->getRandomName();
					$imagName   = str_replace(".", "", $imagName);
					$ndata      = array('img' => $imagName);
					$data       = array_merge($_POST, $ndata);
					$img->move('assets/img/'.$sec,$imagName);
				}
				else
				{
					$data = $_POST;
				}
				db($sec)->insert($data);
        
				session()->setFlashdata('flash', "<b class='w3-text-blue'>".lang('app.opr_done')."</b>");
				return redirect()->back();
			
			}
			else
			{
				return view($sec.'/add');
			}
		}
		else
		{
			return redirect('home');
		}
    }
	
	public function edit($sec='', $id='')
	{
        
		if(auth('edit'))
		{
			if($_POST)
			{
                array_pop($_POST);
				if(isset($_FILES['img']['name']))
				{
                    $img    = $this->request->getFile('img');
                    if($this->request->getVar('oimg') != 'default')
                    {
                        $imagName   = $this->request->getVar('oimg');
                        $data = $_POST;
                    }
                    else
                    {
                        $imagName   = $img->getRandomName();
                        $imagName   = str_replace(".", "", $imagName);
                        $aimagName  = array('img' => $imagName);
                        $data       = array_merge($_POST, $aimagName);
                    }
                    
				    $img->move('assets/img/'.$sec,$imagName,true);
				}
				else
				{
					$data = $_POST;
				}
                db($sec)->set($data)->where('id',$id)->update();
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
