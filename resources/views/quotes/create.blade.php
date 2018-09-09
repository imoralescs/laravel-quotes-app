<section>
	<h1>Add a Quote</h1>
	<form method="POST" action="{{ route('createQuotePost') }}">
		<div>
			<label>Your Name</label>
			<input type="text" name="author" placeholder="Your Name" />
		</div>
		<div>
			<label>Your Quote</label>
			<textarea name="quote" id="quote" rows="5" placeholder="Quote"></textarea>
		</div>
		<button type="submit">Submit Quote</button>
		<input type="hidden" name="_token" value="{{ Session::token() }}"/>
	</form>
</section>