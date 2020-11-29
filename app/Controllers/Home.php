<?php namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\BeritaModel;

class Home extends BaseController
{
	public function index()
	{
		$Model=new BeritaModel();
		$berita['berita']=$Model->orderBy('id','DESC')->findAll();
		return view('welcome_message',$berita);
	}
	public function dashboard($id,$nama)
	{
		echo "Parameter yang diinput adalah = ".$id;
		return view('home_dashboard');
	}
	public function beritaopen($id = null)
	{
		$model = new BeritaModel();
		$data['berita'] = $model->where('id',$id)->first();

        return view('view_berita',$data);
	}

	//--------------------------------------------------------------------

}