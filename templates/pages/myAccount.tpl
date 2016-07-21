{% include "./common/header.tpl" %}
<div class="main-container">
    <header class="page-header resume-header">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image" src="/css/img/hero21.jpg">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-white space-bottom-medium">{{session.email}}</h1>
                    <span>Web &amp; Interaction Designer</span>
                    <ul class="social-icons">
                        <li>
                            <a href="#">
                                <i class="icon social_twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon social_facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon social_instagram"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon social_dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                        <div class="photo-form-wrapper clearfix">
                            <form id="myAccForm">
                                <!--<input id="email" name="email" class="form-email" type="text" disabled value="">-->
                                <input id="email" name="email" class="form-email" type="text" value="{{session.email}}" disabled>

                                <input id="editFirstName" name="editFirstName" class="form-editFirstName" type="text" placeholder="First Name">
                                <input id="editLastName" name="editLastName" class="form-editLastName" type="text" placeholder="Last Name">
                                <input id="editPassword" name="editPassword" class="form-editPassword" type="text" placeholder="Password">
                                <input id="editrepeatPassword" name="editRepeatPassword" class="form-repeatPassword" type="text" placeholder="Repeat Password">
                                <div style="display: none" id="error-password" class="alert alert-danger" role="alert"></div>
                                <div style="display: none" id="success" class="alert alert-success" role="alert"></div>
                                <input class="login-btn btn-filled" type="submit" value="Edit">
                             </form>
                        <div/>
                    </div>
                </div>
        </div>
    </header>
</div>

{% include "./common/footer.tpl" %}