<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=yes">
    <meta name="description" content="Searchify - Searching Beyond Boundaries. Find what you need quickly and effortlessly.">
    <meta name="keywords" content="search engine, searchify, searching, web search, explore">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <link rel="stylesheet" href="/./style.css">
    <title>Searchify - Home</title>
</head>
<body>
    <noscript>This website requires JavaScript to function properly. Please enable JavaScript in your browser settings.</noscript>

    <div id="search-container" style="padding: 150px 20px;">
        <img class="logo" src="/images/searchify.svg" alt="Searchify">
        <form id="searchForm" class="search-form" action="/search" method="GET">
            <input class="search-input" title="Enter your search query" type="text" name="q" placeholder="Enter your search query" autocomplete="off" autofocus>
            <input class="search-button" type="submit" value="Search">
        </form>
        <div class="footer-links">
            <a href="/report-error">Report an error</a>
            <a href="/about">About</a>
            <a href="/privacy-policy">Privacy Policy</a>
        </div>

<p class="copyright">&copy; <?php echo date("Y"); ?> - Searchify. All Rights Reserved</p>

    </div>

    <script>
      document.getElementById('searchForm').addEventListener('submit', function(e) {
          var query = this.q.value.trim();
          if (!query) {
              e.preventDefault(); // No submission if input is empty
          }
      });
    </script>
</body>
</html>


