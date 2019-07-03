OrderForm.languageStyle = {
    label : '',
    optionUS : 'US writer',
    optionUK : 'UK writer',
    optionUS_M : 'US writer',
    optionUK_M : 'UK writer',
    activeClass: 'langstyle-active',
    typeLink: true,
    delimiter: false,

    init : function()
    {
        var elm = $('.insplitBE219'),
            uk10 = $('#additional_204'),
            row_uk10 = $('#row_additional_204'),
            row_uk = $('#row_additional_142');

        if (elm.length > 0 || uk10.length > 0) {
            if (elm.length > 0) {
                OrderForm.languageStyle.field = $(elm[0]);
            } else {
                OrderForm.languageStyle.field = uk10;
                row_uk10.hide();
            }
            OrderForm.languageStyle.optionUK = 'I want a UK writer (+10% to the order total)';
        } else {
            OrderForm.languageStyle.field = $('#additional_142');
            row_uk.hide();
        }
    },

    customizeStyleSelect : function()
    {
        var usbutton, ukbutton;
        OrderForm.languageStyle.init();

        if($('#langstyle').length && OrderForm.languageStyle.field.length && !$('#uk_writer').length && !$('#us_writer').length)
        {
            $('#lstyle_options').html('');
            $('#row_langstyle').children('td:first').html(OrderForm.languageStyle.label+$('#row_langstyle').children('td:first').html());
            if(OrderForm.languageStyle.field.attr('type')=='checkbox')
            {
                if (!OrderForm.languageStyle.typeLink)
                {
                    usbutton = '<input type="radio" name="lstyle" id="us_writer" '+ (OrderForm.languageStyle.field.attr('checked') ? '' : 'checked="checked"' ) +'><label for="us_writer">' + OrderForm.languageStyle.optionUS + '</label>';
                    ukbutton = '<input type="radio" name="lstyle" id="uk_writer" '+ (OrderForm.languageStyle.field.attr('checked') ? 'checked="checked"' : '' ) +' /><label for="uk_writer">' + OrderForm.languageStyle.optionUK + '</label>';
                }
                else
                {
                    usbutton = '<a href="javascript:void(0)" id="us_writer" '+ (OrderForm.languageStyle.field.attr('checked') ? '' : 'class="'+OrderForm.languageStyle.activeClass+'"')+'> ' +  OrderForm.languageStyle.optionUS_M + ' </a>';
                    ukbutton = '<a href="javascript:void(0)" id="uk_writer" '+ (OrderForm.languageStyle.field.attr('checked') ? 'class="'+OrderForm.languageStyle.activeClass+'"' : '')+'> ' +  OrderForm.languageStyle.optionUK_M    + ' </a>';
                }

                radio_html = '<div id="lstyle_options">' + usbutton;
                radio_html_m = '<div id="lstyle_options">' + usbutton;
                if (OrderForm.languageStyle.typeLink && OrderForm.languageStyle.delimiter)
                {
                    radio_html += '&nbsp;/&nbsp';
                    radio_html_m += '&nbsp;/&nbsp';
                }
                radio_html += ukbutton + '</div>';
                if (!OrderForm.languageStyle.typeLink && OrderForm.languageStyle.delimiter)
                {
                    radio_html_m += '<br />';
                }
                radio_html_m += ukbutton + '</div>';
                if (OrderForm.languageStyle.typeLink && OrderForm.languageStyle.delimiter)
                {
                    radio_html_m += '<br/>(+10% to the order total for UK writer)';
                }


            } else {
                radio_html = radio_html_m = '<div id="lstyle_options">' + OrderForm.languageStyle.optionUK + '</div>';
            }


            if(!OrderForm.isPreview){
                if ($('#row_langstyle').children('td:nth-child(2)').length > 0)
                {
                    hidden_html = '<div style="display: none">'+ $('#row_langstyle .langstyle_content').html() +'</div>';
                }
                else if($('#row_langstyle').children('td:last').length > 0)
                {
                    hidden_html = '<div style="display: none">'+ $('#row_langstyle .langstyle_content').html() +'</div>';
                }
            }else{

                 if ($('#row_langstyle').children('td:nth-child(2)').length > 0)
                 {
                    hidden_html = '<input type="hidden" name="langstyle" id="langstyle" value="' + $('#langstyle').val() + '">';

                 }
                 else if($('#row_langstyle').children('td:last').length > 0)
                 {
                    hidden_html =  '<input type="hidden" name="langstyle" id="langstyle" value="' + $('#langstyle').val() + '">';
                 }

            }
            if(!OrderForm.isPreview) {
                hintHtml = document.querySelector('#row_langstyle .field__hint').outerHTML;
            }
            field_label = '<label class="field__label" for="langstyle">' + $('#row_langstyle label').html() + '</label>';

            (OrderForm.isPreview) ? OrderForm.languageStyle.stepPreview() : OrderForm.languageStyle.stepEdit() ;
//            OrderForm.languageStyle.stepEdit()
        }
    },
    setLabel : function(label_name)
    {
        if (label_name)
        {
            OrderForm.languageStyle.label = label_name;
        }
    },
    stepEdit : function()
    {
        if(OrderForm.languageStyle.field.attr('checked'))
        {
            $('#langstyle').children('[value=2]').attr('selected', true);
        }
        else
        {
            $('#langstyle').children('[value=1]').attr('selected', true);
        }
        if(!$('#row_langstyle').children('td:nth-child(2)').length)
        {
            $('#row_langstyle').children('td:nth-child(1)').html(field_label + hidden_html + radio_html_m + hintHtml);
        }else{
            $('#row_langstyle').children('td:nth-child(2)').html(field_label + hidden_html + radio_html);
        }
        OrderForm.languageStyle.bindEventsEdit();
        $('#row_langstyle .field_hint').cluetip(OrderForm.clueTipOpts);
    },

    stepPreview : function()
    {
        if( $('#value_additional_142').length || $('#value_additional_204').length )
        {
            radio_html = OrderForm.languageStyle.optionUK;
        }

        $('#row_langstyle').children('td:last').html(field_label + hidden_html + radio_html);
        OrderForm.languageStyle.bindEventsPreview();
    },

    bindEventsEdit : function()
    {

        $('#us_writer').bind('click', function(){
            $(this).addClass(OrderForm.languageStyle.activeClass);
            $('#uk_writer').removeClass(OrderForm.languageStyle.activeClass);
            $('#langstyle').children('[value=1]').attr('selected', true);
            $('#langstyle').children('[value=2]').removeAttr('selected');
            OrderForm.languageStyle.field.removeAttr('checked').change();
/*            if (OrderForm.languageStyle.typeLink){
                return false;
            }*/
        });

        $('#uk_writer').bind('click', function(){
            $(this).addClass(OrderForm.languageStyle.activeClass);
            $('#us_writer').removeClass(OrderForm.languageStyle.activeClass);
            $('#langstyle').children('[value=1]').removeAttr('selected');
            $('#langstyle').children('[value=2]').attr('selected', true);
            OrderForm.languageStyle.field.attr('checked', 'checked').change();
/*            if (OrderForm.languageStyle.typeLink){
                return false;
            }*/
        });
    },

    bindEventsPreview : function()
    {


        $('#us_writer').bind('click', function(){
            $(this).addClass(OrderForm.languageStyle.activeClass);
            $('#uk_writer').removeClass(OrderForm.languageStyle.activeClass);
            OrderForm.languageStyle.field.attr('checked', false);
            $('#langstyle').val('1');
            $('#value_langstyle').html('English (U.S.)');
            OrderForm.calculatePrice();
//            if (OrderForm.languageStyle.typeLink){
//                return false;
//            }
        });

        $('#uk_writer').bind('click', function(){
            $(this).addClass(OrderForm.languageStyle.activeClass);
            $('#us_writer').removeClass(OrderForm.languageStyle.activeClass);
            OrderForm.languageStyle.field.attr('checked', 'checked');
            $('#langstyle').val('2');
            $('#value_langstyle').html('English (U.K.)');
            OrderForm.calculatePrice();
//            if (OrderForm.languageStyle.typeLink){
//                return false;
//            }
        });
    }
};

OrderForm.afterSwitchForms.push(OrderForm.languageStyle.customizeStyleSelect);

$(document).ready(function(){
    OrderForm.languageStyle.customizeStyleSelect();
    if (OrderForm.BE && OrderForm.BE.ukWriter){
        OrderForm.BE.ukWriter.render();
    }
});
