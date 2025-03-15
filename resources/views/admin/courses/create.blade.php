<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 320px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input, select {
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn {
            background: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }

        .btn:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Course</h2>
        <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Course Name:</label>
            <input type="text" id="name" name="name" required>
        
            <label for="price">Price ($):</label>
            <input type="number" id="price" name="price" required>
        
            <label for="schedule">Class Frequency:</label>
            <select id="schedule" name="schedule" required>
                <option value="1">1 time a week</option>
                <option value="2">2 times a week</option>
                <option value="3">3 times a week</option>
                <option value="4">4 times a week</option>
                <option value="5">5 times a week</option>
                <option value="6">6 times a week</option>
                <option value="7">7 times a week</option>
            </select>
        
            <label for="image">Upload Course Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
        
            <button type="submit" class="btn">Save Course</button>
        </form>
        
        
    </div>
</body>
</html>
