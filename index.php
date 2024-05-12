<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* CSS สำหรับรูปภาพ */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery img {
            width: 200px;
            height: auto;
            margin: 10px;
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: auto;
            max-width: 80%;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Content เนื้อหา -->
    <section class="container mb-5">
        <div class="gallery">
            <!-- รูปภาพ -->
            <img src="uploads/image1.jpg" onclick="openModal('uploads/image1.jpg')">
            <img src="uploads/image2.jpg" onclick="openModal('uploads/image2.jpg')">
            <!-- เพิ่มรูปภาพอื่นๆ ตามต้องการ -->
        </div>
    </section>

    <!-- Modal HTML -->
    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="img01">
    </div>

    <!-- Javascript สำหรับโมดัล -->
    <script>
        // ฟังก์ชันเมื่อคลิกที่รูปภาพ
        function openModal(imageURL) {
            var modal = document.getElementById("myModal");
            var modalImg = document.getElementById("img01");
            modal.style.display = "block";
            modalImg.src = imageURL;
        }

        // ฟังก์ชันเมื่อคลิกที่ปุ่มปิด
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
</body>
</html>
