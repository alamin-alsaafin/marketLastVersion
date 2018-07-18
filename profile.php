<?php
include 'header.php' ;
?>
    

    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-tabs xs-nav-tab version-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="home" aria-selected="true">Profile </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Change-Password" role="tab" aria-controls="contact" aria-selected="false">Change Password </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#favorite" role="tab" aria-controls="contact" aria-selected="false">favorite</a>
                        </li>

                       
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane animated slideInUp show active" id="profile" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="comment-form-email">
                                       <img src="assets/images/team/team_1.png" alt="" srcset="">
                                    </p>
                                    <div>
                                        <label for="files" class="btn btn-primary">Select Image</label>
                                        <input id="files" style="visibility:hidden;" type="file">
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="comment-form-author">
                                        <label for="author">Name 
                                            <span class="required">*</span>
                                        </label> 
                                        <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="comment-form-email">
                                        <label for="email">Email 
                                            <span class="required">*</span>
                                        </label> 
                                        <input id="email" name="email" type="email" value="" size="30" aria-required="true" required="">
                                    </p>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Change Profile</button>
                            </div>
                        </div>
                        
                        <div class="tab-pane animated slideInUp" id="Change-Password" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="comment-form-author">
                                        <label for="password">password 
                                            <span class="required">*</span>
                                        </label> 
                                        <input id="author" name="password" type="text" value="" size="30" aria-required="true" required="">
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p class="comment-form-author">
                                        <label for="author">New password 
                                            <span class="required">*</span>
                                        </label> 
                                        <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p class="comment-form-author">
                                        <label for="Confirm-password ">Confirm password 
                                            <span class="required">*</span>
                                        </label> 
                                        <input id="author" name="Confirm-password " type="text" value="" size="30" aria-required="true" required="">
                                    </p>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Change Profile</button>
                                
                            </div>
                        </div>
                        
                        <div class="tab-pane animated slideInUp" id="favorite" role="tabpanel" aria-labelledby="contact-tab">
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
                                                            <button type="submit" class="btn btn-primary" name="submit">Proceed To Checkout</button>
                                                        </div>
                                                    </div>
                                                    <!-- column End -->
                                                </div>
                                        
                                            </div>
                                        </section>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
?>