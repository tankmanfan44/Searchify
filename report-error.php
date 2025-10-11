<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=yes">
  <meta name="description" content="Searchify - Report an Error. Let us know about issues you encountered.">
  <meta name="keywords" content="error report, contact, feedback, Searchify">
  <meta name="robots" content="index, follow">
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="/./favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
  <link rel="stylesheet" href="/./style.css">
  <title>Searchify - Report an Error</title>
</head>
<body>
  <noscript>This website requires JavaScript to function properly. Please enable JavaScript in your browser settings.</noscript>

  <div id="search-container">
    <a href="/"><img class="logo" src="/images/searchify.svg" alt="Searchify"></a>

    <h1 style="margin-bottom: 20px; font-size: 24px; color: #333;">Report an Error</h1>

    <form id="reportForm" style="width:100%; max-width:600px; display:flex; flex-direction:column; gap:15px;">
      <input
        class="contact"
        type="text"
        name="subject"
        placeholder="Subject"
        required
      />

      <input
        class="contact"
        type="email"
        name="email"
        placeholder="Your email (optional)"
      />

      <textarea
        class="contact"
        name="message"
        rows="8"
        placeholder="Describe the issue"
        required
        style="border-radius:10px;"
      ></textarea>

      <button class="submit-button" type="submit">Submit</button>
    </form>

    <div class="footer-links" style="margin-top:30px;">
      <a href="/">Back to Home</a>
      <a href="/about">About</a>
      <a href="/privacy-policy">Privacy Policy</a>
    </div>

    <p class="copyright">&copy; <?= date('Y') ?> – Searchify. All Rights Reserved</p>
  </div>

  <script>
    document.getElementById('reportForm').addEventListener('submit', function(e) {
      e.preventDefault();
    });
  </script>
</body>
</html>
