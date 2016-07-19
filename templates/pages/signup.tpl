

{% include("./common/header.tpl") %}

<div class="main-container">
    <header class="signup">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image" src="/css/img/hero5.jpg">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                    <h1 class="text-white">Welcome to our amazing new service <br>sign up now and experience the pure goodness<br/>Hello <br/>{{email}}<br/>{{password}}</h1>
                </div>
            </div>

            <div class="row text-center">

                <div class="col-sm-12 text-center">

                    <div class="photo-form-wrapper clearfix">
                        <form id="form" action="/signup2" method="post">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <input value="devil9682@gmail.com" id="email" class="form-email" type="text" name="email" placeholder="Email Address">
                                <div style="display: none" id="error-email" class="alert alert-danger" role="alert"></div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <input value="asdAsd6" id="password" class="form-password" type="password" name="password" placeholder="Password" >
                                <div style="display: none" id="error-password" class="alert alert-danger" role="alert"></div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <input value="asdAsd6" id="confirm-password" class="form-password2" type="password" name="confirm-password" placeholder="Confirm Password">
                                <div style="display: none" id="error-confirm-password" class="alert alert-danger" role="alert"></div>
                            </div>

                            <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-4 text-center">
                                <input id="btnSubmit" type="submit" class="btn btn-primary btn-filled" value="Submit">
                            </div>
                        </div>
                        </form>
                    </div>

                    <span class="text-white">30 Day risk free trial - No credit card required</span>
                </div>

            </div>

        </div>
    </header>

    {% include("./common/footer.tpl") %}


