<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>16 Sản Phẩm - 4 Cột Dọc</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      display: flex;
      height: 100vh;
      font-family: Arial, sans-serif;
    }
    .menu {
      width: 250px;
      background-color: #333;
      color: white;
      padding: 20px;
      display: flex;
      flex-direction: column;
    }
    .menu h2 {
      margin-bottom: 20px;
    }
    .menu a {
      text-decoration: none;
      color: white;
      padding: 10px;
      background-color: #444;
      border-radius: 5px;
      margin-bottom: 10px;
      text-align: center;
    }
    .menu a:hover {
      background-color: #555;
    }
    .product-display {
      flex: 1;
      padding: 20px;
      background-color: #f9f9f9;
      display: grid;
      grid-template-columns: repeat(4, 1fr); /* 4 cột */
      gap: 20px; /* Khoảng cách giữa các sản phẩm */
      overflow-y: auto; /* Cuộn nếu vượt quá chiều cao màn hình */
    }
    .product-card {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      display: flex;
      flex-direction: column; /* Nội dung sản phẩm sắp xếp dọc */
      align-items: center; /* Căn giữa nội dung */
    }
    .product-card:hover {
      transform: scale(1.02);
    }
    .product-card img {
      width: 305px;
      height: 250px;
      object-fit: cover;
      margin-bottom: 10px;
      border-radius: 8px;
    }
    .product-info h3 {
      font-size: 16px;
      color: #333;
      margin-bottom: 5px;
      text-align: center;
    }
    .product-info p {
      font-size: px;
      color: #666;
      margin-bottom: 10px;
      text-align: center;
    }
    .product-info button {
      padding: 10px 15px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .product-info button:hover {
      background-color: #0056b3;
    }
    .footer {
      width: 100%;
      background-color: #333;
      color: white;
      padding: 20px;
      text-align: center;
      margin-top: 20px; /* Đẩy cách biệt giữa sản phẩm cuối */
    }
    .footer .footer-logo {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 80px;
    }
    .footer .footer-logo img {
      height: 150px;
      margin-right: 15px;
      width: 150px;
    }
    .footer .links {
      margin-bottom: 10px;
    }
    .footer .links a {
      text-decoration: none;
      color: #007bff;
      margin: 0 10px;
      transition: color 0.3s ease;
    }
    .footer .links a:hover {
      color: #0056b3;
    }
    .footer p {
      font-size: 18px;
    }
    
  </style>
</head>
<body>
  
  
 
  <!-- Phần hiển thị sản phẩm -->
  <div class="product-display">
    <!-- 16 Sản phẩm -->
    <div class="product-card">
      <img src="img/adidas1.webp" alt="Sản phẩm 1">
      <div class="product-info">
        <h3>Sản phẩm 1</h3>
        <p>500.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/adidas2.webp" alt="Sản phẩm 2">
      <div class="product-info">
        <h3>Sản phẩm 2</h3>
        <p>700.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <!-- ... CÁC SẢN PHẨM KHÁC (LẶP LẠI TƯƠNG TỰ) -->
    <!-- Tạo thêm sản phẩm bằng cách sao chép các thẻ "product-card" dưới đây -->
    <div class="product-card">
      <img src="img/addas3.jpg" alt="Sản phẩm 3">
      <div class="product-info">
        <h3>Sản phẩm 3</h3>
        <p>1.200.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/addas4.webp" alt="Sản phẩm 4">
      <div class="product-info">
        <h3>Sản phẩm 4</h3>
        <p>900.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/adidas star smith.avif" alt="Sản phẩm 5">
      <div class="product-info">
        <h3>Sản phẩm 5</h3>
        <p>950.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/caogoi2.jpg" alt="Sản phẩm 6">
      <div class="product-info">
        <h3>Sản phẩm 6</h3>
        <p>1.400.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/caogot3.jpg" alt="Sản phẩm 7">
      <div class="product-info">
        <h3>Sản phẩm 7</h3>
        <p>800.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/giay ultraboost.avif" alt="Sản phẩm 8">
      <div class="product-info">
        <h3>Sản phẩm 8</h3>
        <p>950.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/giaycaogot1.webp" alt="Sản phẩm 9">
      <div class="product-info">
        <h3>Sản phẩm </h3>
        <p>900.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/nike1.webp" alt="Sản phẩm 10">
      <div class="product-info">
        <h3>Sản phẩm 10</h3>
        <p>700.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/nike2.jpg" alt="Sản phẩm 11">
      <div class="product-info">
        <h3>Sản phẩm 11</h3>
        <p>900.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/ox1.png" alt="Sản phẩm 12">
      <div class="product-info">
        <h3>Sản phẩm 12</h3>
        <p>900.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/ox2.jpg" alt="Sản phẩm 13">
      <div class="product-info">
        <h3>Sản phẩm 13</h3>
        <p>900.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/ox3.jpg" alt="Sản phẩm 14">
      <div class="product-info">
        <h3>Sản phẩm 14</h3>
        <p>900.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <div class="product-card">
      <img src="img/puma1.webp" alt="Sản phẩm 15">
      <div class="product-info">
        <h3>Sản phẩm 15</h3>
        <p>900.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>

    <div class="product-card">
      <img src="img/puma2.webp" alt="Sản phẩm 16">
      <div class="product-info">
        <h3>Sản phẩm 16</h3>
        <p>900.000 VNĐ</p>
        <button>Mua ngay</button>
      </div>
    </div>
    <!-- Tạo đủ 16 sản phẩm -->
  </div>
  <div class="footer">
    <div class="footer-logo">
      <img src="img/logo.png" alt="Logo">
      <h4>Tiệm đôi giày@ Au_Then_Tích </h4>
    </div>
    <div class="links">
      <a href="#">Về chúng tôi</a>
      <a href="#">Chính sách bảo mật</a>
      <a href="#">Điều khoản dịch vụ</a>
    </div>
    <p>© 2025 Tiệm đôi giày . Tất cả các quyền được bảo lưu.</p>
  </div>
</body>
</html>
