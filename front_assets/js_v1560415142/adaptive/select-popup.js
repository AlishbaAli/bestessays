$(function() {
    var levels = ['standard', 'premium', 'platinum', 'advanced'],
        selectType = function(type) {
            $('#row_wrlevel .linear-select a:eq('+(parseInt(type)-1)+')').click();
            // $('.popup-trigger').html($('#wrlevel option:selected').text());
        },
        fetchLevelPrices = function() {
            var params = OrderForm.getSelectedParams(),
                $select = $('#wrlevel'),
                a, lev, id, value;
            for (a in levels) {
                lev = levels[a];
                for (b = 0; b < $select[0].length; b++) {
                    if ($select[0].options[b].innerHTML.toLowerCase().indexOf(lev) >= 0) {
                        id = parseInt($select[0].options[b].value);
                        params.wrlevel_id = id;
                        value = OrderForm.calcPriceForDoctype(params);
                        $('#select-level-cpp-' + lev).html(OrderForm.formatCurrency(value.cost_per_page, OrderForm.values.curr.value));
                        $('#select-level-total-' + lev).html(OrderForm.formatCurrency(value.total_with_discount, OrderForm.values.curr.value));
                        break;
                    }
                }
            }
        },
        initLevelSelect = function() {
            var admissions = [142,143,144,145],
                doctype = parseInt($('#doctype').val()),
                submit_button = $('#select-level-popup .submit').get($('#wrlevel option:selected').index());
            $('#select-level-popup .submit').removeClass('active');
            $(submit_button).addClass('active');
            $('#row_wrlevel').toggleClass('select-only', $.inArray(doctype, admissions) != -1);
            // $('.popup-trigger').html($('#wrlevel option:selected').text());
        },
        bindBlur = function() {
            $('.select_wrapper select').unbind('blur').bind('blur', function() {
                $(this).parent().find('.pointer').removeClass('focus');
            });
        },
        isOldIE = function() {
            return window.navigator.userAgent.indexOf("MSIE ") > 0
        };

    $('#select-level-popup .main tr td:nth-child(even), #select-level-popup .main tr th:nth-child(even)').addClass('gray');

    $('body').bind('click', function(e) {
        var trigger = 'popup-trigger',
            $popup = $('#select-level-popup');
        if(!e) e = window.event;
        var $target = e.target || e.srcElement;
        $target = $($target);

        if($target.hasClass('submit') && $target.closest('#select-level-popup').length) {
            e.preventDefault();
            selectType($target.data('num'));
            $('#select-level-popup .submit').removeClass('active');
            $target.addClass('active');

            ///////////////////
            $('.white-shadow-pop-up').fadeOut(300);
            setTimeout(function(){
                $('.white-shadow-pop-up').remove();
            },300)
            //////////////////

            $popup.hide();
            $('.popup-trigger').removeClass('active');
        } else if(($target.hasClass(trigger) && !$target.hasClass('active')) || $target.attr('id') == '#select-level-popup' || $target.closest('#select-level-popup').length) {
            ///////////////////
            $('.white-shadow-pop-up').remove();
            $('<div class="white-shadow-pop-up"/>').appendTo('#body_content').fadeIn(300);
            ///////////////////
            var top = $('.popup-trigger').offset().top + $('.popup-trigger').outerHeight();
            $popup.css('top', top).show();
            // $('.popup-trigger').addClass('active');
            fetchLevelPrices();
        }else if($target.hasClass('white-shadow')){
            return
        } else {
            ///////////////////
            $('.white-shadow-pop-up').fadeOut(300);
            setTimeout(function(){
                $('.white-shadow-pop-up').remove();
            },300)
            //////////////////
            $popup.hide();
            $('.popup-trigger').removeClass('active');
        }

    });

    
    //buttons, checkboxes, selects

    //don't style selects for older versions of IE
    if(isOldIE())
        $('body').addClass('ie');

    $('.select_wrapper select').live('focus', function() {
        $(this).parent().find('.pointer').addClass('focus');
    });

    $('.select_wrapper select').live('click', function() {
        $(this).focus().focus();
    });

    $('.select_wrapper .pointer').live('click', function() {
        $(this).parent().find('select').click();
    });

//    $('.button_add_container label').click(function() {
//        $(this).parent().find('input').attr('checked', true);
//    });


    $('.button_add, .btn_checkbox, .paypal_btn').live('click', function() {
        var $this = $(this);
        if(!$this.hasClass('checked') && !$this.hasClass('disabled')) {
            if($this.hasClass('paypal_btn')) {
                $('.paypal_btn').removeClass('checked');
                $('#paypal_enabled input').attr('checked', false);
            }
            $this.addClass('checked');
            $this.parent().find('input').attr('checked', true);
        } else if($this.hasClass('checked') && !$this.hasClass('paypal_btn')) {
            $this.removeClass('checked');
            $this.find('input').attr('checked', false);
        }
        $this.find('input').change();//important, trigger onchange event to recalc total price
    });

    //check input values on page load
    //and set the right classes for buttons
    var initButtons = function() {
        $.each($('.button_add, .btn_checkbox, .paypal_btn'), function() {
            var $this = $(this);
            $this.parent().find('input').is(':checked') ? $this.addClass('checked') : $this.removeClass('checked');
        });
    };

    //stylize deadline selectboxes
    var styleDeadline = function() {
        $('#extend_days, #extend_hours').wrap('<div class="input-wrapper input-wrapper_select"></div>')
    }

    if($('#row_input_deadline').length) {
        styleDeadline();
        OrderForm.afterSwitchForms.push(styleDeadline);
    }

    bindBlur();
    initButtons();
    initLevelSelect();

    OrderForm.afterSwitchForms.push(initButtons, bindBlur, initLevelSelect);

});