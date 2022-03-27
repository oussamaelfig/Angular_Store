<!--  FOOTER -->
<footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="../index.html"><img class="logo" src="Images/logoEnt1.png" alt="logoCompany" /></a>
                    </div>
                    <div class="col-md-4">
                        <h5>Développeurs</h5>
                        <ul>
                            <li>
                                <a href="mailto:el-figha.oussama@courrier.uqam.ca" class="text-white"
                                    style="text-decoration: none">
                                    OUSSAMA EL-FIGHA</a>
                            </li>
                            <li>
                                <a href="mailto:plante.nicolas.4@courrier.uqam.ca" class="text-white"
                                    style="text-decoration: none">
                                    NICOLAS PLANTE</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-white">
                        <h5>Contact</h5>
                        <p><i class="bi bi-telephone-fill"></i>&nbsp +1(000)000-0000</p>
                        <p><i class="bi bi-building"></i>&nbspMontréal, 994 Rue Rachel Est</p>
                        <p><i class="bi bi-envelope"></i></i>&nbspcompecom@compecom.ca</p>
                    </div>
                </div>
            </div>
            <hr class="mb-4 text-white">
            <div class="row align-items-center text-white">
                <p class="text-center">Le projet est développé dans le cadre du cours
                    <a class="link-light" href="http://www.etudier.uqam.ca/cours?sigle=INF3190"
                        style="text-decoration: none"><strong>INF3190</strong> </a>
                    de l'<a class="link-light" href="http://www.uqam.ca"
                        style="text-decoration: none"><strong>UQÀM</strong></a>
                </p>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="../JSON/users.json"></script>
    <script type="text/javascript" src="../JS/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>
    <script type="text/javascript" src="JS/mainCart.js"></script>
    <script>
        const getDatePickerTitle = elem => {
            // From the label or the aria-label
            const label = elem.nextElementSibling;
            let titleText = '';
            if (label && label.tagName === 'LABEL') {
                titleText = label.textContent;
            } else {
                titleText = elem.getAttribute('aria-label') || '';
            }
            return titleText;
        }

        const elems = document.querySelectorAll('.datepicker_input');
        for (const elem of elems) {
            const datepicker = new Datepicker(elem, {
                'format': 'dd/mm/yyyy', // UK format
                title: getDatePickerTitle(elem)
            });
        }      
    </script>