<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>About | TrekZone</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    min-height: 100vh;
    color: #333;
}

header {
    background: linear-gradient(135deg, #2f6f4e 0%, #1e4620 100%);
    color: white;
    padding: 20px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    position: sticky;
    top: 0;
    z-index: 100;
}

header h2 {
    font-size: 28px;
    font-weight: 700;
    letter-spacing: 1px;
}

nav {
    display: flex;
    gap: 30px;
}

nav a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    padding: 8px 15px;
    border-radius: 4px;
    position: relative;
}

nav a:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-2px);
}

nav a::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: #f28c28;
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

nav a:hover::after {
    width: 80%;
}

section {
    padding: 60px;
    background: white;
    margin: 40px auto;
    border-radius: 12px;
    max-width: 900px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    animation: slideUp 0.6s ease-out;
}

section h2 {
    font-size: 36px;
    color: #2f6f4e;
    margin-bottom: 25px;
    font-weight: 700;
    position: relative;
    padding-bottom: 15px;
}

section h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, #f28c28, #ff6b35);
    border-radius: 2px;
}

section p {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
    margin: 15px 0;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
</head>

<body>

<header>
    <h2>TrekZone</h2>
    <nav>
        <a href="/">Home</a>
        <a href="/collection">Collection</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
</header>

<section>
    <h2>About Us</h2>
    <p>
        TrekZone is a simple e-commerce store focused on camping and hiking
        equipment. Our mission is to help nature lovers explore safely
        with reliable products.
    </p>
</section>

</body>
</html>
