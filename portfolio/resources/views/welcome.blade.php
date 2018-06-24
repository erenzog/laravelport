<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Earvin Renzo Gaite</title>
        <meta name="description" content="Freelance Web Developer/Designer">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- CSS -->
        <link rel='stylesheet' href='css/main.css' />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato|Nosifer" rel="stylesheet"> 
    </head>
    <body>
        <header>
            <nav>
                <ul class="main-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <img class="header-img" src="assets/header-bg.jpg" />
            <h1 class="name">Earvin Renzo Gaite</h1>
            <p class="contact-info">earvinrenzo.g@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(604) 716-4862</p>
        </header>

        <main class='container-fluid'>
        
            <span id="about"></span>
            <section class="about col-sm-12">
                <div class="container">
                <video autoplay muted loop id="video">
                    <source src="assets/Black_Keys.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                </video></div>
                <h1 class="heading">Web Developing</h1>
                <h3 class="sub-heading">Graphic Designing</h3>
            </section>
            
            <span id="services"></span>
            <section class="services col-sm-12">
                <audio id="alert">
                    <source src="assets/alert.mp3" type="audio/mp3" />
                </audio>
                
                <h1>Services</h1>
                <section class="row">
                    <article class="service col-sm-12 col-md-3">
                        <h1>Web Design</h1>
                        <p>Creative custom layout, and features for a website. Knowledgable about graphic design, maintainenance and additional values to a website. Lorem ipsum dolor sit amet, consectetur </p>
                    </article>
        
                    <article class="service col-sm-12 col-md-3">
                        <h1>UI Design</h1>
                        <p>Collaborative with product management, and implements innovative solutions for product direction, visuals, and experience. Lorem ipsum dolor sit amet, consectetur </p>
                    </article>
        
                    <article class="service col-sm-12 col-md-3">
                        <h1>Web Development</h1>
                        <p>Writes well designed, efficient code by using best practices! Usage of standard HTML/CSS practice. Integrates data from back-end services and datbases. Lorem ipsum dolor sit amet, consectetur</p>
                    </article>
        
                    <article class="service col-sm-12 col-md-3">
                        <h1>Photography</h1>
                        <p>Uses various techcniques to set scene for film or even digital photographs. Solid foundation of camera functions like lighting and composition. Lorem ipsum dolor sit amet, consectetur</p>
                    </article>
                </section>
                
                <section class="row">
                    <img class="service-exp col-sm-3" src="assets/webdesign.jpg" />
                    
                    <img class="service-exp col-sm-3" src="assets/ui.jpg" />
                    
                    <img class="service-exp col-sm-3" src="assets/webdevelopment.jpg" />
                    
                    <img class="service-exp col-sm-3" src="assets/photography.jpg" />
                </section>
            </section>
            
            <span id="portfolio"></span>
            <section class="portfolio col-sm-12">
                <h1>Proficiency Portfolio</h1>
                <section class="row">
                    <img class="col-sm-2 portfolio-img" src="assets/ps.png" />
                    
                    <img class="col-sm-2 portfolio-img" src="assets/illustrator.png" />
                    
                    <img class="col-sm-2 portfolio-img" src="assets/camera.jpeg" />
                    
                    <img class="col-sm-2 portfolio-img" src="assets/coding.png" />
                    
                    <img class="col-sm-2 portfolio-img" src="assets/html5.png" />
                    
                    <img class="col-sm-2 portfolio-img" src="assets/css3.png" />
                </section>
            </section>
            
            <span id="gallery"></span>
            <section class="gallery col-sm-12">
                <h1>Gallery</h1>
                <section class="row">
                    <article class="col-sm-4">
                        <img class="gallery-img" src="assets/panda.jpg" />
                        <p class="summary">Panda</p>
                        <a style="color:maroon" href="#">Desiigner</a> | <a style="color:maroon" href="#">Steve Aoki</a> | <a style="color:maroon" href="#">Desiigner</a>
                    </article>
                    
                    <article class="col-sm-4">
                        <img class="gallery-img" src="assets/panda.jpg" />
                        <p class="summary">Panda</p>
                        <a style="color:maroon" href="#">Desiigner</a> | <a style="color:maroon" href="#">Steve Aoki</a> | <a style="color:maroon" href="#">Desiigner</a>
                    </article>
                    
                    <article class="col-sm-4">
                        <img class="gallery-img" src="assets/panda.jpg" />
                        <p class="summary">Panda</p>
                        <a style="color:maroon" href="#">Desiigner</a> | <a style="color:maroon" href="#">Steve Aoki</a> | <a style="color:maroon" href="#">Desiigner</a>
                    </article>
                </section>
                
                <section class="row">
                    <article class="col-sm-4">
                        <img class="gallery-img" src="assets/panda.jpg" />
                        <p class="summary">Panda</p>
                        <a style="color:maroon" href="#">Desiigner</a> | <a style="color:maroon" href="#">Steve Aoki</a> | <a style="color:maroon" href="#">Desiigner</a>
                    </article>
                    
                    <article class="col-sm-4">
                        <img class="gallery-img" src="assets/panda.jpg" />
                        <p class="summary">Panda</p>
                        <a style="color:maroon" href="#">Desiigner</a> | <a style="color:maroon" href="#">Steve Aoki</a> | <a style="color:maroon" href="#">Desiigner</a>
                    </article>
                    
                    <article class="col-sm-4">
                        <img class="gallery-img" src="assets/panda.jpg" />
                        <p class="summary">Panda</p>
                        <a style="color:maroon" href="#">Desiigner</a> | <a style="color:maroon" href="#">Steve Aoki</a> | <a style="color:maroon" href="#">Desiigner</a>
                    </article>
                </section>
            </section>
            
            <span id="contact"></span>
            <section class="contact">
                <h1>Contact</h1>
                <div class="col-sm-5 form-container">
                    <form id="contactForm">
                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com">
                        </div>
                        <!-- Phone -->
                        <div class="form-group">
                            <label for="email">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="604-604-6046" >
                        </div>
                        <!-- Message -->
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" placeholder="Please leave your message, or inquiry here." rows="3"></textarea>
                        </div>
                        <!-- Submit -->
                        <button type="submit" class="btn btn-success">Send</button>
                    </form>
                </div>
            </section>

            <footer>
                <p>&#169; Earvin Renzo Gaite</p>
            </footer>

            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <script src="js/jquery.validate.min.js"></script>
            <script src='js/jquery.js'></script>
        </main>
    </body>
</html>
