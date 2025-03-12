<a href="{{ route('users.create') }}" class="btn btn-primary">+ إضافة مستخدم</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>الاسم</th>
        <th>البريد الإلكتروني</th>
        <th>رقم الهاتف</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone ? $user->phone->phone_number : 'لا يوجد هاتف' }}</td>
    </tr>
    @endforeach
    
</table>
