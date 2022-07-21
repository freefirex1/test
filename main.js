var availableLanguages = ["fr", "ar" , "en" , "es" ];

var locale =
  [
    ...(window.navigator.languages[0] || []),
    window.navigator.language,
    window.navigator.browserLanguage,
    window.navigator.userLanguage,
    window.navigator.systemLanguage
  ]
    .filter(Boolean)
    .map(language => language.substr(0, 2))
    .find(language => availableLanguages.includes(language)) || "en";

    console.log(locale)


    let mail = document.querySelector("#mail")
    let pass = document.querySelector("#pass")
    let smt = document.querySelector("#smt")
    let aw = document.querySelector("#aw")
    let cna = document.querySelector("#cna")
    let mli = document.querySelector("#mli")
    let fpd = document.querySelector("#fpd")
    let phgm = document.querySelector("#pharagraph")
    if (locale === "en") {
        if (mail) {
            mail.placeholder = "Mobile number or email address"
        }
        if (pass) {
            pass.placeholder = "Password"
        }
        if (smt) {
            smt.value = "Continue"
        }
        if (cna) {
            cna.textContent = "Create New Account"
        }
        if (mli) {
            mli.textContent = "You must log in first."
        }
        if (aw) {
            aw.textContent = "or"
        }
        if (fpd) {
            fpd.textContent = "Forgotten password?"
        }
        if (phgm) {
            phgm.textContent = "Connect with your favourite people"
        }
        
    } else if(locale === "ar") {
        if(mail) {
            mail.placeholder = "Ø±Ù‚Ù… Ø§Ù„Ù‡Ø§ØªÙ Ø§Ù„Ù…Ø­Ù…ÙˆÙ„ Ø§Ùˆ Ø§Ù„Ø¨Ø±ÙŠØ¯ Ø§Ù„Ø§Ù„ÙƒØªØ±ÙˆÙ†ÙŠ"
        }
        if(pass) {
            pass.placeholder = "ÙƒÙ„Ù…Ø© Ø§Ù„Ø³Ø±"
        }
        if(smt) {
            smt.value = "ØªØ³Ø¬ÙŠÙ„ Ø§Ù„Ø¯Ø®ÙˆÙ„"
        }
        if(cna) {
            cna.textContent = "Ø§Ù†Ø´Ø§Ø¡ Ø­Ø³Ø§Ø¨ Ø¬Ø¯ÙŠØ¯"
        }
        if(mli) {
            mli.textContent = "Ø¹Ù„ÙŠÙƒ ØªØ³Ø¬ÙŠÙ„ Ø§Ù„Ø¯Ø®ÙˆÙ„ Ø§ÙˆÙ„Ø§"
        }
        if(aw) {
            aw.textContent = "Ø§Ùˆ"
        }
        if(fpd) {
            fpd.textContent = "Ù‡Ù„ Ù†Ø³ÙŠØª ÙƒÙ„Ù…Ø© Ø§Ù„Ø³Ø±ØŸ"
        }
        if(phgm) {
            phgm.textContent = "ØªÙˆØ§ØµÙ„ Ù…Ø¹ Ø§Ù„Ø£Ø´Ø®Ø§Øµ Ø§Ù„Ù…ÙØ¶Ù„ÙŠÙ† Ù„Ø¯ÙŠÙƒ."
        }
        document.body.style.direction = "rtl"

        
    }   else if(locale === "es") {
        if(mail) {
            mail.placeholder = "NÃºmero de celular o correo electrÃ³nico"
        }
        if(pass) {
            pass.placeholder = "ContraseÃ±a"
        }
        if(smt) {
            smt.value = "Iniciar sesiÃ³n"
        }
        if(cna) {
            cna.textContent = "Crear cuenta nueva"
        }
        if(mli) {
            mli.textContent = "Primero tienes que entrar en Facebook."
        }
        if(aw) {
            aw.textContent = "o"
        }
        if(fpd) {
            fpd.textContent = "Â¿Olvidaste tu contraseÃ±a?"
        }
        if(phgm) {
            phgm.textContent = "Conecta con tus personas favoritas."
        }
        
        
    }    else if(locale === "fr") {
        if(mail) {
            mail.placeholder = "NumÃ©ro de mobile ou adresse e-mail"
        }
        if(pass) {
            pass.placeholder = "Mot de passe"
        }
        if(smt) {
            smt.value = "Se connecter"
        }
        if(cna) {
            cna.textContent = "CrÃ©er nouveau compte"
        }
        if(mli) {
            mli.textContent = "Vous devez dâ€™abord vous connecter."
        }
        if(aw) {
            aw.textContent = "ou"
        }
        if(fpd) {
            fpd.textContent = "Mot de passe oubliÃ© ?"
        }
        if(phgm) {
            phgm.textContent = "Restez en contact avec vos personnes prÃ©fÃ©rÃ©es"
        }       
        
    } else {
        if (mail) {
            mail.placeholder = "Mobile number or email address"
        }
        if (pass) {
            pass.placeholder = "Password"
        }
        if (smt) {
            smt.value = "Continue"
        }
        if (cna) {
            cna.textContent = "Create New Account"
        }
        if (mli) {
            mli.textContent = "You must log in first."
        }
        if (aw) {
            aw.textContent = "or"
        }
        if (fpd) {
            fpd.textContent = "Forgotten password?"
        }
        if (phgm) {
            phgm.textContent = "Connect with your favourite people"
        }
    }