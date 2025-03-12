<h2>إضافة منشور جديد</h2>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label>عنوان المنشور:</label>
    <input type="text" name="title" required><br><br>

    <label>المحتوى:</label>
    <textarea name="content" required></textarea><br><br>

    <label>المستخدم:</label>
    <select name="user_id" required>
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">حفظ</button>
</form>
