<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City Government - RFPMart + USWDS</title>
    <meta name="description" content="Explore city government departments, leadership, services, and public resources in one place." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/banner.png');" aria-label="Introduction">
            <div class="grid-container">
                <div class="usa-hero__callout maxw-tablet-lg">                 
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                           Discover RFPMart
                        </span>
                    </h1>
                    <p>
                        A trusted platform designed to simplify access to opportunities and resources.
                    </p>
					<div class="usa-hero__cta">
						<a href="#get-started" class="usa-button usa-button--big">Find Services</a>
					</div>
                </div>
            </div>
        </section>
			<section class="search-container">
			<div class="grid-container">
				<div class="grid-row">
					<div class="grid-col-12">
						<form class="usa-search usa-search--rfpmart" role="search">
							<label class="usa-sr-only" for="search-field">Search for services or information</label>
							<input class="usa-input" id="search-field" type="search" name="search" placeholder="Search for services or information" />
							<button class="usa-button" type="submit"><img src="uswds/dist/img/usa-icons-bg/search--white.svg" class="usa-search__submit-icon" alt="Search"></button>
						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="featured-container">
			<div class="grid-container-widescreen">
				<div class="grid-row grid-gap">
					<div class="grid-col-12 tablet:grid-col-6 desktop:grid-col">
						<div class="featured_sub">
						<i class="fa-solid fa-people-group"></i><span>City Council</span>
						</div>
					</div>
					<div class="grid-col-12 tablet:grid-col-6 desktop:grid-col">
						<div class="featured_sub">
						<i class="fa-solid fa-briefcase"></i><span>Careers</span>
						</div>
					</div>
					<div class="grid-col-12 tablet:grid-col-6 desktop:grid-col">
						<div class="featured_sub">
						<i class="fa-solid fa-car-side"></i><span>Police Department</span>
						</div>
					</div>
					<div class="grid-col-12 tablet:grid-col-6 desktop:grid-col">
						<div class="featured_sub">
						<i class="fa-solid fa-recycle"></i><span>Recycling</span>
						</div>
					</div>
					<div class="grid-col-12 tablet:grid-col-6 desktop:grid-col">
						<div class="featured_sub">
						<i class="fa-solid fa fa-envelope"></i><span>Contact Us</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="about_mayor_section">
			<div class="grid-container">
				<div class="grid-row">
					<div class="grid-col-12 desktop:grid-col-6">
						<div class="img_sec">
							<img class="width-full" src="images/webp/card-city-mayor.webp" alt="Emergency responders coordinating in the city">
                        </div>
					</div>
					<div class="grid-col-12 desktop:grid-col-6">
						<div class="mayor_head">Meet Mayor RFP Mart</div>
						<div class="mayor_line"></div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore possimus similique nemo odit doloremque laudantium? Since taking office in 2023, I’ve focused on strengthening our neighborhoods, supporting local businesses, and ensuring every resident has the opportunity to thrive. This website </p>
						<div class="usa-about-cta">
							<a href="#get-started" class="usa-button usa-button--big">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<hr class="line_btm">
		<section class="mission_section">
			<div class="grid-container">
				<div class="grid-row">
					<div class="grid-col-12">
						<div class="mission_head">Our Mission</div>
						<div class="mission_line"></div>
					</div>
					<div class="grid-col-12 desktop:grid-col-4">
						<div class="display-flex flex-justify-center flex-align-center">
							<img src="images/mission.png" class="" alt="Search">
						</div>
					</div>
					<div class="grid-col-12 desktop:grid-col-8">
						<p>Our mission is to foster a safe, vibrant, and inclusive community. We deliver essential services, support economic opportunity, and protect our natural and public spaces. </p>

						<p>We work in partnership with residents and local organizations to strengthen neighborhoods, maintain reliable infrastructure, and plan for a sustainable future.  </p>
					<div class="mission_sub_head">Our Goals: </div>
					<ul class="usa-list">
                        <li>Support community well-being</li>
                        <li>Encourage civic participation</li>
                        <li>Maintain strong infrastructure</li>
                        <li>Promote economic stability</li>
                        <li>Protect the environment</li>
                    </ul>
					</div>
					
				</div>
			</div>
		</section>
		<section class="pgm_section">
			<div class="grid-container">
				<div class="mayor_head">Initiatives & Programs</div>
				<div class="mayor_line"></div>
				<div class="grid-row">
				  <div class="grid-col-12 tablet:grid-col-12">
					<div class="grid-row grid-gap">
					  <div class="grid-col-auto">
						<i class="fa-solid fa-industry fa-2x text-primary"></i>
					  </div>
					  <div class="grid-col">
						<h3 class="usa-heading-md margin-top-0">
						  Sustainable City Infrastructure
						</h3>
						<p class="usa-prose margin-bottom-0">
						  Long-term investment to modernize public systems and reduce emissions.
						</p>
					  </div>
					</div>
				  </div>
				  <div class="grid-col-12 tablet:grid-col-12">
					<div class="grid-row grid-gap">
					  <div class="grid-col-auto">
						<i class="fa-solid fa-tree fa-2x text-primary"></i>
					  </div>
					  <div class="grid-col">
						<h3 class="usa-heading-md margin-top-0">
						  Neighborhood Green Spaces
						</h3>
						<p class="usa-prose margin-bottom-0">
						  Planting trees and expanding access to parks and community green areas.
						</p>
					  </div>
					</div>
				  </div>
				  <div class="grid-col-12 tablet:grid-col-12">
					<div class="grid-row grid-gap">
					  <div class="grid-col-auto">
						<i class="fa-solid fa-house fa-2x text-primary"></i>
					  </div>
					  <div class="grid-col">
						<h3 class="usa-heading-md margin-top-0">
						  Affordable Housing Support
						</h3>
						<p class="usa-prose margin-bottom-0">
						  Providing resources and assistance for inclusive housing programs for all.
						</p>
					  </div>
					</div>
				  </div>
				  <div class="grid-col-12 tablet:grid-col-12">
					<div class="grid-row grid-gap">
					  <div class="grid-col-auto">
						<i class="fa-solid fa-store fa-2x text-primary"></i>
					  </div>
					  <div class="grid-col">
						<h3 class="usa-heading-md margin-top-0">
						  Small Business Growth Assistance
						</h3>
						<p class="usa-prose margin-bottom-0">
						  Supporting local businesses and entrepreneurship.
						</p>
					  </div>
					</div>
				  </div>
				  <div class="grid-col-12 tablet:grid-col-12">
					<div class="grid-row grid-gap">
					  <div class="grid-col-auto">
						<i class="fa-solid fa-car-side fa-2x text-primary"></i>
					  </div>
					  <div class="grid-col">
						<h3 class="usa-heading-md margin-top-0">
						  Clean Mobility Pilot
						</h3>
						<p class="usa-prose margin-bottom-0">
						  Piloting new transit projects to improve air quality and transportation options.
						</p>
					  </div>
					</div>
				  </div>
				   <div class="grid-col-12">
						  <div class="usa-pgm-cta">
									<a href="#get-started" class="usa-button usa-button--big">View All Initiatives & Programs</a>
							</div>
						</div>

    </div>
  </div>
</section>
<hr class="line_btm">
        <section class="grid-container usa-section">
            <div class="grid-row grid-gap-4">
                <div class="tablet:grid-col-6 desktop:grid-col-6">
                    <div class="margin-bottom-4">
                        <div class="event_head">Latest News</div>
						<div class="event_line"></div>
                    </div>
                    <ul class="usa-collection">
                        <li class="usa-collection__item margin-top-0 padding-top-0 border-0">
                            <div class="usa-collection__calendar-date">
                                <time datetime="2020-09-30T12:00:00+01:00"><span class="usa-collection__calendar-date-month">SEP</span>
                                    <span class="usa-collection__calendar-date-day">30</span></time>
                            </div>

                            <div class="usa-collection__body">
                                <h4 class="usa-collection__heading">
                                    <a
                                        class="usa-link"
                                        href="https://trumpadministration.archives.performance.gov/presidents-winners-press-release/">Gears of Government President’s Award winners</a>
                                </h4>
                                <p class="usa-collection__description text-base">
                                    by John Doe
                                </p>
                            </div>
                        </li>

                        <li class="usa-collection__item border-0">
                            <div class="usa-collection__calendar-date">
                                <time datetime="2020-09-30T12:00:00+01:00"><span class="usa-collection__calendar-date-month">SEP</span>
                                    <span class="usa-collection__calendar-date-day">30</span></time>
                            </div>

                            <div class="usa-collection__body">
                                <h4 class="usa-collection__heading">
                                    <a
                                        class="usa-link"
                                        href="https://trumpadministration.archives.performance.gov/presidents-winners-press-release/">Gears of Government President’s Award winners</a>
                                </h4>
                                <p class="usa-collection__description text-base">
                                    by John Doe
                                </p>
                            </div>
                        </li>

                        <li class="usa-collection__item border-0">
                            <div class="usa-collection__calendar-date">
                                <time datetime="2020-09-30T12:00:00+01:00"><span class="usa-collection__calendar-date-month">SEP</span>
                                    <span class="usa-collection__calendar-date-day">30</span></time>
                            </div>

                            <div class="usa-collection__body">
                                <h4 class="usa-collection__heading">
                                    <a
                                        class="usa-link"
                                        href="https://trumpadministration.archives.performance.gov/presidents-winners-press-release/">Gears of Government President’s Award winners</a>
                                </h4>
                                <p class="usa-collection__description text-base">
                                    by John Doe
                                </p>
                            </div>
                        </li>
                    </ul>
									<a href="#get-started" class="usa-button width-full usa-button--big">View All News</a>
                   
                </div>

                <div class="tablet:grid-col-6 desktop:grid-col-6">
                    <div class="margin-bottom-4">
                         <div class="event_head">Upcoming Events</div>
						<div class="event_line"></div>
                    </div>
                    <ul class="usa-collection">
                        <li class="usa-collection__item margin-top-0 padding-top-0 border-0">
                            <div class="usa-collection__calendar-date border-right-1px">
                                <time datetime="2020-09-30T12:00:00+01:00" class="text-center">
                                    <p class="font-body-2xs margin-0 line-height-sans-1">
                                        SEP
                                    </p>
                                    <h4 class="font-heading-2xl margin-0">
                                        21
                                    </h4>
                                    <p class="font-body-2xs margin-0 line-height-sans-1">
                                        2025
                                    </p>
                                </time>
                            </div>

                            <div class="usa-collection__body">
                                <p class="font-body-2xs margin-0 text-base line-height-sans-1">
                                    Monday, 11:20 AM
                                </p>
                                <h4 class="usa-collection__heading text-italic margin-top-1">
                                    Public Forum
                                </h4>
                                <p class="font-body-2xs text-base line-height-sans-1">
                                    Albert Hall
                                </p>
                            </div>
                        </li>

                        <li class="usa-collection__item border-0">
                            <div class="usa-collection__calendar-date border-right-1px">
                                <time datetime="2020-09-30T12:00:00+01:00" class="text-center">
                                    <p class="font-body-2xs margin-0 line-height-sans-1">
                                        SEP
                                    </p>
                                    <h4 class="font-heading-2xl margin-0">
                                        21
                                    </h4>
                                    <p class="font-body-2xs margin-0 line-height-sans-1">
                                        2025
                                    </p>
                                </time>
                            </div>

                            <div class="usa-collection__body">
                                <p class="font-body-2xs margin-0 text-base line-height-sans-1">
                                    Monday, 11:20 AM
                                </p>
                                <h4 class="usa-collection__heading text-italic margin-top-1">
                                    Public Forum
                                </h4>
                                <p class="font-body-2xs text-base line-height-sans-1">
                                    Albert Hall
                                </p>
                            </div>
                        </li>

                        <li class="usa-collection__item border-0">
                            <div class="usa-collection__calendar-date border-right-1px">
                                <time datetime="2020-09-30T12:00:00+01:00" class="text-center">
                                    <p class="font-body-2xs margin-0 line-height-sans-1">
                                        SEP
                                    </p>
                                    <h4 class="font-heading-2xl margin-0">
                                        21
                                    </h4>
                                    <p class="font-body-2xs margin-0 line-height-sans-1">
                                        2025
                                    </p>
                                </time>
                            </div>

                            <div class="usa-collection__body">
                                <p class="font-body-2xs margin-0 text-base line-height-sans-1">
                                    Monday, 11:20 AM
                                </p>
                                <h4 class="usa-collection__heading text-italic margin-top-1">
                                    Public Forum
                                </h4>
                                <p class="font-body-2xs text-base line-height-sans-1">
                                    Albert Hall
                                </p>
                            </div>
                        </li>
                    </ul>

                    <a href="#get-started" class="usa-button width-full usa-button--big">View All Events</a>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>