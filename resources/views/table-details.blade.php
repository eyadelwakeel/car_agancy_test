

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            font-size: 2.2rem;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background-color: #ecf0f1;
            margin: 10px 0;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }
        ul li:nth-child(odd) {
            background-color: #bdc3c7;
        }
        ul li p {
            margin: 0;
            padding: 5px 0;
            font-size: 1.1rem;
            color: #34495e;
        }
        .no-data {
            text-align: center;
            font-size: 1.2rem;
            color: #e74c3c;
        }
    </style>
</head>
<body>


<h1>{{ ucfirst($table) }} Table Data</h1>

@if(isset($data) && count($data) > 0)
    <ul>
        @foreach($data as $row)
            <li>
                @foreach($row->toArray() as $key => $value)
                    {{ $key }}: {{ $value }}
                @endforeach
            </li>
        @endforeach
    </ul>
@else
    <p>No data found in this table.</p>
@endif

</body>
</html>







