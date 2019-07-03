$(function(){
    var dataUrl = $("#url-page").val();
    var popupLayer = '.popup-layer', closeLink = '.popup-close', termsCheckbox ='.terms-conditions__text', termsError ='.terms-conditions__error', validateResult = false, validateTermsResult = false;
    var validate = function(el) {
        if($(el).val().indexOf('@')!=-1 && $(el).val().lastIndexOf('.')>$(el).val().indexOf('@') ) {
            $(popupLayer).find('.address-icon').removeClass('address-no-ok').addClass('address-ok');
            validateResult = true;
        } else if ( $(el).val() == "" ) {
            $(popupLayer).find('.address-icon').removeClass('address-no-ok').removeClass('address-ok');
            validateResult = false;
        }
        else {
            $(popupLayer).find('.address-icon').removeClass('address-ok').addClass('address-no-ok');
            validateResult = false;
            $('.address-icon').click(function() {
                if ( $(this).hasClass('address-no-ok') ) {
                    $('.popup-block input').val('');
                    validate(el);
                }
            });
        }
    };
    function validateTerms() {
        if ( $(termsCheckbox).hasClass('accepted') ) {
            validateTermsResult = true;
            $(termsError).hide();
        } else {
            validateTermsResult = false;
            $(termsError).show();
        }
    }
    $(termsCheckbox).unbind().click(function() {
        if ( $(termsCheckbox).hasClass('accepted') ) {
            $(termsCheckbox).removeClass('accepted');
            $(termsError).show();
            validateTermsResult = false;
        } else {
            $(termsCheckbox).addClass('accepted');
            $(termsError).hide();
            validateTermsResult = true;
        }
    });
    $(popupLayer).find('input').blur(function(){
        validate(this);
        validateTerms();
    });
    function addMail() {
        if (!validateResult) {
            $('.popup-block input, .address-icon').addClass('address-no-ok');
        }
        if (!validateTermsResult) {
            validateTerms();
        }
        if(validateResult && validateTermsResult) {
            validateTerms();
            $('.popup-form').hide();
            $('.popup-loader').show();
            add_contact($('.popup-input').val(),dataUrl);
            $('.popup-block input, .address-icon').addClass('address-ok');
            setTimeout(function() {
                $('.popup-layer').fadeOut(200, function() { $(this).remove(); });
                if (window.bioEp) window.bioEp.hidePopup();
            }, 5000);
        }
     }
    $(popupLayer).find('.popup-get-discount').click(function(){
        addMail();
    });
    $(popupLayer).find('.popup-submit__button').click(function(){
        addMail();
    });
    $('#discountForm').bind('submit', function() {
      addMail();
      return false;
    });
    $(closeLink).bind('click', function(){
        $(popupLayer).fadeOut(200);
        if (!_getCookie('email_sent')) _setEmailCookie();
        return false;
    });
    $('#orderLink').bind('click', function() {
      var href = $(this).attr('href');
      document.location.href = href;
    });
    setTimeout(function(){
        $(popupLayer).fadeIn(200);
    }, 25000 );



});

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

var email_id = $('#email');
email_id.bind('input', function() {
var email = $(this).val();
  validateEmail(email);
  isEmailRight = validateEmail(email);
  if (isEmailRight) {
     $(this).addClass('valid')
  }
  else {
    $(this).removeClass('valid')
  }
  });




function add_contact(email_id) {
    $.ajax({
        url: "/subscribe.getresponseadd/",
        type:'POST',
        dataType: "text",
        data: "email=" + email_id,
        success: function( data ){
            $('.popup-loader').hide();
            $('.popup-result').show();
        }
    });
}

function _setEmailCookie() {
  var date = new Date;
  date.setDate(date.getDate() + 30);
  document.cookie = 'email_sent=' + true + '; path=/; expires='  + date.toUTCString();
}

function _getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

// New functionality by using the Constructor
function Subscribe(config) {
    this.c = config;
    var self = this;
    var popupLayer = self.c.mainWrapClass;
    var validateResult = false;
    var validateTermsResult = false;

    function _init() {
        if ( !self.c.mainWrapClass ) throw 'Main template not defined. Parameter is required';
        if ( !self.c.outputErrorClass ) throw 'Need realized output email errors (address-no-ok, address-ok)';
        if ( !self.c.url ) throw 'Url not defined. Parameter is required';
        if ( !self.c.emailInput ) throw 'Email input not defined. Parameter is required';

        _setBindings();

        setTimeout(function(){
            $(popupLayer).fadeIn(200).find('input').focus();
            self.c.addHandlerOnInit();
        }, self.c.duration );
    }

    // ============================================================
    function _validate (el) {
        if($(el).val().indexOf('@')!=-1 && $(el).val().lastIndexOf('.')>$(el).val().indexOf('@') ) {
            $(popupLayer).find(self.c.outputErrorClass).removeClass('address-no-ok').addClass('address-ok');
            $(self.c.emailInput).removeClass('address-error');
            validateResult = true;
        } else if ( $(el).val() == "" ) {
            $(popupLayer).find(self.c.outputErrorClass).removeClass('address-no-ok').removeClass('address-ok');
            $(self.c.emailInput).removeClass('address-error');
            validateResult = false;
        }
        else {
            $(popupLayer).find(self.c.outputErrorClass).removeClass('address-ok').addClass('address-no-ok');
            $(self.c.emailInput).addClass('address-error');
            validateResult = false;
            $(self.c.outputErrorClass).click(function() {
                if ( $(this).hasClass('address-no-ok') ) {
                    $(self.c.emailInput).val('');
                    _validate(el);
                }
            });
        }
    }

    function _validateTerms() {
        if ( $(self.c.termsCheckbox).hasClass('accepted') ) {
            validateTermsResult = true;
            $(self.c.termsError).hide();
        } else {
            validateTermsResult = false;
            $(self.c.termsError).show();
        }
    }

    function _addMail() {
        if (!validateResult) {
            $(self.c.emailInput).addClass('address-error');
            $(self.c.outputErrorClass).addClass('address-no-ok');
        }
        if (!validateTermsResult) {
            _validateTerms();
        }
        if(validateResult && validateTermsResult) {
            _validateTerms();
            $(self.c.formClass).hide();
            $(self.c.loaderClass).show();
            _addContact( $(self.c.emailInput).val(), self.c.url );
            $(self.c.emailInput).removeClass('address-error');
            $(self.c.outputErrorClass).addClass('address-ok');
            setTimeout(function() {
               $(popupLayer).fadeOut(200, function() { $(this).remove(); });
               if (window.bioEp) window.bioEp.hidePopup();
                self.c.addHandlerOnClose();
            }, 5000);
        }
    }

    function _setBindings() {
        $(self.c.formName).bind('submit', function() {
            _addMail();
            return false;
        });

        $(self.c.emailInput).blur(function(){
            _validate(this);
        });
        $(self.c.emailInput).keypress(function(e){
            if (e.which == 13) return;
            _validate(this);
        });

        $(self.c.orderLinkName).bind('click', function() {
            var href = $(this).attr('href');
            document.location.href = href;
        });


        $(self.c.termsCheckbox).bind('click', function() {
            if ( $(self.c.termsCheckbox).hasClass('accepted') ) {
                $(self.c.termsCheckbox).removeClass('accepted');
                $(self.c.termsError).show();
                validateTermsResult = false;
            } else {
                $(self.c.termsCheckbox).addClass('accepted');
                $(self.c.termsError).hide();
                validateTermsResult = true;
            }
        });
    }




    function _addContact(email_id) {
        $.ajax({
            url: "/subscribe.getresponseadd/",
            type:'POST',
            dataType: "text",
            data: "email=" + email_id,
            success: function( data ){
                $(self.c.loaderClass).hide();
                $(self.c.successClass).show();
            }
        });
    }

    // ============================================================

    function _open() {
        try {
            _init()
        }
        catch (e) {
            console.log(e);
        }
    }

    function _close() {
        $(popupLayer).fadeOut(200);
        self.c.addHandlerOnClose();
        if (!_getCookie('email_sent')) _setEmailCookie();
        return false;
    }
    function _submit() {
        _addMail();
    }

    // ============================================================
    return {
        init: _open,
        close: _close,
        submit: _submit
    }
}