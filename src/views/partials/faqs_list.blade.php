@if (!$faqs->isEmpty())
    <div class="faq">
	@if (Config::get('laravel-simple-faqs::show_questions_at_top'))
		<ul class="faq--nav">
			@foreach ($faqs as $faq)
			<li><a href="#{{ $faq->slug }}">{{ $faq->question }}</a></li>
			@endforeach
		</ul>
	@endif
	@foreach ($faqs as $faq)
		<div class="faq--item">
			<h2 id="{{ $faq->slug }}">{{ $faq->question }}</h2>
			{{ $faq->answer }}
			<p class="faq--top-link"><a href="#top">Back to top</a></p>
		</div>
	@endforeach
	</div>
@else
	<p>There aren't any FAQs at the moment.</p>
@endif