<h2>إضافة مستخدم جديد</h2>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label>الاسم:</label>
    <input type="text" name="name" required><br><br>

    <label>البريد الإلكتروني:</label>
    <input type="email" name="email" required><br><br>

    <label>رقم الهاتف:</label>
    <input type="text" name="phone_number" required><br><br>
    <label>كلمة المرور:</label>
    <input type="password" name="password" required><br><br>
    
    <button type="submit">حفظ</button>
</form>
