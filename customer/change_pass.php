<center>
    <h1>Thay đổi mật khẩu</h1>
    <p class="text-muted">
        Nếu có bất kỳ câu hỏi gì, vui lòng liên hệ đến mục <a href="../lienhe.php">
            <bold>Liên hệ</bold>
        </a>. Dịch vụ chăm sóc khách hàng làm việc <strong>24/7</strong>
    </p>
</center>

<hr>

<form action="" method="post">
    <div class="form-group">
        <label> Mật khẩu cũ của bạn </label>
        <input type="text" name="old_pass" class="form-control" required>
    </div>

    <div class="form-group">
        <label> Mật khẩu mới của bạn </label>
        <input type="text" name="new_pass" class="form-control" required>
    </div>

    <div class="form-group">
        <label> Xác nhận mật khẩu mới </label>
        <input type="text" name="new_pass_again" class="form-control" required>
    </div>

    <div class="text-center">
        <button name="update" type="submit" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Xác nhận thay đổi
        </button>
    </div>

</form>