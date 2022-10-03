@php
    $index = 1;
@endphp
<div class="overflow-x-auto">
  <table class="table table-zebra w-full">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Nom</th>
        <th>E-mail</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
            <tr>
                <th>{{ $index++ }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d/m/Y') }}</td>
            </tr>
        @empty
            <tr>
                <td>Pas de users</td>
            </tr>
        @endforelse
    </tbody>
  </table>
</div>