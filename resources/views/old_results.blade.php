<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Royal Lucky | Old Result</title>
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
                    <li>Old Result</li>
                </ol>
                <h2>Old Result</h2>

            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Contact Section ======= -->

        <section id="contact" class="contact mt-3">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Royal Lucky (10) Old Result</h2>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="container table-responsive">
                        <table class="table">
                            <thead class="table-danger">
                                <tr>
                                    <th>01:00 PM</th>
                                    <th>6:00 PM</th>
                                    <th>8:00 PM</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($organizedDataPaginated as $date => $times)
                                    <tr>
                                        <td>
                                            @php
                                                $record = collect($times)->first(function ($item) {
                                                    return $item['time'] == '1:00 PM';
                                                });
                                            @endphp
                                            <a href="old-results/view/{{ $record['slug'] ?? '#' }}">
                                                {{ optional($record)['date'] ? \Carbon\Carbon::parse($record['date'])->format('F j, Y') : '' }}
                                            </a>
                                        </td>
                                        <td>
                                            @php
                                                $record = collect($times)->first(function ($item) {
                                                    return $item['time'] == '6:00 PM';
                                                });

                                            @endphp

                                            <a href="old-results/view/{{ $record['slug'] ?? '#' }}">
                                                {{ optional($record)['date'] ? \Carbon\Carbon::parse($record['date'])->format('F j, Y') : '' }}
                                            </a>
                                        </td>
                                        <td>
                                            @php
                                                $record = collect($times)->first(function ($item) {
                                                    return $item['time'] == '8:00 PM';
                                                });
                                            @endphp
                                            <a href="old-results/view/{{ $record['slug'] ?? '#' }}">
                                                {{ optional($record)['date'] ? \Carbon\Carbon::parse($record['date'])->format('F j, Y') : '' }}
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">
                                            <img src="{{ url('assets/img/No data-rafiki.png') }}"
                                                class="img-fluid d-block mx-auto" style="max-width: 300px" />
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                        {{ $organizedDataPaginated->links('pagination::bootstrap-5') }}
                    </div>





                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    @include('homeLayout.footer')

</body>

</html>
