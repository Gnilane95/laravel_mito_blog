@php
    $index = 1;
@endphp
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
                <th>{{ $index++ }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at->format('d/m/Y') }}</td>
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