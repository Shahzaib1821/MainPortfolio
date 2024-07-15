@extends('layouts.layout1')

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- Team area start -->
                <section class="team__area-7 pt-100 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="sec-title-wrapper wrap">
                                    <h2 class="sec-sub-title title-anim">
                                        <div>
                                            Projects
                                        </div>
                                    </h2>
                                    <h3 class="sec-title title-anim">
                                        <div>
                                            Showcasing Our
                                        </div>
                                        <div>
                                            Best Work
                                        </div>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                <div class="service__top-text text-anim">
                                    <p class="text-white-50">
                                        Our portfolio highlights the diversity and depth of our expertise across various
                                        industries.
                                        We are committed to delivering exceptional results through <span>innovative design
                                            solutions</span> and
                                        cutting-edge technology, always pushing the boundaries to exceed client
                                        expectations.>
                                    </p>
                                </div>
                            </div>

                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                                <div class="service__top-btn">
                                    <div class="btn_wrapper"
                                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                                        <a href="#" class="btn-item wc-btn-secondary btn-hover"
                                            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);"><span
                                                style="top: 77.6304px; left: -3.64136px;"></span>
                                            Get In<br>
                                            touch <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tabs Navigation -->
                        <ul class="nav nav-tabs pt-5 mt-5" id="teamTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="all-projects-tab" data-bs-toggle="tab" href="#all-projects"
                                    role="tab" aria-controls="all-projects" aria-selected="true">All Projects</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="freelance-tab" data-bs-toggle="tab" href="#freelance" role="tab"
                                    aria-controls="freelance" aria-selected="false">Freelance
                                    Projects</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="software-&-webApps-tab" data-bs-toggle="tab"
                                    href="#software-&-webApps" role="tab" aria-controls="software-&-webApps"
                                    aria-selected="false">Softwares & Web
                                    Apps</a>
                            </li>
                        </ul>

                        <!-- Tabs Content -->
                        <div class="tab-content mt-4" id="teamTabsContent">
                            <!-- All Projects Tab -->
                            <div class="tab-pane fade show active" id="all-projects" role="tabpanel"
                                aria-labelledby="all-projects-tab">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="team__items-7">
                                                <a href="team-details.html">
                                                    <div class="team__item-7 fade_bottom_3">
                                                        <div class="team__name-wrap-7">
                                                            <p class="tm-serial"></p>

                                                            <h4 class="project-heading title-anim title">Project Name</h4>
                                                        </div>
                                                        <h4 class="text-center project-heading title-anim title">Project For</h4>
                                                        {{-- <h4 class="tm-rolee">About Project</h4> --}}
                                                        <h4 class="custom-badgese project-heading title-anim title">Technologies Used</h4>
                                                        <h4 class="custom-badgese project-heading title-anim title">Visit Project</h4>

                                                    </div>
                                                </a>
                                                <div class="team7__img-wrap">
                                                    <div class="team7__img"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach ($projects as $project)
                                        <div class="col-md-12">
                                            <div class="team__items-7">
                                                <a href="team-details.html">
                                                    <div class="team__item-7 fade_bottom_3">
                                                        <div class="team__name-wrap-7">
                                                            <p class="tm-serial">{{ $project->id }}</p>
                                                            <h3 class="tm-name">{{ $project->title }}</h3>
                                                        </div>
                                                        <h4
                                                            class="tm-role d-flex justify-content-center align-items-center">
                                                            {{ $project->company }}</h4>
                                                        <div class="custom-badge">
                                                            <?php
                                                            $stacks = explode(', ', $project->stacks);
                                                            foreach ($stacks as $stack) {
                                                                echo '<span class="custom-badges">' . htmlspecialchars($stack) . '</span>';
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="tm-link"><i class="fa-solid fa-arrow-right"></i></div>
                                                        <div class="team__hover-7"
                                                            style="background-image: url({{ asset($project->image_path) }});">
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="team7__img-wrap">
                                                    <div class="team7__img"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Web Development Tab -->
                            <div class="tab-pane fade" id="freelance" role="tabpanel" aria-labelledby="freelance-tab">
                                <div class="row">
                                    @foreach ($projects->where('company', 'Freelance') as $project)
                                        <div class="col-md-12">
                                            <div class="team__items-7">
                                                <a href="team-details.html">
                                                    <div class="team__item-7 fade_bottom_3">
                                                        <div class="team__name-wrap-7">
                                                            <p class="tm-serial">{{ $project->id }}</p>
                                                            <h3 class="tm-name">{{ $project->title }}</h3>
                                                        </div>
                                                        <h4
                                                            class="tm-role d-flex justify-content-center align-items-center">
                                                            {{ $project->company }}</h4>
                                                        <div class="custom-badge">
                                                            <?php
                                                            $stacks = explode(', ', $project->stacks);
                                                            foreach ($stacks as $stack) {
                                                                echo '<span class="custom-badges">' . htmlspecialchars($stack) . '</span>';
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="tm-link"><i class="fa-solid fa-arrow-right"></i></div>
                                                        <div class="team__hover-7"
                                                            style="background-image: url({{ asset($project->image_path) }});">
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="team7__img-wrap">
                                                    <div class="team7__img"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Mobile Apps Tab -->
                            <div class="tab-pane fade" id="software-&-webApps" role="tabpanel"
                                aria-labelledby="software-&-webApps-tab">
                                <div class="row">
                                    @foreach ($projects->where('company', 'Softwares') as $project)
                                        <div class="col-md-12">
                                            <div class="team__items-7">
                                                <a href="team-details.html">
                                                    <div class="team__item-7 fade_bottom_3">
                                                        <div class="team__name-wrap-7">
                                                            <p class="tm-serial">{{ $project->id }}</p>
                                                            <h3 class="tm-name">{{ $project->title }}</h3>
                                                        </div>
                                                        <h4
                                                            class="tm-role d-flex justify-content-center align-items-center">
                                                            {{ $project->company }}</h4>
                                                        <div class="custom-badge">
                                                            <?php
                                                            $stacks = explode(', ', $project->stacks);
                                                            foreach ($stacks as $stack) {
                                                                echo '<span class="custom-badges">' . htmlspecialchars($stack) . '</span>';
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="tm-link"><i class="fa-solid fa-arrow-right"></i></div>
                                                        <div class="team__hover-7"
                                                            style="background-image: url({{ asset($project->image_path) }});">
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="team7__img-wrap">
                                                    <div class="team7__img"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Team area end -->

                <!-- CTA area start -->
                <section class="cta__area">
                    <div class="container line pt-140 pb-110">
                        <div class="line-3"></div>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="cta__content">
                                    <p class="cta__sub-title">Work with us</p>
                                    <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                                    <div class="btn_wrapper">
                                        <a href="contact.html"
                                            class="wc-btn-primary btn-hover btn-item"><span></span>Let’s
                                            talk us <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- CTA area end -->

            </main>
        @endsection
