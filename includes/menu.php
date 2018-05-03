<?php
    $webpath = $_SERVER['DOCUMENT_ROOT'] . "/beiFity/";
    include_once $webpath . "products/productCategories.php";
    include_once $webpath . "products/productSubCategories.php";
    
    $subCategory=new ProductSubCategories();
    $category=new ProductCategories();
?>
<section id="sp-top-bar">
    <div class="container">
        <div class="row">
            <div id="sp-top1" class="col-xs-6 col-sm-4 col-md-2">
                <div class="sp-column ">
                    <ul class="social-icons">
                        <li class="social-icon-facebook">
                            <a  href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="social-icon-twitter">
                            <a  href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="social-icon-gplus">
                            <a  href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="social-icon-youtube">
                            <a  href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li class="social-icon-linkedin">
                            <a  href="#"><i class="fa fa-linkedin"></i></a>
                        </li><li class="social-icon-dribbble">
                            <a  href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="sp-menu" class="col-xs-6 col-sm-8 col-md-10">
                <div class="sp-column "> 
                    <div class='sp-megamenu-wrapper'>
                        <a id="offcanvas-toggler" class="visible-sm visible-xs" href="#">
                            <i class="fa fa-bars"></i>
                        </a>
                        <ul class="sp-megamenu-parent menu-fade hidden-sm hidden-xs">
                            <li class="sp-menu-item current-item active">
                                <a href="index.php">Home</a>
                            </li>
                            
                            <?php
                            foreach ($category->selectAllCategories() as $category){
                                $id=$category->id;
                              echo '<li class="sp-menu-item sp-has-child">
                                        <a href="listProducts.php?catid='.$category->id.'">'.$category->categoryname.'</a>
                                        <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                                            <div class="sp-dropdown-inner">
                                                <ul class="sp-dropdown-items">';
                              foreach ($subCategory->selectAllSubCategories() as $subCategory){
                                  if($id==$subCategory->parent){
                                  echo '<li class="sp-menu-item">
                                                        <a href="listProducts.php?parid='.$id.'&subid='.$subCategory->id.'">'.$subCategory->name.'</a>
                                  </li>';}
                              }            
                                                    
                                            echo '</ul>
                                            </div>
                                        </div>
                                    </li>';
                                }
                              ?>
                            
                            
                            
                            <li class="sp-menu-item">
                                <a href="contact.php">Contact Us</a>
                                
                            </li>
                            <li class="sp-menu-item sp-has-child" style="">
                                <a href="listProducts.php"><span><i class="fa fa-user fa-lg"></i></span></a>
                                <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                                    <div class="sp-dropdown-inner" style=" width: 90px;">
                                        <ul class="sp-dropdown-items">
                                            <li class="sp-menu-item">
                                                <a href="#">Login</a>
                                            </li>
                                            <li class="sp-menu-item">
                                                <a href="myAccount.php">My Account</a>
                                            </li>
                                            
                                       </ul>
                                    </div>
                                </div>
                            </li>
                        </ul> 
                    </div>

 <div class="sp-module ">
                        <div class="sp-module-content">
                            <div class="sp-megadeal2-login sp-mod-login pull-right">
                               <div id="login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">

                                        <div class="modal-content custom-box-shadow">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                <i class="megadeal-icon-close"></i>
                                            </button>
                                            <div class="modal-body">
                                                <h2 class="title">Already Registered</h2>
                                                <form action="#" method="post" id="login-form">
                                                    <fieldset class="userdata">
                                                        <input id="modlgn-username" placeholder="Username" type="text" name="username" class="input-block-level" required="required"/>
                                                        <input id="modlgn-passwd" type="password" placeholder="Password" name="password" class="input-block-level" required="required"/>
                                                        <div class="clearfix"></div>
                                                        <div class="button-wrap">
                                                            <input type="submit" name="Submit" class="button btn btn-success" value="Log in"/>
                                                        </div>
                                                        <p class="forget-name-link pull-left">
                                                            Forgot <a href="index.php/pages/joomla/users-component/user-profile4488.html?view=remind">
                                                                Username</a> or <a href="index.php/pages/joomla/users-component/user-profile798d.html?view=reset">
                                                                Password</a>
                                                        </p>
                                                        <input type="hidden" name="option" value="com_users"/>
                                                        <input type="hidden" name="task" value="user.login"/>
                                                        <input type="hidden" name="return" value="aHR0cDovL2RlbW8uam9vbXNoYXBlci5jb20vMjAxNi9tZWdhZGVhbC1paS9pbmRleC5waHA="/>
                                                        <input type="hidden" name="e8e16cde8f916c89877727ebf146b354" value="1"/> </fieldset>
                                                </form>    
                                            </div>

                                            <div class="modal-footer">
                                                New Here? <a href="./registration-form.php">
                                                  
                                                    
                                                    Create an account</a>
                                            </div>

                                        </div>  
                                    </div>  
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>