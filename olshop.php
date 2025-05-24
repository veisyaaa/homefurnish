<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Homefurnish - Olshop</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fefcf9;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background-color: white;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #333;
      font-weight: 500;
    }
    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5ede2;
      padding: 40px;
      border-radius: 20px;
      margin: 20px;
    }
    .hero-text h1 {
      font-size: 2.5em;
      color: #2a2a2a;
    }
    .hero-text p {
      font-size: 1.2em;
      margin: 10px 0;
    }
    .hero-text button {
      padding: 10px 20px;
      background-color: #7bb7ad;
      border: none;
      color: white;
      border-radius: 10px;
      font-size: 1em;
      cursor: pointer;
    }
    .categories {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin: 20px 0;
    }
    .category {
      text-align: center;
    }
    .category-icon {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background-color: #eee;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: auto;
    }
    .produk-section {
      padding: 20px;
    }
    .produk-section h2 {
      margin-bottom: 20px;
      padding-left: 20px;
    }
    .produk-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 0 20px;
    }
    .produk-card {
      background: white;
      border-radius: 16px;
      padding: 16px;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }
    .produk-card img {
      width: 100%;
      border-radius: 10px;
    }
    .produk-card button {
      margin-top: 10px;
      background-color: #7bb7ad;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 8px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo"><strong>Homefurnish</strong></div>
    <nav>
      <a href="#">Home</a>
      <a href="#">Produk</a>
      <a href="#">Promo</a>
    </nav>
    <div class="icons">
      <span>🛒</span>
      <span>👤</span>
    </div>
  </header>

  <div class="hero">
    <div class="hero-text">
      <h1>Diskon Akhir Tahun!</h1>
      <p>Nikmati diskon spesial untuk berbagai produk</p>
      <button>Belanja Sekarang</button>
    </div>
    <div class="hero-img">
      <img src="https://i.imgur.com/fashion.png" alt="fashion" width="250">
    </div>
  </div>

  <div class="categories">
    <div class="category">
      <div class="category-icon">🪑</div>
      <p>Baju</p>
    </div>
    <div class="category">
      <div class="category-icon">🍳</div>
      <p>Tas</p>
    </div>
    <div class="category">
      <div class="category-icon">🛏️</div>
      <p>Celana</p>
    </div>
    <div class="category">
      <div class="category-icon">🗄️</div>
      <p>Sepatu</p>
    </div>
  </div>

  <div class="produk-section">
    <h2>Produk Unggulan</h2>
    <div class="produk-grid">
      <div class="produk-card">
        <img src="https://i.imgur.com/kursimodern.png" alt="Kursi Modern">
        <h3>Kursi Modern</h3>
        <p>Rp 1.200.000</p>
        <button>Add to Cart</button>
      </div>
      <div class="produk-card">
        <img src="https://i.imgur.com/mejakayu.png" alt="Meja Kayu">
        <h3>Meja Kayu</h3>
        <p>Rp 850.000</p>
        <button>Add to Cart</button>
      </div>
      <div class="produk-card">
        <img src="https://i.imgur.com/nakasi.png" alt="Nakasi Minimalis">
        <h3>Nakasi Minimalis</h3>
        <p>Rp 450.000</p>
        <button>Add to Cart</button>
      </div>
      <div class="produk-card">
        <img src="https://i.imgur.com/tempattidur.png" alt="Tempat Tidur">
        <h3>Tempat Tidur Kayu</h3>
        <p>Rp 2.500.000</p>
        <button>Add to Cart</button>
      </div>
    </div>
  </div>
</body>
</html>
