const translations = {
    ar: {
        home: "الرئيسية",
        services: "خدمات موتري",
        price: "سعر الخدمة",
        SR: "ريال",
        warrntty: "الضمان",
        years: "سنوات",
        purchase: "طلب شراء الخدمة",
    },
    en: {
        home: "home",
        services: "motory services",
        price: "service fee",
        SR: "SR",
        warrntty: "warranty",
        years: "years",
        purchase: "service purchase request",
    },
};

document.addEventListener("DOMContentLoaded", function () {
    const langLinks = document.querySelectorAll("a[data-lang]");

    langLinks.forEach((link) => {
        link.addEventListener("click", function (event) {
            event.preventDefault();

            // to hiding the anchor link
            // langLinks.forEach((otherLink) => {
            //     otherLink.classList.remove('active');
            // });
            // link.classList.add('active');

            const language = link.getAttribute("data-lang");
            setLang(language);

            // Save the selected language in sessionStorage
            sessionStorage.setItem('selectedLanguage', language);

            // Set the text direction based on the selected language
            document.body.setAttribute('dir', (language === 'ar') ? 'rtl' : 'ltr');
        });
    });

    // Retrieve the selected language from sessionStorage on page load
    const savedLanguage = sessionStorage.getItem('selectedLanguage');

    // Set the active language link and text direction based on the saved language
    if (savedLanguage) {
        langLinks.forEach((link) => {
            if (link.getAttribute('data-lang') === savedLanguage) {
                // link.classList.add('active');
            }
        });

        // Set the language and text direction on page load
        setLang(savedLanguage);
        document.body.setAttribute('dir', (savedLanguage === 'ar') ? 'rtl' : 'ltr');
    }
});


