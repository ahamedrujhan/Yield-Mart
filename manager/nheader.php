<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="header.css">
    <title>Yield Mart </title>
</head>
<style>
    :root {
        --color-primary: #1b3629;
        --color-primary-dark: #2f664b;
        --color-primary-dark-2: #334e65;

        --color-white: #eee;
        --color-black: #0f0f0f;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Roboto', sans-serif;
    }

    header {
        display: flex;
        position: relative;
        left: 70px;
        justify-content: space-between;
        padding: 10px 5%;
        background-color: #2d4a3f;
    }

    .logo {
        font-size: 30px;
        color: var(--color-white);
        position: relative;
        align-items: center;

    }


    nav ul {
        display: flex;
        position: relative;
        top: 20%;

    }

    nav ul li {
        list-style: none;
    }

    nav ul li a {
        padding: 0 40px;
        text-decoration: none;
        font-size: 15px;
        text-transform: capitalize;
        color: var(--color-white);
        transition: all .2s ease;
    }

    nav ul li a:hover {
        color: var(--color-primary);
    }


    .btn {
        font-size: 15px;
        color: var(--color-white);
        text-decoration: none;
        text-transform: capitalize;
        padding: 10px 20px;
        border-radius: 10vh;
        transition: all .2s ease;
    }

    .btn-1 {
        margin-right: 0px;
        background-color: var(--color-primary);
        border: 2px solid transparent;
    }

    .btn-1:hover {
        border: 2px solid var(--color-primary);
        background-color: transparent;
    }

    .btn-2 {
        border: 2px solid var(--color-primary);
    }

    .btn-2:hover {
        border: 2px solid transparent;
        background-color: var(--color-primary);
    }

    h1 {
        position: relative;
        font-size: 1.2rem;
        font-family: 'Averia Serif Libre', cursive;
    }
</style>

<body>
    <header>
        <div class="logo">
            <h1>Yield Mart.</h1>
        </div>

        <nav>
            <ul>

                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>

        <div class="button">
            <a href="../logout.php" class="btn btn-1">Log Out</a>

        </div>
    </header>
</body>

</html>