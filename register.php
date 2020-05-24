<?php include_once('common/inc/header.php') ?>
<div class="Register Responsive">
    <div class="url">
        <a href="#">Trang chủ</a>
        <a>/</a>
        <a href="#">Đăng ký</a>
    </div>
    <div class="Register-form">
        <div class="Register-header">
            <h1 class="Register-header__txt">Đăng ký</h1>
        </div>
        <div class="Register-user">
            <input type="text" name="usertxt" id="usertxt" placeholder="Email hoặc tên đăng nhập">
        </div>
       
        <div class="Register-pass">
            <input type="password" name="passtxt" id="passtxt" placeholder="Mật khẩu" required>

        </div>
        <div class="Register-pass1">
            <input type="password" name="passtxt" id="passtxt" placeholder="Nhập lại mật khẩu" required>
        </div>
        <div>
            <input type="text" name="hotentxt" id="hotentxt" placeholder="Họ và tên" required>
        </div>
        <div>
            <input type="email" name="emailtxt" id="emailtxt" placeholder="Email" required>
        </div>
        <div>
            <input type="text" name="sdttxt" id="sdttxt" placeholder="SĐT" required>
        </div>
        <div class="Register-btn">
            <input type="button" name="submit" id="submit" value="Đăng nhập">
        </div>
       
      

    </div>
</div>
<?php include_once('common/inc/footer.php') ?>  