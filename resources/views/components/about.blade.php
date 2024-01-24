<section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

        <div class="section-title">
            <h2>About</h2>
            <p>Learn more about me</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{ asset('assets/img/me.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>Web developer</h3>
                <p class="fst-italic">
                    Abdullajonov Boburjon - Backend developer and Software Engineering Student
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>02.22.2005</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                <span>abdullajonov.uz</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+998 90 750 71 05</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Namangan, Uzbekistan</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            @php
                                $birthYear = 2005;
                                $currentYear = date("Y");
                                $age = $currentYear - $birthYear;
                            @endphp

                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $age }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Junior</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                <span> <a href="mailto:hello@abdullajonov.uz" target="_blank">hello@abdullajonov.uz</a> </span>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <strong>Freelance:</strong><span>Available</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <p>
                    I'm Bobur, a Junior Web backend developer and software engineering student. I specialize in crafting robust web solutions, focusing on server-side technologies and efficient database management. With a commitment to continuous learning, my dual role in the industry and academia fuels my passion for overcoming challenges in web development.
                </p>
            </div>
        </div>

    </div><!-- End About Me -->


    <div class="counts container">

        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Happy Clients</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Projects</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="bi bi-headset"></i>
                    <span data-purecounter-start="0" data-purecounter-end="800" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>
            </div>

        </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

        <div class="section-title">
            <h2>Skills</h2>
        </div>

        <div class="row skills-content">

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill">HTML <i class="val">98%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">CSS(and SCSS) <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Bootstrap <i class="val">70%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">JavaScript <i class="val">65%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill">PHP and MySQL <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Git/Github <i class="val">60%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Linux <i class="val">40%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress">
                    <span class="skill">Laravel <i class="val">70%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Skills -->

</section>
