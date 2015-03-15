<?php namespace App\Http\Controllers;

use App\User;
use App\City;
use App\Seminar;
use App\Description;

use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
	public function seminars()
	{
		return view('auth/seminars');
	}
	public function seminars_add()
	{
		$cities = City::all();
		return view('auth/seminars_add', array('cities' => $cities));
	}
	public function cities()
	{
		$cities = City::all();
		return view('auth/cities', array('cities' => $cities));
	}
	public function cities_add()
	{
		return view('auth/cities_add');
	}
	public function cities_add_post()
	{
		$path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
		if(!is_dir($path)) {
			mkdir($path);
		}
		$photo = $_FILES['photo'];
		$ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
		$tmp = $photo['tmp_name'];
		$newname = date('Ymd') . "." . rand(10000,99999) . "." . $ext;
		move_uploaded_file($tmp, $path.$newname);
		$city = new City;
		$city->name = $_POST['name'];
		$city->photo = $newname;
		$city->save();
		return redirect('admin/cities');
	}
	public function cities_edit($id)
	{
		$city = City::find($id);
		return view('auth/cities_edit', array('city' => $city));
	}
	public function cities_edit_post()
	{
		$city = City::find($_POST['id']);
		$city->name = $_POST['name'];
		if($_FILES['photo']['error'] == 0) {
			$path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			if(!is_dir($path)) {
				mkdir($path);
			}
			$photo = $_FILES['photo'];
			$ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
			$tmp = $photo['tmp_name'];
			$newname = date('Ymd') . "." . rand(10000,99999) . "." . $ext;
			move_uploaded_file($tmp, $path.$newname);
			$city->photo = $newname;
		}
		$city->save();
		return redirect('admin/cities');
	}
	public function cities_rm()
	{
		$city = City::find($_POST['id']);
		$city->delete();
		return redirect('admin/cities');
	}
	public function descriptions()
	{
		$descriptions = Description::all();
		return view('auth/descriptions', array('descriptions' => $descriptions));
	}
	public function feedbacks()
	{
		return view('auth/feedbacks');
	}

}
