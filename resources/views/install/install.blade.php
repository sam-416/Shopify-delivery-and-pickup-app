<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Install App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shopify/polaris@11.1.0/build/esm/styles.css">
</head>
<body>
    <main class="Polaris-Frame__Main">
        <div class="Polaris-Frame__Content">
            <div class="Polaris-Page">
                <h2>Install App</h2>
                <hr>
                <form action="https://tom-flower-delivery-app.herokuapp.com/authenticate" method="GET">
                    <input type="text" name="shop" placeholder="Enter your Shopify shop name">
                    <button type="submit">Install Shopify App</button>
                  </form>
                
             </div>
        </div>
    </main>    
    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission
            
            var shopInput = document.querySelector('.shop-input');
            var shopName = shopInput.value;
            
            // Update form action URL
            var formAction = 'https://tom-flower-delivery-app.herokuapp.com/authenticate?shop=' + encodeURIComponent(shopName);
            document.getElementById('myForm').setAttribute('action', formAction);
            
            // Submit the form
            document.getElementById('myForm').submit();
        });

      </script>
</body>
</html>