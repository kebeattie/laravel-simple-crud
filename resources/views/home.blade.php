<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    
</head>
<body>
    <div class="container">
        @auth 
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Log out</button>
        </form>

        <div>
            <h2>Create a New Post</h2>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="Post title" required>
                <textarea name="body" placeholder="Body content..." required></textarea>
                <button type="submit">Save Post</button>
            </form>
        </div>
        @else 
        <div class="signup-section">

            <h2>Register</h2>
            <form action="/register" method="POST">
                @csrf
                <input name="name" type="text" placeholder="Name" required/>
                <input name="email" type="email" placeholder="Email" required/>
                <input name="password" type="password" placeholder="Password" required/>
                <button type="submit">Register</button>
            </form>
        </div>
        <div class="signup-section">

            <h2>Login</h2>
            <form action="/login" method="POST">
                @csrf
                <input name="loginname" type="text" placeholder="Name" required/>
                <input name="loginpassword" type="password" placeholder="Password" required/>
                <button type="submit">Log in</button>
            </form>
        </div>
        @endauth
    </div>
</body>
</html>