<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Lottery</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('homeLayout.header')
</head>

<body>

    @include('homeLayout.nav')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <h1>Dare to Dream, Play to Win!</h1>
                    <h2>Unlock Your Fortune, One Ticket at a Time!</h2>
                    <a href="{{ url('today-result') }}" class="btn-get-started scrollto" id="currentTime">Time</a>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">


        <div class="section-title mt-5">
            <h2>🎉 **Lottery Results - <?php echo Date('Y'); ?>**🎉</h2>
            <p>We are excited to announce the winning numbers for today's lottery draw. Check your
                tickets carefully, and best of luck to all participants!</p>
        </div>

        <div class="row text-center" data-aos="fade-up" data-aos-delay="100" style="max-width: 200px; margin: 0 auto;">
            <a class="btn btn-danger mt-2" href="{{ url('result/1-pm-result') }}">1:00 PM</a><br>
            <a class="btn btn-danger mt-2" href="{{ url('result/6-pm-result') }}">6:00 PM</a><br>
            <a class="btn btn-danger mt-2" href="{{ url('result/8-pm-result') }}">8:00 PM</a><br>
        </div>





        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Total Lottery</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Winner</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Admin</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->



        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Experience the convenience and excitement of our lottery services.</p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-briefcase"></i>
                            <h4><a href="#">Ticket Purchases and Draw Participation</a></h4>
                            <p>Easily purchase lottery tickets online and participate in scheduled draws. Choose your
                                preferred lottery, select your numbers, and enter for a chance to win exciting prizes.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-card-checklist"></i>
                            <h4><a href="#">Automatic Subscription and Result Notifications</a></h4>
                            <p>Subscribe to our automatic ticket purchase service for hassle-free participation in your
                                favorite lotteries.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-bar-chart"></i>
                            <h4><a href="#">Secure Payment Options</a></h4>
                            <p>We offer a variety of secure payment methods, including credit cards, debit cards, and
                                digital payment options. Your transactions are handled with the utmost security for a
                                seamless and trustworthy experience.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-binoculars"></i>
                            <h4><a href="#">Prize Redemption Assistance</a></h4>
                            <p>If you're a lucky winner, our prize redemption process is simple and secure. Follow the
                                instructions on our website or contact our customer support for assistance in claiming
                                your prize.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->









        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <ul class="faq-list accordion" data-aos="fade-up">

                    <li>
                        <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">What is Royal Lucky? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Royal Lucky - Is the Premier Online Lottery Result Platform
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">What time are the
                            lottery results announced? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-x icon-close"></i></a>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                The lottery results are unveiled three times daily, at 1:00 PM, 6:00 PM, and 9:00 PM.
                                Stay tuned for your chance to discover the winning numbers and claim your luck!
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">How can I check the
                            lottery results on Royal Lucky? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-x icon-close"></i></a>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Checking the lottery results on Royal Lucky is easy! Simply visit our website and
                                navigate to the 'Results' section. There, you'll find the latest winning numbers
                                for each draw, conveniently organized by date and time.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Is Royal Lucky Lottery
                            System secure and fair? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-x icon-close"></i></a>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Absolutely! At Royal Lucky, we prioritize security and fairness. Our lottery system is
                                built on robust technology, and we adhere to strict industry standards. Rest assured
                                that our draws are conducted transparently, ensuring a fair chance for every
                                participant.
                            </p>
                        </div>
                    </li>



                </ul>

            </div>
        </section><!-- End Frequently Asked Questions Section -->





    </main><!-- End #main -->

    @include('homeLayout.footer')

    <script>
        function updateCurrentTime() {
            var currentTimeElement = document.getElementById('currentTime');
            var currentDate = new Date();
            var hours = currentDate.getHours().toString().padStart(2, '0');
            var minutes = currentDate.getMinutes().toString().padStart(2, '0');
            var seconds = currentDate.getSeconds().toString().padStart(2, '0');
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = (hours % 12) || 12;
            currentTimeElement.textContent = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
            setTimeout(updateCurrentTime, 1000);
        }


        updateCurrentTime();
    </script>

</body>

</html>
