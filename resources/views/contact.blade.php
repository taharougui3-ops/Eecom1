<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact | TrekZone</title>

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
    margin-bottom: 30px;
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

form {
    margin-top: 30px;
    display: flex;
    flex-direction: column;
}

input, textarea {
    width: 100%;
    margin: 15px 0;
    padding: 15px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-family: inherit;
    font-size: 14px;
    transition: all 0.3s ease;
}

input:focus, textarea:focus {
    outline: none;
    border-color: #2f6f4e;
    box-shadow: 0 0 0 3px rgba(47, 111, 78, 0.1);
    transform: translateY(-2px);
}

textarea {
    resize: vertical;
    min-height: 120px;
}

button {
    background: linear-gradient(135deg, #f28c28 0%, #ff6b35 100%);
    border: none;
    padding: 15px 30px;
    color: white;
    font-size: 16px;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 10px;
    box-shadow: 0 4px 15px rgba(242, 140, 40, 0.3);
}

button:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(242, 140, 40, 0.4);
}

button:active {
    transform: translateY(-1px);
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
    <h2>Contact Us</h2>
    <p>Email: contact@trekzone.ma</p>
    <p>Phone: +212 6 00 00 00 00</p>

    <form onsubmit="sendMsg(event)">
        <input type="text" placeholder="Your name" required>
        <input type="email" placeholder="Your email" required>
        <textarea placeholder="Your message"></textarea>
        <button>Send</button>
    </form>
</section>

<script>
function sendMsg(e){
    e.preventDefault();
    alert("Message sent (demo)");
}
</script>

</body>
</html>
