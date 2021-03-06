<!DOCTYPE html>
<html xml:lang="en-gb" lang="en-gb" dir="ltr">

    <head>
        <?php require_once 'includes/headers.php'; ?>
        <title>Home</title>
    </head>
    <body class="site com-sppagebuilder view-page no-layout no-task itemid-437 en-gb ltr  sticky-header layout-fluid">
        <div class="body-innerwrapper">
            <?php require_once 'includes/menu.php'; ?>
            <?php require_once 'includes/header.php'; ?>

          <section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12 text-center"><div class="sp-column "><div class="sp-page-title-wrapper"><div class="container"><div class="sp-page-title" style="background-image: url(../../../../images/demo/subheader.jpg);"><h2>Register Here</h2>
                                                                                       
   </div></div></div></div></div></div></section>


              <section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">
</div>
<div class="row" style="background-color: #ffffff; margin: 15px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding: 12px;">
    <div class="col-sm-12">
    <div class="col-sm-4 col-sm-offset-4">
<div class="registration">
<form id="member-registration"method="post" class="form-validate" enctype="multipart/form-data">
<div class="form-group">
<span class="spacer"><span class="before"></span><span class="text"><label id="jform_spacer-lbl" class=""><strong class="red">*</strong> Required field</label></span><span class="after"></span></span>
<div class="group-control">
</div>
</div>
<div class="form-group">
<label id="jform_name-lbl" for="jform_name" class="hasPopover required" title="Name" data-content="Enter your full name.">
Name<span class="star">&#160;*</span></label>
<div class="group-control">
<input type="text" name="jform[name]" id="jform_name" value="" class="required" size="30" required aria-required="true"/> </div>
</div>
<div class="form-group">
<label id="jform_username-lbl" for="jform_username" class="hasPopover required" title="Username" data-content="Enter your desired username.">
Username<span class="star">&#160;*</span></label>
<div class="group-control">
<input type="text" name="jform[username]" id="jform_username" value="" class="validate-username required" size="30" required aria-required="true"/> </div>
</div>
<div class="form-group">
<label id="jform_password1-lbl" for="jform_password1" class="hasPopover required" title="Password" data-content="Enter your desired password.">
Password<span class="star">&#160;*</span></label>
<div class="group-control">
<input type="password" name="jform[password1]" id="jform_password1" value="" autocomplete="off" class="validate-password required" size="30" maxlength="99" required aria-required="true"/> </div>
</div>
<div class="form-group">
<label id="jform_password2-lbl" for="jform_password2" class="hasPopover required" title="Confirm Password" data-content="Confirm your password.">
Confirm Password<span class="star">&#160;*</span></label>
<div class="group-control">
<input type="password" name="jform[password2]" id="jform_password2" value="" autocomplete="off" class="validate-password required" size="30" maxlength="99" required aria-required="true"/> </div>
</div>
<div class="form-group">
<label id="jform_email1-lbl" for="jform_email1" class="hasPopover required" title="Email Address" data-content="Enter your email address.">
Email Address<span class="star">&#160;*</span></label>
<div class="group-control">
<input type="email" name="jform[email1]" class="validate-email required" id="jform_email1" value="" size="30" autocomplete="email" required aria-required="true"/> </div>
</div>
<div class="form-group">
<label id="jform_email2-lbl" for="jform_email2" class="hasPopover required" title="Confirm email Address" data-content="Confirm your email address.">
Confirm email Address<span class="star">&#160;*</span></label>
<div class="group-control">
<input type="email" name="email" class="validate-email required" id="jform_email2" value="" size="30" required aria-required="true"/> </div>
</div>
<div class="form-group text-center">
    <button type="button" class="btn btn-primary offset4 bg-primary">Register</button>
</div> </form>
</div>
</div>
    </div>
</div>
</div></div></div></div></section>


            <?php require 'includes/footer.php'; ?>
            <?php require 'includes/canvas_menu.php'; ?>
        </div>
        <?php require_once 'includes/footers.php'; ?>
    </body>
</html>