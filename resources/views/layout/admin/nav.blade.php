<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xem Chi Tiết Sản Phẩm</title>
  <style>
    /* Định dạng chung */
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

.container {
  width: 80%;
  margin: 50px auto;
  text-align: center;
}

.row {
  display: flex;
  flex-wrap: wrap; /* Cho phép các phần tử gói gọn lại khi cần */
  justify-content: space-between; /* Căn đều các phần tử trong mỗi hàng */
  margin-bottom: 30px; /* Khoảng cách giữa các hàng */
}

.product {
  display: inline-block;
  width: 23%; /* Mỗi sản phẩm chiếm 23% chiều rộng của container, cho phép 4 sản phẩm trên một hàng */
  margin-bottom: 20px;
  background-color: #fff;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.product img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.product h3 {
  margin: 10px 0;
  font-size: 18px;
  color: #333;
}

.product button {
  background-color: pink;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 10px;
}

.product button:hover {
  background-color: #0056b3;
}

/* Modal */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
  padding-top: 60px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 70%;
  max-width: 600px;
  border-radius: 8px;
}

.modal-header {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.modal-body {
  font-size: 16px;
  margin-bottom: 20px;
}

.modal-footer {
  text-align: right;
}

.close {
  color: #aaa;
  font-size: 28px;
  font-weight: bold;
  text-decoration: none;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.header1{
    text-align: center;
}

  </style>
</head>
<body>
    <div class="border border-success p-2 mb-2">
        <div class="bg-success p-2 text-dark bg-opacity-25">
            <h1 class="header1">
                -- Xem chi tiết sản phẩm --
            </h1>
        </div>
    </div>
  <div class="container">
        <div class="product">
            <img src="img/adidas star smith.avif" alt="Giày Adidas">
            <h3>Giày Adidas stan smith </h3>
            <button onclick="openModal('adidas star smith')">Xem chi tiết</button>
        </div>

        <div class="product">
            <img src="img/giay ultraboost.avif" alt="Giày adidas">
            <h3>Giày adidas ultraboost</h3>
            <button onclick="openModal('giay ultraboost.avif')">Xem chi tiết</button>
        </div>
  

  <div class="product">
    <img src="img/addas3.jpg" alt="Giày adidas">
    <h3>Giày adidas supersatn</h3>
    <button onclick="openModal('addas3')">Xem chi tiết</button>
  </div>

  <div class="product">
    <img src="img/addas4.webp" alt="Giày adidas">
    <h3>Giày adidas 4</h3>
    <button onclick="openModal('addas4')">Xem chi tiết</button>
  </div>
</div>

</div>
    <div class="product">
      <img src="img/nike1.webp" alt="Giày Nike">
      <h3>Giày Nike 1</h3>
      <button onclick="openModal('nike1')">Xem chi tiết</button>
    </div>

    <div class="product">
        <img src="img/nike2.jpg" alt="Giày Nike">
        <h3>Giày Nike 2</h3>
        <button onclick="openModal('nike2')">Xem chi tiết</button>
      </div>

    <div class="product">
      <img src="img/puma1.webp" alt="Giày Puma">
      <h3>Giày Puma 1</h3>
      <button onclick="openModal('puma1')">Xem chi tiết</button>
    </div>

    <div class="product">
        <img src="img/puma2.webp" alt="Giày Puma">
        <h3>Giày Puma 2</h3>
        <button onclick="openModal('puma2')">Xem chi tiết</button>
      
    </div>
    <div class="product">
        <img src="img/puma3.webp" alt="Giày Puma">
        <h3>Giày Puma 3</h3>
        <button onclick="openModal('puma3')">Xem chi tiết</button>
      </div>
    </div>

    <div class="product">
      <img src="img/ox1.png" alt="Giày Puma">
      <h3>Giày oxford 1</h3>
      <button onclick="openModal('ox1')">Xem chi tiết</button>
    </div>
  


  <div class="product">
    <img src="img/ox2.jpg" alt="Giày Puma">
    <h3>Giày oxford 2</h3>
    <button onclick="openModal('ox2')">Xem chi tiết</button>
  </div>


<div class="product">
  <img src="img/ox3.jpg" alt="Giày Puma">
  <h3>Giày oxford 3</h3>
  <button onclick="openModal('ox3')">Xem chi tiết</button>
</div>
</div>


<div class="product">
  <img src="img/giaycaogot1.webp" alt="Giày Puma">
  <h3>Giày cao gót 1</h3>
  <button onclick="openModal('giaycaogot1')">Xem chi tiết</button>
</div>

<div class="product">
  <img src="img/caogoi2.jpg" alt="Giày Puma">
  <h3>Giày cao gót  2</h3>
  <button onclick="openModal('caogoi2')">Xem chi tiết</button>
</div>

<div class="product">
  <img src="img/caogot3.jpg" alt="Giày Puma">
  <h3>Giày cao gót 3</h3>
  <button onclick="openModal('caogot3')">Xem chi tiết</button>
</div>


  <!-- Modal (Chi tiết sản phẩm) -->
  <div id="adidas star smithModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('adidas star smith')">&times;</span>
      <div class="modal-header">Giày Adidas stan smith </div>
      <div class="modal-body">
        <p>Giày Adidas stan smith là mẫu giày thể thao với thiết kế năng động, phù hợp cho cả tập luyện và sử dụng hàng ngày. Chất liệu vải lưới thoáng khí giúp đôi chân luôn khô ráo.</p>
        <p><strong>Giá:</strong> 1,500,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('adidas star smith')">Đóng</button>
      </div>
    </div>
  </div>
  


  <div id="giay ultraboostModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('giay ultraboost')">&times;</span>
      <div class="modal-header">Giày Adidas ultraboost</div>
      <div class="modal-body">
        <p>Giày Adidas ultraboost - Thiết kế thời trang, tiện lợi cho cả thể thao lẫn đi chơi.</p>
        <p><strong>Giá:</strong> 1,500,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('giay ultraboost')">Đóng</button>
      </div>
    </div>
  </div>

  <div id="addas3Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('addas3')">&times;</span>
      <div class="modal-header">Giày Adidas supersatn</div>
      <div class="modal-body">
        <p>Giày Adidas supersatn - Phù hợp cho cả việc tập luyện thể thao và đi chơi hàng ngày.</p>
        <p><strong>Giá:</strong> 1,500,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('addas3')">Đóng</button>
      </div>
    </div>
  </div>

  <div id="addas4Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('addas4')">&times;</span>
      <div class="modal-header">Giày Adidas sampa</div>
      <div class="modal-body">
        <p>Giày Adidas sampa  - Thiết kế cá tính, dễ dàng kết hợp với phong cách thể thao.</p>
        <p><strong>Giá:</strong> 1,500,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('addas4')">Đóng</button>
      </div>
    </div>
  </div>



  <div id="nike1Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('nike1')">&times;</span>
      <div class="modal-header">Giày Nike 1</div>
      <div class="modal-body">
        <p>Giày Nike 1 -được thiết kế hiện đại với công nghệ Nike Air giúp giảm chấn động và tăng cường sự thoải mái khi di chuyển.</p>
        <p><strong>Giá:</strong> 1,700,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('nike1')">Đóng</button>
      </div>
    </div>
  </div>

  <div id="nike2Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('nike2')">&times;</span>
      <div class="modal-header">Giày Nike 2 - Mẫu giày thể thao thoải mái, phù hợp với nhiều phong cách.</div>
      <div class="modal-body">
        <p>Giày Nike 2 được thiết kế hiện đại với công nghệ Nike Air giúp giảm chấn động và tăng cường sự thoải mái khi di chuyển.</p>
        <p><strong>Giá:</strong> 1,700,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('nike2')">Đóng</button>
      </div>
    </div>
  </div>



  <div id="puma1Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('puma1')">&times;</span>
      <div class="modal-header">Giày Puma 1</div>
      <div class="modal-body">
        <p>Giày Puma 1 là sự kết hợp giữa sự thoải mái và phong cách. Với thiết kế đơn giản, giày Puma 1 thích hợp cho mọi hoạt động thể thao và sử dụng hàng ngày.</p>
        <p><strong>Giá:</strong> 1,400,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('puma1')">Đóng</button>
      </div>
    </div>
  </div>

  <div id="puma2Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('puma2')">&times;</span>
      <div class="modal-header">Giày Puma 2</div>
      <div class="modal-body">
        <p>Giày Puma 2 - Mẫu giày mang phong cách thể thao mạnh mẽ và hiện đại.</p>
        <p><strong>Giá:</strong> 1,400,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('puma2')">Đóng</button>
      </div>
    </div>
  </div>

  <div id="puma3Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('puma3')">&times;</span>
      <div class="modal-header">Giày Puma 3</div>
      <div class="modal-body">
        <p>Giày Puma 3 - Thiết kế độc đáo, thích hợp cho mọi hoạt động thể thao và dạo phố..</p>
        <p><strong>Giá:</strong> 1,400,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('puma3')">Đóng</button>
      </div>
    </div>
  </div>

  <div id="ox1Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('ox1')">&times;</span>
      <div class="modal-header">Giày oxford 1</div>
      <div class="modal-body">
        <p>Giày oxford - Thiết kế độc đáo, phong cách </p>
        <p><strong>Giá:</strong> 1,400,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('ox1 ')">Đóng</button>
      </div>
    </div>
  </div>

  <div id="ox2Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('ox2')">&times;</span>
      <div class="modal-header">Giày oxford 2</div>
      <div class="modal-body">
        <p>Giày oxford 2 - Thiết kế độc đáo, </p>
        <p><strong>Giá:</strong> 1,400,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('ox2')">Đóng</button>
      </div>
    </div>
  </div>

  <div id="ox3Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('ox3')">&times;</span>
      <div class="modal-header">Giày oxford 3</div>
      <div class="modal-body">
        <p>Giày Puma 3 - Thiết kế độc đáo</p>
        <p><strong>Giá:</strong> 1,400,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('ox3')">Đóng</button>
      </div>
    </div>
  </div>

  <div id="giaycaogot1Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('giaycaogot1')">&times;</span>
      <div class="modal-header">Giày cao got 1</div>
      <div class="modal-body">
        <p>Giày cao gót 1  - Thiết kế độc đáo, quý phái ,lịch sự ,phong cách </p>
        <p><strong>Giá:</strong> 1,400,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('giaycaogot1')">Đóng</button>
      </div>
    </div>
  </div>

  <div id="caogoi2Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('caogoi2')">&times;</span>
      <div class="modal-header">Giày cao gót 2</div>
      <div class="modal-body">
        <p>Giày cao gót 2  - Thiết kế độc đáo, quý phái ,lịch sự ,phong cách </p>
        <p><strong>Giá:</strong> 1,400,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('caogoi2')">Đóng</button>
      </div>
    </div>
  </div>

  <div id="caogot3Modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('caogot3')">&times;</span>
      <div class="modal-header">Giày cao gót 3</div>
      <div class="modal-body">
        <p>Giày cao gót 3  - Thiết kế độc đáo, quý phái ,lịch sự ,phong cách </p>
        <p><strong>Giá:</strong> 1,400,000 VND</p>
      </div>
      <div class="modal-footer">
        <button onclick="closeModal('caogot3')">Đóng</button>
      </div>
    </div>
  </div>

  <script>
    function openModal(productId) {
      var modal = document.getElementById(productId + 'Modal');
      modal.style.display = "block";
    }

    function closeModal(productId) {
      var modal = document.getElementById(productId + 'Modal');
      modal.style.display = "none";
    }

    // Đóng modal nếu người dùng click vào ngoài vùng modal
    window.onclick = function(event) {
      if (event.target.className === "modal") {
        closeModal(event.target.id.replace("Modal", ""));
      }
    }
  </script>

</body>
</html>
