<?php get_header(); ?>
    <div class="section" id="top">
        <div class="parallax">
            <img src="<?php echo get_theme_mod( 'avatar_image_url', get_template_directory_uri().'/assets/img/avatar.jpg' ) ?>" alt="Avatar">
            <h1 class="text-center">Siema! <br>
                <small>Jestem Wojtek, web developer</small>
            </h1>
        </div>
    </div>
    <div class="section" id="o-mnie">
        <div class="container">
            <div class="row">
                <h2 class="text-center">O mnie</h2>
                <div class="center-ver" id="column-content">
                    <div class="col-xs-12 col-md-6">
                        <div class="text-center">
                            <p>Nazywam się <strong>Jan Wojciech Wernicki</strong>, ale mów mi Wojtek.</p>
                            <p>Mam 19 lat, mieszkam w Szczecinie i uczę się w <strong>technikum informatycznym</strong>.</p>
                            <p>Kocham <strong>web development</strong>, <strong>social media</strong> i herbatę.</p>
                            <p>Moje pasje to Formuła 1, kultura japońska i <strong>Linux</strong>.</p>
                        </div>
                        <h3 class="text-center">Doświadczenie zawodowe</h3>
                        <ul>
                            <li>
                                JAM Media <br>
                                <strong>Web Developer &amp; Content Manager</strong>, Luty 2015 &ndash; Maj 2016 <br>
                                <small>Korzystałem z: <strong>HTML5, CSS3, JavaScript, jQuery, PHP, mySQL, WordPress, Bootstrap</strong></small>
                            </li>
                        </ul>
                        <h3 class="text-center">Edukacja</h3>
                        <ul>
                            <li>
                                Free Code Camp <br>
                                <strong>Full Stack Web Development Certification</strong>, 2016 &ndash; nadal 
                            </li>
                            <li>
                                Technikum Informatyczne SCI w Szczecinie <br>
                                <strong>Technik informatyk</strong>, 2013 &ndash; 2017 <br>
                                <small>Nauczyłem się i korzystałem z: <strong>HTML5, CSS3, JavaScript, jQuery, PHP, mySQL, Bootstrap, C++</strong></small>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-6 text-center">
                        <h3>Więcej informacji o mnie:</h3>
                        
                        <div class="flexbox-container">
                            <a href="javascript:void(0)">
                                <i class="fa fa-linkedin fa-5x"></i>
                                <small>LinkedIn</small>
                            </a>                        
                            <a href="javascript:void(0)">
                                <i class="fa fa-desktop fa-5x"></i>
                                <small>Blog</small>
                            </a>
                            
                            <a href="#wspolpraca">
                                <i class="fa fa-question fa-5x"></i>
                                <small>Zobacz więcej</small>
                            </a>
                        </div>
                        
                        <h3>Pliki do pobrania:</h3>
                        <a href="javascript:void(0)" class="btn btn-primary btn-lg" role="button"><i class="fa fa-download fa-fw"></i> Pobierz CV</a>
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="wspolpraca">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="blue-frame text-center">
                        <h2>Dlaczego warto ze mną współpracować?</h2>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <i class="fa fa-html5 fa-5x"></i>
                            <h3>
                                Najnowsze standardy <br>
                                <small>Zawsze korzystam z najnowszych rozwiązań. Wszystkie moje prace powstają na bazie HTML5 i CSS3 oraz są responsywne</small>
                            </h3>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <i class="fa fa-comments fa-5x"></i>
                            <h3>
                                Komunikatywność <br>
                                <small>W pracy jestem dla Ciebie zawsze dostępny i otwarty na wszelkie pomysły. Na pewno szybko znajdziemy ze sobą wspólny język</small>
                            </h3>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <i class="fa fa-briefcase fa-5x"></i>
                            <h3>
                                Doświadczenie <br>
                                <small>Prawie 1,5 roku doświadczenia zawodowego w tworzeniu stron internetowych oraz kontaktach z klientami</small>
                            </h3>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <i class="fa fa-heart fa-5x"></i>
                            <h3>
                                Zaangażowanie <br>
                                <small>W swoją pracę wkładam 100% mocy, wszystko dzięki mojej pasji do tworzenia stron.</small>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="portfolio">
        <div class="parallax">
            <div class="col-xs-12">
                <h2 class="text-center">Portfolio</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="portfolio-item">
                            <a href="#" data-toggle="modal" data-target="#portfolio-item-1">
                                <img src="https://unsplash.it/520/290" alt="Portfolio Item Image">
                                <h3 class="text-center">Portfolio Item</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="portfolio-item">
                            <a href="#" data-toggle="modal" data-target="#portfolio-item-1">
                                <img src="https://unsplash.it/520/290" alt="Portfolio Item Image">
                                <h3 class="text-center">Portfolio Item</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="portfolio-item">
                            <a href="#" data-toggle="modal" data-target="#portfolio-item-1">
                                <img src="https://unsplash.it/520/290" alt="Portfolio Item Image">
                                <h3 class="text-center">Portfolio Item</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="portfolio-item">
                            <a href="#" data-toggle="modal" data-target="#portfolio-item-1">
                                <img src="https://unsplash.it/520/290" alt="Portfolio Item Image">
                                <h3 class="text-center">Portfolio Item</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="portfolio-item">
                            <a href="#" data-toggle="modal" data-target="#portfolio-item-1">
                                <img src="https://unsplash.it/520/290" alt="Portfolio Item Image">
                                <h3 class="text-center">Portfolio Item</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="portfolio-item">
                            <a href="#" data-toggle="modal" data-target="#portfolio-item-1">
                                <img src="https://unsplash.it/520/290" alt="Portfolio Item Image">
                                <h3 class="text-center">Portfolio Item</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="skill">
        <div class="parallax">
            <div class="container">
                <div class="row">                
                    <div class="col-xs-12 blue-frame">
                        <h2 class="text-center">Umiejętności</h2>
                        <div class="col-xs-12 col-md-6 text-center">
                            <h3>Front-end Development</h3>
                            <ul class="list-unstyled">
                                <li><strong>HTML5</strong></li>
                                <li><strong>CSS3</strong></li>
                                <li><strong>SASS</strong></li>
                                <li><strong>JavaScript</strong></li>
                            </ul>
                            
                            <h3>Back-end Development</h3>
                            <ul class="list-unstyled">
                                <li><strong>PHP7</strong></li>
                                <li>mySQL</li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-6 text-center">
                            <h3>Biblioteki, frameworki i narzędzia</h3>
                            <ul class="list-unstyled">
                                <li>Angular2</li>
                                <li><strong>Bootstrap</strong></li>
                                <li><strong>GIT</strong></li>
                                <li><strong>jQuery</strong></li>
                                <li>npm</li>
                                <li>Photoshop</li>
                                <li><strong>WordPress</strong></li>
                            </ul>
                        </div>
                        <div class="col-xs-12">
                            <h3 class="text-center">Języki</h3>
                            <div class="flexbox-container" id="languages">
                                <ul class="list-unstyled">
                                    <li>
                                        <strong>Polski</strong> <br>
                                        Język ojczysty
                                    </li>
                                    <li>
                                        <strong>Angielski</strong> <br>
                                        Średnio zaawansowany
                                    </li>
                                    <li>
                                        <strong>Niemiecki</strong> <br>
                                        Początkujący
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="kontakt">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center">Kontakt</h2>
                    </div>
                    <div class="col-xs-12 center-ver">
                        <div class="col-xs-12 col-md-6">
                            <h3 class="text-center">Wyślij wiadomość</h3>
                            <div class="text-center" id="messages">
                                <div class="message" id="error">Coś się popsuło… Spróbuj wysłać wiadomość jeszcze raz.</div>
                                <div class="message" id="success">Wiadomość wysłana pomyślnie!</div>
                            </div>
                            <form action="sendmail.php" method="post">
                                <label for="first-name">Imię</label>
                                <input type="text" name="first-name" id="first-name" placeholder="Imię">
                                <label for="mail">E-mail</label>
                                <input type="email" name="mail" id="mail" placeholder="E-mail">
                                <label for="subject">Temat</label>
                                <input type="text" name="subject" id="subject" placeholder="Temat">
                                <label for="message">Wiadomość</label>
                                <textarea name="message" id="message" placeholder="Wiadomość"></textarea>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" id="submit">
                                        <i class="fa fa-paper-plane fa-fw"></i> Wyślij wiadomość
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-12 col-md-6 text-center">
                            <h3>Social Media</h3>
                            <div class="flexbox-container">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-facebook fa-5x"></i>
                                    <small>Facebook</small>
                                </a>                        
                                <a href="javascript:void(0)">
                                    <i class="fa fa-twitter fa-5x"></i>
                                    <small>Twitter</small>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-instagram fa-5x"></i>
                                    <small>Instagram</small>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-google-plus fa-5x"></i>
                                    <small>Google+</small>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-linkedin fa-5x"></i>
                                    <small>LinkedIn</small>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-snapchat fa-5x"></i>
                                    <small>Snapchat</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <footer>
            <div id="copy">
                &copy; 2017 Wojtek Wernicki | 
                <a href="https://github.com/WojtekWernicki/static-portfolio-theme" target="_blank"><i class="fa fa-github"></i> GitHub</a>
            </div>
            <div id="cookies">Ta strona używa plików cookies do celów statystycznych.</div>
        </footer>
    </div>
    
    <div class="modal fade portfolio-modal" id="portfolio-item-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times fa-5x" aria-hidden="false"></i>
                </button>
                <div class="container">
                    <div class="row">
                        <h2 class="text-center">Contact Form</h2>
                        
                        <img src="" alt="Contact Form" class="img-responsive lazy-load" data-src="src/img/contact-form.png">
                        
                        <div class="text-center">
                            <p>
                                Used technologies:
                                <strong>HTML, CSS, jQuery, AJAX</strong>
                            </p>
                            <p>December 2016</p>
                        </div>
                        
                        <div class="text-center buttons">
                            <a href="https://github.com/WojtekWernicki/contact-form" target="_blank" class="btn btn-primary" role="button">
                                <i class="fa fa-github fa-fw"></i> GitHub
                            </a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-close fa-fw"></i> Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>