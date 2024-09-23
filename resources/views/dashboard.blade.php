<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Ezz Cars Agancy</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            text-align: center;
        }
        p {
            font-size: 1.2rem;
            color: #7f8c8d;
            text-align: center;
            margin-bottom: 40px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background-color: #3498db;
            margin: 10px 0;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }
        ul li a {
            display: block;
            padding: 15px;
            text-decoration: none;
            color: #fff;
            font-size: 1.1rem;
            text-align: center;
        }
        ul li:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Al-Ezz Cars Agancy</h1>
        <p>This is the dashboard page.</p>
        <!-- يمكنك إضافة محتويات أخرى هنا -->

        







        <ul>
            @foreach($models as $key => $model)
                <li>
                    <a href="{{ route('showTable', ['table' => $key]) }}">{{ $model }}</a>
                </li>
            @endforeach
    </ul>




    </div>
</body>
</html>
