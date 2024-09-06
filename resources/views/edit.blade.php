<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book - Library</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212; /* Dark Background */
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #1e1e1e; /* Dark Gray */
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            max-width: 600px;
            box-sizing: border-box;
        }

        h2 {
            color: #40e0d0; /* Aqua Green */
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="number"], button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 50px; /* Circular shape */
            box-sizing: border-box;
            border: 1px solid #333;
        }

        input[type="text"], input[type="number"] {
            background-color: #333; /* Dark Gray */
            color: white;
        }

        button {
            background-color: #40e0d0; /* Aqua Green */
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #33c2b5; /* Darker Aqua Green */
        }

        .back-button {
            background-color: #4a148c; /* Dark Violet */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 50px; /* Circular shape */
            cursor: pointer;
            margin-top: 20px; /* Space above the back button */
            width: 100%;
            box-sizing: border-box;
        }

        .back-button:hover {
            background-color: #3d0a6e; /* Darker Dark Violet */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Book</h2>
        <form method="POST" action="/book/{{ $book->id }}">
            @csrf
            @method('POST')
            <input type="text" name="title" value="{{ $book->title }}" required>
            <input type="text" name="author" value="{{ $book->author }}" required>
            <input type="text" name="publisher" value="{{ $book->publisher }}" required>
            <input type="number" name="year_published" value="{{ $book->year_published }}" required>
            <button type="submit">Update Book</button>
        </form>
        <button class="back-button" onclick="window.location.href='/dashboard'">Back to Dashboard</button>
    </div>
</body>
</html>
