<!DOCTYPE html>
<html>
<head>
    <title>Wix PHP Rss Reader Sample App - Invalid Secret</title>
    <script type="text/javascript" src="http://sslstatic.wix.com/services/js-sdk/1.22.0/js/Wix.js"></script>
    <style>
      .text-error { color:red; background:rgba(255,0,0,0.1); padding:5px; }
      .text-info{ color:rgb(0,100,255); background:rgba(0,100,255,0.1); padding:5px; }
      .container{ margin-top:20px; padding:20px;  box-shadow:#ccc 0 0 15px; border-radius:5px; }    
    </style>
</head>
<body>
<div class="container">
    <div style="">
        <h1>Wix PHP Example App - Invalid Secret</h1>
        <h2>Your App is alive</h2>
        <hr/>
        <p class="text-error">However, the request signed-instance signature is invalid. Have you configured the App Secret from the Dev-Center?</p>
        <p class="text-info">Checkout the SampleApp class, the DEFAULT_SECRET_ID constant</p>
        <hr/>
        <p>Important links:</p>
        <ul>
            <li><a href="http://dev.wix.com/">Wix Developers Center</a></li>
        </ul>
    </div>
</div>
</body>
</html>