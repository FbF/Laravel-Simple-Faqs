<?php

Use Fbf\LaravelSimpleFaqs\Faq;

// e.g. http://domain.com/faqs
Route::get(Config::get('laravel-simple-faqs::uri'), function() {

	$faqs = Faq::where('status', '=', FAQ::APPROVED)
		->orderBy('order', 'asc')
		->get();

	return View::make(Config::get('laravel-simple-faqs::view'), compact('faqs'));

});