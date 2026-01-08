<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KAU Faculty Websites</title>

    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background-color: #f5f7fa;
            color: #2c3e50;
            line-height: 1.7;
        }

        .container {
            max-width: 1200px;
            margin: 60px auto;
            background: #ffffff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        h1 {
            font-size: 36px;
            color: #0b5ed7;
            margin-bottom: 20px;
            border-bottom: 3px solid #e9ecef;
            padding-bottom: 10px;
        }

        p, label {
            font-size: 16px;
            color: #495057;
        }

        .highlight {
            background-color: #f1f5ff;
            padding: 20px;
            border-left: 5px solid #0b5ed7;
            margin: 30px 0;
            border-radius: 6px;
        }

        form select {
            padding: 5px 10px;
            font-size: 16px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        table th, table td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        table th {
            background-color: #0b5ed7;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        a.view-profile {
            color: #0b5ed7;
            font-weight: bold;
            text-decoration: none;
        }

        a.view-profile:hover {
            text-decoration: underline;
        }

        footer {
            margin-top: 60px;
            text-align: center;
            font-size: 14px;
            color: #868e96;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Faculty Websites</h1>

    <div class="highlight">
        <p>
            This page lists all faculties from the database. Click "View Profile" to see more details.
        </p>
    </div>

    <form method="GET">
        <label>Select Language:</label>
        <select name="lang" onchange="this.form.submit()">
            <option value="en" {{ $language === 'en' ? 'selected' : '' }}>English</option>
            <!-- Add more languages as needed -->
        </select>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Language</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Profile</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faculties as $faculty)
                <tr>
                    <td>{{ $faculty->id }}</td>
                    <td>{{ $faculty->code }}</td>
                    <td>{{ $faculty->name }}</td>
                    <td>{{ $faculty->language }}</td>
                    <td>{{ $faculty->created_at }}</td>
                    <td>{{ $faculty->updated_at }}</td>
                    <td>
                        <a class="view-profile" href="{{ route('faculty.profile', [$faculty->language, $faculty->code]) }}">
                            View Profile
                        </a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

    <footer>
        © {{ date('Y') }} King Abdulaziz University – Faculty Websites
    </footer>

</div>

</body>
</html>
