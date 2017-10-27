
    <?php if ($items == false) {
        echo
        "<div class=\"container products-right\" style=\"margin-top: 100px; margin-bottom: 100px;\">
        <h5>No search items match your query</h5>
        </div>";
    }
    else { ?>

    <div class="clearfix"></div>
    <div class="single-pro" style="margin-left: 100px; margin-right: 100px;">
        <div class="container products-right">
            <h5>Search Results</h5>
        </div>

        <?php

        foreach ($items as $item) {
            echo
                "<div class='col-md-3 product-men yes-marg'>
                    <div class='men-pro-item simpleCart_shelfItem'>
                        <div class='men-thumb-item'>
                            <img src='" . base_url() . "assets/images/items/" . $item->id . "/icon.jpg' alt='Dummy Image' class='pro-image-front'>
                            <img src='" . base_url() . "assets/images/items/" . $item->id . "/icon.jpg' alt='Dummy Image Back' class='pro-image-back'>
                            <div class='men-cart-pro'>
                                <div class='inner-men-cart-pro'>
                                    <a href='" . base_url() . "/Page/singleItem/" . $item->id . "' class='link-product-add-cart'>Quick View</a>                                           
                                </div>
                            </div>
                        </div>
                        <div class='item-info-product'>
                            <h4><a href='" . base_url() . "/Page/singleItem/" . $item->id . "'>" . $item->description . "</a> </h4>
                            <div class='info-product-price'>
                                <span>Rs. </span><span class='item_price'>" . $item->price . "</span>
                                <del>" . $item->price . "</del>
                            </div>
                            <a href='#' class='item_add single-item hvr-outline-out button2'>Add to cart</a>
                        </div>
                    </div>
                </div>"
            ;
        }

        ?>

<!--        <div class="col-md-3 product-men">-->
<!--            <div class="men-pro-item simpleCart_shelfItem">-->
<!--                <div class="men-thumb-item">-->
<!--                    <img src="images/w4.png" alt="" class="pro-image-front">-->
<!--                    <img src="images/w4.png" alt="" class="pro-image-back">-->
<!--                    <div class="men-cart-pro">-->
<!--                        <div class="inner-men-cart-pro">-->
<!--                            <a href="single.html" class="link-product-add-cart">Quick View</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <span class="product-new-top">New</span>-->
<!--                </div>-->
<!--                <div class="item-info-product ">-->
<!--                    <h4><a href="single.html">Hand Bag</a></h4>-->
<!--                    <div class="info-product-price">-->
<!--                        <span class="item_price">$45.99</span>-->
<!--                        <del>$69.71</del>-->
<!--                    </div>-->
<!--                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 product-men">-->
<!--            <div class="men-pro-item simpleCart_shelfItem">-->
<!--                <div class="men-thumb-item">-->
<!--                    <img src="images/w2.png" alt="" class="pro-image-front">-->
<!--                    <img src="images/w2.png" alt="" class="pro-image-back">-->
<!--                    <div class="men-cart-pro">-->
<!--                        <div class="inner-men-cart-pro">-->
<!--                            <a href="single.html" class="link-product-add-cart">Quick View</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <span class="product-new-top">New</span>-->
<!--                </div>-->
<!--                <div class="item-info-product ">-->
<!--                    <h4><a href="single.html">Sandals</a></h4>-->
<!--                    <div class="info-product-price">-->
<!--                        <span class="item_price">$45.99</span>-->
<!--                        <del>$69.71</del>-->
<!--                    </div>-->
<!--                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-3 product-men">-->
<!--            <div class="men-pro-item simpleCart_shelfItem">-->
<!--                <div class="men-thumb-item">-->
<!--                    <img src="images/ep3.png" alt="" class="pro-image-front">-->
<!--                    <img src="images/ep3.png" alt="" class="pro-image-back">-->
<!--                    <div class="men-cart-pro">-->
<!--                        <div class="inner-men-cart-pro">-->
<!--                            <a href="single.html" class="link-product-add-cart">Quick View</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <span class="product-new-top">New</span>-->
<!--                </div>-->
<!--                <div class="item-info-product ">-->
<!--                    <h4><a href="single.html">Watches</a></h4>-->
<!--                    <div class="info-product-price">-->
<!--                        <span class="item_price">$45.99</span>-->
<!--                        <del>$69.71</del>-->
<!--                    </div>-->
<!--                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-3 product-men">-->
<!--            <div class="men-pro-item simpleCart_shelfItem">-->
<!--                <div class="men-thumb-item">-->
<!--                    <img src="images/a5.png" alt="" class="pro-image-front">-->
<!--                    <img src="images/a5.png" alt="" class="pro-image-back">-->
<!--                    <div class="men-cart-pro">-->
<!--                        <div class="inner-men-cart-pro">-->
<!--                            <a href="single.html" class="link-product-add-cart">Quick View</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <span class="product-new-top">New</span>-->
<!--                </div>-->
<!--                <div class="item-info-product ">-->
<!--                    <h4><a href="single.html">T shirts</a></h4>-->
<!--                    <div class="info-product-price">-->
<!--                        <span class="item_price">$45.99</span>-->
<!--                        <del>$69.71</del>-->
<!--                    </div>-->
<!--                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-3 product-men yes-marg">-->
<!--            <div class="men-pro-item simpleCart_shelfItem">-->
<!--                <div class="men-thumb-item">-->
<!--                    <img src="images/g1.png" alt="" class="pro-image-front">-->
<!--                    <img src="images/g1.png" alt="" class="pro-image-back">-->
<!--                    <div class="men-cart-pro">-->
<!--                        <div class="inner-men-cart-pro">-->
<!--                            <a href="single.html" class="link-product-add-cart">Quick View</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <span class="product-new-top">New</span>-->
<!---->
<!--                </div>-->
<!--                <div class="item-info-product ">-->
<!--                    <h4><a href="single.html">Dresses</a></h4>-->
<!--                    <div class="info-product-price">-->
<!--                        <span class="item_price">$45.99</span>-->
<!--                        <del>$69.71</del>-->
<!--                    </div>-->
<!--                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-3 product-men yes-marg">-->
<!--            <div class="men-pro-item simpleCart_shelfItem">-->
<!--                <div class="men-thumb-item">-->
<!--                    <img src="images/a6.png" alt="" class="pro-image-front">-->
<!--                    <img src="images/a6.png" alt="" class="pro-image-back">-->
<!--                    <div class="men-cart-pro">-->
<!--                        <div class="inner-men-cart-pro">-->
<!--                            <a href="single.html" class="link-product-add-cart">Quick View</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <span class="product-new-top">New</span>-->
<!---->
<!--                </div>-->
<!--                <div class="item-info-product ">-->
<!--                    <h4><a href="single.html">Air Tshirt Black </a></h4>-->
<!--                    <div class="info-product-price">-->
<!--                        <span class="item_price">$129.99</span>-->
<!--                        <del>$150.71</del>-->
<!--                    </div>-->
<!--                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-3 product-men yes-marg">-->
<!--            <div class="men-pro-item simpleCart_shelfItem">-->
<!--                <div class="men-thumb-item">-->
<!--                    <img src="images/a7.png" alt="" class="pro-image-front">-->
<!--                    <img src="images/a7.png" alt="" class="pro-image-back">-->
<!--                    <div class="men-cart-pro">-->
<!--                        <div class="inner-men-cart-pro">-->
<!--                            <a href="single.html" class="link-product-add-cart">Quick View</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <span class="product-new-top">New</span>-->
<!---->
<!--                </div>-->
<!--                <div class="item-info-product ">-->
<!--                    <h4><a href="single.html">Dresses</a></h4>-->
<!--                    <div class="info-product-price">-->
<!--                        <span class="item_price">$129.99</span>-->
<!--                        <del>$150.71</del>-->
<!--                    </div>-->
<!--                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-3 product-men yes-marg">-->
<!--            <div class="men-pro-item simpleCart_shelfItem">-->
<!--                <div class="men-thumb-item">-->
<!--                    <img src="images/a3.png" alt="" class="pro-image-front">-->
<!--                    <img src="images/a3.png" alt="" class="pro-image-back">-->
<!--                    <div class="men-cart-pro">-->
<!--                        <div class="inner-men-cart-pro">-->
<!--                            <a href="single.html" class="link-product-add-cart">Quick View</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <span class="product-new-top">New</span>-->
<!---->
<!--                </div>-->
<!--                <div class="item-info-product ">-->
<!--                    <h4><a href="single.html">Air Tshirt Black </a></h4>-->
<!--                    <div class="info-product-price">-->
<!--                        <span class="item_price">$119.99</span>-->
<!--                        <del>$120.71</del>-->
<!--                    </div>-->
<!--                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="clearfix"></div>
    </div>
        <div style="margin-bottom: 100px;"></div>

<!--    <div class="pagination-grid text-right">-->
<!--        <ul class="pagination paging">-->
<!--            <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>-->
<!--            <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>-->
<!--            <li><a href="#">2</a></li>-->
<!--            <li><a href="#">3</a></li>-->
<!--            <li><a href="#">4</a></li>-->
<!--            <li><a href="#">5</a></li>-->
<!--            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>-->
<!--        </ul>-->
<!--    </div>-->

    <?php } ?>

