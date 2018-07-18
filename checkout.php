<?php
include 'header.php' ;
?>

    <section class="romana_chect_out_form_area sp">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-md-12">
                        <section class="cart_page">
                            <div class="container">
                                <div class="table_scroll table-responsive">
                                    <table class=" table table-striped">
                                        <thead class="dark-bg">
                                            <tr>
                                                <th><span>Product</span></th>
                                                <th><span>Description</span></th>
                                                <th><span>Price</span></th>
                                                <th><span>Quantity</span></th>
                                                <th><span>Total</span></th>
                                                <th><span>Delete</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                    <img class="img-rounded" src="assets/images/1.jpg" alt="">
                                                    </a>
                                                </td>
                                                <td class="padding_all">
                                                <p>
                                                    <a href="#">
                                                    Finance Book
                                                </a>
                                                </p></td>
                                                <td class="padding_all">
                                                <p>
                                                    $ 59.99
                                                </p></td>
                                                <td class="padding_all">
                                                    <p>
                                                        43
                                                    </p>
                                                </td>
                                                <td class="padding_all">
                                                <p>
                                                    $ 59.99
                                                </p></td>
                                                <td class="padding_all"><i class="fa fa-trash"></i></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                    <img class="img-rounded" src="assets/images/1.jpg" alt="">
                                                    </a>
                                                </td>
                                                <td class="padding_all">
                                                <p>
                                                    <a href="#">
                                                    Finance Book
                                                </a>
                                                </p></td>
                                                <td class="padding_all">
                                                <p>
                                                    $ 59.99
                                                </p></td>
                                                <td class="padding_all">
                                                    <p>
                                                        9
                                                    </p>
                                                </td>
                                                <td class="padding_all">
                                                <p>
                                                    $ 59.99
                                                </p></td>
                                                <td class="padding_all"><i class="fa fa-trash"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">
                                                        <img class="img-rounded" src="assets/images/1.jpg" alt="">
                                                        </a>
                                                    </td>
                                                    <td class="padding_all">
                                                    <p>
                                                        <a href="#">
                                                        Finance Book
                                                    </a>
                                                    </p></td>
                                                    <td class="padding_all">
                                                    <p>
                                                        $ 59.99
                                                    </p></td>
                                                    <td class="padding_all">
                                                        <p>
                                                            1
                                                        </p>
                                                    </td>
                                                    <td class="padding_all">
                                                    <p>
                                                        $ 59.99
                                                    </p></td>
                                                    <td class="padding_all"><i class="fa fa-trash"></i></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                            <!-- table End -->
                                </div>
                        </div>
                    </section>
                    </div>
                    <div class="col-md-10">
                        <div class="check_form_right bg-color light-color">
                            <div class="heading-box pb-15 ">
                                <h2><span>your</span> order</h2>
                                <span class="b-line l-left secondary_bg"></span>

                            </div>

                            <div class="product_order">
                                <ul>
                                    <li>
                                        product<span>total</span>
                                    </li>
                                    <li>
                                        Finance Book<span>$29.99</span>
                                    </li>
                                    <li>
                                        subtotal:<span>$29.99</span>
                                    </li>
                                    <li>
                                        total:<span>$29.99</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="romana_select_method ">
                                <ul class="mb-40">
                                    <li>
                                        <input type="radio" id="option1" name="selector">
                                        <label for="option1">Check Payment</label>
                                        <div class="check_text">
                                            <p>
                                                Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                            </p>
                                        </div>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input type="radio" id="option2" name="selector" checked="">
                                        <label for="option2">paypal</label>
                                        <div class="paypal_img">
                                            <img src="assets/images/paypal-card.png" alt="">
                                        </div>
                                        <div class="check"></div>
                                    </li>
                                </ul>
                                <button type="submit" class="btn btn-primary" name="submit">Change Profile</button>
                            </div>
                        </div>
                    </div>
                </div>          
            </form>
            <!-- column End -->
        </div>
        <!-- container End -->
    </section>



    
<?php
include 'footer.php';
?>