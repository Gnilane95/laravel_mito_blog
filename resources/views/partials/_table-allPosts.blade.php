<div class="overflow-x-auto">
  <table class="table table-zebra w-full">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Titre</th>
        <th>Date</th>
        <th>Publié</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
            <tr>
                <th>1</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at->toDateString() }}</td>
                @if ($post->is_published == 0)
                    <td>Non</td>
                @else
                    <td>Oui</td>
                @endif
            </tr>
        @empty
            <tr>
                <td>Pas de posts disponibles</td>
            </tr>
        @endforelse
    </tbody>
  </table>
</div>