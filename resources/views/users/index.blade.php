<x-app-layout title="Users">
    <x-slot name=heading>Users</x-slot>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ (new \Carbon\carbon($user->published_at))->format('d m y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>