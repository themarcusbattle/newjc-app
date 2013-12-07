<html>
    <head>
        <title>App</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link rel="stylesheet" href="assets/css/mochila-mobile.css">
        <link rel="stylesheet" href="assets/css/newjc.css">
    </head>
    <body class="native">

        <section id="login" class="modal">
            <header>
                <h1>Login</h1>
            </header>

            <div class="content content-padded">
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

        <section>
            <header>
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
                            <input type="text" class="amount" name="amount[]" placeholder="$100" />
                            <a class="delete-row"></a>
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
                <div class="button-group">
                <a class="btn blank-btn logout">Logout</a>
            </div>
            </div>
        </section>

        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="assets/js/mochila.js"></script>
    </body>
</html>

<script>
$(document).ready(function(){ 

    if ( mochila.isAuthorized() ) {
        $('#give').show();
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
                console.log( this.name );
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
                console.log(this.amount);
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

});
</script>