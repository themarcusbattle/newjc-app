<html>
    <head>
        <title>App</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="stylesheet" href="assets/css/mochila-mobile.css">
        <link rel="stylesheet" href="assets/css/newjc.css">
    </head>
    <body>
        <div id="viewport">
            <section id="login" class="modal">
                <div class="view">
                    <span style="text-align: center; display: block; width: 100%; margin: 15px 0;"><img src="img/newjc-seal.png" width="150px" /></span>
                    <form action="//marcus.dev/wp/api/oauth/access_token" method="POST" class="tableview login" data-success="closeModal">
                        <input type="hidden" name="client_id" value="mo_y00emA53a9Atvevnwqrj2o" />
                        <input type="hidden" name="grant_type" value="password" />
                        <ul>
                            <li><input type="text" class="required" name="username" placeholder="Username" /></li>
                            <li><input type="password" class="required" name="password" placeholder="Password" /></li>
                            <li class="button-group"><button class="btn" type="submit">Log In</button></li>
                        </ul>
                    </form>
                </div>
            </section>

            <section id="register">
                <header>
                    <a href="#" class="cancel">Cancel</a>
                    <h1>Register</h1>
                </header>
                <div class="view">
                    <form action="//marcus.dev/wp/api/users.json" method="POST" class="tableview">
                        <input type="hidden" name="client_id" value="mo_y00emA53a9Atvevnwqrj2o" />
                        <ul>
                            <li><input type="text" name="username" placeholder="Username" /></li>
                            <li><input type="text" name="first_name" placeholder="First Name" /></li>
                            <li><input type="text" name="last_name" placeholder="Last Name" /></li>
                            <li><input type="text" name="email" placeholder="Email" /></li>
                            <li><input type="password" name="password" placeholder="Password" /></li>
                            <li><input type="password" name="confirm_password" placeholder="Confirm Password" /></li>
                            <li class="button-group"><button class="btn" type="submit">Sign Up</button></li>
                        </ul>
                    </form>
                </div>
            </section>

             <section id="news">
                <header>
                    <a href="#" class="reveal-menu">Menu</a>
                    <h1>News</h1>
                </header>
                <div class="view">
                    <div class="post">
                        <h3 class="title">The Platform Rescheduled<small>1 Hour Ago</small></h3>
                        <p class="content">A lot of cool information here.</p>
                        <div class="img" style="background-image: url(http://marcus.dev/wp/wp-content/uploads/2013/11/platform-video-bg-1024x576.jpg);"></div>
                    </div>
                    <div class="post">
                        <h3 class="title">New Year's Eve<small>2 Hour Ago</small></h3>
                        <p class="content">There's plenty of excitement where this came from. Oh I know you can see it!</p>
                    </div>
                    <div class="post">
                        <h3 class="title">God's doing it now!<small>10 Hours Ago</small></h3>
                        <p class="content">Eyes haven't seen and ears haven't heard. It hasn't even entered into the hearts of man the things that God has actually prepared for those who really love him. So in the words of Bishop TD Jakes...Get Ready. Get Ready. Get Ready!</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </section>

            <section id="give">
                <header>
                    <a href="#" class="reveal-menu">Menu</a>
                    <h1>Give</h1>
                </header>
                <div class="view">
                    <form action="//marcus.dev/wp/api/payments.json" method="POST" class="tableview">
                        <h2>Contributions</h2>
                        <ul id="contributions">
                            <li class="contribution-row">
                                <select name="products[]">
                                    <option value="">Select contribution</option>
                                </select>
                                <input type="text" pattern="[0-9]*" class="amount" name="amount[]" placeholder="$100" />
                                <a href="#" class="delete-row"></a>
                            </li>
                            <li class="total-row">
                                <span>Total</span>
                                <span id="total">$0</span>
                            </li>
                            <li>
                                <a class="add-contribution">Add new contribution</a>
                            </li>
                        </ul>
                        <p>&nbsp;</p>
                        <h2>Credit Card</h2>
                        <ul>
                            <!--<li><input type="text" placeholder="Cardholder Name" /></li>-->
                            <li><input type="text" name="card_number" placeholder="Credit Card Number" value="4242424242424242" /></li>
                            <li><input type="text" name="exp_month" placeholder="Exp Month" maxlength="2" value="06" /></li>
                            <li><input type="text" name="exp_year" placeholder="Exp Year" maxlength="4" value="2017" /></li>
                            <li><input type="text" name="cvc" placeholder="CVC" maxlength="3" value="042" /></li>
                            <li class="button-group">
                                <button class="btn" type="submit">Give</button>
                            </li>
                        </ul>
                       
                        <input type="hidden" name="total" />
                        <footer>
                            <p>You've given <span class="amount-given">$0</span> this year. Thank you for your continued support and obedience to God's Word.</p>
                            <p>- Malachi 3:10 -</p>
                        </footer>
                    </form>
                </div>
            </section>

            <section id="about">
                <header>
                    <a href="#" class="reveal-menu">Menu</a>
                    <h1>About</h1>
                </header>
                <div class="view">
                    <p>This is all of the information about newjc!</p>
                </div>
            </section>

            <div id="menu" class="side-menu tableview">
                <ul>
                    <li><a href="#news">News</a></li>
                    <li><a href="#give">Give</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a class="logout">Sign Out</a></li>
                </ul>
            </div>
        </div>
        
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="assets/js/mochila.js"></script>
    </body>
</html>

<script>
$(document).ready(function(){ 

    if ( mochila.isAuthorized() ) {
        $('#news').addClass('show');
    } else {
        mochila.showModal('#login.modal');
    }

    // Load contribution types
    $.ajax({
        type: 'GET',
        url: '//marcus.dev/wp/api/products/contributions.json',
        data: { client_id: 'mo_y00emA53a9Atvevnwqrj2o' }
    }).done(function( response ) {

        if ( response.count ) {

            $(response.contributions).each(function(){
                $('select[name="products[]"]').append('<option value="' + this.id + '">' + this.name + '</option>');
            });
        }
    });

    // Load payment total
    $.ajax({
        type: 'GET',
        url: '//marcus.dev/wp/api/payments.json',
        data: { access_token: getCookie('access_token') }
    }).done(function( response ) {

        var total = 0;

        if ( response.count ) {

            $(response.payments).each(function(){
                total += this.amount * 1;
            });
        }
        
        $('.amount-given').text('$' + total);

    });

    $('a.add-contribution').on('click', function(e){
        var row = $('.contribution-row:first-child').clone();

        row.find('input,select').val('');

        $('#contributions .total-row').before(row);
    });

    // Remove contribution
    $(document).on('click', '.delete-row', function(e){
        
        if ( $('.contribution-row').length > 1 ) {
            $(this).closest('.contribution-row').remove();
            update_total();
        }
    });

    $(document).on('keyup', '.amount', function(e){
        update_total();
    });

    function update_total() {
        var total = 0;

        $('.amount').each(function(){
            total += $(this).val() * 1;
        });

        $('#total').text('$' + total);
        $('input[name="total"]').val(total);
    }

    $('button[type="submit"]').on( 'click', function(e) {
        e.preventDefault();

        var _this = $(this);
        var form = $(this).closest('form');
        var valid = true;
        var button_label = $(this).text();

        $(this).text('...');
        _this.attr('disabled',true);

        if ( valid ) {

            $.ajax({
                type: $(form).attr('method'),
                url: $(form).attr('action'),
                data: $(form).serialize() + '&access_token=' + mochila.getCookie('access_token'),
                success: function ( response ) {

                    if ( response.errors ) {
                        alert(response.errors[0].msg);
                    } else {

                        console.log( $(form).data('complete') );

                        if ( $(form).data('success') == 'closeModal' ) { 
                            
                            mochila.setCookie( 'access_token', response.access_token, 365 ); 
                            $(form).closest('.modal').addClass('hide').removeClass('show');
                            location.reload();

                        } else {

                            alert( response.msg );
                            location.reload();

                        }

                    }

                },
                error: function( xhr, response ) {

                    var json = JSON.parse( xhr.responseText );

                    alert(json.errors[0].msg);

                    _this.text(button_label);
                    _this.attr('disabled',false);

                }

            }).done( function(){

                _this.text(button_label);
                _this.attr('disabled',false);

            });

        }

    });
    
    $('.logout').on('click', function(e){

        if ( mochila.deleteCookie('access_token') ) {
            location.reload();
        }
    });

    $(document).on( 'click', 'header a', function(e) {
        e.preventDefault();

        var section = $(this).closest('section');

        if ( $(this).hasClass('cancel') ) {
            
            $('.slide').removeClass('slide');
            $('.shift').removeClass('shift');

        } else if ( $(this).hasClass('reveal-menu') ) {

            if ( $(section).hasClass('reveal') ) { $(section).removeClass('reveal'); $('#menu').removeClass('focus'); }
            else { $(section).addClass('reveal'); $('#menu').addClass('focus'); }

        } else {

            var action = $(this).data('action');
            var target = $('#' + $(this).attr('href'));
            
            $(this).closest('section').addClass('shift')
            $(target).addClass( action );

        }

    });
    
    $(document).on( 'click', '#menu li a', function(e) {
        e.preventDefault();

        var target = $(this).attr('href');

        $('#menu').removeClass('focus');
        $('.reveal').removeClass('show reveal');
        $(target).addClass('show');
        

    });

});
</script>