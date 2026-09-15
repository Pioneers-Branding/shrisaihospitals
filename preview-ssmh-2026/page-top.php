<?php
declare(strict_types=1);
$pageTitle = $pageTitle ?? 'Shri Sai Hospital, Bhandara';
$pageDescription = $pageDescription ?? 'Specialist care at Shri Sai Hospital, Bhandara.';
$canonicalPath = $canonicalPath ?? '';
$requestPath = (string)(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/');
if (preg_match('#^(.*)/(?:specialities|consultants)/[a-z0-9-]+/?$#', $requestPath, $matches)) {
    $basePath = rtrim($matches[1], '/');
} else {
    $basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
}
$baseHref = ($basePath === '' ? '/' : $basePath . '/');
?><!doctype html>
<html lang="en-IN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <link rel="canonical" href="https://shrisaihospitals.co.in/<?php echo htmlspecialchars(ltrim($canonicalPath, '/')); ?>">
  <base href="<?php echo htmlspecialchars($baseHref); ?>">
  <meta name="theme-color" content="#075c65">
  <link rel="stylesheet" href="assets/css/site.css">
  <?php if (!empty($structuredData)): ?><script type="application/ld+json"><?php echo json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script><?php endif; ?>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="site-header">
  <div class="topbar"><div class="shell"><span>NABH Entry Level - SHCO Certified</span><strong>PM-JAY & MJPJAY empanelled</strong><a href="tel:<?php echo $site['phone']; ?>">Emergency & appointments: <?php echo $site['phone_display']; ?></a></div></div>
  <div class="nav shell">
    <a class="brand" href="index.php"><img src="assets/images/logo.png" alt="Shri Sai Hospital logo"><span><strong>Shri Sai Hospital</strong><small>Bhandara, Maharashtra</small></span></a>
    <button class="menu-button" aria-expanded="false" aria-controls="menu">Menu</button>
    <nav id="menu" aria-label="Main navigation"><a href="index.php#about" data-i18n="navAbout">About</a><a href="index.php#services" data-i18n="navServices">Specialities</a><a href="index.php#doctors" data-i18n="navDoctors">Consultants</a><a href="index.php#nabh">NABH</a><a href="index.php#contact" data-i18n="navContact">Contact</a></nav>
    <div class="language-switch" aria-label="Select language"><button type="button" data-lang="en">EN</button><button type="button" data-lang="mr">मराठी</button><button type="button" data-lang="hi">हिंदी</button></div>
    <a class="button compact desktop-cta" href="tel:<?php echo $site['phone']; ?>">Call hospital</a>
  </div>
</header>
