        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; <b><?= SITE_NAME .'</b> '. date('Y'); ?></div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= ASSETS_URL; ?>js/scripts.js"></script>

    <script src="<?= ASSETS_URL;?>plugins/jquery-3.6.0.min.js"></script>

    <script>
        const API = `<?= APP_URL; ?>api/Auth.api`; // API URL
        const TOKEN = '<?= $token; ?>'; // Generated Token
        const CSRF_TOKEN = '<?= $_SESSION['csrf_token']; ?>'; // CSRF Token
        const CSRF_TOKEN_TIME = '<?= $_SESSION['csrf_token_time']; ?>'; // CSRF Token Time
    </script>

    <!-- SweetAlert2: https://sweetalert2.github.io/#usage -->
    <script src="<?= ASSETS_URL; ?>plugins/sweetalert2-11.4.0/sweetalert2.all.min.js"></script><!--- check usage link -->
    <!--// SweetAlert2 -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Production
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    -->

    <script src="<?= APP_URL; ?>vuejs/vue.js"></script>
    <script src="<?= APP_URL; ?>vuejs/axios.js"></script>
    <script src="<?= APP_URL; ?>vuejs/auth.js"></script>