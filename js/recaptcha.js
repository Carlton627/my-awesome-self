grecaptcha.ready(function() {
    grecaptcha.execute('6Lfz1bkUAAAAAME2DWgclw4Oy34etTMCPzq7K2cZ', {action: 'homepage'}).then(function(token) {
        document.querySelector("#token").value = token
    });
});
