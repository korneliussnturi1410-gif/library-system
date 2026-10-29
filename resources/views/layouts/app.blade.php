
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Library System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f9;
            color: #333;
        }

        header {
            background: #234e70;
            color: white;
            padding: 20px 40px;
        }

        nav {
            margin-top: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        main {
            background: white;
            max-width: 1000px;
            margin: 30px auto;
            padding: 25px;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #eaf1f7;
        }

        .cards {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .card {
            background: #eaf1f7;
            padding: 20px;
            border-radius: 8px;
            flex: 1;
            min-width: 150px;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #666;
        }
    </style>
</head>
<body>

    <header>
        <h1>Library System</h1>

        <nav>
            <a href="/dashboard">Dashboard</a>
            <a href="/books">Books</a>
            <a href="/categories">Categories</a>
            <a href="/members">Members</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Library System - Sistem Informasi Perpustakaan</p>
    </footer>

</body>
</html>
