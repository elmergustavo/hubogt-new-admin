<div>
	@if ($errors->any())
		<div {{ $attributes }} class="text-center">
			{{-- <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div> --}}

			@php
				
				$except_errors = [];
				if ($attributes['skip']) {
					foreach (explode(',', $attributes['skip']) as $skip) {
						foreach ($errors->get($skip) as $skip_message) {
							array_push($except_errors, $skip_message);
						}
					}
				}
				
			@endphp

			<ul class="mt-3 list-none text-center text-sm text-red-600 dark:text-red-400">
				@foreach (array_diff($errors->all(), $except_errors) as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
</div>
