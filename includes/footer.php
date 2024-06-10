<section class="bg-v2-secondary footer text-light pt-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="lc-block small mobileHome">
                    <div editable="rich">
                        <p>Hello there! I'm a tech enthusiast with a knack for turning ideas into reality. My journey started as a Web Developer, where I got my hands dirty with code. Fast forward to today, I'm a Technical Product Manager, always on the lookout for innovative solutions to real-world challenges.</p>
                        <p>My career revolves around two things: innovation and impact. I love crafting tech-driven solutions that truly make a difference. From IT strategy to product development, I've been fortunate to wear many hats, and I'm eager to see where our next adventure takes us.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="lc-block mb-4">
                    <div>
                        <p class="fw-bold">Get in Touch</p>
                    </div>
                </div>
                <div class="lc-block small">
                    <div editable="rich">
                        <a href="https://wa.me/923451230244">
                            <p>
                                <ion-icon name="logo-whatsapp" role="img" class="md hydrated" aria-label="call"></ion-icon> Message on WhatsApp
                            </p>
                        </a>
                        <a href="mailto:ahmed@etarbiyat.com">
                            <p>
                                <ion-icon name="mail" role="img" class="md hydrated" aria-label="mail"></ion-icon> ahmed@etarbiyat.com
                            </p>
                        </a>
                    </div>
                    <div class="lc-block py-2 mobileHome">
                        <a class="text-decoration-none sicon" href="https://facebook.com/AhmedNoice" target="_blank">
                            <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon>
                        </a>
                        <a class="text-decoration-none sicon" href="https://www.instagram.com/callmeahmedr/" target="_blank">
                            <ion-icon name="logo-instagram" role="img" class="md hydrated" aria-label="logo instagram"></ion-icon>
                        </a>
                        <a class="text-decoration-none sicon" href="https://www.linkedin.com/in/callmeahmedr/" target="_blank">
                            <ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3 container text-white pb-5">
        <p style="font-size:11px;" class="text-center">© <script>
                document.write(new Date().getFullYear())
            </script> Muhammad Ahmed (<a href="https://etarbiyat.com/ahmed" target="_blank">@callmeahmedr</a>).</p>
        <div>
            <p style="font-size:10px;"><strong>Disclaimer:</strong><br>his portfolio page has been created solely for the purpose of fulfilling a university assignment and does not reflect my personal information or professional endeavors. For accurate and up-to-date information about me, please refer to my LinkedIn profile <a class="fw-bold" href="https://www.linkedin.com/in/callmeahmedr/" target="_blank">@callmeahmedr</a> or visit my company profile on <a href="https://www.etarbiyat.com/" class="fw-bold" target="_blank">Etarbiyat.com</a>. Any resemblance to real individuals, companies, or events is purely coincidental. Thank you for your understanding.</p>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>