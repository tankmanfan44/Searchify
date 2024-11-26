<?php
function getPageTitle() {
    // Get the query string from the URL
    $queryString = $_SERVER['QUERY_STRING'];
    
    // Check if the query string contains the "q" parameter
    if (strpos($queryString, 'q=') !== false) {
        // Extract the value of the "q" parameter
        $searchValue = urldecode(explode('=', $queryString)[1]);
        
        // Return the title based on the search value
        return "Search results for " . $searchValue . " - Searchify";
    } else {
        // Return the default title if the "q" parameter is not present
        return "Searchify - Home";
    }
}
$random_number = rand(20, 60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=yes">
    <meta name="description" content="Searchify - Searching Beyond Boundaries. Find what you need quickly and effortlessly.">
    <meta name="keywords" content="search engine, searchify, searching, web search, explore">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Searchify - Searching Beyond Boundaries">
    <meta property="og:description" content="Find what you need quickly and effortlessly. Explore the web without boundaries with Searchify.">
    <meta property="og:image" content="/images/summary_large_image.png">
    <meta name="twitter:card" content="/images/summary_large_image.png">
    <meta name="twitter:title" content="Searchify - Searching Beyond Boundaries">
    <meta name="twitter:description" content="Find what you need quickly and effortlessly. Explore the web without boundaries with Searchify.">
    <meta name="twitter:image" content="/images/twitter_img.png">
    <meta property="og:image" content="/images/favicon.ico">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="stylesheet" href="search.css">
    <title><?php echo getPageTitle(); ?></title>
</head>
<?php
if(isset($_GET['q'])) {
    // If "?q=" is present
    $search_query = htmlspecialchars($_GET['q']); // Get the search query from URL
    echo '
<body>
<noscript>
  <p>This website requires JavaScript to function properly. Please enable JavaScript in your browser settings.</p>
</noscript>
<div id="content">
                    <div class="header">
<div style="display: flex; align-items: left; margin-top: 10px; margin-bottom: 0px;">
    <img class="logo" src="/images/searchify_logo.svg" title="Searchify Logo" alt="Searchify Logo" style="margin-right: 10px; margin-left: 10px; margin-bottom: 5px; max-width: 130px; max-height: 50px; cursor:pointer">
    <form style="display: flex; align-items: center;">
        <input type="text" name="q" autofocus placeholder="Enter your search query" style="padding: 10px; border: 1px solid #ddd; border-radius: 5px; width: 400px; margin-bottom: 0px; margin-right: 15px; font-size: 16px; flex-grow: 1; outline: none;" value="' . $search_query . '"">
<input type="submit" value="Search" style="padding: 10px 20px; background-color: #4285f4; border: none; border-radius: 5px; color: #fff; font-size: 16px; cursor: pointer; border: none; outline: none;">

    </form>
<img src="/images/filter.svg" title="Filters" alt="Filters" style="margin-left: 15px; padding: 10px; max-width: 28px; max-height: 35px; object-fit: cover; cursor:pointer; overflow: hidden;">
<img src="/images/settings-icon.svg" title="Settings" alt="Settings" style="position: absolute; top: 0; right: 0; margin: 10px; padding: 10px; max-width: 28px; max-height: 35px; object-fit: cover; cursor:pointer;">
</div>
<hr style="margin: 0; border: none; height: 2px; background: linear-gradient(to right, rgba(128, 128, 128, 1), rgba(128, 128, 128, 0) 100%, rgba(255, 255, 255, 0)); width: 100%;">
        <div style="display: flex; space-between; margin-left: 70px; margin-bottom: -16px;">
            <p style="text-decoration: none; color: white; margin-right: 10px; background-color: #606060; padding: 5px 10px; border-radius: 10px 10px 0 0; display: inline-block; cursor:pointer;">Web</a>
            <p style="text-decoration: none; color: white; margin-right: 10px; background-color: #606060; padding: 5px 10px; border-radius: 10px 10px 0 0; display: inline-block; cursor:pointer;">Images</a>
            <p style="text-decoration: none; color: white; margin-right: 10px; background-color: #606060; padding: 5px 10px; border-radius: 10px 10px 0 0; display: inline-block; cursor:pointer;">Videos</a>
            <p style="text-decoration: none; color: white; margin-right: 10px; background-color: #606060; padding: 5px 10px; border-radius: 10px 10px 0 0; display: inline-block; cursor:pointer;">News</a>
        </div>
</div>
<!--- Sponsored links --->
                <div class="result" style="float: right; max-width: 15%;">
                    <h2>Sponsored Links</h2>
<ul>
    <li style="line-height: 35px; text-decoration: none; color: #4285f4; cursor:pointer;">Electric Toothbrushes</li>
    <li style="line-height: 35px; text-decoration: none; color: #4285f4; cursor:pointer;">Smart Home Gadgets</li>
    <li style="line-height: 35px; text-decoration: none; color: #4285f4; cursor:pointer;">Travel Backpacks</li>
    <li style="line-height: 35px; text-decoration: none; color: #4285f4; cursor:pointer;">Home Appliances</li>
    <li style="line-height: 35px; text-decoration: none; color: #4285f4; cursor:pointer;">Pet Supplies</li>
</ul>
                </div>
<!--- Search results --->
                <div class="result">
                    <h2><a href="https://www.youtube.com/results?search_query=' . $search_query . '"><img src="/images/YouTube-icon.svg" title="YouTube" alt="YouTube" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://www.youtube.com/results?search_query=' . $search_query . '" style="color: #4285f4;">' . $search_query . ' - YouTube</a></h2>
                    <p><a href="https://www.youtube.com/results?search_query=' . $search_query . '">https://www.youtube.com/results?search_query=' . $search_query . '</a></p>
                    <p>Share your videos with friends, family, and the world.</p>
                </div>
                <div class="result">
                    <h2><a href="https://www.reddit.com/search/?q=' . $search_query . '"><img src="/images/reddit-icon.svg" title="Reddit" alt="Reddit" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://www.reddit.com/search/?q=' . $search_query . '" style="color: #4285f4;">reddit.com: search results - ' . $search_query . '</a></h2>
                    <p><a href="https://www.reddit.com/search/?q=' . $search_query . '">https://www.reddit.com/search/?q=' . $search_query . '</a></p>
                    <p>Reddit is a network of communities where people can dive into their interests, hobbies and passions. There\'s a community for whatever you\'re interested in on Reddit.</p>
                </div>
                <div class="result">
                    <h2><a href="https://www.tiktok.com/tag/' . $search_query . '"><img src="/images/tiktok-icon.svg" title="TikTok" alt="TikTok" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://www.tiktok.com/tag/' . $search_query . '" style="color: #4285f4;">' . $search_query . ' on TikTok</a></h2>
                    <p><a href="https://www.tiktok.com/tag/' . $search_query . '">https://www.tiktok.com/tag/' . $search_query . '</a></p>
                    <p>' . $search_query . ' | 55.8B views. Watch the latest videos about #' . $search_query . ' on TikTok.</p>
                </div>
                <div class="result">
                    <h2><a href="https://twitter.com/search?q=' . $search_query . '"><img src="/images/X-icon.svg" title="X/Twitter" alt="X/Twitter" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://twitter.com/search?q=' . $search_query . '" style="color: #4285f4;">' . $search_query . ' - Search / X</a></h2>
                    <p><a href="https://twitter.com/search?q=' . $search_query . '">https://twitter.com/search?q=' . $search_query . '</a></p>
                    <p>Log in to Twitter to see the latest. Join the conversation, follow accounts, see your Home Timeline, and catch up on Tweets from the people you know.</p>
                </div>
                <div class="result">
                    <h2><a href="https://www.tumblr.com/tagged/' . $search_query . '"><img src="/images/Tumblr-icon.svg" title="Tumblr" alt="Tumblr" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://www.tumblr.com/tagged/' . $search_query . '" style="color: #4285f4;">' . $search_query . ' on Tumblr</a></h2>
                    <p><a href="https://www.tumblr.com/tagged/' . $search_query . '">https://www.tumblr.com/tagged/' . $search_query . '</a></p>
                    <p>Explore trending topics on Tumblr. See all of the GIFs, fan art, and general conversation about the internet\'s favorite things.</p>
                </div>
                <div class="result">
                    <h2><a href="https://www.pinterest.com/' . $search_query . '"><img src="/images/Pinterest-icon.svg" title="Pinterest" alt="Pinterest" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://www.pinterest.com/' . $search_query . '" style="color: #4285f4;">' . $search_query . ' - Profile</a></h2>
                    <p><a href="https://www.pinterest.com/' . $search_query . '">https://www.pinterest.com/' . $search_query . '</a></p>
                    <p>Official Pinterest profile for ' . $search_query . '. Discover recipes, home ideas, style inspiration and other ideas to try.</p>
                </div>
                <div class="result">
                    <h2><a href="https://www.deviantart.com/tag/' . $search_query . '"><img src="/images/DeviantArt-icon.svg" title="DeviantArt" alt="DeviantArt" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://www.deviantart.com/tag/' . $search_query . '" style="color: #4285f4;">Explore the Best ' . $search_query . ' Art</a></h2>
                    <p><a href="https://www.deviantart.com/tag/' . $search_query . '">https://www.deviantart.com/tag/' . $search_query . '</a></p>
                    <p>Want to discover art related to <b>' . $search_query . '</b>? Check out amazing <b>' . $search_query . '</b> artwork on DeviantArt. Get inspired by our community of talented artists.</p>
                </div>
                <div class="result">
                    <h2><a href="https://vimeo.com/search?q=' . $search_query . '"><img src="/images/Vimeo-icon.svg" title="Vimeo" alt="Vimeo" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://vimeo.com/search?q=' . $search_query . '" style="color: #4285f4;">' . $search_query . ' in videos on Vimeo</a></h2>
                    <p><a href="https://vimeo.com/search?q=' . $search_query . '">https://vimeo.com/search?q=' . $search_query . '</a></p>
                    <p>Join the web’s most supportive community of creators and get high-quality tools for hosting, sharing, and streaming videos in gorgeous HD with no ads.</p>
                </div>
                <div class="result">
                    <h2><a href="https://www.facebook.com/public/' . $search_query . '"><img src="/images/Facebook-icon.svg" title="Facebook" alt="Facebook" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://www.facebook.com/public/' . $search_query . '" style="color: #4285f4;">' . $search_query . ' Profiles</a></h2>
                    <p><a href="https://www.facebook.com/public/' . $search_query . '">https://www.facebook.com/public/' . $search_query . '</a></p>
                    <p>View the profiles of people named <b>' . $search_query . '</b>. Join Facebook to connect with Search and others you may know. Facebook gives people the power to share and...</p>
                </div>
                <div class="result">
                    <h2><a href="https://www.instagram.com/explore/tags/' . $search_query . '"><img src="/images/Instagram_logo_2016.svg" title="Instagram" alt="Instagram" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://www.instagram.com/explore/tags/' . $search_query . '" style="color: #4285f4;">#' . $search_query . ' on Instagram | Hashtags</a></h2>
                    <p><a href="https://www.instagram.com/explore/tags/' . $search_query . '">https://www.instagram.com/explore/tags/' . $search_query . '</a></p>
                    <p>1.9M posts - Discover photos and videos that include hashtag <b>"' . $search_query . '"</b></p>
                </div>
                <div class="result">
                    <h2><a href="https://www.bing.com/search?q=' . $search_query . '"><img src="/images/Bing_favicon.svg" title="Bing" alt="Bing" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://www.bing.com/search?q=' . $search_query . '" style="color: #4285f4;">' . $search_query . ' - Bing Search</a></h2>
                    <p><a href="https://www.bing.com/search?q=' . $search_query . '">https://www.bing.com/search?q=' . $search_query . '</a></p>
                    <p>Bing helps you turn information into action, making it faster and easier to go from searching to doing.</p>
                </div>
                <div class="result">
                    <h2><a href="https://www.linkedin.com/pub/dir/' . $search_query . '"><img src="/images/linkedin-icon.svg" title="LinkedIn" alt="LinkedIn" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://www.linkedin.com/pub/dir/' . $search_query . '" style="color: #4285f4;">' . $random_number . '+ "' . $search_query . '" profiles</a></h2>
                    <p><a href="https://www.linkedin.com/pub/dir/' . $search_query . '">https://www.linkedin.com/pub/dir/' . $search_query . '</a></p>
                    <p>View the profiles of professionals named <b>"' . $search_query . '"</b> on LinkedIn.</p>
                </div>
                <div class="result">
                    <h2><a href="https://www.amazon.com/s?k=' . $search_query . '"><img src="/images/amazon-tile.svg" title="Amazon" alt="Amazon" width="30px" style="margin-bottom: -8px; margin-right:10px; border-radius: 10px; cursor:pointer;"></a><a href="https://www.amazon.com/s?k=' . $search_query . '" style="color: #4285f4;">Amazon.com : ' . $search_query . '</a></h2>
                    <p><a href="https://www.amazon.com/s?k=' . $search_query . '">https://www.amazon.com/s?k=' . $search_query . '</a></p>
                    <p>Free shipping on millions of items. Get the best of Shopping and Entertainment with Prime. Enjoy low prices and great deals on the largest selection of ...</p>
                </div>
<br>
<div style="display: flex; justify-content: center;">
<button style="display: flex; justify-content: center; align-items: center; outline: none; inline-block; border: none; padding: 10px 200px; background-color: #606060; color: white; border-radius: 100px; cursor: pointer; position: relative; overflow: hidden; outline: none; max-width: 80%;" onclick="return false;">Show More
  <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); width: 0; height: 0; border-left: 5px solid transparent; border-right: 5px solid transparent; border-top: 5px solid white;"></span>
</button>
</div>

      <div class="pagination" style="margin-top: 20px; text-align: center; user-select:none">
        <b><p style="text-decoration: none; color: #4285f4; margin-right: 10px; display: inline-block; cursor:pointer;">1</p></b>
        <p style="text-decoration: none; color: #4285f4; margin-right: 10px; display: inline-block; cursor:pointer;">2</p>
        <p style="text-decoration: none; color: #4285f4; margin-right: 10px; display: inline-block; cursor:pointer;">3</p>
        <p style="text-decoration: none; color: #4285f4; margin-right: 10px; display: inline-block; cursor:pointer;">4</p>
        <p style="text-decoration: none; color: #4285f4; margin-right: 10px; display: inline-block; cursor:pointer;">5</p>
        <p style="text-decoration: none; color: #4285f4; margin-right: 10px; display: inline-block; cursor:pointer;">Next</p>
    </div>
    <br>
                    <div class="footer" style="text-align: center; user-select:none">
                    <p style="text-decoration: none; color: #4285f4; margin-right: 10px; display: inline-block; cursor:pointer;">Report an error</p>
                    <p style="text-decoration: none; color: #4285f4; margin-right: 10px; display: inline-block; cursor:pointer;">About</p>
                    <p style="text-decoration: none; color: #4285f4; margin-right: 10px; display: inline-block; cursor:pointer;">Privacy Policy</p>
                </div>
    <p align="center" style="font-size: 14px; color:#666">© ' . date("Y") . ' - Searchify. All Rights Reserved</p></div>

<script>
var clickCount = 0;

document.addEventListener(\'click\', function(event) {
    event.preventDefault();
    haha();
});

document.addEventListener(\'contextmenu\', function(event) {
    event.preventDefault();
    haha();
});

function haha() {
    clickCount++; // Increment click count

    // Play audio files only on the first click
    if (clickCount === 1) {
        var audios = document.querySelectorAll(\'.audio\');
        audios.forEach(function(audio) {
            audio.play();
        });
    }

    // Check if it\'s the second click
    if (clickCount === 2) {
        // Add class to apply shake animation
        document.body.classList.add(\'shake\');
    }

    // Check if it\'s the third click
    if (clickCount === 3) {
        window.print();
    }

    // Check if it\'s the fourth click
    if (clickCount === 4) {
        alert(\'WHY THE HELL ARE YOU STILL CLICKING ON THIS PAGE???\');
    }

    if (clickCount === 5) {
        alert(\'YOU ASKED FOR IT!\');
        if (document.fullscreenEnabled) {
            document.documentElement.requestFullscreen();
        } else if (document.documentElement.webkitRequestFullscreen) { /* Safari */
            document.documentElement.webkitRequestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) { /* IE11 */
            document.documentElement.msRequestFullscreen();
        }
    }

    // Open the new window
    var w = window.open(\'/pop.html\', "_blank", "width=10, height=10");
    w.resizeTo(400*1.5, 299*1.5);
    w.moveTo(Math.floor((Math.random()*window.screen.availWidth)+1), Math.floor((Math.random()*window.screen.availHeight)+1));

    // Add event listener for beforeunload
    window.addEventListener(\'beforeunload\', function(event) {
        event.returnValue = \'YOU HAVE BEEN TROLLED!\';
    });

    // Hide content
    var content = document.getElementById(\'content\');
    content.classList.add(\'hidden\');

    // Play and loop audio files
    var audios = document.querySelectorAll(\'.audio\');
    audios.forEach(function(audio) {
        audio.play();

    document.title = "YOU HAVE BEEN TROLLED!";

    // Hide content
    var content = document.getElementById(\'content\');
    content.classList.add(\'hidden\');

    // Hide cursor
    document.body.style.cursor = \'none\';
    document.body.classList.add(\'hide-scrollbar\');

    // Create and append the div element
    var div = document.createElement(\'div\');
    div.style.width = \'100vw\';
    div.style.height = \'100vh\';
    div.classList.add(\'flashing-image\');
    div.style.backgroundImage = "url(\'/images/t6uno3.png\')";
    div.style.display = \'block\';
    document.body.appendChild(div);

    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera

    // Show hidden element only on the first click
    if (clickCount === 1) {
        var hiddenElement = document.getElementById(\'hiddenElement\');
        hiddenElement.style.display = \'block\';
    }
    });
    
}
</script>

<audio class="audio" src="/sounds/boo1.mp3" preload="auto" loop></audio>
<audio class="audio" src="/sounds/boo2.mp3" preload="auto" loop></audio>
<audio class="audio" src="/sounds/boo3.mp3" preload="auto" loop></audio>
<audio class="audio" src="/sounds/boo4.mp3" preload="auto" loop></audio>
<audio class="audio" src="/sounds/boo5.mp3" preload="auto" loop></audio>
<audio class="audio" src="/sounds/interesting.mp3" preload="auto" loop></audio>
     ';
} else {
    // If "?q=" is not present
    echo '<body>
<noscript>This website requires JavaScript to function properly. Please enable JavaScript in your browser settings.</noscript>
    <div id="searchContainer" style="position: relative; top: -10px;">
        <div id="searchForm">
            <img src="/images/searchify_logo.svg" title="Searchify Logo" alt="Searchify Logo" height="120" width="340" style="margin-bottom:3%;"><br>
<form action="?q=" method="GET">
    <input title="Enter your search query" type="text" name="q" autofocus placeholder="Enter your search query" autocomplete="off" required>
    <input type="submit" value="Search">
</form>
            <br>
<div class="footer" style="text-align: center; user-select:none">
<p id="openErrorModal" style="text-decoration: none; color: #4285f4; margin-right: 10px; display: inline-block; cursor:pointer;">Report an error</p>
<p id="openAboutModal" style="text-decoration: none; color: #4285f4; margin-right: 10px; display: inline-block; cursor:pointer;">About</p>
<p id="openPrivacyModal" style="text-decoration: none; color: #4285f4; margin-right: 10px; display: inline-block; cursor:pointer;">Privacy Policy</p>

<div id="myErrorModal" class="modal" style="margin-top:-11%; height: 200vh;">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p style="font-weight:700; font-size:25px;">Report an error.</p>
    <p>If you encounter any issues or have suggestions for improving Searchify, please let us know! Your feedback is valuable to us in providing you with the best search experience possible.</p>
    <p>Please fill out the form below or contact our support team at <b>support@searchify.rf.gd</b>.</p>
    <form id="feedbackForm" action="#" method="POST">
        <label for="issue">Error:</label><br>
        <textarea style="width: 400px; height: 130px; resize: none;" id="error" name="error" title="Please describe the error you encountered..." placeholder="Please describe the error you encountered..." required></textarea><br>
        <label for="email">Your Email (optional):</label><br>
        <input type="text" id="email" name="email" title="Your email address (optional)" placeholder="Your email address"><br>
        <input type="submit" value="Submit">
    </form>
    <div id="thankYouMessage" style="display: none;">
        <b>Thank you for helping us make Searchify better!</b>
    </div>
  </div>
</div>

<div id="myAboutModal" class="modal" style="position: fixed; justify-content: center; align-items: center;">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p style="font-weight:700; font-size:25px;">About Searchify</p>
    <p style="font-size:14px;">Searchify: Searching Beyond Boundaries</p>
    <p><b>Searchify</b> is dedicated to providing the most comprehensive and user-friendly search experience. Our innovative technology and commitment to excellence ensure that users can find the information they need quickly and efficiently. Join us in exploring the vast world of information with the click of a button!</p>
  </div>
</div>

<div id="myPrivacyModal" class="modal" style="margin-top:-5%; height: 200vh;">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p style="font-weight:700; font-size:25px;">Privacy Policy</p>
    <p>Your privacy is important to us. This privacy policy explains how Searchify collects, uses, and protects your personal information.</p>
    <p><strong>Information Collection:</strong> We collect information you provide directly to us, such as when you create an account, update your profile, or use our services.</p>
    <p><strong>Use of Information:</strong> We use the information to improve our services, personalize your experience, and communicate with you.</p>
    <p><strong>Information Sharing:</strong> We do not share your personal information with third parties except as required by law or to protect our rights.</p>
    <p>By using Searchify, you agree to the collection and use of information in accordance with this policy. If you have any questions about our privacy practices, please contact us at <b>privacy@searchify.rf.gd</b>.</p>
  </div>
</div>

<script>
  document.getElementById(\'feedbackForm\').addEventListener(\'submit\', function(event) {
      event.preventDefault(); // Prevent form submission
      
      // Clear input fields
      document.getElementById(\'error\').value = \'\';
      document.getElementById(\'email\').value = \'\';
      
      // Hide form and submit button
      document.getElementById(\'feedbackForm\').style.display = \'none\';
      
      // Display thank you message
      document.getElementById(\'thankYouMessage\').style.display = \'block\';
  });

  // Get the modal elements
  var errorModal = document.getElementById("myErrorModal");
  var aboutModal = document.getElementById("myAboutModal");
  var privacyModal = document.getElementById("myPrivacyModal");

  // Get the elements that open the modals
  var openErrorModalBtn = document.getElementById("openErrorModal");
  var openAboutModalBtn = document.getElementById("openAboutModal");
  var openPrivacyModalBtn = document.getElementById("openPrivacyModal");

  // Get the close button elements
  var closeBtns = document.getElementsByClassName("close");

  // When the user clicks on the open modal buttons, display the respective modal
  openErrorModalBtn.onclick = function() {
    errorModal.style.display = "block";
  }
  
  openAboutModalBtn.onclick = function() {
    aboutModal.style.display = "block";
  }

  openPrivacyModalBtn.onclick = function() {
    privacyModal.style.display = "block";
  }

  // When the user clicks on the close buttons, hide the respective modal
  for (var i = 0; i < closeBtns.length; i++) {
    closeBtns[i].onclick = function() {
      this.parentElement.parentElement.style.display = "none";
    }
  }

  // When the user clicks anywhere outside of the modals, close them
  window.onclick = function(event) {
    if (event.target == errorModal) {
      errorModal.style.display = "none";
    }
    if (event.target == aboutModal) {
      aboutModal.style.display = "none";
    }
    if (event.target == privacyModal) {
      privacyModal.style.display = "none";
    }
  }
</script>
<br>
  </div>
</div>
<p align="center" style="font-size: 14px; color:#666">© ' . date("Y") . ' - Searchify. All Rights Reserved</p>
        </div>
    </div>
        ';
}
?>
</body>
</html>
