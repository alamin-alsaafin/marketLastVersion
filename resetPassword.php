<?php
include 'header.php' ;
?>
<div class="reset_password">
    <div class="container">
    <form action="">
        <div class="col-md-6">
            <p class="comment-form-email">
                <label for="email">Email 
                    <span class="required">*</span>
                </label> 
                <input id="email" name="email" type="email" value="" size="30" aria-required="true" required="">
            </p>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="submit">reset password</button>
        </div>
    </form>
</div>
</div>

<?php
include 'footer.php';
?>