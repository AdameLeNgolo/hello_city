<footer class="text-gray-400">
	&copy; copyright {{ date('Y') }} 

	@if(!Route::is('about_us'))
	&middot; <a href="{{ route('about_us') }}" class="text-indigo-500 hover:text-indigo-600 underline">About Us</a>
	@endif
</footer>