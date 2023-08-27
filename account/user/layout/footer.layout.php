            <footer class="footer-admin mt-auto footer-light">
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

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= ASSETS_URL;?>plugins/jquery-3.6.0.min.js"></script>

    <script>
        const UID = <?= $_SESSION['uid']; ?>; // User ID
        const TOKEN = '<?= $_SESSION['token']; ?>'; // Session Token
        //const AUTH_API = `<?= APP_URL; ?>api/auth`; // AUTH API URL [Update Password]
    </script>

    <!-- SweetAlert2: https://sweetalert2.github.io/#usage -->
    <script src="<?= ASSETS_URL; ?>plugins/sweetalert2-11.4.0/sweetalert2.all.min.js"></script><!--- check usage link -->
    <!--// SweetAlert2 -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Production
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    -->

    <script>
        //-- Check User's Internet Connectivity
        window.addEventListener('load', function(e){
            if ( navigator.onLine ){
                console.log('You\'re Online!');
            } else {
                Swal.fire({
                    title: 'Your Internet Is Out! <br>Wait Until You\'re Reconnected.',
                    heightAuto: false,
                    icon: 'error',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });
            }
        }, false);
        
        window.addEventListener('online', onlineStatus);
        window.addEventListener('offline', onlineStatus);
        function onlineStatus(event){
            if ( navigator.onLine ){
                console.log('You\'re Back Online!');
                Swal.fire({
                    title: 'You\'re Back Online!',
                    heightAuto: false,
                    icon: 'success',
                    timer: 3500,
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });
            } else {
                console.log('You\'re Offline!');
                Swal.fire({
                    title: 'Your Internet Is Out! <br>Wait Until You\'re Reconnected.',
                    heightAuto: false,
                    icon: 'error',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });
            }
        }
        //-----------------------------------

        // onClick of Log Out button's "Continue"
        function JSLogOut(){
            JSauthAlertLoader( 'See You Soon... 🤗' );
            window.location.href = 'Auth.Logout';
        }

        // SweetAlert2
        // Show Swal Loader When Submitting to API
        function JSauthAlertLoader( title ){
            Swal.fire({
                title: `${title}`, // Loading...
                heightAuto: false,
                padding: '2em',
                allowOutsideClick: false,
                allowEscapeKey: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        }
    </script>

    <script src="<?= APP_URL; ?>vuejs/vue.js"></script>
    <script src="<?= APP_URL; ?>vuejs/axios.js"></script>
    <!--<script src="<?= APP_URL; ?>vuejs/auth.js"></script>--><!--[Update Password]-->

    <!-- END GLOBAL MANDATORY SCRIPTS -->