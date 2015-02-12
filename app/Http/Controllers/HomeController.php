<?php namespace Portfolio\Http\Controllers;

use Carbon\Carbon;
use Portfolio\Http\Requests\SendMessageRequest;

class HomeController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$portfolioStarted = Carbon::create(2014, 5, 4);
		$today = Carbon::now();

		$daysSincePortfolioCreated = $today->diffInDays($portfolioStarted);

		//3 cups of coffee a day keeps the doctor away
		$cupsOfCoffee = $daysSincePortfolioCreated * 3;

		//50 lines of code per day
		//sometimes more, sometimes less
		$linesOfCode = $daysSincePortfolioCreated * 50;

		return view('home')->with(
			[
				'cupsOfCoffee' => $cupsOfCoffee,
				'linesOfCode' => $linesOfCode
			]

		);
	}

	public function contact(SendMessageRequest $request)
	{
		$name = $request->input('name');
		$subject = $request->input('subject');
		$email = $request->input('email');

		\Mail::send('emails.contact', ['text' => $request->input('message')], function($message) use ($name, $subject, $email)
		{
			$message->from($email, $name);
			$message->to(\Config::get('social.email'))->subject($subject);
		});

		return redirect('/#contact')->with('message', "Your message was sent. I'll get back to you as soon as possible");
	}

}
