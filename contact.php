<?php
include 'header.php' ;
?>

<div class="content-warpper">
    <div class="container">
        <div class="intro-text text-center">
            <h3 class="title">
                We want to hear from you!
                Please tell us what you need and how we can help.
            </h3>
            <p class="description">
                    Please fill out this form completely (Retailers/Wholesalers only) so that we can add you to our privileged special email newsletter which we may send out once or twice each month. This newsletter will feature special promotions and opportunities that only you can receive. We will also have a sales representative follow up with you to insure that your needs are serviced.
            </p>
        </div><!-- end intro-text -->

           
            <form action="#" method="POST" id="xs-contact-form" class="contact-form">
                <h3 class="title">BUSINESS TYPE (THIS QUESTION IS REQUIRED)*</h3>
                <select class="form_select">
                    <option value="">Select The Type of Business You Have</option>
                    <option value="">Retailer</option>
                    <option value="">Wholesale Distributor</option>
                    <option value="">Online Store</option>
                </select>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="field_label" for="contact_name">BUSINESS NAME<span class="gfield_required">*</span></label>
                            <input type="text" class="form-control" id="contact_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="field_label" for="contact_title">TITLE<span class="gfield_required">*</span></label>
                            <input type="text" class="form-control" id="contact_title">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="field_label" for="contact_firtstName">FIRST NAME
                            <span class="gfield_required">*</span></label>
                            <input type="text" class="form-control" id="contact_firtstName">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="field_label" for="contact_lastName">Last NAME
                            <span class="gfield_required">*</span></label>
                            <input type="text" class="form-control" id="contact_LasttName">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="field_label" for="contact_phoneNumber">PHONE NUMBER
                            <span class="gfield_required">*</span></label>
                            <input type="text" class="form-control" id="contact_phoneNumber">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="field_label" for="contact_faxNumber">FAX NUMBER
                            <span class="gfield_required">*</span></label>
                            <input type="text" class="form-control" id="contact_faxNumber">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="field_label" for="contact_email">EMAIL ADDRESS
                            <span class="gfield_required">*</span></label>
                            <input type="text" class="form-control" id="contact_email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="field_label" for="contact_website">WEBSITE
                            <span class="gfield_required">*</span></label>
                            <input type="text" class="form-control" id="contact_website">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="field_label" for="contact_address">ADDRESS
                            <span class="gfield_required">*</span></label>
                            <input type="text" class="form-control" id="contact_address">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="field_label" for="contact_street">Street Address
                            </label>
                            <input type="text" class="form-control" id="contact_street">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="field_label" for="contact_street01">Address Line 2
                            </label>
                            <input type="text" class="form-control" id="contact_street01">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="field_label" for="contact_street02">Address Line 2
                            </label>
                            <input type="text" class="form-control" id="contact_street02">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="field_label" for="contact_street01">City
                            </label>
                            <input type="text" class="form-control" id="contact_street01">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="field_label" for="contact_street02">State / Province / Region   
                            </label>
                            <select name="" id="" class="form-control">
                                <option value=""></option>
                                <option value=""></option>
                            </select> <label class="field_label" for="contact_street02">conuntry
                            </label>
                        </div>
                    </div>
                </div>
                <ul>
                    <li id="fieldRidio">
                        <label class="gfield_label">DO YOU CURRENTLY BUY DIRECTLY FROM ZIYAD BROTHERS IMPORTING?<span class="gfield_required">*</span></label>
                        <div class="ginput_container_radio">
                            <ul class="gfield_radio" id="input_1_11">
                                <li class="gchoice">
                                    <input name="input_11" type="radio" value="Yes" id="choice_1">
                                    <label for="choice_1" id="label_1">Yes</label>
                                </li>
                                <li class="gchoice">
                                    <input name="input_11" type="radio" value="No" id="choice_2">
                                    <label for="choice_2" id="label_2">No</label>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
               
                <div class="btn-wraper">
                    <input type="submit" name="submit" value="submit" id="contact_submit" class="btn btn-red">
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>