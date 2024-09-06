<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Library</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0e0e0; /* Ash Background */
            color: #333; /* Dark Text for Contrast */
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #0073e6; /* Blue */
            padding: 15px;
            color: white;
            text-align: center;
            position: relative;
        }

        .navbar h1 {
            margin: 0;
        }

        .navbar .logout-button {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #d32f2f; /* Red */
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .navbar .logout-button:hover {
            background-color: #b71c1c; /* Darker Red */
        }

        .container {
            padding: 40px;
        }

        h2 {
            color: #40e0d0; /* Aqua Green */
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #ffffff; /* White background for the table */
        }

        table, th, td {
            border: 1px solid #ddd; /* Light Gray Border */
        }

        th, td {
            padding: 8px; /* Reduced padding */
            text-align: left;
        }

        th {
            background-color: #4a148c; /* Dark Violet */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5; /* Light Gray */
        }

        th, td {
            min-width: 100px; /* Minimum width for columns */
        }

        th:nth-child(1) { min-width: 150px; } /* Title column */
        th:nth-child(2) { min-width: 150px; } /* Author column */
        th:nth-child(3) { min-width: 150px; } /* Publisher column */
        th:nth-child(4) { min-width: 120px; } /* Year Published column */
        th:nth-child(5) { min-width: 150px; } /* Actions column */

        button {
            padding: 8px 16px; /* Reduced button size */
            background-color: #40e0d0; /* Aqua Green */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #33c2b5; /* Darker Aqua Green */
        }

        .add-book {
            text-align: right;
            margin-bottom: 20px;
        }

        .icon {
            font-size: 20px; /* Adjusted icon size */
            cursor: pointer;
            background: none;
            border: none;
            color: #40e0d0; /* Aqua Green */
        }

        .icon:hover {
            color: #33c2b5; /* Darker Aqua Green */
        }

        .delete-icon {
            color: #d32f2f; /* Red */
        }

        .delete-icon:hover {
            color: #b71c1c; /* Darker Red */
        }
    </style>
    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="navbar">
        <h1>BOOK LIST</h1>
        <form method="POST" action="/logout" style="display: inline;">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>

    <div class="container">
        {{-- <h2></h2> --}}

        <div class="add-book">
            <button onclick="window.location.href='/book/create'">Add New Book</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Year Published</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->publisher }}</td>
                        <td>{{ $book->year_published }}</td>
                        <td>
                            <button class="icon" onclick="window.location.href='/book/{{ $book->id }}/edit'">
                                <i class="fas fa-edit"></i> <!-- Edit icon -->
                            </button>
                            <form action="/book/{{ $book->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="icon delete-icon">
                                    <i class="fas fa-trash-alt"></i> <!-- Delete bin icon -->
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
