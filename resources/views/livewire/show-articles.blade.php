<div>
	<table>
		<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th></th>
		</tr>
		</thead>

		<tobdy>
			@foreach($articles as $article)
				<tr wire:key="{{ $article->id }}">
					<td>{{ $article->id }}</td>
					<td>{{ $article->name }}</td>
					<td><a href="{{ route('articles.edit', $article->id) }}">Edit</a></td>
				</tr>
			@endforeach
		</tobdy>
	</table>
</div>