<?php
if (!isset($_GET['q']) || trim($_GET['q']) === '') {
    header("Location: /");
    exit();
}

// Get search query
$q = isset($_GET['q']) ? trim($_GET['q']) : '';
// Generate random number for LinkedIn entry
$randNum = rand(2, 65);
// Build array of results
$results = [
    [
        'title' => "$q - YouTube",
        'url'   => "https://www.youtube.com/results?search_query=" . rawurlencode($q),
        'desc'  => 'Share your videos with friends, family, and the world.'
    ],
    [
        'title' => "reddit.com: search results - $q",
        'url'   => "https://www.reddit.com/search/?q=" . rawurlencode($q),
        'desc'  => 'Reddit is a network of communities where people can dive into their interests, hobbies and passions.'
    ],
    [
        'title' => "$q on TikTok",
        'url'   => "https://www.tiktok.com/tag/" . rawurlencode($q),
        'desc'  => "Watch the latest videos about #$q on TikTok."
    ],
    [
        'title' => "$q - Search / X",
        'url'   => "https://www.twitter.com/search?q=" . rawurlencode($q),
        'desc'  => 'Log in to Twitter to see the latest. Join the conversation, follow accounts, see your Home Timeline, and catch up on Tweets.'
    ],
    [
        'title' => "$q on Tumblr",
        'url'   => "https://www.tumblr.com/tagged/" . rawurlencode($q),
        'desc'  => "Explore trending topics on Tumblr. See all of the GIFs, fan art, and general conversation about \"$q\"."
    ],
    [
        'title' => "Explore the Best $q Art",
        'url'   => "https://www.deviantart.com/tag/" . rawurlencode($q),
        'desc'  => "Want to discover art related to <b>$q</b>? Check out amazing <b>$q</b> artwork on DeviantArt."
    ],
    [
        'title' => "$q in videos on Vimeo",
        'url'   => "https://www.vimeo.com/search?q=" . rawurlencode($q),
        'desc'  => "Join the web’s most supportive community of creators and get high-quality tools for streaming videos in HD."
    ],
    [
        'title' => "$q Profiles",
        'url'   => "https://www.facebook.com/public/" . rawurlencode($q),
        'desc'  => "View the profiles of people named <b>$q</b>. Join Facebook to connect with others you may know."
    ],
    [
        'title' => "#$q on Instagram | Hashtags",
        'url'   => "https://www.instagram.com/explore/tags/" . rawurlencode($q),
        'desc'  => "Discover photos and videos that include hashtag \"<b>$q</b>\"."
    ],
    [
        'title' => "$q - Bing Search",
        'url'   => "https://www.bing.com/search?q=" . rawurlencode($q),
        'desc'  => "Bing helps you turn information into action, making it faster and easier to go from searching to doing."
    ],
    [
        'title' => "$randNum $q profiles",
        'url'   => "https://www.linkedin.com/pub/dir/" . rawurlencode($q),
        'desc'  => "View the profiles of professionals named <b>$q</b> on LinkedIn."
    ],
    [
        'title' => "Amazon.com : $q",
        'url'   => "https://www.amazon.com/s?k=" . rawurlencode($q),
        'desc'  => "Free shipping on millions of items. Get the best deals on \"$q\"."
    ],
];
// Shuffle for random order
shuffle($results);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=yes">
    <title>Searchify - <?= htmlspecialchars($q) ?></title>
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/./favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/./search_results.css">
    <script src="/search.js"></script>
</head>

<body>
    <header>
        <a href="/./"><img class="logo" src="/./images/searchify_white.svg" alt="Searchify Logo" onclick="return false;"></a>
        <div class="search-bar">
            <input class="search-input" type="text" name="q" value="<?= htmlspecialchars($q) ?>" placeholder="Enter your search query" autocomplete="off" autofocus>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 96"><path fill="#4285f4" d="m83.9 75.6c0.7 0.8 0.7 2.1-0.1 2.9l-3.5 3.5c-0.8 0.8-2.1 0.7-2.9 0l-17.5-17.9c-1.2-1.1-1.1-3 0-4.2l-1.4-1.4c-10 9.5-25.9 9.3-35.7-0.7l-0.7-0.7c-9.8-10-9.7-26.1 0.3-36 10-9.9 26.2-9.8 36.1 0.3l0.7 0.7c9.3 9.4 9.7 24.2 1.4 34.2l1.5 1.5c1.2-1.2 3.1-1.2 4.2 0l0.7 0.7q0 0 0 0zm-55.7-23.7c7 7.1 18.4 7.1 25.5 0.2 7.1-7 7.2-18.4 0.2-25.5-7-7.1-18.4-7.2-25.5-0.2-7 7-7.1 18.4-0.2 25.5z"/></svg>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" style="cursor:pointer; max-height:30px; margin-left:25px;"><path fill="#fff" d="m43.1 29.3c0.4 0.3 0.5 0.8 0.2 1.2l-4 7c-0.2 0.4-0.7 0.6-1.2 0.4l-5-2q-1.5 1.2-3.4 2l-0.7 5.3c-0.1 0.4-0.5 0.8-1 0.8h-8c-0.5 0-0.9-0.4-1-0.8l-0.7-5.3q-1.9-0.8-3.4-2l-5 2c-0.4 0.2-1 0-1.2-0.4l-4-7c-0.3-0.4-0.2-0.9 0.2-1.2l4.2-3.4q-0.1-0.9-0.1-1.9 0-1 0.1-2l-4.2-3.3c-0.4-0.3-0.5-0.8-0.2-1.2l4-7c0.2-0.4 0.8-0.6 1.2-0.4l5 2q1.5-1.2 3.4-2l0.7-5.3c0.1-0.4 0.5-0.8 1-0.8h8c0.5 0 0.9 0.4 1 0.8l0.8 5.3q1.8 0.8 3.3 2l5-2c0.5-0.2 1 0 1.2 0.4l4 7c0.3 0.4 0.2 0.9-0.2 1.2l-4.2 3.3q0.1 1 0.1 2 0 1-0.1 1.9zm-12.1-5.2c0-3.9-3.2-7-7-7-3.9 0-7 3.1-7 7 0 3.9 3.1 7 7 7 3.8 0 7-3.1 7-7z"/></svg>
    </header>

    <div class="nav-tabs">
        <div class="nav-tab-selected">Web</div>
        <a style="text-decoration: none;" href="/./images?q=<?= htmlspecialchars($q) ?>" onclick="return false;"><div class="nav-tab">Images</div></a>
        <a style="text-decoration: none;" href="/./videos?q=<?= htmlspecialchars($q) ?>" onclick="return false;"><div class="nav-tab">Videos</div></a>
        <a style="text-decoration: none;" href="/./news?q=<?= htmlspecialchars($q) ?>" onclick="return false;"><div class="nav-tab">News</div></a>
    </div>
    <div class="results-container">
        <div class="results-list">
            <?php foreach ($results as $r): ?>
                <div class="result">
                    <h3><a href="<?= $r['url'] ?>"><?= htmlspecialchars($r['title']) ?></a></h3>
                    <p><a href="<?= $r['url'] ?>"><?= htmlspecialchars($r['url']) ?></a></p>
                    <p><?= $r['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="featured-box">
            <h3>Sponsored Links</h3>
            <ul>
                <li><a href="https://www.oralb.ca/en-ca/products/compare/electric-toothbrushes">Electric Toothbrushes</a></li>
                <li><a href="https://www.temu.com/c/smart-home-o4-1422.html">Smart Home Gadgets</a></li>
                <li><a href="https://www.travelandleisure.com/style/travel-bags/best-carry-on-backpacks">Travel Backpacks</a></li>
                <li><a href="https://www.homedepot.ca/en/home/categories/appliances.html">Home Appliances</a></li>
                <li><a href="https://www.petsmart.com/pet-supplies">Pet Supplies</a></li>
            </ul>
        </div>
    </div>
    <footer>
        <a href="/report-error">Report an error</a>
        <a href="/about">About</a>
        <a href="/privacy-policy">Privacy Policy</a>
        <p>&copy; <?= date("Y") ?> - Searchify. All Rights Reserved.</p>
    </footer>
</body>
</html>
