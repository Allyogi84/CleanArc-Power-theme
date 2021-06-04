<?php /* Template Name: About Page */ get_header(); ?>
<section class="about-banner">
    <div class="container">
        <div class="bannerContaine">
            <div class="sliderContainerBanner">
                <?php if( have_rows('banner_container') ): while( have_rows('banner_container') ) : the_row(); ?>
                    <div class="innercontainerSlider">
                        <div class="imaheContainer">
                            <img src="<?php the_sub_field('Bannerimage'); ?>">
                        </div>
                        <div class="container">
                            <div class="contentContainerbanner">
                                <h2><?php the_sub_field('banner_heading'); ?></h2>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
        <div class="about-text">
            <h3><strong>The Future of</strong> Clean Energy is Now.</h3>
            <p>The concept of clean energy is beautiful. Unfortunately for the average person, getting the right
                clean
                energy products
                and advice has been nearly impossible.
            That's why at CleanArc Power we're on a mission to make clean energy easy and accessible for everyone.</p>
        </div>
        <div class="about-main-row">
            <div class="about-flex row">
                <div class="col-md-6">
                    <div class="about-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/how-img.webp" alt="how-img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-col-text">
                        <h3>How?</h3>
                        <p>For the past decade, we have striven to find, test and bring together innovative high
                            quality
                            clean energy products,
                            from solar, wind, solar lighting, energy management & efficiency, etc, and make them
                            available
                        to our customers.</p>

                        <p>We also offer a team of expert engineers to help you develop personalized clean
                            solutions.
                            So
                            whether you're a
                            homeowner, contractor, building manager, municipality or government agency, we can help
                            customize solutions to match
                        your needs.</p>
                    </div>
                </div>
            </div>
            <div class="about-flex row">
                <div class="col-md-6">
                    <div class="about-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/how-img2.webp" alt="how-img2">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-col-text">
                        <h3><strong>Reasons to work</strong> with CleanArc Power</h3>
                        <h6>Here is why CleanArc Power is the best resource for all your clean energy needs:</h6>
                        <ul>
                            <li>We are constantly evaluating new & updated products to bring to market, and
                                presenting to our customers for their
                            consideration.</li>
                            <li>Quality - We carry only high-quality products, and back them up with best-in-class
                            warranty.</li>
                            <li>Quality - We carry only high-quality products, and back them up with best-in-class
                            warranty.</li>
                            <li>We strive to develop long standing relationships with our channel partners to
                                continue to provide the latest products &
                            application strategies for their projects and programs.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion custom-howgot-accordion" id="accordionExample">
            <h2><strong> How We </strong> Got Here</h2>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Year2007
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
            data-parent="#accordionExample">
            <div class="card-body">
                <p>We had our first Clean Energy introduction with taking the reigns of a Silicon Valley
                    startup focusing on Hydrogen Fuel
                    Cassettes. While working with California Governor Schwarzenegger’s administration and an
                    early Tesla team, we realized
                    the dramatic challenges to deploying these types of early technologies to the market. We
                    defined gaps in infrastructure
                    that would challenge the production, transference and implementation of new technologies
                    in such a manner that would
                create competitive pricing vs incumbent.</p>
                <p>Also, recognizing the required bridging for acceptance in the various markets (fixed,
                    transportation, mobile) we began
                    developing various ‘adoption’ methodologies to soften the exchange in new product
                    investment against the current massive
                    investment in older technologies. We understood that there had to be various adoption
                    plans/models that would allow the
                slow growth acceptance to these technologies and the gradual shift in investments.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Year2008
            </button>
        </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
            <p>We launched an effort to begin mapping the global supply chain for primary renewable
                products and systems, including
                Solar, Wind and Hydro production. We developed relationships with major manufacturing,
                engineering, various levels of
                contractors and integrators as well as Investment banks to determine efficient means of
                deploying and financing these
                promising initiatives. This also included the repurposing of traditional limited service
                providers – such as
                electro-mechanical contractors, leveraging their teams and infrastructure for solar
                panel sub-assemblies and integration
            services.</p>
            <p>It quickly became evident that many small businesses were looking for a comprehensive
                source of solutions, where they
                weren’t interested in have a single product/solution being sold to them (IE – Solar,
                Gas, Wind, generation) but were
                looking for solutions that also reduced their energy needs (negative generation). From
                boutique supermarket chains to
                strip malls, these customers allowed us to begin creating our approach toward developing
                a more wholistic offering
            combining of Generation – Energy Management – Energy Efficiency solutions.</p>
            <p>We also acquired control of a prominent solar integrator to deploy and manage the first
                PPA (Power Purchase Agreement)
                structures where we owned 120+ generating systems and used regional Solar Credits to
                monetize the installation portfolio
                on an annual basis. These were our early learning foundations of a nascent and disparate
                industry. Utilizing this
            knowledge, we leveraged into our next phase of growth.</p>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header" id="headingThree">
        <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Year2012
        </button>
    </h2>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
data-parent="#accordionExample">
<div class="card-body">
    <p>A new venture was created as a vehicle to present and sell clean energy products to
        consumers and small business. Early
        thoughts that this platform would also serve as a discovery site where visitors would
        find out what was available and
        informative details to help educate. It was through this platform that we began being
        contacted by various
        municipalities, contractors, architects, Government Agencies & National Governments,
        etc., all in search of products,
        solutions coming in from varying perspectives. Our goal was to present a broad array of
        clean energy products to not
        only represent a single type of product (IE - Solar, Fans, Generators, etc.) but a
        broader representation of Energy
        Generation, Energy Efficiency and Energy Management components. This was an effort to
        craft a broader message that Clean
        Energy was not only about a particular technology or solution but represented any
        combination of
    Generation-Management-Efficiency components depending on situational needs.</p>
    <p>Additionally, we began designing and offering core package offerings for various types of
        clean energy products and
        services. These early packages were meant to support contractor partners who could offer
        these as value add to their
    existing business models.</p>
</div>
</div>
</div>
<div class="card">
    <div class="card-header" id="headingfour">
        <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
            data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
            Year2014
        </button>
    </h2>
</div>
<div id="collapsefour" class="collapse" aria-labelledby="headingfour"
data-parent="#accordionExample">
<div class="card-body">
    <p>We realized that there were certain 'hard products' that were high in demand and could
        easily be deployed throughout a
        Global SMB market. This is when we began creating a Commercial Manufacturing brand.The
        idea was to not only produce
        these products under our own brand to control quality, distribution and performance
        improvements but also to begin to
        align a more global response to the International markets in support of larger programs.
    </p>
    <p>Our model was established to 'franchise' to regional entities providing the broader
        program, engineering, products &
        services specific to local needs. Also, the model employs a strong socio-economic
        element where local assembly,
    distribution and O&M services are established to train and employ local resources.</p>
</div>
</div>
</div>
<div class="card">
    <div class="card-header" id="headingfive">
        <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
            data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
            Year2019
        </button>
    </h2>
</div>
<div id="collapsefive" class="collapse" aria-labelledby="headingfive"
data-parent="#accordionExample">
<div class="card-body">
    <p>Throughout experiences garnered from over a decade of customer inquiries & situational
        requirements, it became apparent
        that the vast Clean Energy and Sustainability market(s) were too disparate to have any
        concerted impact especially
        considering the current social consciousness of Global Sustainability
        conversations/efforts. The meanings of Clean
        Energy & Sustainability are in constant shift and growth. Hence, Cappi was conceived to
        aid the translation/anticipation
        of thousands of customer situational needs, coupled with the evergreen curation of the
        Clean Energy & Sustainability
        products, services, program, etc. It would not be Cappi's goal to sell the products &
        solutions, but rather present
        recommended solutions based on needs, demographics, etc. by creating an ambitious
        aggregation of these
        products/offerings and representing links where to inquire/purchase.
    </p>
    <p>Cappi is perceived to be the altruistic game changer, scaling to substantial impact on
        the Global community. A true
        advancement of how we will discover, view and apply Clean Energy & Sustainability in
    basically everything we do.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>