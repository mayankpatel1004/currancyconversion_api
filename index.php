<link href="css/normalize.css" type="text/css" rel="stylesheet"/>
<link href="css/materialize.min.css" type="text/css" rel="stylesheet"/>
<link href="css/material-design-iconic-font.min.css" type="text/css" rel="stylesheet"/>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,600,700,900' rel='stylesheet' type='text/css' />
<script src="js/materialize.min.js"></script>
<script src="js/jquery.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div class="col s12 m4  push-m4">
    <h4>Select Currencies</h4>
    <select class="browser-default tour col s12 currancy_dropdown">
        <option value="USA">Select Currency</option>
        <option value="CAD">CAD</option>
        <option value="EUR">EUR</option>
        <option value="GBP">GBP</option>
    </select>
</div>
<div class="container">
    <div class="pricing-holder">
        <div class="row">
            
            <div class="card text-center col-lg pricing-item">
                <div class="card-content">
                    <span>Opener</span>
                    <div>(Small Touring Artist)</div>
                    <hr>
                    <div class="box-item">
                        <div class="discription">Monthly</div>
                        <div class="digit-box"><span class="currancysymbol">$</span><span class="currancyprice 15">15</span></div>
                        <div class="discription" style="padding-top:0; margin:-10px 0 15px 0;">Unlimited users</div>
                        
                    </div>
                </div>
            </div>

            <div class="card text-center col-lg pricing-item">
                <div class="card-content">
                    <span>Support</span>
                    <div>(Medium Touring Artist)</div>
                    <hr>
                    <div class="box-item">
                        <div class="discription">Monthly</div>
                        <div class="digit-box"><span class="currancysymbol">$</span><span class="currancyprice 50">50</span></div>
                        <div class="discription" style="padding-top:0; margin:-10px 0 15px 0;">Unlimited users</div>
                        
                    </div>
                </div>
            </div>

            <div class="card text-center col-lg pricing-item">
                <div class="card-content">
                    <span>Headliner</span>
                    <div>(Large Touring Artist)</div>
                    <hr>
                    <div class="box-item">
                        <div class="discription">Monthly</div>
                        <div class="digit-box"><span class="currancysymbol">$</span><span class="currancyprice 100">100</span></div>
                        <div class="discription" style="padding-top:0; margin:-10px 0 15px 0;">Unlimited users</div>
                        
                    </div>
                </div>
            </div>
        </div>
        <br/><br/>
        <div class="text-center"><a href="#mycontact" rel="" id="contact1" class="btn allbtn contactform">Free Demo</a></div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <p>
                Additional, intensive technical support is available by request for <span class="currancysymbol">$</span><span class="currancyprice 500">500</span>.<br>
                Ask about our package discounts with Booking Agency Pro & Publishing Pro.<br>
                10% discount if paid annually
            </p>

        </div>
    </div>
    <div class="row">
        <div class="systems-includes col-md-12">
            <h4 class="text-center h4">All Tempo Publishing Pro systems include:</h4>
            <div class="row">
                <ul class="col-md-6">
                    <li>Branding with your logo and contact information</li>
                    <li>Mobile compatibility</li>
                    <li>Hosting on DevDigital server racks with full data backup</li>
                </ul>
                <ul class="col-md-6">
                    <li>Unlimited data storage</li>
                    <li>Maintenance and upgrades</li>
                    <li>Browser compatibility (current version and previous version)</li>
                </ul>
            </div>								
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".currancy_dropdown").change(function () {
        var eurosign = '\u20AC';
        var currentvalue = this.value;
        var url = 'currancyconversion.php' + '?currancy=' + this.value;
        $.ajax({url: url, success: function (result) {
                $("span.currancyprice").each(function () {
                    var css = $(this).attr('class');
                    splitvalue = css.split('currancyprice');
                    calculatevalue = splitvalue[1];
                    var newvalue = $(this).text();
                    var multiplication = (parseFloat(calculatevalue) * parseFloat(result)).toFixed(2);
                    $(this).text(multiplication);
                    if (currentvalue == 'EUR') {
                        $(".currancysymbol").text('€');
                    } else if (currentvalue == 'GBP') {
                        $(".currancysymbol").text('£');
                    } else {
                        $(".currancysymbol").text('$');
                    }
                });
            }});
    });
</script>