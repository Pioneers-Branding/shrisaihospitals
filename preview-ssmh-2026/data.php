<?php
declare(strict_types=1);

$site = [
    'name' => 'Shri Sai Hospital',
    'tagline' => 'Multispeciality care for Bhandara',
    'phone_display' => '+91 92093 20992',
    'phone' => '+919209320992',
    'email' => 'ssmhbhandara@gmail.com',
    'address' => 'NH-53, Opposite Honda Showroom, Near Patidar Bhavan, Bhandara - 441904, Maharashtra',
];

$doctors = [
    ['slug'=>'dr-shrikant-girepunje','name'=>'Dr. Shrikant Girepunje','qualification'=>'MBBS, MS (General Surgery)','experience'=>'8 years','schedule'=>'Monday–Saturday: 11:00 AM–3:00 PM and 6:00–8:00 PM; Sunday: 11:00 AM–2:00 PM','specialty'=>'General & Laparoscopic Surgery','service_slug'=>'general-laparoscopic-surgery','image'=>'shrikant-girepunje.jpg'],
    ['slug'=>'dr-pranjali-girepunje','name'=>'Dr. Pranjali Girepunje','qualification'=>'MBBS, DCP, DNB (Pathology)','experience'=>'9 years','schedule'=>'Laboratory services available 24×7×365','specialty'=>'Pathology','service_slug'=>'pathology-laboratory-services','image'=>'pranjali-girepunje.jpg'],
    ['slug'=>'dr-prakash-jambhulkar','name'=>'Dr. Prakash Jambhulkar','qualification'=>'MBBS, MD (Medicine)','experience'=>'7 years','schedule'=>'Monday–Saturday: 12:00–4:00 PM','specialty'=>'General Medicine','service_slug'=>'general-medicine','image'=>'prakash-jambhulkar.jpg'],
    ['slug'=>'dr-neelam-jambhulkar','name'=>'Dr. Neelam Jambhulkar','qualification'=>'MBBS, DGO, DNB (Obstetrics & Gynaecology)','experience'=>'9 years','schedule'=>'Monday–Saturday: 12:00–4:00 PM','specialty'=>'Obstetrics & Gynaecology','service_slug'=>'obstetrics-gynaecology','image'=>'neelam-jambhulkar.webp'],
    ['slug'=>'dr-rupeshkumar-hatwar','name'=>'Dr. Rupeshkumar Hatwar','qualification'=>'MBBS, MS (Orthopaedics)','experience'=>'7 years','schedule'=>'Monday: 12:00–2:00 PM; Tuesday: 11:00 AM–1:00 PM; Wednesday: 4:00–6:00 PM; Saturday: 11:00 AM–2:00 PM','specialty'=>'Orthopaedics','service_slug'=>'orthopaedics','image'=>'rupesh-hatwar.jpg'],
    ['slug'=>'dr-bhupendra-gaidhane','name'=>'Dr. Bhupendra Gaidhane','qualification'=>'MBBS, MS (General Surgery), MCh (Plastic Surgery)','experience'=>'5 years','schedule'=>'Wednesday: 11:00 AM–2:00 PM','specialty'=>'Plastic & Reconstructive Surgery','service_slug'=>'burns-plastic-reconstructive-surgery','image'=>'bhupendra-gaidhane.jpg'],
    ['slug'=>'dr-yogesh-shende','name'=>'Dr. Yogesh Shende','qualification'=>'MBBS, MS, MCh (Neurosurgery)','experience'=>'15 years','schedule'=>'Monday, Wednesday and Friday: 10:00 AM–12:00 PM','specialty'=>'Neurosurgery','service_slug'=>'neurosurgery','image'=>'yogesh-shende.webp'],
    ['slug'=>'dr-atul-gawande','name'=>'Dr. Atul Gawande','qualification'=>'MBBS, MD, DM (Gastroenterology)','experience'=>'5 years','schedule'=>'Second and fourth Sunday: 11:00 AM–2:00 PM','specialty'=>'Gastroenterology','service_slug'=>'gastroenterology-endoscopy','image'=>'atul-gawande.jpg'],
    ['slug'=>'dr-sushant-deole','name'=>'Dr. Sushant Deole','qualification'=>'MBBS, MS, MCh (Urology)','experience'=>'6 years','schedule'=>'Wednesday and Sunday: 11:00 AM–1:00 PM','specialty'=>'Urology','service_slug'=>'urology','image'=>'sushant-deole.jpg'],
];

$services = [
    ['slug'=>'emergency-trauma','icon'=>'✚','title'=>'Emergency & Trauma','text'=>'Prompt assessment and coordinated multidisciplinary care for accidents, injuries and surgical emergencies.','items'=>['Accident and polytrauma assessment','Initial stabilization and critical-care support','Coordination with surgical and specialist teams','Ambulance available on call']],
    ['slug'=>'general-laparoscopic-surgery','icon'=>'◉','title'=>'General & Laparoscopic Surgery','text'=>'Comprehensive surgical care including minimally invasive procedures, gastrointestinal, breast, thyroid and proctology services.','items'=>['Laparoscopic and open abdominal surgery','Hernia and gallbladder surgery','Breast and thyroid surgery','Piles, fissure and fistula care']],
    ['slug'=>'general-medicine','icon'=>'⚕','title'=>'General Medicine','text'=>'Assessment and inpatient management of adult medical conditions with coordinated diagnostic and critical-care support.','items'=>['Adult medicine consultation','Inpatient medical management','Diabetes and hypertension care','Coordination for complex medical conditions']],
    ['slug'=>'obstetrics-gynaecology','icon'=>'♡','title'=>'Obstetrics & Gynaecology','text'=>'Women’s health, maternity and gynaecological surgical care, excluding high-risk pregnancy under the NABH scope.','items'=>['Gynaecology consultation','Maternity care within the hospital scope','Evaluation of menstrual and pelvic problems','Gynaecological procedures and surgery']],
    ['slug'=>'orthopaedics','icon'=>'⚕','title'=>'Orthopaedics','text'=>'Fracture, trauma, joint and musculoskeletal care with operative and non-operative treatment.','items'=>['Fracture and trauma care','Joint and musculoskeletal assessment','Operative and non-operative management','Rehabilitation coordination']],
    ['slug'=>'burns-plastic-reconstructive-surgery','icon'=>'◇','title'=>'Burns, Plastic & Reconstructive Surgery','text'=>'Burn care, wound management, reconstructive surgery and plastic-surgery consultation.','items'=>['Acute burn assessment and wound care','Reconstructive procedures','Skin grafting and soft-tissue coverage','Plastic-surgery consultation']],
    ['slug'=>'neurosurgery','icon'=>'⌁','title'=>'Neurosurgery','text'=>'Specialist evaluation and surgical management for selected brain, spine and nerve conditions.','items'=>['Brain and spine consultation','Neurotrauma assessment','Selected neurosurgical procedures','Multidisciplinary inpatient coordination']],
    ['slug'=>'gastroenterology-endoscopy','icon'=>'◎','title'=>'Gastroenterology & Endoscopy','text'=>'Medical gastroenterology, endoscopy and coordinated gastrointestinal surgical care.','items'=>['Digestive-system consultation','Diagnostic endoscopy','Evaluation of liver and gastrointestinal conditions','Coordination with gastrointestinal surgery']],
    ['slug'=>'urology','icon'=>'◌','title'=>'Urology','text'=>'Evaluation and treatment of urinary, kidney-stone and male urological conditions.','items'=>['Kidney-stone evaluation','Urinary tract and bladder conditions','Endoscopic urological procedures','Male urological consultation']],
    ['slug'=>'dialysis-kidney-care','icon'=>'◫','title'=>'Dialysis & Kidney Care','text'=>'Dialysis support, nephrology coordination and vascular-access services including AV fistula care.','items'=>['Dialysis services','Kidney-care coordination','AV fistula creation and care','Inpatient monitoring and laboratory support']],
    ['slug'=>'pathology-laboratory-services','icon'=>'▦','title'=>'Pathology & Laboratory Services','text'=>'24×7×365 laboratory support covering clinical biochemistry, microbiology, serology, pathology, cytopathology, haematology and histopathology.','items'=>['Laboratory services available 24×7×365','Clinical pathology and haematology','Biochemistry, serology and microbiology','Cytopathology and histopathology']],
];

function find_service(string $slug): ?array {
    global $services;
    foreach ($services as $service) { if ($service['slug'] === $slug) { return $service; } }
    return null;
}

function find_doctor(string $slug): ?array {
    global $doctors;
    foreach ($doctors as $doctor) { if ($doctor['slug'] === $slug) { return $doctor; } }
    return null;
}

function doctors_for_service(string $slug): array {
    global $doctors;
    return array_values(array_filter($doctors, static fn(array $doctor): bool => $doctor['service_slug'] === $slug));
}

$faqs = [
    ['question'=>'How do PM-JAY and MJPJAY admissions work?','answer'=>'Bring the beneficiary card or scheme identification, Aadhaar and available medical records. The hospital scheme desk checks eligibility and the applicable package. Admission under a scheme remains subject to eligibility, documentation and authorization.'],
    ['question'=>'What should we do for an emergency admission?','answer'=>'Call the hospital while travelling if possible and come directly to the emergency area. The clinical team will assess and stabilize the patient first, then guide the family regarding admission, documents and payment or scheme formalities.'],
    ['question'=>'What are the hospital visiting hours?','answer'=>'Visiting arrangements can change according to the ward, ICU restrictions and the patient’s condition. Please call the hospital before visiting for the current timings.'],
    ['question'=>'How does insurance or cashless treatment work?','answer'=>'Contact the hospital with the patient’s policy or TPA details before planned admission whenever possible. Cashless treatment depends on policy coverage, network status, pre-authorization and insurer or TPA approval.'],
    ['question'=>'How can I confirm a doctor’s availability?','answer'=>'Consultant schedules may vary because of emergencies and procedures. Call or WhatsApp the hospital before travelling to confirm the consultation day and appointment time.'],
];

// Publish only consented, verifiable patient feedback. Add approved entries here.
$testimonials = [];
