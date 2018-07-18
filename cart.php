<?php
include'header.php' ;
?>

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
                    <div class="cart_amount_wrap">
                        <div class="w-quantity quantity xs_input_number">
                            <input type="number" min="1" max="100" value="1">
                        </div>
                    </div></td>
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
                    <div class="cart_amount_wrap">
                        <div class="w-quantity quantity xs_input_number">
                            <input type="number" min="1" max="100" value="1">
                        </div>
                    </div></td>
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
                        <div class="cart_amount_wrap">
                            <div class="w-quantity quantity xs_input_number">
                                <input type="number" min="1" max="100" value="1">
                            </div>
                        </div></td>
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
   
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <p class="comment-form-author">
                                <label for="author">Coupon Code
                                    <span class="required">*</span>
                                </label> 
                                <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
                            </p>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary" name="submit">Apply coupon</button>    
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary" name="submit">Continue Shopping </button>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="cart_totals_area gray-bg">

                    <ul>
                        <li>
                            Subtotal <span>$29.99</span>
                        </li>
                        <li>
                            Shipping Charge<span>free</span>
                        </li>
                        <li>
                            <strong>Total</strong><span><strong> $ 59.99 </strong></span>
                        </li>
                    </ul>
                    <a href="checkout.php">
                        <button type="submit" class="btn btn-primary" name="submit">Proceed To Checkout</button>
                        
                    </a>
                </div>
            </div>
            <!-- column End -->
        </div>

    </div>
</section>

<?php
include 'footer.php';
?>