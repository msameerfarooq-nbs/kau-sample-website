<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KAU Faculty Websites</title>
    <style>
        body { font-family: "Segoe UI", Roboto, Arial, sans-serif; background:#f5f7fa; color:#2c3e50; margin:0; padding:0; }
        .container { max-width: 1000px; margin:50px auto; background:#fff; padding:40px; border-radius:10px; box-shadow:0 10px 30px rgba(0,0,0,0.08);}
        h1 { color:#0b5ed7; margin-bottom:20px; }
        table { width:100%; border-collapse: collapse; margin-top:20px; }
        table th, table td { padding:12px; border:1px solid #ddd; text-align:left; }
        table th { background:#0b5ed7; color:#fff; }
        a { color:#0b5ed7; text-decoration:none; font-weight:bold; }
        a:hover { text-decoration:underline; }
        footer { text-align:center; margin-top:40px; font-size:14px; color:#868e96; }
    </style>
</head>
<body>
<div class="container">
    <h1>KAU Faculty Websites</h1>

    <form method="GET">
        <label>Select Language:</label>
        <select name="lang" onchange="this.form.submit()">
            <option value="en" {{ $language === 'en' ? 'selected' : '' }}>English</option>
            <!-- add more languages if needed -->
        </select>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Language</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($faculties as $faculty)
                <tr>
                    <td>{{ $faculty->id }}</td>
                    <td>{{ $faculty->code }}</td>
                    <td>{{ $faculty->name }}</td>
                    <td>{{ $faculty->language }}</td>
                    <td>
                        <a href="{{ route('faculty.profile', [$faculty->language, $faculty->code]) }}">View Profile</a>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No faculties found</td></tr>
            @endforelse
        </tbody>
    </table>

    <footer>© {{ date('Y') }} King Abdulaziz University – Faculty Websites</footer>
</div>
</body>
</html>
