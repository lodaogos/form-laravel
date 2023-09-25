<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/result.css" rel="stylesheet">
    <title>Result</title>
</head>
<body>
    <div id="result-container">
        <div class="output">Email: {{ $results['email'] }}</div>
        <div class="output">Password: {{ $results['password'] }}</div>
        <div class="output">Name: {{ $results['name'] }}</div>
        <div class="output">Color: {{ $results['color'] }}</div>
        <div class="output">Hobby: {{ $results['hobby'] }}</div>
        <div class="output">Double: {{ $results['double'] }}</div>
        <img src="{{ asset('storage/images/'.$results['image']) }}" style="height: 300px;width: 300px;">
        <div id="status">{{ $status }}</div>
    </div>
</body>
</html>