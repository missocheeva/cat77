(function($) {
    /* Validation Controls */
    $(function() {
        var hasError = false;
        var pushError = function (element, error) {
            hasError = true;
            var error_element = $("div.error[name='"+element.attr("name")+"']");
            if(error_element.length >= 1)
                error_element.html(error);
            else
                element.before("<div class='error' name='" + element.attr("name") +"'>" + error + "</div>");
        }
        var clearError = function(element) {
            hasError = false;
            $("div.error[name]").html("");
        }
        var isNumber = function(number) {
            return /^[+ \d]+$/.test(number);
        }
        var isEmail = function(email) {
            return /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(email);
        }
        var removeSpaces = function(string) {
            return string.split(' ').join('');
        }
        if($("#Form_ContactForm")) {
            $("#Form_ContactForm input[value='Submit']").click(function() {
                clearError();
                element = $("#Form_ContactForm input[name='Name']");
                if(element.val().length >= 70)  pushError(element, "Your name must be less than 70 characters");
                if(element.val().length == 0) pushError(element, "Your name is required");
                element = $("#Form_ContactForm input[name='Telephone']");
                if(!isNumber(element.val()) || removeSpaces(element.val()).length > 14 || element.val().length < 6) pushError(element, "Your phone number must only be made of numbers and between 6 and 14 digits")
                element = $("#Form_ContactForm input[name='Email']");
                if(!isEmail(element.val())) pushError(element, "Your email must be like something@something.com");
                element = $("#Form_ContactForm textarea[name='FurtherDetails']");
                if(element.val().length >= 1000) pushError("There is too much text in this section, please make less than 1000 characters");
                if(hasError)
                    return false;
                else
                    return true;
            });
        }
    });
})(jQuery);