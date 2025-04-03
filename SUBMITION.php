<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit a Service - Mucyo Online Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav {
            background-color: #444;
            overflow: hidden;
        }
        .service-container {
            padding: 20px;
            background-color: white;
            width: 50%;
            margin: 50px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<header>
    <h1>Submit a Service - Mucyo Online Services</h1>
</header>

<nav>
    <a href="home.html">Home</a>
    <a href="account.html">Account</a>
    <a href="login.html">Log In</a>
</nav>

<div class="service-container">
    <h2>Choose a Service</h2>
    <form action="submit_service.php" method="POST">
        <label for="service">Select Service:</label>
        <select id="service" name="service">
            <option value="job_application">Job Application</option>
            <option value="scholarship">Scholarship Application</option>
            <option value="photo_shoot">Photo Shoot</option>
            <option value="declaration">Declaration Services</option>
        </select><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br>

        <button type="submit">Submit Service</button>
    </form>
</div>

</body>
</html>

