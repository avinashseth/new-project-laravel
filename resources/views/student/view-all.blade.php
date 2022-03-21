<table>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
        </tr>
    @endforeach
    {{ $students->links() }}
</table>