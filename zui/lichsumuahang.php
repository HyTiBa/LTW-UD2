<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lịch sử mua hàng</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-4">
  <!-- Tabs -->
  <div class="max-w-4xl mx-auto mb-4">
    <div class="flex justify-between border-b">
      <button class="tab-button text-red-500 font-medium border-b-2 border-red-500 px-4 py-2">Tất cả</button>
      <button class="tab-button text-gray-700 hover:text-red-500 px-4 py-2">Chờ giao hàng</button>
      <button class="tab-button text-gray-700 hover:text-red-500 px-4 py-2">Hoàn thành</button>
      <button class="tab-button text-gray-700 hover:text-red-500 px-4 py-2">Đã huỷ</button>
      <button class="tab-button text-gray-700 hover:text-red-500 px-4 py-2">Trả hàng/Hoàn tiền</button>
    </div>
    <!-- Search bar -->
    <div class="mt-2 bg-gray-100 rounded flex items-center px-4 py-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
      </svg>
      <input type="text" placeholder="Bạn có thể tìm kiếm theo tên Shop, ID đơn hàng hoặc Tên Sản phẩm" class="w-full bg-gray-100 focus:outline-none text-sm text-gray-700">
    </div>
  </div>

  <!-- Order Card -->
  <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl p-6">
    <div class="flex justify-between items-center border-b pb-4 mb-4">
      <!-- <h1 class="text-xl font-bold text-gray-800"></h1> -->
      <div class="flex items-center gap-2">
        <button class="px-3 py-1 text-white bg-red-500 hover:bg-red-600 rounded">Chat</button>
        <!-- <button class="text-sm text-blue-600 hover:underline"></button> -->
      </div>
    </div>

    <div class="flex items-start gap-4">
      <img src="https://cf.shopee.vn/file/8d92752e3a3ddbf750c2e97e10f34a35" alt="math" class="w-24 h-24 object-cover rounded border">
      <div class="flex-1">
        <h2 class="font-semibold text-gray-700">Sách giáo khoa toán học lớp 12</h2>
        <p class="text-sm text-gray-500 mt-1">Môn học : toán</p>
        <p class="text-red-500 font-semibold mt-2">₫19.000</p>
      </div>
    </div>

    <div class="border-t mt-6 pt-4 flex justify-between items-center">
      <span class="text-lg font-medium text-gray-700">Thành tiền:</span>
      <span class="text-xl font-bold text-red-600">₫19.000</span>
    </div>

    <div class="mt-6 flex justify-end gap-4">
      <button class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-xl font-medium">Mua Lại</button>
      <button class="bg-white border border-gray-300 hover:border-gray-400 text-gray-700 px-5 py-2 rounded-xl font-medium">Liên Hệ Người Bán</button>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const tabs = document.querySelectorAll(".tab-button");
      const activeClass = "text-red-500 border-b-2 border-red-500 font-medium";

      tabs.forEach(tab => {
        tab.addEventListener("click", function () {
          tabs.forEach(t => t.classList.remove(...activeClass.split(" ")));
          this.classList.add(...activeClass.split(" "));
        });
      });
    });
  </script>
</body>
</html>
