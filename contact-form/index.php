<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
    <h1>Contact Us</h1>
        <form action="process_form.php" method="POST" autocomplete="off">
            <label for="name">Name:</label>
            <input type="text" class="input" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" class="input" name="email" required>
            
            <label for="message">Message:</label>
            <textarea class="input" name="message" rows="4" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
