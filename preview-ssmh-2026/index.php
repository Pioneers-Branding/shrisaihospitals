<?php
declare(strict_types=1);
session_start();
require __DIR__ . '/data.php';
if (empty($_SESSION['csrf'])) { $_SESSION['csrf'] = bin2hex(random_bytes(24)); }
$success = isset($_GET['sent']) && $_GET['sent'] === '1';
$error = isset($_GET['error']);
?><!doctype html>
<html lang="en-IN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Shri Sai Hospital Bhandara | Multispeciality & Emergency Care</title>
  <meta name="description" content="Shri Sai Hospital, Bhandara offers general and laparoscopic surgery, trauma, orthopaedics, burns and plastic surgery, medicine, maternity, urology, gastroenterology, neurosurgery and laboratory services.">
  <link rel="canonical" href="https://shrisaihospitals.co.in/">
  <meta name="theme-color" content="#075c65">
  <link rel="stylesheet" href="assets/css/site.css">
  <script type="application/ld+json"><?php echo json_encode(['@context'=>'https://schema.org','@graph'=>array_merge([[
    '@type'=>['Hospital','LocalBusiness'],'@id'=>'https://shrisaihospitals.co.in/#hospital','name'=>$site['name'],'url'=>'https://shrisaihospitals.co.in/','image'=>'https://shrisaihospitals.co.in/assets/images/facility/hospital-aerial.webp',
    'telephone'=>$site['phone'],'email'=>$site['email'],'priceRange'=>'₹₹','hasMap'=>'https://www.google.com/maps/search/?api=1&query=Shri+Sai+Hospital+Bhandara',
    'address'=>['@type'=>'PostalAddress','streetAddress'=>'NH-53, Opposite Honda Showroom, Near Patidar Bhavan','addressLocality'=>'Bhandara','postalCode'=>'441904','addressRegion'=>'Maharashtra','addressCountry'=>'IN']
  ],['@type'=>'FAQPage','mainEntity'=>array_map(static fn(array $faq): array => ['@type'=>'Question','name'=>$faq['question'],'acceptedAnswer'=>['@type'=>'Answer','text'=>$faq['answer']]],$faqs)]],array_map(static fn(array $doctor): array => ['@type'=>'Physician','name'=>$doctor['name'],'medicalSpecialty'=>$doctor['specialty'],'url'=>'https://shrisaihospitals.co.in/consultants/'.$doctor['slug'].'/','worksFor'=>['@id'=>'https://shrisaihospitals.co.in/#hospital']],$doctors))], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="site-header">
  <div class="topbar"><div class="shell"><span>NABH Entry Level - SHCO Certified</span><strong>PM-JAY & MJPJAY empanelled</strong><a href="tel:<?php echo $site['phone']; ?>">Emergency & appointments: <?php echo $site['phone_display']; ?></a></div></div>
  <div class="nav shell">
    <a class="brand" href="#home"><img src="assets/images/logo.png" alt="Shri Sai Hospital logo"><span><strong>Shri Sai Hospital</strong><small>Bhandara, Maharashtra</small></span></a>
    <button class="menu-button" aria-expanded="false" aria-controls="menu">Menu</button>
    <nav id="menu" aria-label="Main navigation"><a href="#about" data-i18n="navAbout">About</a><a href="#services" data-i18n="navServices">Services</a><a href="#doctors" data-i18n="navDoctors">Doctors</a><a href="#nabh">NABH</a><a href="#contact" data-i18n="navContact">Contact</a></nav>
    <div class="language-switch" aria-label="Select language"><button type="button" data-lang="en">EN</button><button type="button" data-lang="mr">मराठी</button><button type="button" data-lang="hi">हिंदी</button></div>
    <a class="button compact desktop-cta" href="tel:<?php echo $site['phone']; ?>">Call hospital</a>
  </div>
</header>

<main id="main">
  <section class="hero" id="home">
    <img class="hero-image" src="assets/images/facility/hospital-aerial.webp" fetchpriority="high" width="1600" height="900" alt="Aerial view of Shri Sai Hospital on NH-53 in Bhandara">
    <div class="hero-shade"></div>
    <div class="shell hero-content">
      <p class="eyebrow" data-i18n="heroEyebrow">Trusted multispeciality care in Bhandara</p>
      <h1 data-i18n="heroTitle">Specialist care. Closer to home.</h1>
      <p class="lead" data-i18n="heroLead">Surgical, medical, trauma, maternity and diagnostic services delivered by an experienced multidisciplinary team.</p>
      <div class="hero-actions"><a class="button" href="tel:<?php echo $site['phone']; ?>"><span data-i18n="callNow">Call now</span>: <?php echo $site['phone_display']; ?></a><a class="button ghost" href="https://wa.me/919209320992?text=Hello%20Shri%20Sai%20Hospital%2C%20I%20would%20like%20an%20appointment." data-i18n="whatsappAppointment">WhatsApp appointment</a></div>
      <div class="trust-row"><span>24/7 hospital support</span><span>Dialysis & kidney care</span><span>PM-JAY / MJPJAY</span><span>NABH Entry Level - SHCO</span></div>
    </div>
  </section>

  <section class="quick shell" aria-label="Quick actions">
    <a href="tel:<?php echo $site['phone']; ?>"><strong>Emergency help</strong><span>Call the hospital now →</span></a>
    <a href="#doctors"><strong>Find a specialist</strong><span>Meet our consultants →</span></a>
    <a href="#contact"><strong>Plan your visit</strong><span>Location and enquiry →</span></a>
  </section>

  <section class="schemes shell" aria-label="Government health schemes">
    <div class="scheme-mark">आयुष्मान भारत</div>
    <div><p class="eyebrow dark" data-i18n="schemeEyebrow">Cashless government health schemes</p><h2 data-i18n="schemeTitle">PM-JAY and MJPJAY empanelled hospital</h2><p data-i18n="schemeText">Eligible beneficiaries can access approved treatment packages under Ayushman Bharat PM-JAY and Mahatma Jyotirao Phule Jan Arogya Yojana, subject to scheme rules, documentation and authorization.</p></div>
    <a class="button" href="tel:<?php echo $site['phone']; ?>" data-i18n="checkEligibility">Check eligibility</a>
  </section>

  <section class="section shell split" id="about">
    <div><p class="eyebrow dark">About Shri Sai Hospital</p><h2>Advanced care with a personal connection</h2><p>Shri Sai Hospital is a multispeciality hospital serving Bhandara and surrounding communities. We bring together experienced consultants, surgical capability, dialysis and kidney care, critical-care support, laboratory services and coordinated emergency care in one accessible location.</p><div class="stats"><div><strong>9</strong><span>Consultant specialties</span></div><div><strong>NABH</strong><span>Entry Level - SHCO</span></div><div><strong>On call</strong><span>Ambulance service</span></div></div></div>
    <figure class="photo-card"><img src="assets/images/facility/icu.jpg" loading="lazy" width="1200" height="800" alt="Critical care beds and patient monitoring equipment at Shri Sai Hospital Bhandara"><figcaption>Critical-care support within the hospital</figcaption></figure>
  </section>

  <section class="section tint" id="services"><div class="shell"><div class="section-heading"><div><p class="eyebrow dark" data-i18n="servicesEyebrow">Clinical services</p><h2 data-i18n="servicesTitle">Connected care across specialties</h2></div><p data-i18n="servicesIntro">Our team coordinates assessment, diagnostics, procedures and follow-up so patients can receive more of their care locally.</p></div><div class="service-grid"><?php foreach ($services as $service): ?><a class="service-card" href="specialities/<?php echo rawurlencode($service['slug']); ?>/"><span class="service-icon"><?php echo htmlspecialchars($service['icon']); ?></span><h3 data-service-title="<?php echo htmlspecialchars($service['slug']); ?>"><?php echo htmlspecialchars($service['title']); ?></h3><p data-service-text="<?php echo htmlspecialchars($service['slug']); ?>"><?php echo htmlspecialchars($service['text']); ?></p><b data-i18n="viewSpeciality">View speciality →</b></a><?php endforeach; ?></div></div></section>

  <section class="section shell" id="doctors"><div class="section-heading"><div><p class="eyebrow dark">Our consultants</p><h2>Meet the specialist team</h2></div><p>Consultant availability may vary. Call or WhatsApp the hospital before travelling for a specialist appointment.</p></div><div class="doctor-grid"><?php foreach ($doctors as $doctor): ?><a class="doctor-card" href="consultants/<?php echo rawurlencode($doctor['slug']); ?>/"><div class="portrait"><?php if ($doctor['image']): ?><img src="assets/images/doctors/<?php echo rawurlencode($doctor['image']); ?>" loading="lazy" width="700" height="850" alt="<?php echo htmlspecialchars($doctor['name'] . ', ' . $doctor['specialty'] . ' consultant at Shri Sai Hospital Bhandara'); ?>"><?php else: ?><span><?php echo htmlspecialchars(implode('', array_map(fn($part)=>$part[0], array_slice(explode(' ', str_replace('Dr. ', '', $doctor['name'])),0,2)))); ?></span><?php endif; ?></div><div class="doctor-copy"><p><?php echo htmlspecialchars($doctor['specialty']); ?></p><h3><?php echo htmlspecialchars($doctor['name']); ?></h3><span><?php echo htmlspecialchars($doctor['qualification']); ?></span><?php if ($doctor['experience']): ?><span class="doctor-experience"><?php echo htmlspecialchars($doctor['experience']); ?> experience</span><?php endif; ?><small class="doctor-schedule"><?php echo htmlspecialchars($doctor['schedule']); ?></small><b>View consultant profile →</b></div></a><?php endforeach; ?></div></section>

  <section class="section accreditation" id="nabh"><div class="shell split"><div><p class="eyebrow">Quality and patient safety</p><h2>NABH Entry Level - SHCO Certified</h2><p>Shri Sai Hospital has been assessed under the NABH Entry Level Small Healthcare Organisation programme for its certified scope of clinical, laboratory and pharmacy services.</p><ul class="ticks"><li>Certificate PESHCO-2025-11223</li><li>Valid 2 September 2025 to 1 September 2027</li><li>Continued compliance with NABH Entry Level requirements</li></ul></div><div class="certificate-card"><strong>NABH</strong><span>Entry Level - SHCO</span><small>Certified for the scope stated in the official certificate</small></div></div></section>

  <section class="section shell gallery"><div class="section-heading"><div><p class="eyebrow dark">Inside the hospital</p><h2>Facilities designed for coordinated care</h2></div></div><div class="gallery-grid"><figure><img src="assets/images/facility/clinical-area.jpg" loading="lazy" width="1200" height="800" alt="Clinical work area with patient monitoring equipment at Shri Sai Hospital Bhandara"><figcaption>Clinical care area</figcaption></figure><figure><img src="assets/images/facility/icu-entry.jpg" loading="lazy" width="1200" height="800" alt="Entrance to the ICU and Burn Care Unit at Shri Sai Hospital Bhandara"><figcaption>ICU and Burn Care Unit</figcaption></figure><figure><img src="assets/images/facility/general-ward.webp" loading="lazy" width="1400" height="788" alt="General inpatient ward beds with bedside oxygen supply at Shri Sai Hospital Bhandara"><figcaption>General inpatient ward</figcaption></figure><figure><img src="assets/images/facility/reception.webp" loading="lazy" width="1400" height="788" alt="Reception and patient assistance counter at Shri Sai Hospital Bhandara"><figcaption>Reception and patient assistance</figcaption></figure><figure><img src="assets/images/facility/icu.jpg" loading="lazy" width="1200" height="800" alt="Critical care beds and monitoring facilities at Shri Sai Hospital Bhandara"><figcaption>Critical-care support</figcaption></figure><figure><img src="assets/images/facility/hospital-aerial.jpg" loading="lazy" width="1600" height="900" alt="Aerial view of Shri Sai Hospital on NH-53 in Bhandara"><figcaption>Convenient NH-53 location</figcaption></figure></div></section>

  <section class="section tint" id="reviews"><div class="shell"><div class="section-heading"><div><p class="eyebrow dark">Patient experiences</p><h2>Feedback shared with consent</h2></div><p>Patient privacy matters. Reviews are published only after consent and verification by the hospital.</p></div><?php if ($testimonials): ?><div class="testimonial-grid"><?php foreach ($testimonials as $review): ?><blockquote class="testimonial"><div class="review-avatar" aria-hidden="true"><?php echo htmlspecialchars($review['initials']); ?></div><p>“<?php echo htmlspecialchars($review['quote']); ?>”</p><footer><strong><?php echo htmlspecialchars($review['name']); ?></strong><span><?php echo htmlspecialchars($review['service']); ?></span></footer></blockquote><?php endforeach; ?></div><?php else: ?><div class="review-pending"><strong>Verified patient reviews are being prepared.</strong><p>Consented feedback will be added here without publishing confidential medical information.</p></div><?php endif; ?></div></section>

  <section class="section shell" id="faq"><div class="section-heading"><div><p class="eyebrow dark" data-i18n="faqEyebrow">Patient information</p><h2 data-i18n="faqTitle">Frequently asked questions</h2></div></div><div class="faq-list"><?php foreach ($faqs as $index=>$faq): ?><details<?php echo $index === 0 ? ' open' : ''; ?>><summary><?php echo htmlspecialchars($faq['question']); ?></summary><p><?php echo htmlspecialchars($faq['answer']); ?></p></details><?php endforeach; ?></div></section>

  <section class="map-section" aria-label="Hospital location"><iframe title="Google Map showing Shri Sai Hospital Bhandara" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Shri%20Sai%20Hospital%20Bhandara%20Maharashtra&output=embed"></iframe><div class="map-card"><p class="eyebrow dark">Find us</p><h2>Shri Sai Hospital, Bhandara</h2><p><?php echo htmlspecialchars($site['address']); ?></p><a class="button" rel="noopener" target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=Shri+Sai+Hospital+Bhandara+Maharashtra">Get directions</a></div></section>

  <section class="section contact" id="contact"><div class="shell contact-grid"><div><p class="eyebrow" data-i18n="contactEyebrow">Contact and appointments</p><h2 data-i18n="contactTitle">How can we help?</h2><p data-i18n="contactIntro">For emergencies, please call directly. For appointments and general enquiries, contact us by phone, WhatsApp or the secure form.</p><div class="contact-list"><a href="tel:<?php echo $site['phone']; ?>"><span data-i18n="phone">Phone</span><strong><?php echo $site['phone_display']; ?></strong></a><a href="mailto:<?php echo $site['email']; ?>"><span>Email</span><strong><?php echo $site['email']; ?></strong></a><div><span data-i18n="address">Address</span><strong><?php echo $site['address']; ?></strong></div></div></div>
      <form class="enquiry" method="post" action="contact-submit.php"><input type="hidden" name="csrf" value="<?php echo htmlspecialchars($_SESSION['csrf']); ?>"><label class="trap">Leave blank<input type="text" name="website" tabindex="-1" autocomplete="off"></label><?php if ($success): ?><p class="notice success toast" role="status" aria-live="polite">Thank you. Your enquiry has been sent. Our team normally responds within 2 working hours.</p><?php elseif ($error): ?><p class="notice error toast" role="alert">Please check the form and try again, or call us.</p><?php endif; ?><label><span data-i18n="name">Name</span><input name="name" required maxlength="80" autocomplete="name"></label><label><span data-i18n="phone">Phone</span><input name="phone" required maxlength="15" inputmode="tel" autocomplete="tel"></label><label><span data-i18n="service">Service</span><select name="service"><option>General enquiry</option><?php foreach($services as $service): ?><option><?php echo htmlspecialchars($service['title']); ?></option><?php endforeach; ?></select></label><label><span data-i18n="message">Message</span><textarea name="message" rows="4" maxlength="800"></textarea></label><button class="button" type="submit" data-i18n="sendEnquiry">Send enquiry</button><small><strong>Expected response:</strong> within 2 working hours. For emergencies, call immediately. Do not submit medical reports or confidential patient information through this form.</small></form>
    </div></section>
</main>

<a class="emergency-float" href="tel:<?php echo $site['phone']; ?>"><span>Emergency</span><strong><?php echo $site['phone_display']; ?></strong></a>

<footer><div class="shell footer-grid"><div><a class="brand footer-brand" href="#home"><img src="assets/images/logo.png" alt=""><span><strong>Shri Sai Hospital</strong><small>Bhandara, Maharashtra</small></span></a><p>Multispeciality hospital providing surgical, medical, emergency and diagnostic services.</p></div><div><strong>Quick links</strong><a href="#services">Services</a><a href="#doctors">Doctors</a><a href="#nabh">NABH</a></div><div><strong>Contact</strong><a href="tel:<?php echo $site['phone']; ?>"><?php echo $site['phone_display']; ?></a><a href="mailto:<?php echo $site['email']; ?>"><?php echo $site['email']; ?></a></div></div><div class="shell legal"><span>© <?php echo date('Y'); ?> Shri Sai Hospital.</span><span>Website information does not replace medical consultation.</span></div></footer>
<div class="mobile-actions"><a href="tel:<?php echo $site['phone']; ?>">Call</a><a href="https://wa.me/919209320992?text=Hello%20Shri%20Sai%20Hospital%2C%20I%20would%20like%20an%20appointment.">WhatsApp</a></div>
<script src="assets/js/site.js"></script>
</body></html>
