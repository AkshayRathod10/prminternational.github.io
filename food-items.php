<?php include 'inc/header.php'; ?>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Drinks and Food Items</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Latest Products Start -->
        <section class="latest-product-area latest-padding">
            <div class="container">
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <?php $items = glob('images/drink_food_items/*'); ?>
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        
                        <div class="row">
                        <?php foreach($items as $item): ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="<?= $item;?>" alt="">
                                    </div>
                                
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->


<?php include 'inc/footer.php'; ?>