<?php
/*
* Template Name: Homepage
*/
?>
<header>
        <nav id="navigation-bar">
            <a class="link" href="#">About</a>
            <a class="link" href="#">My work</a>
            <a class="link" href="#">Contact</a>
        </nav>
    </header>
    <main>
        <section id="about">
            <div class="deskcon">
                <div class="flex-container mar">
                    <div class="titles">
                        <h1><?php the_field('page-title');?></h1>
                        <h5><?php the_field('scnd-title');?></h5>
                    </div>
                    <div class="image img1">
                        <img src="testimg.JPG" alt="Lee's image" class="my-img">
                    </div>
                </div>
                <div class="flex-container mar skills">
                    <span class="skill">HTML 5</span>
                    <span class="skill">CSS3</span>
                    <span class="skill">JS</span>
                    <span class="skill">PHP</span>
                    <span class="skill">Wordpress</span>
                </div>
                <div class="flex-container mar no-wrap">
                    <div class="contact">
                        <div class="container">
                            <i class="fas fa-phone"></i>
                            <a class="link" href="tel:+972526021716" target="_blank">+972526021716</a>
                        </div>
                        <div class="container">
                            <i class="fas fa-envelope"></i>
                            <a class="link" href="mailto:leemalul555@gmail.com" target="_blank">leemalul555@gmail.com</a>
                        </div>
                        <div class="container">
                            <i class="fab fa-linkedin"></i>
                            <a class="link" href="https://www.linkedin.com/in/lee-meloul-99430320b/" target="_blank">linkedin.com/in/lee-meloul/</a>
                        </div>
                    </div>
                    <div class="text-about">
                        <p class="par">My name is Lee, 23 years old from Ashdod.</p><br>
                    </div>
                </div>
            </div>
        </section>
        <section id="mywork">
            <div class="deskcon">
                <div class="flex-container work-con">
                    <div class="image">
                        <img class="my-img" src="testimg.JPG" alt="project 1">
                    </div>
                    <div class="titles work-title">
                        <h3>Project 1</h3>
                        <time>April 2021</time>
                    </div>
                </div>
                <p class="par par1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Unde ut exercitationem cumque ratione quasi possimus rem autem deserunt id quidem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                A quaerat voluptatem illum quibusdam, reprehenderit consequatur atque eos animi fugit? Quo.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, modi.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, architecto?
                </p><br>
            </div>
            <div class="deskcon">
                <div class="flex-container work-con">
                    <div class="image">
                        <img class="my-img" src="testimg.JPG" alt="project 1">
                    </div>
                    <div class="titles work-title">
                        <h3>Project 1</h3>
                        <time>April 2021</time>
                    </div>
                </div>
                <p class="par par2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Unde ut exercitationem cumque ratione quasi possimus rem autem deserunt id quidem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                A quaerat voluptatem illum quibusdam, reprehenderit consequatur atque eos animi fugit? Quo.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, modi.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, architecto?
                </p>
            </div>
        </section>
        <section id="contact">
            <form id="contact-form" class="par" method="GET" action="">
                <fieldset>
                    <label for="full-name">Full name</label>
                    <input type="text" name="full-name">
                </fieldset>
                <fieldset>
                   <label for="email">Email</label>
                   <input type="email" name="email" required="required">
                </fieldset>
                <fieldset>
                   <label for="">Message</label><br><br>
                   <textarea name="Message" id="" cols="30" rows="10"></textarea>
                </fieldset>
                <button id="form-btn" type="submit">submit</button>
            </form>
        </section>
    </main>
    <footer>
        <h5>&copy; &nbsp; Lee Meloul</h5>
        <span>2021</span>
    </footer>