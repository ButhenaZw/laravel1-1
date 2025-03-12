<a href="{{ route('posts.create') }}" class="btn btn-primary">+ إضافة منشور جديد</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>العنوان</th>
        <th>المحتوى</th>
        <th>المستخدم</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->user->name }}</td>
    </tr>
    @endforeach
</table>
