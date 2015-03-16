<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

	public function seminars()
	{
		return view('seminars');
	}

	public function seminar()
	{
		return view('seminar');
	}

	public function services()
	{
		return view('services');
	}

	public function lektors()
	{
		return view('lektors');
	}

	public function feedback()
	{
		return view('feedback');
	}

	public function contacts()
	{
		return view('contacts');
	}

	public function mailsend()
	{
		$ura = isset($_POST['uri']) ? " - совпадает с юридическим " :"";
	    $ust = isset($_POST['ustav']) ? " устава " : "";
	    $pol = isset($_POST['polozhenie']) ? " положения " : "";

	    $content = "
	    Семинар: {$_POST['seminar']} \n\n
	    1. Организация: {$_POST['org-name']} \n
	        Название организации (краткое): {$_POST['org-short']} \n
	        ИНН: {$_POST['inn']} \n
	        КПП: {$_POST['kpp']} \n\n
	        Почтовый адрес: {$_POST['zip-code']}, {$_POST['region']}, {$_POST['city']}, {$_POST['street']}, {$_POST['home']}" .  $ura . " \n\n
	    2. Руководитель (для оформления договора): {$_POST['fio']} \n
	        Должность: {$_POST['post']} \n
	        Руководитель действует<br /> на основании: " .  $ust  . $pol . "\n
	    3. Количество участников семинара: {$_POST['amount']} \n
	    4. Контактные лицо: {$_POST['contact-name']} \n
	        Должность: {$_POST['contact-post']} \n
	        email: {$_POST['contact-email']} \n
	        Телефон: {$_POST['contact-phone']} \n
	    5. Комментарий: {$_POST['comment']} \n";

	    $data['content'] = $content;

	    Mail::send('emails.apply', $data, function($message)
		{
		    $message->from('noreply@global-tender.ru', 'Заявка :: "Глобал Тендер"');
		    //$message->to('thedamaxstudio@gmail.com')->cc('global-tender@mail.ru');
                    $message->to('ihptru@gmail.com')->cc('PoIg@gendalf.ru');
		});
	}
}
