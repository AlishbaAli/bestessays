/*
 * jQuery clueTip plugin
 * Version 1.0.6  (January 13, 2010)
 * @requires jQuery v1.3+
 *
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */
 
/*
 *
 * Full list of options/settings can be found at the bottom of this file and at http://plugins.learningjquery.com/cluetip/
 *
 * Examples can be found at http://plugins.learningjquery.com/cluetip/demo/
 *
*/
$( document ).ready(function() {
    $('#order_form').submit(function(){
        if($('#curr').length){
            $('#curr').removeAttr('disabled');
        }
    })
});

(function($){
    $.fn.bgIframe=$.fn.bgiframe=function(s){
        if($.browser.msie&&/6.0/.test(navigator.userAgent)){
            s=$.extend({
                top:'auto',
                left:'auto',
                width:'auto',
                height:'auto',
                opacity:true,
                src:'javascript:false;'
            },s||{});
            var prop=function(n){
                return n&&n.constructor==Number?n+'px':n;
            },html='<iframe class="bgiframe"frameborder="0"tabindex="-1"src="'+s.src+'"'+'style="border:none;display:block;position:absolute;z-index:-1;'+(s.opacity!==false?'filter:Alpha(Opacity=\'0\');':'')+'top:'+(s.top=='auto'?'expression(((parseInt(this.parentNode.currentStyle.borderTopWidth)||0)*-1)+\'px\')':prop(s.top))+';'+'left:'+(s.left=='auto'?'expression(((parseInt(this.parentNode.currentStyle.borderLeftWidth)||0)*-1)+\'px\')':prop(s.left))+';'+'width:'+(s.width=='auto'?'expression(this.parentNode.offsetWidth+\'px\')':prop(s.width))+';'+'height:'+(s.height=='auto'?'expression(this.parentNode.offsetHeight+\'px\')':prop(s.height))+';'+'"/>';
            return this.each(function(){
                if($('> iframe.bgiframe',this).length==0)this.insertBefore(document.createElement(html),this.firstChild);
            });
        }
        return this;
    };

})(jQuery);
(function($){
    $.cluetip={
        version:'1.0.6'
    };
    
    var $cluetip,$cluetipInner,$cluetipOuter,$cluetipTitle,$cluetipArrows,$cluetipWait,$dropShadow,imgCount;
    $.fn.cluetip=function(js,options){
        if(typeof js=='object'){
            options=js;
            js=null;
        }
        if(js=='destroy'){
            return this.removeData('thisInfo').unbind('.cluetip');
        }
        return this.each(function(index){
            var link=this,$this=$(this);
            var opts=$.extend(true,{},$.fn.cluetip.defaults,options||{},$.metadata?$this.metadata():$.meta?$this.data():{});
            var cluetipContents=false;
            var cluezIndex=+opts.cluezIndex;
            $this.data('thisInfo',{
                title:link.title,
                zIndex:cluezIndex
            });
            var isActive=false,closeOnDelay=0;
            if(!$('#cluetip').length){
                $(['<div id="cluetip">','<div id="cluetip-outer">','<h3 id="cluetip-title"></h3>','<div id="cluetip-inner"></div>','</div>','<div id="cluetip-extra"></div>','<div id="cluetip-arrows" class="cluetip-arrows"></div>','</div>'].join(''))
                [insertionType](insertionElement).hide();
                $cluetip=$('#cluetip').css({
                    position:'absolute'
                });
                $cluetipOuter=$('#cluetip-outer').css({
                    position:'relative',
                    zIndex:cluezIndex
                });
                $cluetipInner=$('#cluetip-inner');
                $cluetipTitle=$('#cluetip-title');
                $cluetipArrows=$('#cluetip-arrows');
                $cluetipWait=$('<div id="cluetip-waitimage"></div>').css({
                    position:'absolute'
                }).insertBefore($cluetip).hide();
            }
            var dropShadowSteps=(opts.dropShadow)?+opts.dropShadowSteps:0;
            if(!$dropShadow){
                $dropShadow=$([]);
                for(var i=0;i<dropShadowSteps;i++){
                    $dropShadow=$dropShadow.add($('<div></div>').css({
                        zIndex:cluezIndex-1,
                        opacity:.1,
                        top:1+i,
                        left:1+i
                    }));
                }
                $dropShadow.css({
                    position:'absolute',
                    backgroundColor:'#000'
                }).prependTo($cluetip);
            }
            var tipAttribute=$this.attr(opts.attribute),ctClass=opts.cluetipClass;
            if(!tipAttribute&&!opts.splitTitle&&!js){
                return true;
            }
            if(opts.local&&opts.localPrefix){
                tipAttribute=opts.localPrefix+tipAttribute;
            }
            if(opts.local&&opts.hideLocal){
                $(tipAttribute+':first').hide();
            }
            var tOffset=parseInt(opts.topOffset,10),lOffset=parseInt(opts.leftOffset,10);
            var tipHeight,wHeight,defHeight=isNaN(parseInt(opts.height,10))?'auto':(/\D/g).test(opts.height)?opts.height:opts.height+'px';
            var sTop,linkTop,posY,tipY,mouseY,baseline;
            var tipInnerWidth=parseInt(opts.width,10)||275,tipWidth=tipInnerWidth+(parseInt($cluetip.css('paddingLeft'),10)||0)+(parseInt($cluetip.css('paddingRight'),10)||0)+dropShadowSteps,linkWidth=this.offsetWidth,linkLeft,posX,tipX,mouseX,winWidth;
            var tipParts;
            var tipTitle=(opts.attribute!='title')?$this.attr(opts.titleAttribute):'';
            if(opts.splitTitle){
                if(tipTitle==undefined){
                    tipTitle='';
                }
                tipParts=tipTitle.split(opts.splitTitle);
                tipTitle=tipParts.shift();
            }
            if(opts.escapeTitle){
                tipTitle=tipTitle.replace(/&/g,'&amp;').replace(/>/g,'&gt;').replace(/</g,'&lt;');
            }
            var localContent;
            function returnFalse(){
                return false;
            }
            var activate=function(event){
                if(!opts.onActivate($this)){
                    return false;
                }
                isActive=true;
                $cluetip.removeClass().css({
                    width:tipInnerWidth
                });
                if(tipAttribute==$this.attr('href')){
                    $this.css('cursor',opts.cursor);
                }
                if(opts.hoverClass){
                    $this.addClass(opts.hoverClass);
                }
                linkTop=posY=$this.offset().top;
                linkLeft=$this.offset().left;
                mouseX=event.pageX;
                mouseY=event.pageY;
                if(link.tagName.toLowerCase()!='area'){
                    sTop=$(document).scrollTop();
                    winWidth=$(window).width();
                }
                if(opts.positionBy=='fixed'){
                    posX=linkWidth+linkLeft+lOffset;
                    $cluetip.css({
                        left:posX
                    });
                }else{
                    posX=(linkWidth>linkLeft&&linkLeft>tipWidth)||linkLeft+linkWidth+tipWidth+lOffset>winWidth?linkLeft-tipWidth-lOffset:linkWidth+linkLeft+lOffset;
                    if(link.tagName.toLowerCase()=='area'||opts.positionBy=='mouse'||linkWidth+tipWidth>winWidth){
                        if(mouseX+20+tipWidth>winWidth){
                            $cluetip.addClass(' cluetip-'+ctClass);
                            posX=(mouseX-tipWidth-lOffset)>=0?mouseX-tipWidth-lOffset-parseInt($cluetip.css('marginLeft'),10)+parseInt($cluetipInner.css('marginRight'),10):mouseX-(tipWidth/2);
                        }else{
                            posX=mouseX+lOffset;
                        }
                    }
                    var pY=posX<0?event.pageY+tOffset:event.pageY;
                    $cluetip.css({
                        left:(posX>0&&opts.positionBy!='bottomTop')?posX:(mouseX+(tipWidth/2)>winWidth)?winWidth/2-tipWidth/2:Math.max(mouseX-(tipWidth/2),0),
                        zIndex:$this.data('thisInfo').zIndex
                    });
                    $cluetipArrows.css({
                        zIndex:$this.data('thisInfo').zIndex+1
                    });
                }
                wHeight=$(window).height();
                if(js){
                    if(typeof js=='function'){
                        js=js.call(link);
                    }
                    $cluetipInner.html(js);
                    cluetipShow(pY);
                }
                else if(tipParts){
                    var tpl=tipParts.length;
                    $cluetipInner.html(tpl?tipParts[0]:'');
                    if(tpl>1){
                        for(var i=1;i<tpl;i++){
                            $cluetipInner.append('<div class="split-body">'+tipParts[i]+'</div>');
                        }
                    }
                    cluetipShow(pY);
                }
                else if(!opts.local&&tipAttribute.indexOf('#')!==0){
                    if(/\.(jpe?g|tiff?|gif|png)$/i.test(tipAttribute)){
                        $cluetipInner.html('<img src="'+tipAttribute+'" alt="'+tipTitle+'" />');
                        cluetipShow(pY);
                    }else if(cluetipContents&&opts.ajaxCache){
                        $cluetipInner.html(cluetipContents);
                        cluetipShow(pY);
                    }else{
                        var optionBeforeSend=opts.ajaxSettings.beforeSend,optionError=opts.ajaxSettings.error,optionSuccess=opts.ajaxSettings.success,optionComplete=opts.ajaxSettings.complete;
                        var ajaxSettings={
                            cache:false,
                            url:tipAttribute,
                            beforeSend:function(xhr){
                                if(optionBeforeSend){
                                    optionBeforeSend.call(link,xhr,$cluetip,$cluetipInner);
                                }
                                $cluetipOuter.children().empty();
                                if(opts.waitImage){
                                    $cluetipWait.css({
                                        top:mouseY+20,
                                        left:mouseX+20,
                                        zIndex:$this.data('thisInfo').zIndex-1
                                    }).show();
                                }
                            },
                            error:function(xhr,textStatus){
                                if(isActive){
                                    if(optionError){
                                        optionError.call(link,xhr,textStatus,$cluetip,$cluetipInner);
                                    }else{
                                        $cluetipInner.html('<i>sorry, the contents could not be loaded</i>');
                                    }
                                }
                            },
                            success:function(data,textStatus){
                                cluetipContents=opts.ajaxProcess.call(link,data);
                                if(isActive){
                                    if(optionSuccess){
                                        optionSuccess.call(link,data,textStatus,$cluetip,$cluetipInner);
                                    }
                                    $cluetipInner.html(cluetipContents);
                                }
                            },
                            complete:function(xhr,textStatus){
                                if(optionComplete){
                                    optionComplete.call(link,xhr,textStatus,$cluetip,$cluetipInner);
                                }
                                imgCount=$('#cluetip-inner img').length;
                                if(imgCount&&!$.browser.opera){
                                    $('#cluetip-inner img').bind('load error',function(){
                                        imgCount--;
                                        if(imgCount<1){
                                            $cluetipWait.hide();
                                            if(isActive){
                                                cluetipShow(pY);
                                            }
                                        }
                                    });
                                }else{
                                    $cluetipWait.hide();
                                    if(isActive){
                                        cluetipShow(pY);
                                    }
                                }
                            }
                        };

                        var ajaxMergedSettings=$.extend(true,{},opts.ajaxSettings,ajaxSettings);
                        $.ajax(ajaxMergedSettings);
                    }
                }else if(opts.local){
                    var $localContent=$(tipAttribute+(/#\S+$/.test(tipAttribute)?'':':eq('+index+')')).clone(true).show();
                    $cluetipInner.html($localContent);
                    cluetipShow(pY);
                }
            };

            var cluetipShow=function(bpY){
                $cluetip.addClass('cluetip-'+ctClass);
                if(opts.truncate){
                    var $truncloaded=$cluetipInner.text().slice(0,opts.truncate)+'...';
                    $cluetipInner.html($truncloaded);
                }
                function doNothing(){};
    
                tipTitle?$cluetipTitle.show().html(tipTitle):(opts.showTitle)?$cluetipTitle.show().html('&nbsp;'):$cluetipTitle.hide();
                if(opts.sticky){
                    var $closeLink=$('<div id="cluetip-close"><a href="#">'+opts.closeText+'</a></div>');
                    (opts.closePosition=='bottom')?$closeLink.appendTo($cluetipInner):(opts.closePosition=='title')?$closeLink.prependTo($cluetipTitle):$closeLink.prependTo($cluetipInner);
                    $closeLink.bind('click.cluetip',function(){
                        cluetipClose();
                        return false;
                    });
                    if(opts.mouseOutClose){
                        $cluetip.bind('click', function() {
                            cluetipClose();
                        });
                        $cluetip.bind('mouseleave.cluetip',function(){
                            cluetipClose();
                        });
                    }else{
                        $cluetip.unbind('mouseleave.cluetip');
                    }
                }
                var direction='';
                $cluetipOuter.css({
                    zIndex:$this.data('thisInfo').zIndex,
                    overflow:defHeight=='auto'?'visible':'auto',
                    height:defHeight
                });
                tipHeight=defHeight=='auto'?Math.max($cluetip.outerHeight(),$cluetip.height()):parseInt(defHeight,10);
                tipY=posY;
                baseline=sTop+wHeight;
                if(opts.positionBy=='fixed'){
                    tipY=posY-opts.dropShadowSteps+tOffset;
                }else if((posX<mouseX&&Math.max(posX,0)+tipWidth>mouseX)||opts.positionBy=='bottomTop'){
                    if(posY+tipHeight+tOffset>baseline&&mouseY-sTop>tipHeight+tOffset){
                        tipY=mouseY-tipHeight-tOffset;
                        direction='top';
                    }else{
                        tipY=mouseY+tOffset;
                        direction='bottom';
                    }
                }else if(posY+tipHeight+tOffset>baseline){
                    tipY=(tipHeight>=wHeight)?sTop:baseline-tipHeight-tOffset;
                }else if($this.css('display')=='block'||link.tagName.toLowerCase()=='area'||opts.positionBy=="mouse"){
                    tipY=bpY-tOffset;
                }else{
                    tipY=posY-opts.dropShadowSteps;
                }
                if(direction==''){
                    posX<linkLeft?direction='left':direction='right';
                }
                $cluetip.css({
                    top:tipY+'px'
                }).removeClass().addClass('clue-'+direction+'-'+ctClass).addClass(' cluetip-'+ctClass);
                if(opts.arrows){
                    var bgY=(posY-tipY-opts.dropShadowSteps);
                    $cluetipArrows.css({
                        top:(/(left|right)/.test(direction)&&posX>=0&&bgY>0)?bgY+'px':/(left|right)/.test(direction)?0:''
                    }).show();
                }else{
                    $cluetipArrows.hide();
                }
                $dropShadow.hide();
                $cluetip.hide()[opts.fx.open](opts.fx.openSpeed||0);
                if(opts.dropShadow){
                    $dropShadow.css({
                        height:tipHeight,
                        width:tipInnerWidth,
                        zIndex:$this.data('thisInfo').zIndex-1
                    }).show();
                }
                if($.fn.bgiframe){
                    $cluetip.bgiframe();
                }
                if(opts.delayedClose>0){
                    closeOnDelay=setTimeout(cluetipClose,opts.delayedClose);
                }
                opts.onShow.call(link,$cluetip,$cluetipInner);
            };

            var inactivate=function(event){
                isActive=false;
                $cluetipWait.hide();
                if(!opts.sticky||(/click|toggle/).test(opts.activation)){
                    cluetipClose();
                    clearTimeout(closeOnDelay);
                }
                if(opts.hoverClass){
                    $this.removeClass(opts.hoverClass);
                }
            };

            var cluetipClose=function(){
                $cluetipOuter.parent().hide().removeClass();
                opts.onHide.call(link,$cluetip,$cluetipInner);
                $this.removeClass('cluetip-clicked');
                if(tipTitle){
                    $this.attr(opts.titleAttribute,tipTitle);
                }
                $this.css('cursor','');
                if(opts.arrows){
                    $cluetipArrows.css({
                        top:''
                    });
                }
            };

            $(document).bind('hideCluetip',function(e){
                cluetipClose();
            });
            if((/click|toggle/).test(opts.activation)){
                $this.bind('click.cluetip',function(event){
                    if($cluetip.is(':hidden')||!$this.is('.cluetip-clicked')){
                        activate(event);
                        $('.cluetip-clicked').removeClass('cluetip-clicked');
                        $this.addClass('cluetip-clicked');
                    }else{
                        inactivate(event);
                    }
                    this.blur();
                    return false;
                });
            }else if(opts.activation=='focus'){
                $this.bind('focus.cluetip',function(event){
                    activate(event);
                });
                $this.bind('blur.cluetip',function(event){
                    inactivate(event);
                });
            }else{
                $this[opts.clickThrough?'unbind':'bind']('click',returnFalse);
                var mouseTracks=function(evt){
                    if(opts.tracking==true){
                        var trackX=posX-evt.pageX;
                        var trackY=tipY?tipY-evt.pageY:posY-evt.pageY;
                        $this.bind('mousemove.cluetip',function(evt){
                            $cluetip.css({
                                left:evt.pageX+trackX,
                                top:evt.pageY+trackY
                            });
                        });
                    }
                };
    
                if($.fn.hoverIntent&&opts.hoverIntent){
                    $this.hoverIntent({
                        sensitivity:opts.hoverIntent.sensitivity,
                        interval:opts.hoverIntent.interval,
                        over:function(event){
                            activate(event);
                            mouseTracks(event);
                        },
                        timeout:opts.hoverIntent.timeout,
                        out:function(event){
                            inactivate(event);
                            $this.unbind('mousemove.cluetip');
                        }
                    });
                }else{
                    $this.bind('mouseenter.cluetip',function(event){
                        activate(event);
                        mouseTracks(event);
                    }).bind('mouseleave.cluetip',function(event){
                        inactivate(event);
                        $this.unbind('mousemove.cluetip');
                    });
                }
                $this.bind('mouseover.cluetip',function(event){
                    $this.attr('title','');
                }).bind('mouseleave.cluetip',function(event){
                    $this.attr('title',$this.data('thisInfo').title);
                });
            }
        });
    };

    $.fn.cluetip.defaults={
        width:275,
        height:'auto',
        cluezIndex:97,
        positionBy:'auto',
        topOffset:15,
        leftOffset:15,
        local:false,
        localPrefix:null,
        hideLocal:true,
        attribute:'rel',
        titleAttribute:'title',
        splitTitle:'',
        escapeTitle:false,
        showTitle:true,
        cluetipClass:'default',
        hoverClass:'',
        waitImage:true,
        cursor:'help',
        arrows:false,
        dropShadow:true,
        dropShadowSteps:6,
        sticky:false,
        mouseOutClose:false,
        activation:'hover',
        clickThrough:false,
        tracking:false,
        delayedClose:0,
        closePosition:'top',
        closeText:'Close',
        truncate:0,
        fx:{
            open:'show',
            openSpeed:''
        },
        hoverIntent:{
            sensitivity:3,
            interval:50,
            timeout:0
        },
        onActivate:function(e){
            return true;
        },
        onShow:function(ct,ci){},
        onHide:function(ct,ci){},
        ajaxCache:true,
        ajaxProcess:function(data){
            data=data.replace(/<(script|style|title)[^<]+<\/(script|style|title)>/gm,'').replace(/<(link|meta)[^>]+>/g,'');
            return data;
        },
        ajaxSettings:{
            dataType:'html'
        },
        debug:false
    };

    var insertionType='appendTo',insertionElement='body';
    $.cluetip.setup=function(options){
        if(options&&options.insertionType&&(options.insertionType).match(/appendTo|prependTo|insertBefore|insertAfter/)){
            insertionType=options.insertionType;
        }
        if(options&&options.insertionElement){
            insertionElement=options.insertionElement;
        }
    };

})(jQuery);