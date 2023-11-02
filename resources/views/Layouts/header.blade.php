
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* styles.css */

/* Reset some default browser styles */
body, h1, h2, p {
    margin: 0;
    padding: 0;
}

/* Style the header container */
.header {
    background-color:darkolivegreen; /* Set your preferred background color */
    color: #fff; /* Text color */
    padding: 10px 0;
}

/* Style the navigation bar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Style the logo */
.logo {
    font-size: 24px;
    font-weight: bold;
}

/* Style the navigation links */
.nav-links {
    list-style: none;
}

.nav-links li {
    display: inline;
    margin-right: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #fff; /* Link text color */
    font-weight: bold;
}

.nav-links a:hover {
    text-decoration: underline;
}

</style>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="logo">Your Logo</div>
            <ul class="nav-links">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="{{route('statiques')}}">Results</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
