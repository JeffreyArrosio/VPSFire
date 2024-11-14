<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <button id="logout">Logout</button>
    </header>
    DASHBOARD

    <script>
        const boton = document.getElementById("logout")

        function logout() {
            // Clear the authentication token from local storage 
            localStorage.removeItem('firebaseAuthToken');
            // Additional logout logic if needed (e.g., redirect to login page) 
            window.location.href = '/login';
        }
        boton.addEventListener('click', logout)
    </script>
</body>

</html>