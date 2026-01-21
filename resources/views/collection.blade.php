<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrekZone | Collection</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); min-height: 100vh; color: #333; }
        header { background: linear-gradient(135deg, #2f6f4e 0%, #1e4620 100%); color: white; padding: 20px 30px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15); position: sticky; top: 0; z-index: 100; }
        header h2 { font-size: 28px; font-weight: 700; letter-spacing: 1px; }
        nav { display: flex; gap: 30px; }
        nav a { color: white; text-decoration: none; font-weight: 500; transition: all 0.3s ease; padding: 8px 15px; border-radius: 4px; }
        section { padding: 50px 30px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto; }
        .item { background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; }
        .item:hover { transform: translateY(-10px); }
        .item h3 { font-size: 22px; color: #2f6f4e; margin: 20px; }
        .item p { font-size: 14px; color: #666; margin: 0 20px 15px 20px; line-height: 1.5; }
        .item b { display: block; font-size: 24px; color: #f28c28; margin: 0 20px; font-weight: 700; }
        button { background: linear-gradient(135deg, #f28c28 0%, #ff6b35 100%); border: none; padding: 12px 25px; color: white; cursor: pointer; font-weight: 600; border-radius: 8px; margin: 20px; width: calc(100% - 40px); }
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

<section class="grid">
    @forelse($products as $product)
        <div class="item">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <b>{{ number_format($product->price, 2) }} MAD</b><br><br>
            <button onclick="alert('{{ $product->name }} added!')">Add to cart</button>
        </div>
    @empty
        <p>Our collection is currently being updated. Check back soon!</p>
    @endforelse
</section>

</body>
</html>