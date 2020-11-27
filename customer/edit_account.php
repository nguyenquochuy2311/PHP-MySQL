<center>
    <h1>Chỉnh sửa thông tin</h1>
    <p class="text-muted">
        Nếu có bất kỳ câu hỏi gì, vui lòng liên hệ đến mục <a href="../lienhe.php">
            <bold>Liên hệ</bold>
        </a>. Dịch vụ chăm sóc khách hàng làm việc <strong>24/7</strong>
    </p>
</center>

<hr>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label> Tên khách hàng </label>
        <input type="text" name="c_name" class="form-control" required>
    </div>

    <div class="form-group">
        <label> Email </label>
        <input type="text" name="c_email" class="form-control" required>
    </div>

    <div class="form-group">
        <label> Thành phố </label>
        <input type="text" name="c_city" class="form-control" required>
    </div>

    <div class="form-group">
        <label> Liên hệ </label>
        <input type="text" name="c_contact" class="form-control" required>
    </div>

    <div class="form-group">
        <label> Địa chỉ </label>
        <input type="text" name="c_address" class="form-control" required>
    </div>

    <div class="form-group">
        <label> Ảnh đại diện </label>
        <input type="file" name="c_image" class="form-control form-height-custom" required>
        <img style="width:210px;height:270px;" src="customer_images/customer.jpg" alt="Customer Image"
            class="img-responsive">
    </div>

    <div class="text-center">
        <button name="update" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Xác nhận cập nhật
        </button>
    </div>

</form>