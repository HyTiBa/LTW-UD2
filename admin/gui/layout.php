<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/LTW-UD2/admin/assets/css/layout.css">
</head>

<body>
    <div id="admin-container">
        <div id="admin-header">
            <div id="header-left">
                <h3 id="Fahahahasa">Fahahahasa</h3>
                <div id="closeSidebar" onclick="closeSidebar()">
                    <img id="bars" src="./assets/icon/bars.svg" alt="" class="dark-img">
                </div>
            </div>
            <div id="header-right">
                <div id="avt"> <img src="./assets/icon/face.svg" alt=""></div>
                <div id="user-who">Xin chào, Hienhehehe</div>

            </div>
        </div>

        <div id="content-container">

            <div id="sidebar">
                <div class="menu-item"> <img src="./assets/icon/chart-line.svg" class="dark-img" alt="">
                    Thống kê </div>
                <h5>QUẢN LÍ THÔNG TIN </h5>
                <div class="menu-item"> <img src="./assets/icon/users.svg" class="dark-img" alt="">
                    Quản lý khách hàng &#9662</div>
                <div class="menu-item"> <img src="./assets/icon/user-injured.svg" class="dark-img" alt="">
                    Quản lý nhân viên &#9662</div>
                <div class="menu-item"> <img src="./assets/icon/book.svg" class="dark-img" alt="">
                    Quản lí sản phẩm &#9662</div>
                <div class="menu-item"> <img src="./assets/icon/cart-shopping.svg" class="dark-img" alt="">
                    Quản lý đơn hàng &#9662</div>
                <div class="menu-item"> <img src="./assets/icon/credit-card.svg" class="dark-img" alt="">
                    Quản lý phân quyền &#9662</div>
                <div class="menu-item"> <img src="./assets/icon/layer-group.svg" class="dark-img" alt="">
                    Quản lí danh mục &#9662</div>
                <div class="menu-item"> <img src="./assets/icon/address-card.svg" class="dark-img" alt="">
                    Thông tin nhà cung cấp &#9662</div>
            </div>
            <div id="content">

                <div id="main-content">
                    Hehehehehehehe
                </div>
            </div>


        </div>
    </div>


    <script>
        function closeSidebar() {
            let element = document.getElementById("sidebar");
            if (element.style.display === "none") {
                element.style.display = "flex";
                document.getElementById("header-left").style.backgroundColor = "#1a2536";
                document.getElementById("Fahahahasa").style.float = "left";
                document.getElementById("Fahahahasa").style.color = "rgb(254, 225, 225)";
                document.getElementById("closeSidebar").style.float = "right";
                document.getElementById("bars").classList.add("dark-img");
                document.getElementById("content").style.width = "80%";


            } else {
                element.style.display = "none";
                document.getElementById("header-left").style.backgroundColor = "white";
                document.getElementById("Fahahahasa").style.float = "right";
                document.getElementById("closeSidebar").style.float = "left";
                document.getElementById("bars").classList.remove("dark-img");
                document.getElementById("content").style.width = "100%";
                document.getElementById("Fahahahasa").style.color = "#080e18";

            }
        }
    </script>
</body>

</html>