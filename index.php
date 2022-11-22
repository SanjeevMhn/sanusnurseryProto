<?php include_once "./inc/header.php" ?>
<?php include_once "./inc/navbar.php" ?>
<?php include_once "./inc/navbarSecondary.php" ?>
<section class="hero-section">
    <div class="img-container">
        <img src="./assets/images/hero.jpg" alt="">
    </div>
    <div class="info-text">
        <h3 class="welcome-text">Welcome</h3>
        <h4 class="desc-text">We at Sanu's Nursery welcome you to our nursery where you will find plants for all of your needs.</h4>
    </div>
</section>
<section class="shop-section">
    <a id="home"></a>
    <div class="container py-5">
        <h2 class="header-text ft-oleo-script text-center pb-5">Shop</h2>
        <div class="row">
            <div class="col-3 shop-sidenav">
                <form action="#" method="post">
                    <div class="form-group d-flex align-items-center border-dark border rounded-pill p-2">
                        <div class="input-box w-100">
                            <input type="text" name="search-text" id="" class="form-control border-0" placeholder="Search Product...">
                            <div class="icon-container fs-5">
                                <i class="bi bi-search"></i>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="categories pt-4">
                    <h5 class="sub-header-text pb-2 text-decoration-underline">Categories</h5>
                    <ul class="categories-list list-unstyled p-0 m-0 w-100">
                        <li class="list-item">
                            <a href="#" class="list-link">
                                <span class="product-name">Flowers</span>
                                <span class="product-count">20</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">
                                <span class="product-name">Shrubs</span>
                                <span class="product-count">20</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">
                                <span class="product-name">Trees</span>
                                <span class="product-count">20</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">
                                <span class="product-name">Vegetable</span>
                                <span class="product-count">20</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">
                                <span class="product-name">Fruits</span>
                                <span class="product-count">20</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9 shop-content">
                <nav class="product-list-nav d-flex align-items-center justify-content-between py-1">
                    <h5 class="product-list-detail mb-0">Showing 12 of 50 items</h5>
                    <div class="product-card-view-mode d-flex align-items-center">
                        <a href="#" class="grid-view view-order d-flex align-items-center justify-content-center fs-4 py-1 px-2">
                            <i class="bi bi-grid-3x3-gap-fill"></i>
                        </a>
                        <a href="#" class="list-view view-order d-flex align-items-center justify-content-center fs-4 py-1 px-2">
                            <i class="bi bi-list"></i>
                        </a>
                    </div>
                </nav>
                <div class="products-container row row-cols-auto row-cols-md-2 row-cols-lg-3">
                    <?php for ($i = 0; $i < 12; $i++) { ?>
                        <div class="col mb-4">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="./assets/images/placeholder-image.png" alt="">
                                </div>
                                <div class="product-data p-4">
                                    <h4 class="product-name pb-2">Lorem Ipusm</h4>
                                    <div class="product-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis iusto, quo minima ab nisi labore ea repellendus voluptatem sapiente ratione officia? Temporibus assumenda ad placeat, alias ullam iste id dolorum.</div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="pagination-content d-flex justify-content-center">
                    <button class="previous-page page-btn d-block" type="button">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button type="button" class="current-page d-block page-btn">1</button>
                    <button type="button" class="next-page d-block page-btn">2</button>
                    <button class="next-page page-btn d-block" type="button">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>


        </div>
    </div>
</section>
<?php include_once "./inc/footer.php" ?>