@extends('laravel-simple-faqs::layouts.master')

@section('title')
	{{ Config::get('laravel-simple-faqs::page_title') }}
@endsection

@section('meta_description')
	{{ Config::get('laravel-simple-faqs::meta_description') }}
@endsection

@section('meta_keywords')
	{{ Config::get('laravel-simple-faqs::meta_keywords') }}
@endsection

@section('content')
	@if (!empty($faqs))
		@if (Config::get('laravel-simple-faqs::show_questions_at_top'))
			<ul class="faq-questions">
			@foreach ($faqs as $faq)
				<li><a href="#{{ $faq->slug }}">{{ $faq->question }}</a></li>
			@endforeach
			</ul>
		@endif
		@foreach ($faqs as $faq)
			<div>
				<h2 id="{{ $faq->slug }}">{{ $faq->question }}</h2>
				{{ $faq->answer }}
				<p class="top"><a href="#top">Back to top</a></p>
			</div>
		@endforeach
	@else
		<p>There aren't any FAQs at the moment.</p>
	@endif
@stop