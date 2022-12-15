<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="./main_css/style.css">

  </head>
  <body>
    <!-- Start your project here-->
    <?php
    require './headers and footers/header.php';
    ?>

    <div class="firstDiv d-flex justify-content-evenly">
        <div class="layer1">
            <button class="m-0 col-12 btn btn-primary">Strategic Plan 2022 - 2027</button>
            <p class="tm1 fs-1 fw-bold m-0 text-black">OUR RMG</p>
            <p class="tm1 fs-1 fw-bold m-0 text-black">OUR FUTURE.</p>
            <p>We have named the RMG Maheshwari College Strategic Plan (2022-2027) Our RMG. Our Future.
                It is the roadmap that will chart a course of dynamic change over the next
                five years not just for the college, but for our students,
                our employees and the communities we serve.</p>
            <button class="btn btn-dark col-12">Explore Us.</button>
        </div>
        <div class="layer2">
            <img src="./img/bod6.jpg" class="img-fluid">
        </div>
    </div>

    <div class="back">
        <div class="secDiv d-flex justify-content-evenly">
            <div class="layer3">
                <img src="./img/bod5.jpg" class="bod5 img-fluid">
                <p class="fw-bold fs-2 pt-2 text-center">WHY RMG MAHESHWARI?</p>
            </div>

            <div class="layer4">
                <div class="accordion accordion-borderless" id="accordionFlushExampleX">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOneX">
                            <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                    data-mdb-target="#flush-collapseOneX" aria-expanded="true" aria-controls="flush-collapseOneX">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="flush-collapseOneX" class="accordion-collapse collapse show"
                             aria-labelledby="flush-headingOneX" data-mdb-parent="#accordionFlushExampleX">
                            <div class="accordion-body">
                                Placeholder content for this accordion, which is intended to demonstrate the
                                <code>.accordion-flush</code> class. This is the first item's accordion body.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwoX">
                            <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                    data-mdb-target="#flush-collapseTwoX" aria-expanded="false" aria-controls="flush-collapseTwoX">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwoX" class="accordion-collapse collapse" aria-labelledby="flush-headingTwoX"
                             data-mdb-parent="#accordionFlushExampleX">
                            <div class="accordion-body">
                                Placeholder content for this accordion, which is intended to demonstrate the
                                <code>.accordion-flush</code> class. This is the second item's accordion body.
                                Let's imagine this being filled with some actual content.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThreeX">
                            <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                    data-mdb-target="#flush-collapseThreeX" aria-expanded="false" aria-controls="flush-collapseThreeX">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThreeX" class="accordion-collapse collapse" aria-labelledby="flush-headingThreeX"
                             data-mdb-parent="#accordionFlushExampleX">
                            <div class="accordion-body">
                                Placeholder content for this accordion, which is intended to demonstrate the
                                <code>.accordion-flush</code> class. This is the third item's accordion body.
                                Nothing more exciting happening here in terms of content, but just filling up
                                the space to make it look, at least at first glance, a bit more representative
                                of how this would look in a real-world application.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="thirdDiv">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-3">
                <div class="card h-100 text-center">
                    <img src="./img/bod2.png" class="card-img-top" alt="Skyscrapers"/>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card h-100 text-center">
                    <img src="./img/bod3.png" class="card-img-top" alt="Los Angeles Skyscrapers"/>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card h-100 text-center">
                    <img src="./img/bod4.png" class="card-img-top" alt="Palm Springs Road"/>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show
                            that equal height action.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require './headers and footers/footer.php';
    ?>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
