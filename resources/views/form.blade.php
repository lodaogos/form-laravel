<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="/css/form.css" rel="stylesheet">
    <title>Simple Form</title>
</head>
<body>
    <div id="form-container">
        <form method="POST" action="/form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                @error('email')
                <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                @error('password')
                <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                @error('name')
                <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="favoriteColor">Favorite Color</label>
                <input type="text" class="form-control" id="favoriteColor" placeholder="Enter favorite color" name="color">
                @error('color')
                <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="hobby">Hobby</label>
                <input type="text" class="form-control" id="hobby" placeholder="Enter hobby" name="hobby">
                @error('hobby')
                <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="doubleValue">Double Value</label>
                <input type="text" class="form-control" id="doubleValue" placeholder="Enter a double value" name="double">
                @error('double')
                <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="image">Upload Image:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @error('image')
                <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <button id="button1" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>