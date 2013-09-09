<?php namespace Fbf\LaravelSimpleFaqs;

use Eloquent;

class Faq extends Eloquent {

	const DRAFT = 'DRAFT';

	const APPROVED = 'APPROVED';

	protected $table = 'fbf_laravel_simple_faqs';

	public static $sluggable = array(
		'build_from' => 'question',
		'save_to' => 'slug',
		'unique' => true,
	);

}