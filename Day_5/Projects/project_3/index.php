
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
        $imageDirectory = './uploads/';
        $images = scandir($imageDirectory);

        // Xóa ảnh
        if (isset($_POST["delete_image"])) {
            $imageToDelete = $_POST["image_name"];
            // Hiển thị xác nhận trước khi xóa
            echo "<script>
                    Swal.fire({
                        title: 'Bạn có chắc chắn muốn xóa ảnh này?',
                        text: 'Hành động này sẽ xóa ảnh vĩnh viễn.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Xóa',
                        cancelButtonText: 'Hủy',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'delete_image.php?image_name={$imageToDelete}';
                        } else {
                            // Người dùng đã huỷ xóa
                            window.location.href = 'index.php';
                        }
                    });
                 </script>";
        }


        // Sửa tên ảnh
        if (isset($_POST["update_image_name"])) {
            $newImageName = $_POST["new_image_name"];
            $oldImageName = $_POST["image_name"];

            $newImagePath = $imageDirectory . $newImageName;

            if (rename($imageDirectory . $oldImageName, $newImagePath)) {
                header("Location: index.php");
                exit;
            }
            echo "close_edit_form();";
        }
    ?>
    <!--Title-->
    <div class="flex justify-center mt-8">
        <h1 class="text-3xl font-bold uppercase text-blue-600">Images Manager</h1>
    </div>

    <!-- Images Gallery-->
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-8">
        <div class="flex justify-end">
                <button type="button" class="px-6 py-2 rounded border-2 border-green-500 bg-green-500
                text-white text-lg hover:bg-white hover:text-green-500 font-bold"  onclick="openModal()" > Thêm mới hình ảnh</button>

        </div>
        <div class="w-full mt-8">
            <div class="-m-1 flex flex-wrap md:-m-2">

            <?php
            foreach ($images as $image) {
                if ($image !== '.' && $image !== '..') {
            ?>
                <div class="flex w-1/4 flex-wrap">
                    <div class="w-full p-1 md:p-2">
                        <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="<?php echo $imageDirectory . $image ?>" />
                    </div>
                    <div class="w-full p-2 flex justify-between">
                        <div class="text-left pl-4 text-gray-500 text-lg">
                            <?php echo $image ?>
                        </div>
                        <div>
                            <div class="flex justify-end gap-2">
                                <div>
                                    <button type="button" onclick="edit_file_name('<?php echo $image?>')" class="text-lg text-blue-500 hover:text-black">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                </div>
                                <div>
                                    <form method="post" action="">
                                        <input type="hidden" name="image_name" value="<?php echo $image?>" />
                                        <button type="submit" name="delete_image" class="text-lg text-red-500 hover:text-black">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            <?php
                }
            }
            ?>
            </div>
        </div>
    </div>
    <div class="absolute w-full h-screen bg-black/50 top-0 left-0 hidden" id="edit_form">
        <div class="flex justify-center items-center">
            <div class="w-1/3 bg-white p-8 mt-36 rounded">
                <div class="edit-form">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-1">
                            <img
                                id="edit_image_src"
                                alt="gallery"
                                class="block h-full w-full rounded-lg object-cover object-center"
                                src="./uploads/sample_1.png" />
                        </div>
                        <div class="col-span-1">
                            <form method="post" action="">
                                <h3 class="text-center font-bold text-blue-600 uppercase text-lg"> Sửa tên</h3>
                                <div class="mt-2 w-full">
                                    <p class="text-left font-bold text-base text-gray-600"> Tên cũ:</p>
                                    <input class="px-2 py-1 border border-gray-400 rounded w-full mt-1 focus:outline-blue-500"
                                           type="text" name="image_name" id="editImageName" value="sample_1.png" readonly/>
                                </div>

                                <div class="mt-2 w-full">
                                    <p class="text-left font-bold text-base text-gray-600"> Tên mới:</p>
                                    <input class="px-2 py-1 border border-gray-400 rounded w-full mt-1 focus:outline-blue-500"
                                           type="text" name="new_image_name" id="newImageName" value="sample_1.png" required/>
                                </div>
                                <div class="flex justify-end gap-2 mt-4">
                                    <button type="button" class="px-5 py-2 bg-gray-500 text-white text-base border border-gray-500
                                                       hover:text-gray-500 hover:bg-white rounded" onclick="close_edit_form()">Hủy</button>
                                    <button type="submit" class="px-5 py-2 bg-orange-500 text-white text-base border border-orange-500
                                                       hover:text-orange-500 hover:bg-white rounded " name="update_image_name">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="uploadModal" style="padding: 180px 0 0 525px" class=" pl-10 fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <form enctype="multipart/form-data" action="upload.php" method="post" class="bg-white p-6 rounded max-w-md w-full">
            <div class="mb-4">
                <label for="file" class="block mb-2">Select a file:</label>
                <input type="file" id="file" name="file" class="w-full py-2 px-4 border border-gray-300 rounded">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Upload</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        let imgDir = '<?php echo $imageDirectory ?>';
        function edit_file_name(filename){
            console.log(filename);
            document.getElementById("edit_form").style.display="inline-block";
            document.getElementById("edit_image_src").src= imgDir + filename;
            document.getElementById("editImageName").value= filename;
            document.getElementById("newImageName").value= "";
        }
        function close_edit_form(){
            document.getElementById("edit_form").style.display="none";
        }



    </script>
<script>
    function openModal() {
        document.getElementById('uploadModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('uploadModal').style.display = 'none';
    }

    function uploadFile() {
        const fileInput = document.getElementById('file');
        const file = fileInput.files[0];
        const formData = new FormData();
        formData.append('file', file);

        // AJAX request to handle file upload
        const xhr = new XMLHttpRequest();
        xhr.open('POST', './upload.php', true);

        xhr.onload = function () {
            if (xhr.status === 200) {
                Swal.fire('Success!', 'File uploaded successfully.', 'success');
                closeModal();
            } else {
                Swal.fire('Error!', 'File upload failed.', 'error');
            }
        };

        xhr.send(formData);
    }
</script>
</body>
</html>