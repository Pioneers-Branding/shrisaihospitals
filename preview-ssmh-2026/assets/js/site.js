const button = document.querySelector('.menu-button');
const menu = document.querySelector('#menu');
button?.addEventListener('click', () => {
  const open = button.getAttribute('aria-expanded') === 'true';
  button.setAttribute('aria-expanded', String(!open));
  menu.classList.toggle('open', !open);
});
menu?.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
  button?.setAttribute('aria-expanded', 'false');
  menu.classList.remove('open');
}));

const translations = {
  en: {navAbout:'About',navServices:'Services',navDoctors:'Doctors',navContact:'Contact',heroEyebrow:'Trusted multispeciality care in Bhandara',heroTitle:'Specialist care. Closer to home.',heroLead:'Surgical, medical, trauma, maternity and diagnostic services delivered by an experienced multidisciplinary team.',callNow:'Call now',whatsappAppointment:'WhatsApp appointment',schemeEyebrow:'Cashless government health schemes',schemeTitle:'PM-JAY and MJPJAY empanelled hospital',schemeText:'Eligible beneficiaries can access approved treatment packages under Ayushman Bharat PM-JAY and Mahatma Jyotirao Phule Jan Arogya Yojana, subject to scheme rules, documentation and authorization.',checkEligibility:'Check eligibility',servicesEyebrow:'Clinical services',servicesTitle:'Connected care across specialties',servicesIntro:'Our team coordinates assessment, diagnostics, procedures and follow-up so patients can receive more of their care locally.',viewSpeciality:'View speciality →',faqEyebrow:'Patient information',faqTitle:'Frequently asked questions',contactEyebrow:'Contact and appointments',contactTitle:'How can we help?',contactIntro:'For emergencies, please call directly. For appointments and general enquiries, contact us by phone, WhatsApp or the secure form.',phone:'Phone',address:'Address',name:'Name',service:'Service',message:'Message',sendEnquiry:'Send enquiry'},
  mr: {navAbout:'आमच्याविषयी',navServices:'वैद्यकीय सेवा',navDoctors:'डॉक्टर्स',navContact:'संपर्क',heroEyebrow:'भंडारा येथे विश्वासार्ह मल्टिस्पेशालिटी सेवा',heroTitle:'तज्ज्ञ उपचार. आता आपल्या जवळ.',heroLead:'अनुभवी बहुविशेषज्ञ टीमद्वारे शस्त्रक्रिया, वैद्यकीय, अपघात, प्रसूती आणि निदान सेवा.',callNow:'आता कॉल करा',whatsappAppointment:'WhatsApp वर अपॉइंटमेंट',schemeEyebrow:'कॅशलेस शासकीय आरोग्य योजना',schemeTitle:'PM-JAY आणि MJPJAY संलग्न रुग्णालय',schemeText:'पात्र लाभार्थ्यांना योजनेचे नियम, कागदपत्रे आणि मंजुरीनुसार आयुष्मान भारत PM-JAY व महात्मा ज्योतिराव फुले जन आरोग्य योजनेतील मंजूर उपचार पॅकेजेस मिळू शकतात.',checkEligibility:'पात्रता तपासा',servicesEyebrow:'वैद्यकीय सेवा',servicesTitle:'विविध तज्ज्ञ सेवा एकाच ठिकाणी',servicesIntro:'तपासणी, निदान, उपचार आणि फॉलो-अप यांचा समन्वय आमची टीम करते.',viewSpeciality:'सेवेची माहिती →',faqEyebrow:'रुग्णांसाठी माहिती',faqTitle:'वारंवार विचारले जाणारे प्रश्न',contactEyebrow:'संपर्क आणि अपॉइंटमेंट',contactTitle:'आम्ही कशी मदत करू?',contactIntro:'आपत्कालीन स्थितीत थेट कॉल करा. अपॉइंटमेंट व सामान्य चौकशीसाठी फोन, WhatsApp किंवा सुरक्षित फॉर्म वापरा.',phone:'फोन',address:'पत्ता',name:'नाव',service:'सेवा',message:'संदेश',sendEnquiry:'चौकशी पाठवा'},
  hi: {navAbout:'हमारे बारे में',navServices:'चिकित्सा सेवाएँ',navDoctors:'डॉक्टर',navContact:'संपर्क',heroEyebrow:'भंडारा में विश्वसनीय मल्टीस्पेशलिटी देखभाल',heroTitle:'विशेषज्ञ उपचार. अब आपके पास.',heroLead:'अनुभवी बहुविशेषज्ञ टीम द्वारा सर्जरी, चिकित्सा, ट्रॉमा, प्रसूति और निदान सेवाएँ.',callNow:'अभी कॉल करें',whatsappAppointment:'WhatsApp अपॉइंटमेंट',schemeEyebrow:'कैशलेस सरकारी स्वास्थ्य योजनाएँ',schemeTitle:'PM-JAY और MJPJAY सूचीबद्ध अस्पताल',schemeText:'पात्र लाभार्थी योजना के नियमों, दस्तावेजों और स्वीकृति के अधीन आयुष्मान भारत PM-JAY और महात्मा ज्योतिराव फुले जन आरोग्य योजना के स्वीकृत उपचार पैकेज प्राप्त कर सकते हैं.',checkEligibility:'पात्रता जाँचें',servicesEyebrow:'चिकित्सा सेवाएँ',servicesTitle:'कई विशेषज्ञ सेवाएँ एक ही स्थान पर',servicesIntro:'हमारी टीम जाँच, निदान, उपचार और फॉलो-अप का समन्वय करती है.',viewSpeciality:'सेवा देखें →',faqEyebrow:'रोगी जानकारी',faqTitle:'अक्सर पूछे जाने वाले प्रश्न',contactEyebrow:'संपर्क और अपॉइंटमेंट',contactTitle:'हम कैसे मदद कर सकते हैं?',contactIntro:'आपातकाल में सीधे कॉल करें. अपॉइंटमेंट और सामान्य पूछताछ के लिए फोन, WhatsApp या सुरक्षित फॉर्म का उपयोग करें.',phone:'फोन',address:'पता',name:'नाम',service:'सेवा',message:'संदेश',sendEnquiry:'पूछताछ भेजें'}
};

const serviceTranslations = {
  mr: {
    'emergency-trauma':['आपत्कालीन व ट्रॉमा','अपघात, दुखापत आणि शस्त्रक्रियात्मक आपत्कालीन स्थितीसाठी त्वरित तपासणी व समन्वित उपचार.'],
    'general-laparoscopic-surgery':['जनरल व लॅप्रोस्कोपिक सर्जरी','दुर्बिणीद्वारे व पारंपरिक शस्त्रक्रिया, पोटाचे आजार, स्तन, थायरॉईड आणि प्रॉक्टोलॉजी सेवा.'],
    'general-medicine':['जनरल मेडिसिन','प्रौढांच्या वैद्यकीय आजारांचे निदान व रुग्णालयीन उपचार.'],
    'obstetrics-gynaecology':['प्रसूती व स्त्रीरोग','महिलांचे आरोग्य, प्रसूती आणि स्त्रीरोग शस्त्रक्रिया सेवा.'],
    'orthopaedics':['अस्थिरोग','फ्रॅक्चर, ट्रॉमा, सांधे व स्नायू-अस्थी विकारांवरील उपचार.'],
    'burns-plastic-reconstructive-surgery':['बर्न्स, प्लास्टिक व रिकन्स्ट्रक्टिव्ह सर्जरी','भाजल्याच्या जखमा, जखम व्यवस्थापन व पुनर्रचनात्मक शस्त्रक्रिया.'],
    'neurosurgery':['न्यूरोसर्जरी','मेंदू, मणका आणि मज्जातंतू विकारांसाठी तज्ज्ञ तपासणी व निवडक शस्त्रक्रिया.'],
    'gastroenterology-endoscopy':['गॅस्ट्रोएन्टेरोलॉजी व एंडोस्कोपी','पचनसंस्थेचे आजार, एंडोस्कोपी आणि समन्वित शस्त्रक्रिया सेवा.'],
    'urology':['युरोलॉजी','मूत्रमार्ग, किडनी स्टोन, मूत्राशय आणि पुरुषांच्या युरोलॉजी समस्यांवरील उपचार.'],
    'dialysis-kidney-care':['डायलिसिस व किडनी केअर','डायलिसिस, किडनी उपचार समन्वय आणि AV फिस्टुला सेवा.'],
    'pathology-laboratory-services':['पॅथॉलॉजी व प्रयोगशाळा सेवा','बायोकेमिस्ट्री, मायक्रोबायोलॉजी, सेरोलॉजी, हेमॅटोलॉजी आणि हिस्टोपॅथॉलॉजी.']
  },
  hi: {
    'emergency-trauma':['आपातकालीन एवं ट्रॉमा','दुर्घटना, चोट और सर्जिकल आपातस्थिति के लिए त्वरित जाँच और समन्वित उपचार.'],
    'general-laparoscopic-surgery':['जनरल एवं लैप्रोस्कोपिक सर्जरी','दूरबीन और ओपन सर्जरी, पेट, स्तन, थायरॉइड और प्रॉक्टोलॉजी सेवाएँ.'],
    'general-medicine':['जनरल मेडिसिन','वयस्क चिकित्सा रोगों की जाँच और अस्पताल में उपचार.'],
    'obstetrics-gynaecology':['प्रसूति एवं स्त्रीरोग','महिला स्वास्थ्य, प्रसूति और स्त्रीरोग सर्जरी सेवाएँ.'],
    'orthopaedics':['अस्थिरोग','फ्रैक्चर, ट्रॉमा, जोड़ और मांसपेशी-अस्थि समस्याओं का उपचार.'],
    'burns-plastic-reconstructive-surgery':['बर्न्स, प्लास्टिक एवं रिकन्स्ट्रक्टिव सर्जरी','जलने की चोट, घाव प्रबंधन और पुनर्निर्माण सर्जरी.'],
    'neurosurgery':['न्यूरोसर्जरी','मस्तिष्क, रीढ़ और नसों की समस्याओं के लिए विशेषज्ञ जाँच और चुनिंदा सर्जरी.'],
    'gastroenterology-endoscopy':['गैस्ट्रोएंटरोलॉजी एवं एंडोस्कोपी','पाचन तंत्र के रोग, एंडोस्कोपी और समन्वित सर्जिकल देखभाल.'],
    'urology':['यूरोलॉजी','मूत्र मार्ग, किडनी स्टोन, मूत्राशय और पुरुष यूरोलॉजी समस्याओं का उपचार.'],
    'dialysis-kidney-care':['डायलिसिस एवं किडनी केयर','डायलिसिस, किडनी देखभाल समन्वय और AV फिस्टुला सेवाएँ.'],
    'pathology-laboratory-services':['पैथोलॉजी एवं प्रयोगशाला सेवाएँ','बायोकेमिस्ट्री, माइक्रोबायोलॉजी, सीरोलॉजी, हीमेटोलॉजी और हिस्टोपैथोलॉजी.']
  }
};

function setLanguage(lang) {
  if (!translations[lang]) lang = 'en';
  document.documentElement.lang = lang === 'mr' ? 'mr-IN' : lang === 'hi' ? 'hi-IN' : 'en-IN';
  document.querySelectorAll('[data-i18n]').forEach(el => { const value = translations[lang][el.dataset.i18n]; if (value) el.textContent = value; });
  document.querySelectorAll('[data-service-title]').forEach(el => { el.dataset.original ||= el.textContent; el.textContent = serviceTranslations[lang]?.[el.dataset.serviceTitle]?.[0] || el.dataset.original; });
  document.querySelectorAll('[data-service-text]').forEach(el => { el.dataset.original ||= el.textContent; el.textContent = serviceTranslations[lang]?.[el.dataset.serviceText]?.[1] || el.dataset.original; });
  document.querySelectorAll('[data-lang]').forEach(el => el.classList.toggle('active', el.dataset.lang === lang));
  localStorage.setItem('ssmh-language', lang);
}
document.querySelectorAll('[data-lang]').forEach(el => el.addEventListener('click', () => setLanguage(el.dataset.lang)));
setLanguage(localStorage.getItem('ssmh-language') || 'en');

const toast = document.querySelector('.toast');
if (toast) window.setTimeout(() => toast.classList.add('toast-hide'), 7000);
