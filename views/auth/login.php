<?php require_once 'views/layouts/header.php'; ?>
<main>
    <!-- Add CSS for alerts -->
    <style>
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-size: 16px;
            position: relative;
        }
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        .alert::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 5px;
            background-color: #28a745; /* For success */
        }
        .alert-danger::before {
            background-color: #dc3545; /* For danger */
        }
        .error {
            color: #721c24;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area bg-img" data-bg="/assets/img/banner/breadcrumb-banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h1 class="breadcrumb-title">Đăng nhập - Đăng ký</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Đăng nhập - Đăng ký</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- login register wrapper start -->
    <div class="login-register-wrapper section-padding">
        <div class="container">
            <div class="member-area-from-wrap">
                <div class="row">
                    <!-- Login Content Start -->
                    <div class="col-lg-6">
                        <div class="login-reg-form-wrap">
                            <h2>Đăng nhập</h2>
                            <?php if (!empty($data['login_error'])): ?>
                                <div class="alert alert-danger"><?= htmlspecialchars($data['login_error']) ?></div>
                            <?php endif; ?>
                            <form method="post" action="/auth/login">
                                <div class="single-input-item">
                                    <input type="email" name="email" placeholder="Nhập địa chỉ email" value="<?= htmlspecialchars($data['login_old']['email'] ?? '') ?>" required />
                                    <?php if (!empty($data['login_errors']['email'])): ?>
                                        <div class="error"><?= htmlspecialchars($data['login_errors']['email']) ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="single-input-item">
                                    <input type="password" name="password" placeholder="Nhập mật khẩu" required />
                                    <?php if (!empty($data['login_errors']['password'])): ?>
                                        <div class="error"><?= htmlspecialchars($data['login_errors']['password']) ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="single-input-item">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                        <div class="remember-meta">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                <label class="custom-control-label" for="rememberMe">Ghi nhớ</label>
                                            </div>
                                        </div>
                                        <a href="#" class="forget-pwd">Quên mật khẩu?</a>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button class="btn">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login Content End -->

                    <!-- Register Content Start -->
                    <div class="col-lg-6">
                        <div class="login-reg-form-wrap signup-form">
                            <h2>Đăng ký</h2>
                            <?php if (!empty($data['register_success'])): ?>
                                <div class="alert alert-success"><?= htmlspecialchars($data['register_success']) ?></div>
                            <?php endif; ?>
                            <?php if (!empty($data['register_errors']['general'])): ?>
                                <div class="alert alert-danger"><?= htmlspecialchars($data['register_errors']['general']) ?></div>
                            <?php endif; ?>
                            <form method="post" action="/auth/register">
                                <div class="single-input-item">
                                    <input type="text" name="fullname" placeholder="Họ và Tên" value="<?= htmlspecialchars($data['register_old']['fullname'] ?? '') ?>" required />
                                    <?php if (!empty($data['register_errors']['fullname'])): ?>
                                        <div class="error"><?= htmlspecialchars($data['register_errors']['fullname']) ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="single-input-item">
                                    <input type="email" name="email" placeholder="Nhập địa chỉ email" value="<?= htmlspecialchars($data['register_old']['email'] ?? '') ?>" required />
                                    <?php if (!empty($data['register_errors']['email'])): ?>
                                        <div class="error"><?= htmlspecialchars($data['register_errors']['email']) ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="password" name="password" placeholder="Nhập mật khẩu" required />
                                            <?php if (!empty($data['register_errors']['password'])): ?>
                                                <div class="error"><?= htmlspecialchars($data['register_errors']['password']) ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="password" name="password_confirm" placeholder="Nhập lại mật khẩu" required />
                                            <?php if (!empty($data['register_errors']['password_confirm'])): ?>
                                                <div class="error"><?= htmlspecialchars($data['register_errors']['password_confirm']) ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <div class="login-reg-form-meta">
                                        <div class="remember-meta">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="terms" checked>
                                                <label class="custom-control-label" for="terms">Đồng ý với <a href="/terms">điều khoản và điều kiện</a> của chúng tôi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button class="btn">Đăng ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Register Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- login register wrapper end -->
</main>
<?php require_once 'views/layouts/footer.php'; ?>