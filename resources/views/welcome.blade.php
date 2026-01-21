<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrekZone | Home</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); color: #333; }
        header { background: linear-gradient(135deg, #2f6f4e 0%, #1e4620 100%); color: white; padding: 20px 30px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15); position: sticky; top: 0; z-index: 100; }
        header h2 { font-size: 28px; font-weight: 700; letter-spacing: 1px; }
        nav { display: flex; gap: 30px; }
        nav a { color: white; text-decoration: none; font-weight: 500; transition: all 0.3s ease; padding: 8px 15px; border-radius: 4px; }
        .hero { text-align: center; padding: 100px 40px; background: linear-gradient(135deg, #2f6f4e 0%, #1e4620 100%); color: white; position: relative; }
        .hero h1 { font-size: 48px; margin-bottom: 15px; font-weight: 800; }
        .hero p { font-size: 20px; margin-bottom: 30px; opacity: 0.95; }
        .hero button { background: linear-gradient(135deg, #f28c28 0%, #ff6b35 100%); border: none; padding: 15px 40px; color: white; cursor: pointer; font-size: 16px; font-weight: 600; border-radius: 8px; }
        .products { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; padding: 60px 30px; max-width: 1200px; margin: 0 auto; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); position: relative; }
        .card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #f28c28, #ff6b35); border-radius: 12px 12px 0 0; }
        .card h3 { font-size: 22px; color: #2f6f4e; margin: 10px 0; }
        .card p { color: #666; margin-bottom: 15px; font-size: 14px; }
        .card b { font-size: 24px; color: #f28c28; display: block; font-weight: 700; }
        footer { text-align: center; padding: 30px; background: #222; color: white; margin-top: 40px; }
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

<section class="hero">
    <h1>Explore More, Worry Less</h1>
    <p>Premium Camping & Hiking Equipment</p>
    <button onclick="window.location.href='/collection'">Shop Now</button>
</section>

<section class="products">
    @forelse($featuredProducts as $product)
        <div class="card">
            <h3>{{ $product->name }}</h3>
            <p>{{ \Illuminate\Support\Str::limit($product->description, 60) }}</p>
            <b>{{ number_format($product->price, 2) }} MAD</b>
        </div>
    @empty
        <p>No featured products available at the moment.</p>
    @endforelse
</section>

<footer>© 2026 TrekZone</footer>

</body>
</html>