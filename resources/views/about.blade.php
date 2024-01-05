<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Royal Lucky | About Us</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('homeLayout.header')
</head>

<body>

    @include('homeLayout.nav')



    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About Us</li>
                </ol>
                <h2>About Us</h2>

            </div>
        </section><!-- End Breadcrumbs -->









        <!-- ======= Contact Section ======= -->

        <section id="contact" class="contact mt-3">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-md-4">
                        <img src="{{ url('assets/img/ticket.jpeg') }}" style="max-width: 400px" />
                    </div>

                    <div class="col-md-8">
                        <p>Royal Lucky, a prominent lottery system in the state of Punjab, India, has become a source of
                            excitement and anticipation for countless individuals seeking their fortune. This innovative
                            lottery
                            system offers participants the convenience of checking their results on the official website
                            at
                            specific times each day. At precisely 6 pm, 1 pm, and 8 pm, eager users can access the
                            platform to
                            discover if luck has favored them in the latest draw.</p>

                        <p>The transparent and timely publication of results has contributed to the popularity of Royal
                            Lucky,
                            as it ensures fairness and credibility in the lottery process. Enthusiasts from all walks of
                            life
                            eagerly await these designated hours, fostering a sense of community and shared anticipation
                            as they
                            collectively engage in the thrill of the lottery.</p>

                        <p>Beyond the thrill of the draw, Royal Lucky's commitment to punctuality and accessibility sets
                            it
                            apart in the realm of lottery systems. The user-friendly interface of the website enhances
                            the
                            overall experience, providing a seamless platform for participants to easily navigate and
                            check
                            their fortunes. As this state-of-the-art lottery system continues to captivate the
                            imagination of
                            the people of Punjab, it remains a testament to the enduring allure of chance and the
                            excitement of
                            potential winnings.</p>
                    </div>

                </div>












            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    @include('homeLayout.footer')

</body>

</html>
