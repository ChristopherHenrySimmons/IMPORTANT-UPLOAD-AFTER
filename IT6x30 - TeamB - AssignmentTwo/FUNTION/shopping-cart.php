
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP MySQL PayPal JavaScript Express Checkout Demo</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">iTech Empires Paypal Express Checkout</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="products.php">Products</a>
                </li>
                <li>
                    <a href="shopping-cart.php">My Shopping Cart</a>
                </li>
                <li>
                    <a href="my-orders.php">My Orders</a>
                </li>
                <li><a href="logout.php?action=true">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>PHP MySQL PayPal JavaScript Express Checkout Demo</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Add Unit add the bottom of the Blog Post -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-8795767701751787"
                 data-ad-slot="1666248157"
                 data-ad-format="auto"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2>
                Shopping Cart
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        My Cart
                    </h3>
                </div>
                <div class="panel-body">
                                            <table class="table table-striped table-bordered table-responsive">
                            <tr>
                                <th>Name.</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                                                            <tr>
                                    <td>Product 2</td>
                                    <td>1</td>
                                    <td>1.99 USD</td>
                                    <td>
                                        <form method="post" action="shopping-cart.php">
                                            <input type="hidden" name="index" value="0">
                                            <input type="submit" name="btnRemoveProduct" class="btn btn-default btn-xs"
                                                   value="Remove">
                                        </form>
                                    </td>
                                </tr>
                                                            <tr>
                                <td align="right"><b>Total</b></td>
                                <td colspan="4" align="right">
                                    <span class="price">1.99 USD</span>
                                </td>
                            </tr>
                        </table>
                    
                    <a class="btn btn-success" href="products.php"> Continue Shopping</a>

                    <div class="pull-right"><div id="paypal-button"></div>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    paypal.Button.render({
                env: 'sandbox',
        
        commit: true,

        client: {
            sandbox: 'Aa03YCjn-KZP7hieWTM5V71Iv12RBA23ZabyQDd1df9lQ8DtjcNNNG-9kp5FwEKELTpwiSww566oVz7P',
            production: 'Aa03YCjn-KZP7hieWTM5V71Iv12RBA23ZabyQDd1df9lQ8DtjcNNNG-9kp5FwEKELTpwiSww566oVz7P'
        },

        payment: function (data, actions) {

            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: {
                                total: '1.99',
                                currency: 'USD'
                            }
                        }
                    ]
                }
            });
        },

        onAuthorize: function (data, actions) {

            return actions.payment.execute().then(function () {
                window.location = "http://demos.itechempires.com/paypal-javascript-express-checkout-live-demo/" +  "execute-payment.php?payment_id=" + data.paymentID + "&payer_id=" + data.payerID + "&token=" + data.paymentToken;
            });
        }
    }, '#paypal-button');
</script></div>

                </div>
            </div>
                        <h3>
               Use following PayPal Buyer Account login Details for the demo:
            </h3>
            <p>
                Email: <b>buy@itechempires.com</b>
            </p>
            <p>
                Password: <b>itechempires</b>
            </p>
                    </div>
        <div class="col-md-4 well">
            <h3>Active User</h3>
            <p>
                <b>iTech Empires</b>
            </p>
            <p>
                <b>demo@itechempires.com</b>
            </p>
            <!-- Add to the bottom of the Side Bar -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:300px;height:600px"
                 data-ad-client="ca-pub-8795767701751787"
                 data-ad-slot="7852382551"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
</div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75591362-1', 'auto');
    ga('send', 'pageview');

</script></body>
</html>