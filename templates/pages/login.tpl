{% include("./common/header.tpl") %}
<div class="main-container">
    <section class="no-pad login-page fullscreen-element">
<br/><br/>

        <div class="background-image-holder">
            <img class="background-image" alt="Poster Image For Mobiles" src="/css/img/hero6.jpg">
        </div>

        <div class="container align-vertical">
            <div class="message-box" id="message-box" role="alert">
                <p class="message-text" id="message-text"></p>
                </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                    <h1 class="text-white">Login to continue</h1>
                    <div class="photo-form-wrapper clearfix">
                        <form id="loginForm">
                            <input id="email" name="loginEmail" class="form-email" type="text" placeholder="Email Address" value="peter.chakalov@gmail.com">
                            <div style="display: none" id="error-email" class="alert alert-danger" role="alert"></div>
                            <input id="password" name="loginPassword"class="form-password" type="password" placeholder="Password" value="asdAsd6">
                            <div style="display: none" id="error-password" class="alert alert-danger" role="alert"></div>
                            <input  class="login-btn btn-filled"  type="submit" value="Login">
                        </form>
                    </div>
                    <a href="/signup" class="text-white">Create an account ➞</a><br>
                    <a href="#" class="text-white">I've forgotten my password</a>
                </div>
            </div>
        </div>
    </section>
</div>
{% include("./common/footer.tpl") %}
