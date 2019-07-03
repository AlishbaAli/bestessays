$(document).ready(function () {

    var reg = /_hpo/i;
    var cookieString = document.cookie;
    if (cookieString.search(reg) != -1) {
        $('#bann').addClass('hidden');
    }

    //Login form
    $(".login_opener").click(function () {
        $(".login_container").animate({top: "0px"}, {duration: "600"});
        $(".invisible_layer").css({"display": "block"});
    });

    var topPosLoginLayer = $(".login_container").css('top');

    $(".cancel").click(function () {
        $(".login_container").animate({top: topPosLoginLayer}, {duration: "600"});
        $(".invisible_layer").css({"display": "none"});
    });
    $(".invisible_layer").click(function () {
        $(".login_container").animate({top: topPosLoginLayer}, {duration: "600"});
        $(".invisible_layer").css({"display": "none"});
    });

    $(".ex_view").click(function () {
        var $btn = $(this),
            num = $(this).attr('data-num');
        if ($btn.hasClass('open')) {
            $btn.removeClass('open');
            $('.ex_description.open').slideUp('50').removeClass('open');
        } else {
            $('.ex_view').removeClass('open');
            $btn.addClass('open');
            $('.ex_description.open').removeClass('open').slideUp('50');
            $('#ex_description' + num).slideDown('50').addClass('open');
        }
    });


    $(".discount_option_bottom1").click(function () {
        if ($(this).hasClass("open")) {
            $(this).removeClass("open");
            $(".re_description_container").animate({"height": "0px"}, {duration: "600"});
            $(this).removeClass("open");
        } else {
            $(".fe_description").animate({bottom: "90px"}, {duration: "100"});
            $(this).addClass("open");
            $(".discount_option_description1").animate({bottom: "0px"}, {duration: "600"});
            $(".re_description_container").animate({"height": "80px"}, {duration: "600"});
        }
    });
    $(".discount_option_bottom2").click(function () {
        if ($(this).hasClass("open")) {
            $(this).removeClass("open");
            $(".re_description_container").animate({"height": "0px"}, {duration: "600"});
            $(this).removeClass("open");
        } else {
            $(".fe_description").animate({bottom: "90px"}, {duration: "100"});
            $(this).addClass("open");
            $(".discount_option_description2").animate({bottom: "0px"}, {duration: "600"});
            $(".re_description_container").animate({"height": "80px"}, {duration: "600"});
        }
    });
    $(".discount_option_bottom3").click(function () {
        if ($(this).hasClass("open")) {
            $(this).removeClass("open");
            $(".re_description_container").animate({"height": "0px"}, {duration: "600"});
            $(this).removeClass("open");
        } else {
            $(".fe_description").animate({bottom: "90px"}, {duration: "100"});
            $(this).addClass("open");
            $(".discount_option_description3").animate({bottom: "0px"}, {duration: "600"});
            $(".re_description_container").animate({"height": "80px"}, {duration: "600"});
        }
    });

    $('.mob_toggle').click(function () {
        $('.mob_nav').toggleClass('open');
    });

    //highlight active page in top menu
    var path = window.location.pathname;
    $('.mob_nav li a').each(function () {
        if ($(this).attr('href') == path || $(this).attr('href') + '/' == path)
            $(this).addClass('active');
    });

    /**** close  bunner*****/
    $('.banner_close').click(function () {
        $('#bann').fadeOut(300, function () {
            $('#bann').removeClass('show')
        });
    });


    if (navigator.userAgent.indexOf('IE', 10) != -1) {
        setTimeout(function () {
            $('#prices a.tooltip').each(function () {
                if ($(this).is('[rel]')) {
                    var str = $(this).attr('rel');
                    var parent = $(this).parent('td');
                    parent.addClass('exploer10');
                    $('<span class="ieTooltip" />').appendTo(parent);
                    $($(this).next('.ieTooltip')).html(str)
                } else {
                    $(this).parent('td').removeClass('exploer10')
                }
            })
        }, 0)
    }
    ;

    $('span.linear-select').addClass('select2Buttons');


    /***** vas mobile style *******/

    function insertDescription() {
        $('.col-lg-2').each(function (i) {

            for (var j = 0; j < $('.ex_description').length; j++) {
                var el
                if (i == j) {
                    if ($(window).width() < 1024) {
                        el = $('.ex_description')[j];
                        $(el).insertAfter($(this))
                    } else {
                        $('.ex_description').insertAfter($('.ex_main_part'))
                    }
                }
            }
            ;
        });
    };

    $(window).bind('load resize', function () {
        insertDescription();
    });


    /******** pop-up affiliate ***********/




    $('.cls, .shadow-popup').click(function (e) {
        $('.shadow-popup, .wrapper-hidden-block, .helpful-text, #txt_popap').fadeOut(400);
        $('.overlay').removeClass('show')
        $('body').removeClass('addBlur')
        return false
    });

    $('.send-to').click(function (e) {
        $('body').addClass('addBlur')
        $('.shadow-popup').fadeIn(400);
        // positionCenter($('.wrapper-hidden-block'), $('.customer_center_block'));
        $('#' + $(this).attr('rel')).fadeIn(400);
        return false
    });

    $('.helpful').click(function (e) {
        positionCenter($('.helpful-text'), $('.block-work-aff'));
        $('.helpful-text').addClass('show-help')
        $('.shadow-popup, .helpful-text').fadeIn(400);
        return false
    });

    $('.link_txt_popap').click(function (e) {
        $('#txt_popap').fadeIn(400);
        positionCenter($('#txt_popap'), $('.customer_center_block'));
        return false
    });


    function positionCenter(elem, windowObj) {
        var leftPos = ($(windowObj).width() - elem.outerWidth()) / 2;
        var topPos = ($(window).height() - elem.outerHeight()) / 2.2;
        elem.css({
            left: leftPos,
            top: topPos
        });
    };

    // $( window ).bind('resize load', function(){
    //         positionCenter($('.helpful-text'), $('.block-work-aff'));
    // });


    /************** identify varification *********/

    /********* upload files *******/

    function getName(str) {

        if (str.lastIndexOf('\\')) {
            var i = str.lastIndexOf('\\');
        } else {
            var i = str.lastIndexOf('/');
        }

        var filename = str.slice(i + 1);
        var uploaded = document.getElementById("fileformlabel");
        uploaded.innerHTML = '<p>' + filename + '</p>';
    }


    $('#userfile').change(function () {
        getName($(this).val())
    });

    /******get phone number********/

    function getTel() {
        var phoneCallBack = $('.phonenum #country-code').val() + $('.phonenum #phone').val();
        return $('#phoneCallBack').text(phoneCallBack)
    };
    $('.phonenum #phone').blur(function () {
        getTel();
    });


    function relForPopUp(callPopUp) {
        var send = false;
        callPopUp.click(function (e) {

            var that = $(this)
            $.ajax({
                type: 'POST',
                data: $('form[name="upload_form"]').serialize(),
                url: '/customer/identity.upload/',

                success: function () {


                    var linkRel = that.attr('rel');

                    $('.popUpBlock').each(function () {

                        var blockPopUpRel = $(this).attr('rel');

                        if (linkRel == blockPopUpRel && send == false) {
                            $('.overlay').fadeIn(400);
                            $(this).fadeIn(400);
                        }
                        $('.cls, .overlay').click(function (event) {
                            $('.overlay').fadeOut(400).remove();
                            $(this).fadeOut(400);
                            send = true;
                        });
                    });
                },

                complete: function (data) { // сoбытиe пoслe любoгo исхoдa
                    console.log('good')
                }


            });
            return false
            // })

            // if(send == true){
            //    return true
            // }else{
            //    return false
            // }

            if (e.target.tagName == 'A') {
                return false
            }

        });
    };

// relForPopUp($('.callPopUp'));

    /****** messages ***********/

    function tabMessages() {

        $('.tab-support-writers input:first').attr('checked', true);

        var radioButtons = $('.tab-support-writers input');

        var tabList = $('.tab-messages li');

        tabList.click(function () {

            tabList.removeClass('current')

            $(this).addClass('current');

            addCuurent()


        });

        function addCuurent() {

            if (tabList.eq(0).hasClass('current')) {

                $(".box_cat_id").hide(200);
                radioButtons.eq(0).attr('checked', true);

                $('.wrapper-messages > div').fadeOut(0).removeClass('current')
                $('div.writer-messs').fadeIn(300).addClass('current');


            } else {

                $(".box_cat_id").show(200);
                radioButtons.eq(1).attr('checked', true);

                $('.wrapper-messages > div').fadeOut(0).removeClass('current')
                $('div.support-messs').fadeIn(300).addClass('current');

            }

        }

        function sortMessages() {
            // $('.msg').prependTo('.writer-messs');
            var suppAnswer = $('.from_support');
            var questionForSupp = $('.toSupport').parents('.from_client');

            $('.msg').each(function () {

                suppAnswer.add(questionForSupp).addClass('block-for-support');

                console.log(suppAnswer)

                if ($(this).hasClass('block-for-support')) {
                    $(this).appendTo('.support-messs')
                } else {
                    $(this).appendTo('.writer-messs')
                }
            });
            // suppAnswer.add(questionForSupp).addClass('block-for-support').prependTo('.support-messs');
        };

        sortMessages();


        function countMess() {

            $('.wrapper-messages > div').each(function (i, el) {

                var count = $(el).find('.msg').length;

                if (count > 0) {
                    $('.msg-count').eq(i).addClass('active')
                }
                $('.msg-count').eq(i).html(count);
            })

        }

        countMess();


        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function getCookieRegExp(x) { // alternative method getCookie

            var name = x + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var str = "";

            if (decodedCookie.search(name) != -1) {
                str = decodedCookie.slice(name.length, decodedCookie.indexOf(';') - 1)
            }

            return str
        }

        function setCookieActiveTab() {

            if ($('.msg_field textarea').val() == '') return;

            var cookieVal = $('.wrapper-messages > div.current').attr('class').split(' ')[0];

            console.log(cookieVal)

            document.cookie = "activeMessage = " + cookieVal;

        }

        function getCookieActiveTab() {

            if (getCookie('activeMessage') == '') return;

            tabList.removeClass('current');

            var cookieClass = getCookie('activeMessage').slice(0, getCookie('activeMessage').length - 1)

            $('.tab-messages li.' + cookieClass).addClass('current');

            addCuurent()

        }

        $('.send-msg').bind('click', setCookieActiveTab);

        getCookieActiveTab();

    }

    if ($('.send-msg').length) {
        tabMessages();
    }

    /******* discounts page ***********/

    $('.discounts-bar .pointer').hover(function () {
        $('.discount-info-pages').stop(true, true).fadeIn(400);
    }, function () {
        $('.discount-info-pages').stop(true, true).fadeOut(400);
    });

    /********* orders table at customers ************/
    if ($('.number-of-messages').length) {
        $('.ac-mess').parents('.number-of-messages').addClass('active')
    }

    /****** Order details at customer*********/

    if ($('#additionalserv-wrap').length) {
        $(document).ajaxStop(function () {
            $('.additional-button-area').addClass('addActive');
        });

        $('.additional-button-area').live('click', function () {

            if ($(this).hasClass('addActive')) {
                $(this).removeClass('addActive');
                $(this).addClass('cancelActive');
            } else {
                $(this).removeClass('cancelActive');
                $(this).addClass('addActive');
            }

        });

        $('.stripe').click(function () {
            if ($(this).hasClass('expanded')) {
                $(this).find('.collapse span').text('collapse list')
            }
        })
    }

    /*** personal details ********/

    function slideTogglePassword() {
        $('.change-button').fadeOut(0);
        $('.wrap-change-pass').fadeIn(0);
        return false;
    }

    $('.change-button').bind('click', slideTogglePassword)


    $('#table_dont_change').click(function () {
        $('#profile_form .validation-error').remove();
        $('#new_password').val('');
        $('#password_confirm').val('');
        $('.wrap-change-pass').fadeOut(0);
        $('.change-button').fadeIn(0);
        return false;
    })


    if ($('#profile_form .wrap-change-pass .validation-error').length > 0) {
        slideTogglePassword()
    }

    /******* responsive *********/

    /********* mobile menu ***********/

    var canExe = ''

    function response() {

        if ($(window).width() > 1024) {                                  ///desktop

            $('.customer_left_block').insertBefore('.customer_center_block');

            $('.customer_left_block .button').prependTo('.customer_left_block').fadeIn();

            $('.login_container').appendTo('.login_layer .container');

            $('#login_email').attr('placeholder', '');

            $('#pass').attr('placeholder', '');

            // backVasPrice()

            canExe = 'desctop';
            return

        } else if ($(window).width() <= 1024) {  ///tablet

            $('.customer_left_block').appendTo('.logined').fadeIn();

            $('.customer_left_block .button').insertAfter('.designButtons').fadeIn();

            $('.login_container').insertAfter('.login_opener').fadeIn();

            $('#login_email').attr('placeholder', 'Your login (email)');

            $('#pass').attr('placeholder', '*******');

            // backVasPrice()

            canExe = 'tablet';

            if ($(window).width() <= 767) {                                 ///mobile

// advantages-block
//                            rebuildVasPrice();
                $(document).ajaxStop(function () {
                    rebuildVasPrice()
                })

                canExe = 'mobile';

                return
            }

        }

    }

// if($('.home-page').length){
    $(window).bind('load', response);

// }

    function setResize() {

        $(window).bind('resize', function () {

            if ($(window).width() > 1024 && canExe != 'desctop') {
                response();
            } else if ($(window).width() <= 1024 && canExe != 'tablet') {
                response();
                if ($(window).width() <= 767 && canExe != 'mobile') {
                    response();
                }
            }

        });
    };

// setResize();

    function isTouchDevise() {
        return 'ontouchstart' in window;
    }

    console.log(isTouchDevise())

    function rebuildVasPrice() {
        if ($('#additionalserv-wrap').length) {

            $('.vas_price').each(function () {
                var vasConteiner = $(this).parent('td').prev('td');
                var hint = $(this).parent('td').next('td').find('.field_hint');
                hint.appendTo(vasConteiner);
                $(this).appendTo(vasConteiner);


                if (isTouchDevise()) {

                    $('body').bind('touchstart', function (event) {
                        event = event.originalEvent;
                        var tgt = event.touches[0] && event.touches[0].target,
                            $tgt = $(tgt);

                        if (tgt.nodeName !== 'A' && !$tgt.closest('div.cluetip').length) {
                            $(document).trigger('hideCluetip');
                        }
                    });

                    $(".field_hint").live("click", function () {
                        $(this).cluetip({
                            activation: 'click'
                        })
                        return false;
                    });
                }
            })

        }
        ;
    }


// slice pagination for 3 numbers

    function pagination() {

        if (isTouchDevise()) {

            var counter,
                arr = [],
                elements = $('.pagination a');

            for (var i = 0; i < elements.length; i++) {

                if ($(elements[i]).attr('href') == '#') {
                    counter = i;

                    arr = [counter - 1, counter, counter + 1];

                    for (var j = 0; j < elements.length; j++) {
                        elements.eq(arr[j]).addClass('active-pagination');
                    }

                }

            }
        }

    }

    if ($('.mobile.paginat').length) {
        pagination();
    }
///////////////////

// function backVasPrice(){
//     if($('#additionalserv-wrap').length){
//         $(document).ajaxStop(function(){
//             $('.vas_price').each(function(){
//                 var vasConteiner = $(this).parent('td').next('td');
//                 var hint = $(this).next('.field_hint');
//                 $(this).appendTo(vasConteiner);
//                 hint.appendTo(vasConteiner);
//             })
//         });
//     };
// }

    function rebuildMobileCustomerOrders() {

        $('.orders-customer-table tr').each(function (i, element) {

            var arrTable = [];

            if ($(element).children('td').html() != null) {

                $(element).children('td').each(function (j, el) {

                    var childTR = $(el).html();

                    if (j == 0) {
                        arrTable.push('<div class="mob-cust-table-code">' + childTR + '</div>');
                    } else if (j == 3 || j == 4) {
                        arrTable.push('<div class="mob-cust-table-button">' + childTR + '</div>');
                    } else {
                        arrTable.push('<div class="mob-cust-table"><span></span>' + childTR + '</div>')
                    }
                });

                $('<div />', {
                    'class': 'mob-cust-table-block',
                    html: arrTable.join('')
                }).appendTo('.mobileTableOrders');

            }
            ;

        });

        $('.mob-cust-table-block').each(function () {
            $(this).children('.mob-cust-table-button').appendTo(this)
        });

        $('.mob-cust-table-block').find('.mob-cust-table-button:first').each(function () {
            if ($(this).children('.btn.orangeB').length == 0) {
                var status = $(this).html()
                $(this).prev().html('<div class="status">Status: </div> <div class="status-paid">' + status + '</div>')
            } else {
                $(this).prev().html('<div class="status">Status: </div> <div class="status-notpaid">Not paid</div>')
            }
        });
    }

//rebuildMobileCustomerOrders()


    $('.mobile-btn').click(function () {
        $('body, html').addClass('no-scroll');
        $('.hi_top_menu .container').addClass('show');

        if ($(this).hasClass('mobile-menu')) {
            $('.hi_top_menu .pull-right').css('display', 'none');
        } else {
            $('.hi_top_menu .pull-left-mobile').css('display', 'none');
        }

        $('.hi_top_menu .container').animate({}, 500, function () {
            $('.body_content-wrapper-customer, #body_content, footer, .mobile, .logo-block, .mobile-btn, .main-block-header').not('.title-login').addClass('blur')
        });
    });

    $('.mobile-close').click(function () {
        $('body, html').removeClass('no-scroll');
        $('.hi_top_menu .container').removeClass('show');
        $('.body_content-wrapper-customer, #body_content, footer, .mobile, .logo-block, .mobile-btn, .main-block-header').removeClass('blur');

        $('body, html').removeClass('no-scroll');
        $('.hi_top_menu .container').removeClass('show');

        $('.hi_top_menu .container').animate({}, 500, function () {
            if ($('.hi_top_menu .pull-right').is(':hidden')) {
                $('.hi_top_menu .pull-right').css('display', 'block');
            } else if ($('.hi_top_menu .pull-left-mobile').is(':hidden')) {
                $('.hi_top_menu .pull-left-mobile').css('display', 'block');
            }
            ;

        });
    });

    /******* discounts bar ***********/

    if ($('.discounts-bar').length) {

        var pages = parseFloat($('.discounts-bar .value .pointer span').text());

        var valueWidth = parseFloat($('.discounts-bar .value').css('width'));

        if (pages > 100) {
            pages = 100;
        }

        $('.discounts-bar .value').css('width', pages + '%')

        if (typeof pages !== 'number' || pages < 11) {
            $('.discounts-bar .value').addClass('leftNumber');
        }

    }

    function setVasLinks() {
        var items = document.querySelectorAll('.add_vas_link ');
        items.forEach(function (item, i) {
            var attrId = item.getAttribute('id');
            item.setAttribute('href', '/order/?' + attrId + '=true');
        });
    }

    if ($('.wrap-link').length) {
        setVasLinks()
    }

    function getVasLinks() {

        var reg = /vas_/i,
            href = window.location.search;

        if (!reg.test(href)) return

        var start = href.indexOf('?') + 1,
            end = href.lastIndexOf('='),
            vasString = href.slice(start, end),
            vasNumber = vasString.replace(/\D+/g, "");

        $('.wrapper-vas .vas_row').each(function () {
            $(this).find('#additional_' + vasNumber).attr('checked', true);
        })
    }

    getVasLinks();


});

/******* feedback  ***********/

function feedbackWindow() {

    if (!$('.latestOrderBlock').length) {
        return
    }

    if ($('.latestOrderBlock').length > 1) {
        $('.latestOrderWrap').addClass('bigHeight')
    }

    var bottoms = $('.latestOrderWrap').outerHeight() - 40;

    $('.latestOrderWrap').css({
        'bottom': -bottoms + 'px'
    });

    $('.latestOrderWrap').fadeIn(0)

    $('.feedbackPaneHeading').click(function () {
        $('.latestOrderWrap').toggleClass('open')
    });
}

setTimeout(function () {
    feedbackWindow()
}, 500);


/********** Send via email **********/
function emailSendPopUp() {

    var popUpWrap = '<div class="pop-up-wrap"><div class="cls-pop-up btn blueB small">Ok</div></div>';

    var shadowEl = '<div class="shadow-el"></div><div class="cls-pop-up cls-b">X</div>';

    var elPopUp = shadowEl + popUpWrap;

    var thisHref = "";

    var windowHref = window.location.pathname;

    var getNum = +windowHref.replace(/\D+/g, "");

    $('.icon.email').live('click', function () {

        thisHref = $(this).attr('href');

        if ($('.shadow-el').length < 1) {
            $(elPopUp).appendTo('body');
            $('.pop-up-wrap').prepend('<p>Papers for Order <span>' + getNum + '<span></p> <p>Letter with attachment was sent to your email</p>');
        }

        return false
    });

    $('.cls-pop-up, .shadow-el').live('click', function (e) {
        e.stopPropagation();
        $(elPopUp).remove();
        window.location = thisHref;

        $('.cls-pop-up, .shadow-el').addClass('disabled-click')

    });
}

if ($('.icon.email').length) {
    emailSendPopUp();
}


// news page

function isNewsPage() {

    var thisHrefNews = window.location.hostname,
        regExp = /news./i;

    if (thisHrefNews.search(regExp) != -1) {

        var newHref = thisHrefNews.replace(regExp, ""),
            http = '';

        window.location.href.search(/https/i) != -1 ? http = 'https://' : http = 'http://';

        $('header .pull-left-mobile a, a.logo, .main_menu a, footer .bottom_links a').each(function (i, el) {
            var menuHref = $(el).attr('href');
            $(el).attr('href', http + newHref + menuHref)
        });
    }
}

isNewsPage();

//////


/**
 * .select2Buttons - Convert standard html select into button like elements
 *
 * Version: 1.0.1
 * Updated: 2011-04-14
 *
 *  Provides an alternative look and feel for HTML select buttons, inspired by threadless.com
 *
 * Author: Sam Cavenagh (cavenaghweb@hotmail.com)
 * Doco and Source: https://github.com/o-sam-o/jquery.select2Buttons
 *
 * Licensed under the MIT
 **/
jQuery.fn.select2Buttons = function (options) {
    return this.each(function () {
        var $ = jQuery;
        var select = $(this);
        var multiselect = select.attr('multiple');
        select.hide();

        var buttonsHtml = $('<div class="select2Buttons"></div>');
        var selectIndex = 0;
        var addOptGroup = function (optGroup) {
            if (optGroup.attr('label')) {
                buttonsHtml.append('<strong>' + optGroup.attr('label') + '</strong>');
            }
            var ulHtml = $('<ul class="select-buttons">');
            optGroup.children('option').each(function () {
                var liHtml = $('<li></li>');
                if ($(this).attr('disabled') || select.attr('disabled')) {
                    liHtml.addClass('disabled');
                    liHtml.append('<span>' + $(this).html() + '</span>');
                } else {
                    liHtml.append('<a href="#" data-select-index="' + selectIndex + '">' + $(this).html() + '</a>');
                }

                // Mark current selection as "picked"
                if ((!options || !options.noDefault) && $(this).attr('selected')) {
                    liHtml.children('a, span').addClass('picked');
                }
                ulHtml.append(liHtml);
                selectIndex++;
            });
            buttonsHtml.append(ulHtml);
        }

        var optGroups = select.children('optgroup');
        if (optGroups.length == 0) {
            addOptGroup(select);
        } else {
            optGroups.each(function () {
                addOptGroup($(this));
            });
        }

        select.after(buttonsHtml);

        buttonsHtml.find('a').click(function (e) {
            e.preventDefault();
            var clickedOption = $(select.find('option')[$(this).attr('data-select-index')]);
            if (multiselect) {
                if (clickedOption.attr('selected')) {
                    $(this).removeClass('picked');
                    clickedOption.removeAttr('selected');
                } else {
                    $(this).addClass('picked');
                    clickedOption.attr('selected', 'selected');
                }
            } else {
                buttonsHtml.find('a, span').removeClass('picked');
                $(this).addClass('picked');
                clickedOption.attr('selected', 'selected');
            }
            select.trigger('change');
        });
    });
};


var banner = (function () {
    function removeClass(el, classNm) {
        var currClass = el.getAttribute('class');
        var classResult = currClass.replace(classNm, '');
        el.setAttribute('class', classResult);
    };

    function addClass(el, classNm) {
        el.setAttribute('class', el.className + ' ' + classNm);
    };

    function hasClass(el, classNm) {
        var currClass = el.getAttribute('class') || '';
        if (currClass.indexOf(classNm) != -1) {
            return true;
        } else {
            return false;
        }
    };

    function cookieExists(cookieName) {
        return (document.cookie.indexOf(cookieName) != -1) ? true : false;
    };

    function init(bannerUniqueID, buttonUniqueID, cookie) {
        var $banner = $(bannerUniqueID),
            $button = $(buttonUniqueID),
            $textAfter = $(buttonUniqueID + ' + h6');
        if (cookieExists(cookie) === true) {
            $button.add($banner).removeClass('firstTime');
            $banner.attr({
                href: '/order/',
                onclick: "_gaq.push(['_trackEvent', 'Button', 'discount_banner_old_customers_new_design', '']);"
            });
            $button.attr({
                href: '/order/',
                onclick: "_gaq.push(['_trackEvent', 'Button', 'top_button_old_customers_new_design', '']);"
            });
            $button.html('REQUEST PAPER NOW');
            $textAfter.hide();
        } else {
            $banner.addClass('firstTime');
            $banner.attr({
                href: '/order/?promo=begin15',
                onclick: "_gaq.push(['_trackEvent', 'Button', 'banner_15off_new_design', '']);"
            });
            $button.addClass('firstTime');
            $button.attr({
                href: '/order/?promo=begin15',
                onclick: "_gaq.push(['_trackEvent', 'Button', 'top_button_15off_new_design', '']);"
            });
            $button.html('Try service with <strong>15% discount*</strong>');
            $textAfter.show();
        }
    };
    return {
        check: init
    }
}());
banner.check('#dynamicBanner', '#dynamicLink', '_hpo');


