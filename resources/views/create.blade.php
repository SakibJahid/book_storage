<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book - Library</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212; /* Black background */
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
            border-radius: 50px; /* Circular input boxes */
            box-sizing: border-box;
        }

        input[type="text"], input[type="number"] {
            background-color: #333; /* Dark Gray */
            color: white;
            border: 1px solid #333;
        }

        button {
            background-color: #40e0d0; /* Aqua Green */
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 50px; /* Circular button */
        }

        button:hover {
            background-color: #33c2b5; /* Darker Aqua Green */
        }

        .back-button {
            background-color: #4a148c; /* Dark Violet */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 50px; /* Circular button */
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }

        .back-button:hover {
            background-color: #3d0a6e; /* Darker Violet */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New Book</h2>
        <form method="POST" action="/book">
            @csrf
            <input type="text" name="title" placeholder="Title" required>
            <input type="text" name="author" placeholder="Author" required>
            <input type="text" name="publisher" placeholder="Publisher" required>
            <input type="number" name="year_published" placeholder="Year Published" required>
            <button type="submit">Add Book</button>
        </form>
        <button class="back-button" onclick="window.location.href='/dashboard'">Back to Dashboard</button>
    </div>
</body>
</html>
