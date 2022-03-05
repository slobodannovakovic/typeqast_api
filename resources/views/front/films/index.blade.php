<h1>radi</h1>

@forelse($films as $film)
<p>{{ $film['title'] }}</p>
@empty
<p>No films</p>
@endforelse