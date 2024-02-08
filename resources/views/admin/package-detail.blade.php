@extends('admin.layouts.main')

@section('main-container')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header  card-header--2 package-card">
                            <div>
                                <h5>Package's Details</h5>
                            </div>
                            <form class="d-inline-flex">
                                <button class="btn align-items-center btn-theme me-3"> <i
                                        class="fa fa-pencil-square-o me-2"></i>Edit
                                </button>
                                <button class="btn align-items-center d-flex btn-outline"> <i
                                        class="fa fa-trash-o me-2"></i>Delete
                                </button>
                            </form>
                        </div>

                        <div class="card-body">
                            <section class="single-section small-section bg-inner">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="description-section tab-section">
                                            <div class="detail-img">
                                                <img src="assets/images/tours/spain.jpg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </div>
                                            <div class="menu-top menu-up">
                                                <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active"
                                                            href="#highlight">highlight</a></li>
                                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                            href="#itinerary">itinerary</a>
                                                    </li>
                                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                            href="#gallery">gallery</a>
                                                    </li>
                                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                            href="#accommodations">Accommodations</a></li>
                                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                            href="#location">location</a>
                                                    </li>
                                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                            href="#review">reviews</a>
                                                    </li>
                                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                            href="#policy">policies</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="description-details tab-content" id="top-tabContent">
                                                <div class="menu-part about tab-pane fade show active" id="highlight">
                                                    <div class="about-sec">
                                                        <p class="top-space">Hola Espana! The vibrant
                                                            country of Spain beckons for an
                                                            adventure that lets us explore the sights 'n'
                                                            sounds of this remarkable
                                                            destination. Visit architechturally brilliant
                                                            and culture-rich cities of Madrid,
                                                            Seville, Barcelona, Cordoba, Valencia on this
                                                            tour and have the experience of a
                                                            lifetime!</p>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col-md-6">
                                                            <div class="about-sec">
                                                                <h4>inclusion</h4>
                                                                <ul>
                                                                    <li>Return economy class airfare with
                                                                        taxes</li>
                                                                    <li>Barcelona to Prague Internal flight
                                                                        ticket</li>
                                                                    <li>2 Nights Stay With Breakfast At
                                                                        Prague</li>
                                                                    <li>2 Nights Stay With Breakfast At
                                                                        Budapest</li>
                                                                    <li>1 Night Stay With Breakfast At
                                                                        Vienna</li>
                                                                    <li>Normal Visa Charges of Schengen</li>
                                                                    <li>5% GST</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 margin-up">
                                                            <div class="about-sec">
                                                                <h4>exclusion</h4>
                                                                <ul>
                                                                    <li>Any Extra Sightseeing Which Is Not
                                                                        Mentioned In The Itinerary</li>
                                                                    <li>Overseas Travel Insurance & Personal
                                                                        Expense Such As Mineral Water,
                                                                        Laundry Etc</li>
                                                                    <li>Personal expenses</li>
                                                                    <li>Excess baggage charge</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="about-sec ">
                                                        <h6>a road rip along spain's mediterranean coast
                                                        </h6>
                                                        <p>A road trip along Spain’s Mediterranean coast is
                                                            a guarantee of sunshine, lovely
                                                            beaches, and plenty of destinations with things
                                                            to see and do. We suggest
                                                            following the coastline at your own pace,
                                                            without a fixed timetable and with
                                                            room to improvise.We choose Barcelona as a
                                                            starting point because it’s a huge
                                                            transport hub. You might fancy heading north for
                                                            a couple of days to see the
                                                            Costa Brava (Girona): beautiful bays like Roses,
                                                            coves where the pine trees grow
                                                            right to the shoreline, large seaside resorts
                                                            and the fishing villages that once
                                                            inspired Dalí.</p>
                                                        <h6>the history of spain's great civilisations</h6>
                                                        <p>In Spain, you can get a history lesson while you
                                                            enjoy your holiday. Let us show
                                                            you places to visit where you can discover
                                                            milestones of human development, like
                                                            the earliest humans, the birth of art, and the
                                                            power of the great civilisations.
                                                        </p>
                                                        <h6>foodies, prepare to be enthused</h6>
                                                        <p class="bottom-space">From tasty tapas to superb
                                                            seafood and traditional roasts,
                                                            food in Spain is all about making the most of
                                                            the best local produce.Whether
                                                            you're on a city break in Barcelona or Madrid,
                                                            or you've plumped for a
                                                            countryside or coastal retreat, Spanish food is
                                                            full of flavour and character.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="menu-part accordion tab-pane fade " id="itinerary">
                                                    <div id="accordion" class="accordion-plan">
                                                        <div class="card">
                                                            <div class="card-header  dark-body" id="headingOne">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne" aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                        Madrid (1 Night)
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseOne" class="collapse show"
                                                                aria-labelledby="headingOne" data-bs-parent="#accordion">
                                                                <div class="card-body card-body--modifay ">
                                                                    Welcome to Madrid - the capital city of
                                                                    Spain. On arrival we enjoy the
                                                                    city orientation tour which includes the
                                                                    Plaza de Espana, Sabatini
                                                                    Garden, Cervantes Statue, Cibeles
                                                                    fountain, Parliament, Puerto del sol.
                                                                    Then visit the Royal Palace and Prado
                                                                    Museum – one of the world's
                                                                    greatest art galleries. From inside.
                                                                    <div class="highlight">
                                                                        <ul>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> dinner</li>
                                                                            <li><img src="assets/images/icon/tour/bed.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> night stay in
                                                                                madrid</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header dark-body" id="headingTwo">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                        Madrid – Toledo – Seville (2 Nights)
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse"
                                                                aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                                                <div class="card-body card-body--modifay">
                                                                    Today we proceed to Toledo - declared as
                                                                    World Heritage Site by UNESCO.
                                                                    On arrival we visit the city's most
                                                                    famous monument Santa Maria la
                                                                    Blanca Synagogue. Then we visit Sword
                                                                    factory. Later we leave for
                                                                    Seville
                                                                    <div class="highlight">
                                                                        <ul>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> breakfast
                                                                            </li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> lunch</li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> dinner</li>
                                                                            <li><img src="assets/images/icon/tour/bed.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> night stay in
                                                                                seville</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header dark-body" id="headingThree">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        Seville
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseThree" class="collapse"
                                                                aria-labelledby="headingThree"
                                                                data-bs-parent="#accordion">
                                                                <div class="card-body card-body--modifay">
                                                                    Today we enjoy Seville city tour
                                                                    wherein, we visit the massive cathedral
                                                                    with the Tomb of Christopher Columbus,
                                                                    Moorish Giralda Tower, The
                                                                    Alcázar, a photo stop at Santa Cruz
                                                                    Quarter with flower decked balconies
                                                                    and the Ultramodern expo site - a small
                                                                    scale model of "Victoria" the
                                                                    first vessel to circumnavigate the
                                                                    globe. Then we visit Metropol Parasol
                                                                    - The largest wooden structure in the
                                                                    world. In the evening we enjoy the
                                                                    Flamenco Show with dinner.
                                                                    <div class="highlight">
                                                                        <ul>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> breakfast
                                                                            </li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> lunch</li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> dinner</li>
                                                                            <li><img src="assets/images/icon/tour/bed.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> night stay in
                                                                                seville</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header dark-body" id="headingFour">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFour"
                                                                        aria-expanded="true" aria-controls="collapseFour">
                                                                        Seville – Costa Del Sol – Malaga (1
                                                                        Night)
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseFour" class="collapse"
                                                                aria-labelledby="headingFour" data-bs-parent="#accordion">
                                                                <div class="card-body card-body--modifay">
                                                                    Today we proceed to Costa del Sol - a
                                                                    region in the south of Spain. Here
                                                                    we explore Puerto Banus, then we proceed
                                                                    to Malaga. On arrival we enjoy
                                                                    orientation tour which includes
                                                                    Cathedral of Malaga, Plaza de la Merced,
                                                                    The Museo Picasso from outside, then we
                                                                    visit Moorish fortress La
                                                                    Alcazaba.
                                                                    <div class="highlight">
                                                                        <ul>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> breakfast
                                                                            </li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> lunch</li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> dinner</li>
                                                                            <li><img src="assets/images/icon/tour/bed.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> night stay in
                                                                                Málaga</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header dark-body" id="headingFive">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFive"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFive">
                                                                        Malaga – Cordoba – Valencia (1
                                                                        Night)
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseFive" class="collapse"
                                                                aria-labelledby="headingFive" data-bs-parent="#accordion">
                                                                <div class="card-body card-body--modifay">
                                                                    Today we proceed to Cordoba. On arrival
                                                                    we visit Mezquita from inside
                                                                    followed by orientation city tour which
                                                                    includes Roman bridge, Arab
                                                                    waterwheels and Plaza del Potro. Then we
                                                                    leave for Valencia.
                                                                    <div class="highlight">
                                                                        <ul>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> breakfast
                                                                            </li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> lunch</li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> dinner</li>
                                                                            <li><img src="assets/images/icon/tour/bed.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> night stay in
                                                                                Valencia</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header dark-body" id="headingSix">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSix"
                                                                        aria-expanded="false" aria-controls="collapseSix">
                                                                        Valencia – Barcelona (2 Nights)
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseSix" class="collapse"
                                                                aria-labelledby="headingSix" data-bs-parent="#accordion">
                                                                <div class="card-body card-body--modifay">
                                                                    Today we enjoy orientation city tour
                                                                    which includes Plaza del Mercado,
                                                                    Serranos Towers, Plaza de Ayuntamento
                                                                    and Cathedral of Valencia. Then we
                                                                    visit City of Arts and Sciences- to see
                                                                    the work of the Valencian
                                                                    architect Santiago Calatrava, several of
                                                                    its buildings have become icons
                                                                    in the city. Then we visit Ceramics
                                                                    Museum from inside. Later we proceed
                                                                    to Barcelona. On arrival we visit Poble
                                                                    Espanyol – an open air
                                                                    Archaeological museum and Spanish
                                                                    village showing replicas of
                                                                    characteristic houses from all regions
                                                                    of Spain.
                                                                    <div class="highlight">
                                                                        <ul>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> breakfast
                                                                            </li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> lunch</li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> dinner</li>
                                                                            <li><img src="assets/images/icon/tour/bed.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> night stay in
                                                                                Barcelona</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header dark-body" id="headingSeven">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSeven"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseSeven">
                                                                        Barcelona
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseSeven" class="collapse"
                                                                aria-labelledby="headingSeven"
                                                                data-bs-parent="#accordion">
                                                                <div class="card-body card-body--modifay">
                                                                    Today we enjoy Barcelona city
                                                                    orientation tour which includes Olympic
                                                                    stadium, colourful La Ramblas, Statue of
                                                                    Christopher Columbus and visit
                                                                    Gaudi's Sagrada Familia Cathedral Antoni
                                                                    Gaudí's unfinished masterpiece.
                                                                    Later we take a cable car ride to
                                                                    Montjuic hill which gives a panoramic
                                                                    view of the entire Barcelona city and
                                                                    Tibidado hill. Today evening we
                                                                    enjoy beach front of Barcelona.
                                                                    <div class="highlight">
                                                                        <ul>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> breakfast
                                                                            </li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> lunch</li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> dinner</li>
                                                                            <li><img src="assets/images/icon/tour/bed.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> night stay in
                                                                                Barcelona</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header dark-body" id="headingEight">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseEight"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseEight">
                                                                        Departure from Barcelona
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseEight" class="collapse"
                                                                aria-labelledby="headingEight"
                                                                data-bs-parent="#accordion">
                                                                <div class="card-body card-body--modifay">
                                                                    It’s time now to say goodbye to our
                                                                    travel companions. Let us be in
                                                                    contact with each other through email,
                                                                    Facebook, and meet again on one
                                                                    more memorable tour. See you all!!
                                                                    <div class="highlight">
                                                                        <ul>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> breakfast
                                                                            </li>
                                                                            <li><img src="assets/images/icon/tour/fork.png"
                                                                                    class="img-fluid blur-up lazyload"
                                                                                    alt=""> lunch</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-part tab-pane fade" id="gallery">
                                                    <div class="container-fluid p-0 ratio3_2">
                                                        <div class="row g-4 zoom-gallery">
                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="overlay">
                                                                    <a href="assets/images/tours/tour/7.jpg">
                                                                        <div class="overlay-background">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </div>
                                                                        <img src="assets/images/tours/tour/7.jpg"
                                                                            alt=""
                                                                            class="img-fluid blur-up lazyload bg-img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="overlay">
                                                                    <a href="assets/images/tours/tour/8.jpg">
                                                                        <div class="overlay-background">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </div>
                                                                        <img src="assets/images/tours/tour/8.jpg"
                                                                            alt=""
                                                                            class="img-fluid blur-up lazyload bg-img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="overlay">
                                                                    <a href="assets/images/tours/tour/9.jpg">
                                                                        <div class="overlay-background">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </div>
                                                                        <img src="assets/images/tours/tour/9.jpg"
                                                                            alt=""
                                                                            class="img-fluid blur-up lazyload bg-img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="overlay">
                                                                    <a href="assets/images/tours/tour/10.jpg">
                                                                        <div class="overlay-background">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </div>
                                                                        <img src="assets/images/tours/tour/10.jpg"
                                                                            alt=""
                                                                            class="img-fluid blur-up lazyload bg-img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="overlay">
                                                                    <a href="assets/images/tours/tour/11.jpg">
                                                                        <div class="overlay-background">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </div>
                                                                        <img src="assets/images/tours/tour/11.jpg"
                                                                            alt=""
                                                                            class="img-fluid blur-up lazyload bg-img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="overlay">
                                                                    <a href="assets/images/tours/tour/12.jpg">
                                                                        <div class="overlay-background">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </div>
                                                                        <img src="assets/images/tours/tour/12.jpg"
                                                                            alt=""
                                                                            class="img-fluid blur-up lazyload bg-img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-part tab-pane fade" id="accommodations">
                                                    <div class="list-view">
                                                        <div class="list-box">
                                                            <div class="list-img">
                                                                <a href="#">
                                                                    <img src="assets/images/hotel/gallery/1.jpg"
                                                                        class="img-fluid blur-up lazyload" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="list-content">
                                                                <div>
                                                                    <a href="#">
                                                                        <h5>sea view hotel</h5>
                                                                    </a>
                                                                    <p>dubai, 2km from center</p>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <span>26412 review</span>
                                                                    </div>
                                                                    <p class="hotel-info">relax and unwind
                                                                        with a special stay offer at a
                                                                        superlative value. conveniently
                                                                        located, offers spacious rooms.
                                                                        great dinning options. gym &amp;
                                                                        pool. innovative dinning and bar
                                                                        options. relaxing spa open till 2
                                                                        A.M.</p>
                                                                    <div class="facility-icon">
                                                                        <div class="facility-box">
                                                                            <img src="assets/images/icon/hotel/beer.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                            <span>bar</span>
                                                                        </div>
                                                                        <div class="facility-box">
                                                                            <img src="assets/images/icon/hotel/wifi.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                            <span>wifi</span>
                                                                        </div>
                                                                        <div class="facility-box">
                                                                            <img src="assets/images/icon/hotel/sunset.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                            <span>beach</span>
                                                                        </div>
                                                                        <div class="facility-box">
                                                                            <img src="assets/images/icon/hotel/pool.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                            <span>swimming</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-view">
                                                        <div class="list-box">
                                                            <div class="list-img">
                                                                <a href="#">
                                                                    <img src="assets/images/hotel/gallery/2.jpg"
                                                                        class="img-fluid blur-up lazyload" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="list-content">
                                                                <div>
                                                                    <a href="#">
                                                                        <h5>sea view hotel</h5>
                                                                    </a>
                                                                    <p>dubai, 2km from center</p>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <span>26412 review</span>
                                                                    </div>
                                                                    <p class="hotel-info">relax and unwind
                                                                        with a special stay offer at a
                                                                        superlative value. conveniently
                                                                        located, offers spacious rooms.
                                                                        great dinning options. gym &amp;
                                                                        pool. innovative dinning and bar
                                                                        options. relaxing spa open till 2
                                                                        A.M.</p>
                                                                    <div class="facility-icon">
                                                                        <div class="facility-box">
                                                                            <img src="assets/images/icon/hotel/beer.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                            <span>bar</span>
                                                                        </div>
                                                                        <div class="facility-box">
                                                                            <img src="assets/images/icon/hotel/wifi.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                            <span>wifi</span>
                                                                        </div>
                                                                        <div class="facility-box">
                                                                            <img src="assets/images/icon/hotel/sunset.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                            <span>beach</span>
                                                                        </div>
                                                                        <div class="facility-box">
                                                                            <img src="assets/images/icon/hotel/pool.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                            <span>swimming</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-view">
                                                        <div class="list-box">
                                                            <div class="list-img">
                                                                <a href="#">
                                                                    <img src="assets/images/hotel/gallery/3.jpg"
                                                                        class="img-fluid blur-up lazyload" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="list-content">
                                                                <div>
                                                                    <a href="#">
                                                                        <h5>sea view hotel</h5>
                                                                    </a>
                                                                    <p>dubai, 2km from center</p>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <span>26412 review</span>
                                                                    </div>
                                                                    <p class="hotel-info">relax and unwind
                                                                        with a special stay offer at a
                                                                        superlative value. conveniently
                                                                        located, offers spacious rooms.
                                                                        great dinning options. gym &amp;
                                                                        pool. innovative dinning and bar
                                                                        options. relaxing spa open till 2
                                                                        A.M.</p>
                                                                    <div class="facility-icon">
                                                                        <div class="facility-box">
                                                                            <img src="assets/images/icon/hotel/beer.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                            <span>bar</span>
                                                                        </div>
                                                                        <div class="facility-box">
                                                                            <img src="assets/images/icon/hotel/wifi.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                            <span>wifi</span>
                                                                        </div>
                                                                        <div class="facility-box">
                                                                            <img src="assets/images/icon/hotel/sunset.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                            <span>beach</span>
                                                                        </div>
                                                                        <div class="facility-box">
                                                                            <img src="assets/images/icon/hotel/pool.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                            <span>swimming</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-part tab-pane fade map" id="location">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147718689!2d-74.11976358820196!3d40.69740344169578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1568001991098!5m2!1sen!2sin"
                                                        style="border:0;" allowfullscreen=""></iframe>
                                                </div>
                                                <div class="menu-part tab-pane fade review" id="review">
                                                    <div class="review-box">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span>Wonderful Experience...!!</span>
                                                        </div>
                                                        <h6>by xyz, jun 18, 2019</h6>
                                                        <p>Our family holiday to Spain was awesome .pocket
                                                            friendly rates that make planning
                                                            a holiday a delight. I got a good hotels, flight
                                                            discount for my round trip
                                                            flight for the same trip while booking from
                                                            sites.Thank you moment for giving us
                                                            a wonderful experience.</p>
                                                    </div>
                                                    <div class="review-box">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span>Excellent Arrangements</span>
                                                        </div>
                                                        <h6>by xyz, jun 18, 2019</h6>
                                                        <p>Rica holidays planned our family trip to Spain,
                                                            it was so perfect. Everything was
                                                            flawless, in-case if any confusions there was
                                                            always someone to assist us at any
                                                            point. Had a wonderful experience and thanks to
                                                            these guys for making it happen.
                                                            I would really recommend them for further
                                                            vacation planning.</p>
                                                    </div>
                                                    <div class="review-box">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span>Best getaway destination with
                                                                family</span>
                                                        </div>
                                                        <h6>by xyz, jun 18, 2019</h6>
                                                        <p>Extremely happy with my trip to Spain. All the
                                                            arrangements were spot on and cabs
                                                            were punctual. Never had any hiccups and we
                                                            enjoyed the trip immensely. Thanks
                                                            you for organizing such a wonderful trip and
                                                            taking care of all my special
                                                            request with patience and skill.</p>
                                                    </div>
                                                </div>
                                                <div class="about menu-part tab-pane fade" id="policy">
                                                    <div class="about-sec">
                                                        <h6 class="resturant-6">Payment Policy</h6>
                                                        <ul class="policiy-6">
                                                            <li>Initial deposit – INR. 1, 00,000 per person
                                                                at the time of booking.</li>
                                                            <li>1st part payment 50% of the tour cost at
                                                                least 60 days prior departure.</li>
                                                            <li>Balance payment 30 days prior departure.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="about-sec">
                                                        <h6 class="resturant-6">Cancellation Policy</h6>
                                                        <ul class="policiy-6">
                                                            <li>Deposit of INR 1,00,000 per person is
                                                                non-refundable in any case once
                                                                booking is confirmed.</li>
                                                            <li>45 Days to 60 days prior to departure – 50%
                                                                of the total tour cost.</li>
                                                            <li>30 to 44 Days prior to departure 75 % of the
                                                                tour cost.</li>
                                                            <li>Within 30 days of departure 100% of the tour
                                                                cost.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="about-sec">
                                                        <h6 class="resturant-6">Important Terms and Conditions
                                                        </h6>
                                                        <ul class="policiy-6">
                                                            <li>All travelers have to carry their own
                                                                passports, tickets, forex & any other
                                                                important documents. It is recommended to
                                                                leave passport photocopy at your
                                                                resident, office & carry one copy while
                                                                travelling.</li>
                                                            <li>Passengers having excess baggage over 20 kgs
                                                                per person in check in baggage
                                                                & 07 kgs in hand luggage are liable to pay
                                                                excess baggage charge directly at
                                                                airport.</li>
                                                            <li>Any sightseeing not mentioned in the
                                                                itinerary will have to be paid
                                                                directly.</li>
                                                            <li>For the convenience of passengers the
                                                                itinerary may be amended.</li>
                                                            <li>Flight cost and availability are subject to
                                                                change at time of actual
                                                                booking.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section>
                            <!-- section end -->
                        </div>

                    </div>



                </div>
            </div>

        </div>
    @endsection
