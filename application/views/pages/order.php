 <body class="order-page"> <div class="login_layer"> <div class="container"> <div class="login_container"> <div class="title-login mobile">Please,
 login</div> <form id="loginbox" method="post" action="#" class="login_form"> <div class="cancel"></div> <div class="input text"> <label><span>Login:</span> <br/> <input id="login_email" name="email" aria-label="login"> </label> </div> <div class="input text"> <label><span>Password:</span> <br/> </label> <input type="password" aria-label="password" id="pass" name="pass"> </div> <input name="remember_me" id="remember_me" type="checkbox" checked="checked"> <label for="remember_me" class="remember_me_label">Remember me</label> <div class="login_button"><a href="../forgot.html">Forgot password?</a> <button onclick='checkform(document.getElementById("loginbox"))' class="button" type="submit">Login</button> </div> </form> </div> </div> </div> <div id="body_content"> <div class="container main-content"> <div class="order_form_container"> <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>front_assets/styles_v1560415138/styles_order.css" /> <div class="block top_h_bg"> <link rel="stylesheet" href="<?php echo base_url() ?>front_assets/styles_v1560415138/adaptive/order-3-steps.css"> <script type="text/javascript" src="<?php echo base_url() ?>front_assets/ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <script type="text/javascript" src="<?php echo base_url() ?>front_assets/res_v1560415138/js/customer/order/jquery.cluetip.js"></script> <script type="text/javascript" src="<?php echo base_url() ?>front_assets/res_v1560415138/js/customer/order/jquery.hoverintent.js"></script> <script type="text/javascript" src="<?php echo base_url() ?>front_assets/res_v1560415138/js/jquery.cookie.js"></script> <script type="text/javascript" src="<?php echo base_url() ?>front_assets/js_v1560415138/order.js"></script> <script type="text/javascript" src="<?php echo base_url() ?>front_assets/js_v1560415138/adaptive/select-popup.js"></script> <script type="text/javascript"> OrderForm.doctype=0;
 OrderForm.hours=[ {
     "1": 168, "3": 120, "4": 96, "5": 72, "6": 48, "7": 24, "8": 12, "9": 6, "10": 3, "11": 240
 }
 
 ];
 OrderForm.prices=[ {
     "1": {
         "1": [23.99], "3": [24.99], "4": [25.99], "5": [27.99], "6": [30.99], "7": [34.99], "8": [39.99], "9": [45.99], "10": [52.99], "11": [22.99]
     }
     ,
     "2": {
         "1": [26.99], "3": [27.99], "4": [28.99], "5": [30.99], "6": [33.99], "7": [37.99], "8": [42.99], "9": [48.99], "10": [55.99], "11": [25.99]
     }
     ,
     "17": {
         "1": [11.99], "2": [4], "3": [13.99], "4": [15.99], "5": [17.99], "6": [22.99], "7": [29.99], "8": [31.99], "9": [33.99], "10": [36.99], "11": [10.99]
     }
     ,
     "18": {
         "1": [13.99], "2": [4], "3": [15.99], "4": [17.99], "5": [18.99], "6": [24.99], "7": [31.99], "8": [34.99], "9": [36.99], "10": [39.99], "11": [12.99]
     }
     ,
     "19": {
         "1": [14.99], "3": [16.99], "4": [18.99], "5": [20.99], "6": [25.99], "7": [32.99], "8": [35.99], "9": [37.99], "10": [40.99], "11": [13.99]
     }
     ,
     "20": {
         "1": [15.99], "3": [17.99], "4": [19.99], "5": [21.99], "6": [26.99], "7": [33.99], "8": [36.99], "9": [38.99], "10": [41.99], "11": [14.99]
     }
     ,
     "21": {
         "1": [16.99], "3": [18.99], "4": [20.99], "5": [22.99], "6": [27.99], "7": [34.99], "8": [37.99], "9": [39.99], "10": [42.99], "11": [15.99]
     }
     ,
     "22": {
         "1": [17.99], "3": [19.99], "4": [21.99], "5": [23.99], "6": [28.99], "7": [35.99], "8": [38.99], "9": [40.99], "10": [43.99], "11": [16.99]
     }
     ,
     "27": {
         "1": [30.99], "3": [31.99], "4": [32.99], "5": [34.99], "6": [37.99], "7": [41.99], "8": [46.99], "9": [52.99], "10": [59.99], "11": [29.99]
     }
 }
 
 ];
 OrderForm.free_vas=[];
 OrderForm.admin_free_vas=[];
 OrderForm.fieldDoctypes= {
     "215": null, "10": null, "11": null, "13": null, "137": null, "12": null, "34": null, "135": null, "88": null, "15": null, "69": null, "27": null, "143": null, "18": null, "19": null, "20": null, "21": null, "250": null, "251": null, "130": null, "87": null, "8": null, "9": null
 }
 
 ;
 OrderForm.limits=[ {
     "1": {
         "5": "40", "6": "19", "7": "12", "8": "8", "9": "4", "10": "3", "1": "200"
     }
     ,
     "2": {
         "5": "40", "6": "19", "7": "12", "8": "8", "9": "4", "10": "3", "1": "200"
     }
     ,
     "27": {
         "5": "40", "6": "19", "7": "12", "8": "8", "9": "4", "10": "3", "1": "200"
     }
 }
 
 ];
 OrderForm.price_groups=[ []];
 OrderForm.currencyRates= {
     "AUD": {
         "AUD": 1, "CAD": 0.92102, "EUR": 0.61236, "GBP": 0.5446, "USD": 0.6902
     }
     ,
     "CAD": {
         "AUD": 1.08576, "CAD": 1, "EUR": 0.66488, "GBP": 0.5913, "USD": 0.74939
     }
     ,
     "EUR": {
         "AUD": 1.63302, "CAD": 1.50404, "EUR": 1, "GBP": 0.88935, "USD": 1.12712
     }
     ,
     "GBP": {
         "AUD": 1.83621, "CAD": 1.69118, "EUR": 1.12442, "GBP": 1, "USD": 1.26736
     }
     ,
     "USD": {
         "AUD": 1.44885, "CAD": 1.33442, "EUR": 0.88722, "GBP": 0.78904, "USD": 1
     }
 }
 
 ;
 /******************************************************************/
 
 OrderForm.discountCodeCoefficient=0;
 OrderForm.discountCodeType=0;
 OrderForm.showOriginalPrice=0;
 /******************************************************************/
 
 OrderForm.secondStepImage="";
 OrderForm.validateAction='/order.validate';
 OrderForm.isPreview=false;
 OrderForm.isResubmit=false;
 OrderForm.isEdit=0;
 OrderForm.isCalculator=false;
 OrderForm.orderCode='';
 OrderForm.isQuote=false;
 OrderForm.isResumes=false;
 OrderForm.isPaypal=false;
 OrderForm.nonWordsProducts= {
     "124": 124, "139": 139, "215": 215, "182": 182, "125": 125, "126": 126, "222": 222, "51": 51, "234": 234, "235": 235, "260": 260, "261": 261, "262": 262, "315": 315, "319": 319, "318": 318, "317": 317, "359": 359
 }
 
 ;
 OrderForm.featurePrices=new Array();
 OrderForm.featureDiscountable=new Array();
 OrderForm.coverLetterId=50;
 OrderForm.withCoverLetterIds= {
     "34": 34, "50": 50, "133": 133, "137": 137, "138": 138, "331": 331, "335": 335
 }
 
 ;
 OrderForm.values.o_interval= {
     value: '0'
 }
 
 ;
 OrderForm.admin_free_vas= {}
 
 ;
 OrderForm.calculateVasDiscount=function(vasId, vasLegacyId, price) {
     if ($('#additional_' + vasId + '_price').length && $('#additional_' + vasId + '_free_discounts').length) {
         $('#additional_' + vasId + '_free_discounts').hide();
     }
     if ($('#' + vasId + '_free_price').length) {
         $('#' + vasId + '_free_price').hide();
         $('#row_additional_' + vasId).removeClass('vas_row--free');
     }
     return price;
 }
 
 ;
 OrderForm.featurePrices[153]=function(vasId, count) {
     var price=( function(vasId, count) {
         var numpages=Math.max(OrderForm.values.numpages && OrderForm.values.numpages.value ? OrderForm.values.numpages.value: 1, 1);
         if ( document.getElementById('additional_131') !==null && document.getElementById('additional_131').checked===true) {
             numpages++;
         }
         else if ( document.getElementById('additional_131') !==null && document.getElementById('additional_131').type=='hidden') {
             numpages++;
         }
         return numpages * 11;
     }
     )(vasId, count);
     price=(function(vasId, vasLegacyId, price) {
         return OrderForm.calculateVasDiscount(vasId, vasLegacyId, price);
     }
     )(vasId, 185, price);
     return price;
 }
 
 ;
 OrderForm.featureDiscountable[153]=false;
 OrderForm.fieldDoctypes[153]=185;
 OrderForm.featurePrices[147]=function(vasId, count) {
     var price=( function(vasId, count) {
         return 9.99;
     }
     )(vasId, count);
     price=(function(vasId, vasLegacyId, price) {
         return OrderForm.calculateVasDiscount(vasId, vasLegacyId, price);
     }
     )(vasId, 183, price);
     return price;
 }
 
 ;
 OrderForm.featureDiscountable[147]=false;
 OrderForm.fieldDoctypes[147]=183;
 OrderForm.featurePrices[152]=function(vasId, count) {
     var price=(function(vasId, count) {
         var currency_rate=OrderForm.currencyRates[OrderForm.values.curr.value].USD, numpages=Math.max(OrderForm.values.numpages && OrderForm.values.numpages.value ? OrderForm.values.numpages.value: 1, 1), numpapers=Math.max(OrderForm.values.numpapers && OrderForm.values.numpapers.value ? OrderForm.values.numpapers.value: 1, 1);
         // admin checked on admin form
         var additional_by_admin_free_checked=( document.getElementById('additional_by_admin_free_131') !==null && document.getElementById('additional_by_admin_free_131').checked===true);
         // client has free vas checked by admin
         var additional_by_admin_free_checked_on_client=( document.getElementById('additional_by_admin_free_131')===null && '');
         // checked vas on order form
         var additional_checked=( document.getElementById('additional_131') !==null && document.getElementById('additional_131').checked===true);
         // checked vas on order preview/resubmit
         var additional_hidden=( document.getElementById('additional_131') !==null && document.getElementById('additional_131').type=='hidden');
         if (!(additional_by_admin_free_checked || additional_by_admin_free_checked_on_client) && (additional_checked || additional_hidden)) {
             numpages++;
         }
         return OrderForm.cost_per_page * numpages * numpapers * currency_rate * 25 / 100;
     }
     )(vasId, count);
     price=(function(vasId, vasLegacyId, price) {
         return OrderForm.calculateVasDiscount(vasId, vasLegacyId, price);
     }
     )(vasId, 187, price);
     return price;
 }
 
 ;
 OrderForm.featureDiscountable[152]=false;
 OrderForm.fieldDoctypes[152]=187;
 OrderForm.featurePrices[151]=function(vasId, count) {
     var price=( function(vasId, count) {
         var price=0;
         if (OrderForm.featurePrices[152] && OrderForm.featurePrices[153] && OrderForm.featurePrices[147]) {
             price=OrderForm.featurePrices[152]() + OrderForm.featurePrices[153]() + OrderForm.featurePrices[147]();
             price=price * 60 / 100;
         }
         return price;
     }
     )(vasId, count);
     price=(function(vasId, vasLegacyId, price) {
         return OrderForm.calculateVasDiscount(vasId, vasLegacyId, price);
     }
     )(vasId, 237, price);
     return price;
 }
 
 ;
 OrderForm.featureDiscountable[151]=false;
 OrderForm.fieldDoctypes[151]=237;
 OrderForm.featurePrices[131]=function(vasId, count) {
     var price=( function(vasId, count) {
         var currencyRate=OrderForm.currencyRates[OrderForm.values.curr.value].USD;
         return OrderForm.cost_per_page * currencyRate;
     }
     )(vasId, count);
     price=(function(vasId, vasLegacyId, price) {
         return OrderForm.calculateVasDiscount(vasId, vasLegacyId, price);
     }
     )(vasId, 188, price);
     return price;
 }
 
 ;
 OrderForm.featureDiscountable[131]=false;
 OrderForm.fieldDoctypes[131]=188;
 OrderForm.featurePrices[164]=function(vasId, count) {
     var price=(function(vasId, count) {
         var currency_rate=OrderForm.currencyRates[OrderForm.values.curr.value].USD, numpages=Math.max(OrderForm.values.numpages && OrderForm.values.numpages.value ? OrderForm.values.numpages.value: 1, 1), numpapers=Math.max(OrderForm.values.numpapers && OrderForm.values.numpapers.value ? OrderForm.values.numpapers.value: 1, 1);
         // admin checked on admin form
         var additional_by_admin_free_checked=( document.getElementById('additional_by_admin_free_131') !==null && document.getElementById('additional_by_admin_free_131').checked===true);
         // client has free vas checked by admin
         var additional_by_admin_free_checked_on_client=( document.getElementById('additional_by_admin_free_131')===null && '');
         // checked vas on order form
         var additional_checked=( document.getElementById('additional_131') !==null && document.getElementById('additional_131').checked===true);
         // checked vas on order preview/resubmit
         var additional_hidden=( document.getElementById('additional_131') !==null && document.getElementById('additional_131').type=='hidden');
         if (!(additional_by_admin_free_checked || additional_by_admin_free_checked_on_client) && (additional_checked || additional_hidden)) {
             numpages++;
         }
         return OrderForm.cost_per_page * numpages * numpapers * currency_rate * 10 / 100;
     }
     )(vasId, count);
     price=(function(vasId, vasLegacyId, price) {
         return OrderForm.calculateVasDiscount(vasId, vasLegacyId, price);
     }
     )(vasId, 239, price);
     return price;
 }
 
 ;
 OrderForm.featureDiscountable[164]=false;
 OrderForm.fieldDoctypes[164]=239;
 OrderForm.featurePrices[204]=function(vasId, count) {
     var price=(function(vasId, count) {
         var currency_rate=OrderForm.currencyRates[OrderForm.values.curr.value].USD, numpages=Math.max(OrderForm.values.numpages && OrderForm.values.numpages.value ? OrderForm.values.numpages.value: 1, 1), numpapers=Math.max(OrderForm.values.numpapers && OrderForm.values.numpapers.value ? OrderForm.values.numpapers.value: 1, 1);
         // admin checked on admin form
         var additional_by_admin_free_checked=( document.getElementById('additional_by_admin_free_131') !==null && document.getElementById('additional_by_admin_free_131').checked===true);
         // client has free vas checked by admin
         var additional_by_admin_free_checked_on_client=( document.getElementById('additional_by_admin_free_131')===null && '');
         // checked vas on order form
         var additional_checked=( document.getElementById('additional_131') !==null && document.getElementById('additional_131').checked===true);
         // checked vas on order preview/resubmit
         var additional_hidden=( document.getElementById('additional_131') !==null && document.getElementById('additional_131').type=='hidden');
         if (!(additional_by_admin_free_checked || additional_by_admin_free_checked_on_client) && (additional_checked || additional_hidden)) {
             numpages++;
         }
         return OrderForm.cost_per_page * numpages * numpapers * currency_rate * 10 / 100;
     }
     )(vasId, count);
     price=(function(vasId, vasLegacyId, price) {
         return OrderForm.calculateVasDiscount(vasId, vasLegacyId, price);
     }
     )(vasId, 224, price);
     return price;
 }
 
 ;
 OrderForm.featureDiscountable[204]=false;
 OrderForm.fieldDoctypes[204]=224;
 OrderForm.featurePrices[167]=function(vasId, count) {
     var price=(function(vasId, count) {
         var currency_rate=OrderForm.currencyRates[OrderForm.values.curr.value].USD, numpages=Math.max(OrderForm.values.numpages && OrderForm.values.numpages.value ? OrderForm.values.numpages.value: 1, 1), numpapers=Math.max(OrderForm.values.numpapers && OrderForm.values.numpapers.value ? OrderForm.values.numpapers.value: 1, 1);
         // admin checked on admin form
         var additional_by_admin_free_checked=( document.getElementById('additional_by_admin_free_131') !==null && document.getElementById('additional_by_admin_free_131').checked===true);
         // client has free vas checked by admin
         var additional_by_admin_free_checked_on_client=( document.getElementById('additional_by_admin_free_131')===null && '');
         // checked vas on order form
         var additional_checked=( document.getElementById('additional_131') !==null && document.getElementById('additional_131').checked===true);
         // checked vas on order preview/resubmit
         var additional_hidden=( document.getElementById('additional_131') !==null && document.getElementById('additional_131').type=='hidden');
         if (!(additional_by_admin_free_checked || additional_by_admin_free_checked_on_client) && (additional_checked || additional_hidden)) {
             numpages++;
         }
         return OrderForm.cost_per_page * numpages * numpapers * currency_rate * 10.02 / 100;
     }
     )(vasId, count);
     price=(function(vasId, vasLegacyId, price) {
         return OrderForm.calculateVasDiscount(vasId, vasLegacyId, price);
     }
     )(vasId, 241, price);
     return price;
 }
 
 ;
 OrderForm.featureDiscountable[167]=false;
 OrderForm.fieldDoctypes[167]=241;
 OrderForm.featurePrices[303]=function(vasId, count) {
     var price=(function(vasId, count) {
         const POWER_POINT_PRESENTATION=51;
         var prices= {
             "1": {
                 "27": 26.99, "28": 29.99, "29": 34.99
             }
             , "2": {
                 "27": 23.99, "28": 26.99, "29": 31.99
             }
             , "3": {
                 "27": 20.99, "28": 23.99, "29": 28.99
             }
             , "9": {
                 "27": 30.99, "28": 33.99, "29": 38.99
             }
             , "13": {
                 "27": 34.99, "28": 37.99, "29": 42.99
             }
             , "4": {
                 "27": 18.99, "28": 21.99, "29": 26.99
             }
             , "5": {
                 "27": 17.99, "28": 20.99, "29": 25.99
             }
             , "11": {
                 "27": 16.99, "28": 19.99, "29": 24.99
             }
         }
         , writerLevelCodes= {
             "0": {
                 "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "1": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "3": {
                 "1": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "3": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "4": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "5": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "6": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "7": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "8": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "9": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "10": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "11": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
             }
             , "13": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "14": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "15": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "37": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "38": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "39": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "40": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "51": {
                 "1": {
                     "27": "standard", "28": "premium", "29": "specialized"
                 }
                 , "2": {
                     "27": "standard", "28": "premium", "29": "specialized"
                 }
                 , "3": {
                     "27": "standard", "28": "premium", "29": "specialized"
                 }
                 , "9": {
                     "27": "standard", "28": "premium", "29": "specialized"
                 }
                 , "13": {
                     "27": "standard", "28": "premium", "29": "specialized"
                 }
                 , "4": {
                     "27": "standard", "28": "premium", "29": "specialized"
                 }
                 , "5": {
                     "27": "standard", "28": "premium", "29": "specialized"
                 }
                 , "11": {
                     "27": "standard", "28": "premium", "29": "specialized"
                 }
             }
             , "146": {
                 "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "80": {
                 "4": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "5": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "6": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "1": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "7": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "8": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "9": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "10": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "11": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
             }
             , "83": {
                 "4": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "5": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "6": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "1": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "7": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "8": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "9": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "11": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
             }
             , "84": {
                 "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "85": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "234": {
                 "1": {
                     "28": "standard", "29": "premium", "30": "specialized"
                 }
                 , "5": {
                     "28": "standard", "29": "premium", "30": "specialized"
                 }
                 , "6": {
                     "28": "standard", "29": "premium", "30": "specialized"
                 }
                 , "7": {
                     "28": "standard", "29": "premium", "30": "specialized"
                 }
                 , "8": {
                     "28": "standard", "29": "premium", "30": "specialized"
                 }
                 , "9": {
                     "28": "standard", "29": "premium", "30": "specialized"
                 }
                 , "10": {
                     "28": "standard", "29": "premium", "30": "specialized"
                 }
                 , "4": {
                     "28": "standard", "29": "premium", "30": "specialized"
                 }
                 , "11": {
                     "28": "standard", "29": "premium", "30": "specialized"
                 }
             }
             , "125": {
                 "1": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "4": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "5": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "6": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "7": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "8": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "9": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "10": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "11": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
             }
             , "126": {
                 "1": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "4": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "5": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "6": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "7": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "8": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "9": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "10": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "11": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
             }
             , "147": {
                 "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "142": {
                 "1": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "4": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "5": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "6": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "7": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "8": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "9": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "11": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
             }
             , "143": {
                 "1": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "4": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "5": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "6": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "7": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "8": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "9": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "11": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
             }
             , "144": {
                 "1": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "4": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "5": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "6": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "7": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "8": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "9": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "11": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
             }
             , "145": {
                 "1": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "4": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "5": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "6": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "7": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "8": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "9": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "10": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
                 , "11": {
                     "1": "college", "2": "graduate", "116": "law_school"
                 }
             }
             , "148": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "149": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "150": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "151": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "152": {
                 "4": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "5": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "6": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "1": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "7": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "8": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "9": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "10": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "11": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
             }
             , "159": {
                 "1": {
                     "35": "premium"
                 }
                 , "4": {
                     "35": "premium"
                 }
                 , "5": {
                     "35": "premium"
                 }
                 , "6": {
                     "35": "premium"
                 }
                 , "7": {
                     "35": "premium"
                 }
                 , "8": {
                     "35": "premium"
                 }
                 , "9": {
                     "35": "premium"
                 }
                 , "10": {
                     "35": "premium"
                 }
                 , "2": {
                     "35": "premium"
                 }
             }
             , "163": {
                 "4": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "5": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "6": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "1": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "7": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "8": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "9": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "10": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "11": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
             }
             , "172": {
                 "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "171": {
                 "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "169": {
                 "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "168": {
                 "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "170": {
                 "4": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "5": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "6": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "1": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "7": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "8": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "9": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "10": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
             }
             , "173": {
                 "4": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "5": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "6": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "1": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "7": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "8": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "9": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "10": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
             }
             , "174": {
                 "1": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "4": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "5": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "6": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "7": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "8": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "9": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "10": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "11": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
             }
             , "182": {
                 "1": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "2": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "3": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "4": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "5": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "6": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
                 , "7": {
                     "34": "standard", "35": "premium", "36": "platinum"
                 }
             }
             , "242": {
                 "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "260": {
                 "1": {
                     "27": "standard", "28": "premium", "29": "platinum"
                 }
                 , "2": {
                     "27": "standard", "28": "premium", "29": "platinum"
                 }
                 , "4": {
                     "27": "standard", "28": "premium", "29": "platinum"
                 }
                 , "5": {
                     "27": "standard", "28": "premium", "29": "platinum"
                 }
                 , "6": {
                     "27": "standard", "28": "premium", "29": "platinum"
                 }
                 , "7": {
                     "27": "standard", "28": "premium", "29": "platinum"
                 }
                 , "9": {
                     "27": "standard", "28": "premium", "29": "platinum"
                 }
             }
             , "261": {
                 "1": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "2": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "3": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "4": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "5": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "6": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
                 , "8": {
                     "1": "standard", "28": "premium", "29": "platinum"
                 }
             }
             , "262": {
                 "1": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "2": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "3": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "4": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "5": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "6": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "9": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
             }
             , "263": {
                 "1": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "2": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "3": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "4": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "5": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "6": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "7": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
                 , "8": {
                     "31": "standard", "32": "premium", "33": "platinum"
                 }
             }
             , "277": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "12": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "13": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "14": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "276": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "275": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "12": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "13": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "14": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "274": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "273": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "272": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "12": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "13": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "14": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "271": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "12": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "13": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "14": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "270": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "12": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "13": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "14": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "269": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "2": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "4": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "9": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "10": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "268": {
                 "1": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "3": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "5": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "6": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "7": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "8": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "11": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "12": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "13": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
                 , "14": {
                     "1": "standard", "2": "premium", "27": "platinum"
                 }
             }
             , "359": {
                 "1": {
                     "1": "simple", "2": "medium", "3": "complex"
                 }
                 , "4": {
                     "1": "simple", "2": "medium", "3": "complex"
                 }
                 , "5": {
                     "1": "simple", "2": "medium", "3": "complex"
                 }
                 , "6": {
                     "1": "simple", "2": "medium", "3": "complex"
                 }
                 , "7": {
                     "1": "simple", "2": "medium", "3": "complex"
                 }
                 , "8": {
                     "1": "simple", "2": "medium", "3": "complex"
                 }
                 , "9": {
                     "1": "simple", "2": "medium", "3": "complex"
                 }
                 , "10": {
                     "1": "simple", "2": "medium", "3": "complex"
                 }
                 , "11": {
                     "1": "simple", "2": "medium", "3": "complex"
                 }
             }
         }
         , urgenciesHours= {
             "0": {
                 "3": "120", "4": "96", "5": "72", "6": "48", "1": "168", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "1": {
                 "1": "720", "2": "480", "3": "240", "4": "168", "5": "120", "6": "72", "7": "48", "11": "1440"
             }
             , "3": {
                 "1": "168", "3": "120", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "13": {
                 "1": "168", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240", "3": "120"
             }
             , "14": {
                 "1": "168", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240", "3": "120"
             }
             , "15": {
                 "1": "720", "2": "480", "3": "240", "4": "168", "5": "120", "6": "72", "7": "48", "11": "1440"
             }
             , "32": {
                 "2": "48", "1": "72", "3": "24"
             }
             , "31": {
                 "2": "48", "1": "72", "3": "24"
             }
             , "30": {
                 "2": "48", "1": "72", "3": "24"
             }
             , "33": {
                 "1": "72", "2": "48", "3": "24"
             }
             , "29": {
                 "2": "48", "1": "72", "3": "24"
             }
             , "34": {
                 "1": "72", "2": "48", "3": "24"
             }
             , "37": {
                 "1": "168", "3": "120", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "38": {
                 "1": "168", "3": "120", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "39": {
                 "1": "168", "3": "120", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "40": {
                 "1": "720", "2": "480", "3": "240", "4": "168", "5": "120", "6": "72", "7": "48", "11": "1440", "8": "24"
             }
             , "50": {
                 "1": "72", "2": "48", "3": "24"
             }
             , "51": {
                 "1": "24", "2": "48", "3": "72", "9": "12", "13": "6", "4": "120", "5": "168", "11": "240"
             }
             , "146": {
                 "9": "12", "1": "720", "2": "480", "3": "240", "4": "168", "5": "120", "6": "72", "7": "48", "8": "24", "11": "1440"
             }
             , "80": {
                 "4": "96", "5": "72", "6": "48", "1": "168", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "83": {
                 "4": "96", "5": "72", "6": "48", "1": "168", "7": "24", "8": "12", "9": "6", "11": "240"
             }
             , "84": {
                 "4": "96", "5": "72", "6": "48", "1": "168", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240", "3": "120"
             }
             , "85": {
                 "1": "168", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240", "3": "120"
             }
             , "234": {
                 "1": "168", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "4": "96", "11": "240"
             }
             , "125": {
                 "1": "168", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "126": {
                 "1": "168", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "147": {
                 "9": "12", "1": "720", "2": "480", "3": "240", "4": "168", "5": "120", "6": "72", "7": "48", "8": "24", "11": "1440"
             }
             , "133": {
                 "1": "72", "2": "48", "3": "24"
             }
             , "137": {
                 "1": "72", "2": "48", "3": "24"
             }
             , "138": {
                 "1": "72", "2": "48", "3": "24"
             }
             , "141": {
                 "1": "72", "2": "48"
             }
             , "142": {
                 "1": "168", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "11": "240"
             }
             , "143": {
                 "1": "168", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "11": "240"
             }
             , "144": {
                 "1": "168", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "11": "240"
             }
             , "145": {
                 "1": "168", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "148": {
                 "1": "720", "2": "480", "3": "240", "4": "168", "5": "120", "6": "72", "7": "48", "8": "24", "9": "12", "11": "1440"
             }
             , "149": {
                 "1": "720", "2": "480", "3": "240", "4": "168", "5": "120", "6": "72", "7": "48", "8": "24", "9": "12", "11": "1440"
             }
             , "150": {
                 "1": "720", "2": "480", "3": "240", "4": "168", "5": "120", "6": "72", "7": "48", "8": "24", "9": "12", "11": "1440"
             }
             , "151": {
                 "1": "720", "2": "480", "3": "240", "4": "168", "5": "120", "6": "72", "7": "48", "8": "24", "9": "12", "11": "1440"
             }
             , "152": {
                 "4": "96", "5": "72", "6": "48", "1": "168", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "157": {
                 "1": "240", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "2": "168"
             }
             , "159": {
                 "1": "240", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "2": "168"
             }
             , "163": {
                 "4": "96", "5": "72", "6": "48", "1": "168", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "172": {
                 "2": "480", "3": "240", "4": "168", "5": "120", "6": "72", "1": "720", "7": "48", "11": "1440", "8": "24"
             }
             , "171": {
                 "10": "3", "9": "6", "8": "12", "7": "24", "1": "168", "6": "48", "5": "72", "4": "96", "3": "120", "11": "240"
             }
             , "169": {
                 "10": "3", "9": "6", "8": "12", "7": "24", "1": "168", "6": "48", "5": "72", "4": "96", "3": "120", "11": "240"
             }
             , "168": {
                 "10": "3", "9": "6", "8": "12", "7": "24", "1": "168", "6": "48", "5": "72", "4": "96", "3": "120", "11": "240"
             }
             , "170": {
                 "4": "96", "5": "72", "6": "48", "1": "168", "7": "24", "8": "12", "9": "6", "10": "240"
             }
             , "173": {
                 "4": "96", "5": "72", "6": "48", "1": "168", "7": "24", "8": "12", "9": "6", "10": "240"
             }
             , "174": {
                 "1": "168", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "182": {
                 "1": "48", "2": "72", "3": "96", "4": "120", "5": "168", "6": "240", "7": "480"
             }
             , "242": {
                 "3": "120", "4": "96", "5": "72", "6": "48", "1": "168", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
             , "260": {
                 "1": "240", "2": "168", "4": "72", "5": "48", "6": "24", "7": "12", "9": "120"
             }
             , "261": {
                 "1": "168", "2": "96", "3": "72", "4": "48", "5": "24", "6": "12", "8": "240"
             }
             , "262": {
                 "1": "240", "2": "168", "3": "96", "4": "72", "5": "48", "6": "24", "9": "120"
             }
             , "263": {
                 "1": "240", "2": "168", "3": "96", "4": "72", "5": "48", "6": "24", "7": "12", "8": "6"
             }
             , "277": {
                 "1": "168", "3": "120", "5": "72", "6": "48", "7": "24", "8": "12", "11": "240", "12": "480", "13": "720", "14": "1440"
             }
             , "276": {
                 "1": "168", "2": "120", "3": "96", "4": "72", "5": "48", "6": "24", "7": "12", "8": "6", "9": "3", "10": "240"
             }
             , "275": {
                 "1": "168", "3": "120", "5": "72", "6": "48", "7": "24", "8": "12", "11": "240", "12": "480", "13": "720", "14": "1440"
             }
             , "274": {
                 "1": "168", "2": "120", "3": "96", "4": "72", "5": "48", "6": "24", "7": "12", "8": "6", "9": "3", "10": "240"
             }
             , "273": {
                 "1": "168", "2": "120", "3": "96", "4": "72", "5": "48", "6": "24", "7": "12", "8": "6", "9": "3", "10": "240"
             }
             , "272": {
                 "1": "168", "3": "120", "5": "72", "6": "48", "7": "24", "8": "12", "11": "240", "12": "480", "13": "720", "14": "1440"
             }
             , "271": {
                 "1": "168", "3": "120", "5": "72", "6": "48", "7": "24", "8": "12", "11": "240", "12": "480", "13": "720", "14": "1440"
             }
             , "270": {
                 "1": "168", "3": "120", "5": "72", "6": "48", "7": "24", "8": "12", "11": "240", "12": "480", "13": "720", "14": "1440"
             }
             , "269": {
                 "1": "168", "2": "120", "3": "96", "4": "72", "5": "48", "6": "24", "7": "12", "8": "6", "9": "3", "10": "240"
             }
             , "268": {
                 "1": "168", "3": "120", "5": "72", "6": "48", "7": "24", "8": "12", "11": "240", "12": "480", "13": "720", "14": "1440"
             }
             , "359": {
                 "1": "168", "4": "96", "5": "72", "6": "48", "7": "24", "8": "12", "9": "6", "10": "3", "11": "240"
             }
         }
         , priceCoef=100, doctype=OrderForm.getDoctypeValue(), urgency=OrderForm.getUrgencyValue(), wrLevel=OrderForm.getWrlevelValue(), wrLevelCode=writerLevelCodes[doctype][urgency][wrLevel], urgencyHours=urgenciesHours[doctype][urgency], pageCost=0.00, powerPointPresentationUrgency=0, powerPointPresentationWrLevel=0;
         // if urgency 4 days, give price 3 days
         if (urgencyHours==96) {
             urgencyHours=72;
         }
         // if urgency 3 hours, give price 6 hours
         if (urgencyHours==3) {
             urgencyHours=6;
         }
         // if urgency 10 days+ give price 10 days
         if (urgencyHours > 240) {
             urgencyHours=240;
         }
         var powerPointPresentationUrgencies=urgenciesHours[POWER_POINT_PRESENTATION];
         $.each(powerPointPresentationUrgencies, function(index, value) {
             if (urgencyHours==value) {
                 powerPointPresentationUrgency=index;
                 return false;
             }
         }
         );
         if (!powerPointPresentationUrgency) {
             return false;
         }
         var powerPointPresentationWrLevels=writerLevelCodes[POWER_POINT_PRESENTATION][powerPointPresentationUrgency];
         //  'platinum' writer level on doctype PowerPoint = 'specialized'
         if (wrLevelCode=='platinum') {
             wrLevelCode='specialized';
         }
         $.each(powerPointPresentationWrLevels, function(index, value) {
             if (wrLevelCode==value) {
                 powerPointPresentationWrLevel=index;
                 return false;
             }
         }
         );
         if (!powerPointPresentationWrLevel) {
             $.each(powerPointPresentationWrLevels, function(index, value) {
                 powerPointPresentationWrLevel=index;
                 return false;
             }
             );
         }
         pageCost=prices[powerPointPresentationUrgency][powerPointPresentationWrLevel];
         return pageCost * count * (priceCoef / 100);
     }
     )(vasId, count);
     price=(function(vasId, vasLegacyId, price) {
         return OrderForm.calculateVasDiscount(vasId, vasLegacyId, price);
     }
     )(vasId, 340, price);
     return price;
 }
 
 ;
 OrderForm.featureDiscountable[303]=false;
 OrderForm.fieldDoctypes[303]=340;
 OrderForm.currenciesFormat= {
     "USD": "$ %s", "EUR": "\u0026euro; %s", "GBP": "\u0026pound; %s", "AUD": "A$ %s"
 }
 
 ;
 OrderForm.nonTechDoctypes=[125,
 126,
 152,
 163,
 174,
 182,
 217,
 222];
 OrderForm.techCategories=[67,
 65,
 71,
 70,
 72,
 73,
 75,
 77,
 162,
 157,
 158,
 159,
 163,
 125,
 126,
 160,
 161,
 136];
 OrderForm.statisticsCategory=139;
 OrderForm.version1=true;
 OrderForm.version1_1=false;
 OrderForm.country=[ {
     "c_id": "93", "name": "Afghanistan", "id_country": "4", "alpha2": "AF"
 }
 
 ,
 {
     "c_id": "355", "name": "Albania", "id_country": "5", "alpha2": "AL"
 }
 
 ,
 {
     "c_id": "213", "name": "Algeria", "id_country": "6", "alpha2": "DZ"
 }
 
 ,
 {
     "c_id": "684", "name": "American Samoa", "id_country": "7", "alpha2": "AS"
 }
 
 ,
 {
     "c_id": "376", "name": "Andorra", "id_country": "8", "alpha2": "AD"
 }
 
 ,
 {
     "c_id": "244", "name": "Angola", "id_country": "9", "alpha2": "AO"
 }
 
 ,
 {
     "c_id": "264*", "name": "Anguilla", "id_country": "10", "alpha2": "AI"
 }
 
 ,
 {
     "c_id": "268*", "name": "Antigua and Barbuda", "id_country": "12", "alpha2": "AG"
 }
 
 ,
 {
     "c_id": "54", "name": "Argentina", "id_country": "13", "alpha2": "AR"
 }
 
 ,
 {
     "c_id": "374", "name": "Armenia", "id_country": "14", "alpha2": "AM"
 }
 
 ,
 {
     "c_id": "297", "name": "Aruba", "id_country": "15", "alpha2": "AW"
 }
 
 ,
 {
     "c_id": "247", "name": "Ascension Island", "id_country": "16", "alpha2": "AC"
 }
 
 ,
 {
     "c_id": "61", "name": "Australia", "id_country": "17", "alpha2": "AU"
 }
 
 ,
 {
     "c_id": "43", "name": "Austria", "id_country": "18", "alpha2": "AT"
 }
 
 ,
 {
     "c_id": "994", "name": "Azberbaijan", "id_country": "19", "alpha2": "AZ"
 }
 
 ,
 {
     "c_id": "242*", "name": "Bahamas", "id_country": "20", "alpha2": "BS"
 }
 
 ,
 {
     "c_id": "973", "name": "Bahrain", "id_country": "21", "alpha2": "BH"
 }
 
 ,
 {
     "c_id": "880", "name": "Bangladesh", "id_country": "22", "alpha2": "BD"
 }
 
 ,
 {
     "c_id": "246*", "name": "Barbados", "id_country": "23", "alpha2": "BB"
 }
 
 ,
 {
     "c_id": "375", "name": "Belarus", "id_country": "25", "alpha2": "BY"
 }
 
 ,
 {
     "c_id": "32", "name": "Belgium", "id_country": "26", "alpha2": "BE"
 }
 
 ,
 {
     "c_id": "501", "name": "Belize", "id_country": "27", "alpha2": "BZ"
 }
 
 ,
 {
     "c_id": "229", "name": "Benin", "id_country": "28", "alpha2": "BJ"
 }
 
 ,
 {
     "c_id": "441*", "name": "Bermuda", "id_country": "29", "alpha2": "BM"
 }
 
 ,
 {
     "c_id": "975", "name": "Bhutan", "id_country": "30", "alpha2": "BT"
 }
 
 ,
 {
     "c_id": "591", "name": "Bolivia", "id_country": "31", "alpha2": "BO"
 }
 
 ,
 {
     "c_id": "387", "name": "Bosnia", "id_country": "32", "alpha2": "BA"
 }
 
 ,
 {
     "c_id": "267", "name": "Botswana", "id_country": "33", "alpha2": "BW"
 }
 
 ,
 {
     "c_id": "55", "name": "Brazil", "id_country": "34", "alpha2": "BR"
 }
 
 ,
 {
     "c_id": "284*", "name": "British Virgin Islands", "id_country": "35", "alpha2": "VG"
 }
 
 ,
 {
     "c_id": "673", "name": "Brunei", "id_country": "36", "alpha2": "BN"
 }
 
 ,
 {
     "c_id": "359", "name": "Bulgaria", "id_country": "37", "alpha2": "BG"
 }
 
 ,
 {
     "c_id": "226", "name": "Burkina Faso", "id_country": "38", "alpha2": "BF"
 }
 
 ,
 {
     "c_id": "257", "name": "Burundi", "id_country": "40", "alpha2": "BI"
 }
 
 ,
 {
     "c_id": "855", "name": "Cambodia", "id_country": "41", "alpha2": "KH"
 }
 
 ,
 {
     "c_id": "237", "name": "Cameroon", "id_country": "42", "alpha2": "CM"
 }
 
 ,
 {
     "c_id": "1", "name": "Canada", "id_country": "240", "alpha2": "CA"
 }
 
 ,
 {
     "c_id": "238", "name": "Cape Verde Islands", "id_country": "44", "alpha2": "CV"
 }
 
 ,
 {
     "c_id": "345*", "name": "Cayman Islands", "id_country": "45", "alpha2": "KY"
 }
 
 ,
 {
     "c_id": "236", "name": "Central African Rep.", "id_country": "46", "alpha2": "CF"
 }
 
 ,
 {
     "c_id": "235", "name": "Chad", "id_country": "47", "alpha2": "TD"
 }
 
 ,
 {
     "c_id": "56", "name": "Chile", "id_country": "48", "alpha2": "CL"
 }
 
 ,
 {
     "c_id": "86", "name": "China", "id_country": "49", "alpha2": "CN"
 }
 
 ,
 {
     "c_id": "61", "name": "Christmas Island", "id_country": "50", "alpha2": "CX"
 }
 
 ,
 {
     "c_id": "57", "name": "Colombia", "id_country": "52", "alpha2": "CO"
 }
 
 ,
 {
     "c_id": "242", "name": "Congo", "id_country": "54", "alpha2": "CG"
 }
 
 ,
 {
     "c_id": "243", "name": "Congo, Dem. Rep. of", "id_country": "55", "alpha2": "CD"
 }
 
 ,
 {
     "c_id": "682", "name": "Cook Islands", "id_country": "56", "alpha2": "CK"
 }
 
 ,
 {
     "c_id": "506", "name": "Costa Rica", "id_country": "57", "alpha2": "CR"
 }
 
 ,
 {
     "c_id": "385", "name": "Croatia", "id_country": "58", "alpha2": "HR"
 }
 
 ,
 {
     "c_id": "53", "name": "Cuba", "id_country": "59", "alpha2": "CU"
 }
 
 ,
 {
     "c_id": "357", "name": "Cyprus", "id_country": "60", "alpha2": "CY"
 }
 
 ,
 {
     "c_id": "420", "name": "Czech Republic", "id_country": "61", "alpha2": "CZ"
 }
 
 ,
 {
     "c_id": "45", "name": "Denmark", "id_country": "62", "alpha2": "DK"
 }
 
 ,
 {
     "c_id": "253", "name": "Djibouti", "id_country": "64", "alpha2": "DJ"
 }
 
 ,
 {
     "c_id": "767*", "name": "Dominica", "id_country": "65", "alpha2": "DM"
 }
 
 ,
 {
     "c_id": "809*", "name": "Dominican Rep.", "id_country": "66", "alpha2": "DO"
 }
 
 ,
 {
     "c_id": "593", "name": "Ecuador", "id_country": "67", "alpha2": "EC"
 }
 
 ,
 {
     "c_id": "20", "name": "Egypt", "id_country": "68", "alpha2": "EG"
 }
 
 ,
 {
     "c_id": "503", "name": "El Salvador", "id_country": "69", "alpha2": "SV"
 }
 
 ,
 {
     "c_id": "240", "name": "Equatorial Guinea", "id_country": "70", "alpha2": "GQ"
 }
 
 ,
 {
     "c_id": "291", "name": "Eritrea", "id_country": "71", "alpha2": "ER"
 }
 
 ,
 {
     "c_id": "372", "name": "Estonia", "id_country": "72", "alpha2": "EE"
 }
 
 ,
 {
     "c_id": "251", "name": "Ethiopia", "id_country": "73", "alpha2": "ET"
 }
 
 ,
 {
     "c_id": "298", "name": "Faeroe Islands", "id_country": "74", "alpha2": "FO"
 }
 
 ,
 {
     "c_id": "500", "name": "Falkland Islands", "id_country": "75", "alpha2": "FK"
 }
 
 ,
 {
     "c_id": "679", "name": "Fiji Islands", "id_country": "76", "alpha2": "FJ"
 }
 
 ,
 {
     "c_id": "358", "name": "Finland", "id_country": "77", "alpha2": "FI"
 }
 
 ,
 {
     "c_id": "33", "name": "France", "id_country": "78", "alpha2": "FR"
 }
 
 ,
 {
     "c_id": "594", "name": "French Guiana", "id_country": "80", "alpha2": "GF"
 }
 
 ,
 {
     "c_id": "689", "name": "French Polynesia", "id_country": "81", "alpha2": "PF"
 }
 
 ,
 {
     "c_id": "241", "name": "Gabon", "id_country": "82", "alpha2": "GA"
 }
 
 ,
 {
     "c_id": "220", "name": "Gambia", "id_country": "83", "alpha2": "GM"
 }
 
 ,
 {
     "c_id": "995", "name": "Georgia", "id_country": "84", "alpha2": "GE"
 }
 
 ,
 {
     "c_id": "49", "name": "Germany", "id_country": "85", "alpha2": "DE"
 }
 
 ,
 {
     "c_id": "233", "name": "Ghana", "id_country": "86", "alpha2": "GH"
 }
 
 ,
 {
     "c_id": "350", "name": "Gibraltar", "id_country": "87", "alpha2": "GI"
 }
 
 ,
 {
     "c_id": "30", "name": "Greece", "id_country": "88", "alpha2": "GR"
 }
 
 ,
 {
     "c_id": "299", "name": "Greenland", "id_country": "89", "alpha2": "GL"
 }
 
 ,
 {
     "c_id": "473*", "name": "Grenada", "id_country": "90", "alpha2": "GD"
 }
 
 ,
 {
     "c_id": "590", "name": "Guadeloupe", "id_country": "91", "alpha2": "GP"
 }
 
 ,
 {
     "c_id": "671", "name": "Guam", "id_country": "92", "alpha2": "GU"
 }
 
 ,
 {
     "c_id": "502", "name": "Guatemala", "id_country": "94", "alpha2": "GT"
 }
 
 ,
 {
     "c_id": "224", "name": "Guinea", "id_country": "95", "alpha2": "GN"
 }
 
 ,
 {
     "c_id": "245", "name": "Guinea Bissau", "id_country": "96", "alpha2": "GW"
 }
 
 ,
 {
     "c_id": "592", "name": "Guyana", "id_country": "97", "alpha2": "GY"
 }
 
 ,
 {
     "c_id": "509", "name": "Haiti", "id_country": "98", "alpha2": "HT"
 }
 
 ,
 {
     "c_id": "504", "name": "Honduras", "id_country": "99", "alpha2": "HN"
 }
 
 ,
 {
     "c_id": "852", "name": "Hong Kong", "id_country": "100", "alpha2": "HK"
 }
 
 ,
 {
     "c_id": "36", "name": "Hungary", "id_country": "101", "alpha2": "HU"
 }
 
 ,
 {
     "c_id": "354", "name": "Iceland", "id_country": "102", "alpha2": "IS"
 }
 
 ,
 {
     "c_id": "91", "name": "India", "id_country": "103", "alpha2": "IN"
 }
 
 ,
 {
     "c_id": "62", "name": "Indonesia", "id_country": "104", "alpha2": "ID"
 }
 
 ,
 {
     "c_id": "98", "name": "Iran", "id_country": "105", "alpha2": "IR"
 }
 
 ,
 {
     "c_id": "964", "name": "Iraq", "id_country": "106", "alpha2": "IQ"
 }
 
 ,
 {
     "c_id": "353", "name": "Ireland", "id_country": "107", "alpha2": "IE"
 }
 
 ,
 {
     "c_id": "972", "name": "Israel", "id_country": "108", "alpha2": "IL"
 }
 
 ,
 {
     "c_id": "39", "name": "Italy", "id_country": "109", "alpha2": "IT"
 }
 
 ,
 {
     "c_id": "876*", "name": "Jamaica", "id_country": "111", "alpha2": "JM"
 }
 
 ,
 {
     "c_id": "81", "name": "Japan", "id_country": "112", "alpha2": "JP"
 }
 
 ,
 {
     "c_id": "962", "name": "Jordan", "id_country": "113", "alpha2": "JO"
 }
 
 ,
 {
     "c_id": "7", "name": "Kazakhstan", "id_country": "114", "alpha2": "KZ"
 }
 
 ,
 {
     "c_id": "254", "name": "Kenya", "id_country": "115", "alpha2": "KE"
 }
 
 ,
 {
     "c_id": "686", "name": "Kiribati", "id_country": "116", "alpha2": "KI"
 }
 
 ,
 {
     "c_id": "850", "name": "Korea, North", "id_country": "117", "alpha2": "KP"
 }
 
 ,
 {
     "c_id": "82", "name": "Korea, South", "id_country": "118", "alpha2": "KR"
 }
 
 ,
 {
     "c_id": "383", "name": "Kosovo", "id_country": "243", "alpha2": "XK"
 }
 
 ,
 {
     "c_id": "965", "name": "Kuwait", "id_country": "119", "alpha2": "KW"
 }
 
 ,
 {
     "c_id": "996", "name": "Kyrgyzstan", "id_country": "120", "alpha2": "KG"
 }
 
 ,
 {
     "c_id": "856", "name": "Laos", "id_country": "121", "alpha2": "LA"
 }
 
 ,
 {
     "c_id": "371", "name": "Latvia", "id_country": "122", "alpha2": "LV"
 }
 
 ,
 {
     "c_id": "961", "name": "Lebanon", "id_country": "123", "alpha2": "LB"
 }
 
 ,
 {
     "c_id": "266", "name": "Lesotho", "id_country": "124", "alpha2": "LS"
 }
 
 ,
 {
     "c_id": "231", "name": "Liberia", "id_country": "125", "alpha2": "LR"
 }
 
 ,
 {
     "c_id": "218", "name": "Libya", "id_country": "126", "alpha2": "LY"
 }
 
 ,
 {
     "c_id": "423", "name": "Liechtenstein", "id_country": "127", "alpha2": "LI"
 }
 
 ,
 {
     "c_id": "370", "name": "Lithuania", "id_country": "128", "alpha2": "LT"
 }
 
 ,
 {
     "c_id": "352", "name": "Luxembourg", "id_country": "129", "alpha2": "LU"
 }
 
 ,
 {
     "c_id": "853", "name": "Macau", "id_country": "130", "alpha2": "MO"
 }
 
 ,
 {
     "c_id": "389", "name": "Macedonia", "id_country": "131", "alpha2": "MK"
 }
 
 ,
 {
     "c_id": "261", "name": "Madagascar", "id_country": "132", "alpha2": "MG"
 }
 
 ,
 {
     "c_id": "265", "name": "Malawi", "id_country": "133", "alpha2": "MW"
 }
 
 ,
 {
     "c_id": "60", "name": "Malaysia", "id_country": "134", "alpha2": "MY"
 }
 
 ,
 {
     "c_id": "960", "name": "Maldives", "id_country": "135", "alpha2": "MV"
 }
 
 ,
 {
     "c_id": "223", "name": "Mali", "id_country": "136", "alpha2": "ML"
 }
 
 ,
 {
     "c_id": "356", "name": "Malta", "id_country": "137", "alpha2": "MT"
 }
 
 ,
 {
     "c_id": "670*", "name": "Mariana Islands", "id_country": "138", "alpha2": "MP"
 }
 
 ,
 {
     "c_id": "692", "name": "Marshall Islands", "id_country": "139", "alpha2": "MH"
 }
 
 ,
 {
     "c_id": "596", "name": "Martinique", "id_country": "140", "alpha2": "MQ"
 }
 
 ,
 {
     "c_id": "222", "name": "Mauritania", "id_country": "141", "alpha2": "MR"
 }
 
 ,
 {
     "c_id": "230", "name": "Mauritius", "id_country": "142", "alpha2": "MU"
 }
 
 ,
 {
     "c_id": "269", "name": "Mayotte Islands", "id_country": "143", "alpha2": "YT"
 }
 
 ,
 {
     "c_id": "52", "name": "Mexico", "id_country": "144", "alpha2": "MX"
 }
 
 ,
 {
     "c_id": "691", "name": "Micronesia", "id_country": "145", "alpha2": "FM"
 }
 
 ,
 {
     "c_id": "373", "name": "Moldova", "id_country": "147", "alpha2": "MD"
 }
 
 ,
 {
     "c_id": "377", "name": "Monaco", "id_country": "148", "alpha2": "MC"
 }
 
 ,
 {
     "c_id": "976", "name": "Mongolia", "id_country": "149", "alpha2": "MN"
 }
 
 ,
 {
     "c_id": "382", "name": "Montenegro", "id_country": "242", "alpha2": "ME"
 }
 
 ,
 {
     "c_id": "664*", "name": "Montserrat", "id_country": "150", "alpha2": "MS"
 }
 
 ,
 {
     "c_id": "212", "name": "Morocco", "id_country": "151", "alpha2": "MA"
 }
 
 ,
 {
     "c_id": "258", "name": "Mozambique", "id_country": "152", "alpha2": "MZ"
 }
 
 ,
 {
     "c_id": "95", "name": "Myanmar (Burma)", "id_country": "153", "alpha2": "MM"
 }
 
 ,
 {
     "c_id": "264", "name": "Namibia", "id_country": "154", "alpha2": "NA"
 }
 
 ,
 {
     "c_id": "674", "name": "Nauru", "id_country": "155", "alpha2": "NR"
 }
 
 ,
 {
     "c_id": "977", "name": "Nepal", "id_country": "156", "alpha2": "NP"
 }
 
 ,
 {
     "c_id": "31", "name": "Netherlands", "id_country": "157", "alpha2": "NL"
 }
 
 ,
 {
     "c_id": "599", "name": "Netherlands Antilles", "id_country": "158", "alpha2": "AN"
 }
 
 ,
 {
     "c_id": "687", "name": "New Caledonia", "id_country": "160", "alpha2": "NC"
 }
 
 ,
 {
     "c_id": "64", "name": "New Zealand", "id_country": "161", "alpha2": "NZ"
 }
 
 ,
 {
     "c_id": "505", "name": "Nicaragua", "id_country": "162", "alpha2": "NI"
 }
 
 ,
 {
     "c_id": "227", "name": "Niger", "id_country": "163", "alpha2": "NE"
 }
 
 ,
 {
     "c_id": "234", "name": "Nigeria", "id_country": "164", "alpha2": "NG"
 }
 
 ,
 {
     "c_id": "672", "name": "Norfolk Island", "id_country": "166", "alpha2": "NF"
 }
 
 ,
 {
     "c_id": "47", "name": "Norway", "id_country": "167", "alpha2": "NO"
 }
 
 ,
 {
     "c_id": "968", "name": "Oman", "id_country": "168", "alpha2": "OM"
 }
 
 ,
 {
     "c_id": "92", "name": "Pakistan", "id_country": "169", "alpha2": "PK"
 }
 
 ,
 {
     "c_id": "680", "name": "Palau", "id_country": "170", "alpha2": "PW"
 }
 
 ,
 {
     "c_id": "970", "name": "Palestine", "id_country": "171", "alpha2": "PS"
 }
 
 ,
 {
     "c_id": "507", "name": "Panama", "id_country": "172", "alpha2": "PA"
 }
 
 ,
 {
     "c_id": "675", "name": "Papua New Guinea", "id_country": "173", "alpha2": "PG"
 }
 
 ,
 {
     "c_id": "595", "name": "Paraguay", "id_country": "174", "alpha2": "PY"
 }
 
 ,
 {
     "c_id": "51", "name": "Peru", "id_country": "175", "alpha2": "PE"
 }
 
 ,
 {
     "c_id": "63", "name": "Philippines", "id_country": "176", "alpha2": "PH"
 }
 
 ,
 {
     "c_id": "48", "name": "Poland", "id_country": "177", "alpha2": "PL"
 }
 
 ,
 {
     "c_id": "351", "name": "Portugal", "id_country": "178", "alpha2": "PT"
 }
 
 ,
 {
     "c_id": "787*", "name": "Puerto Rico", "id_country": "179", "alpha2": "PR"
 }
 
 ,
 {
     "c_id": "974", "name": "Qatar", "id_country": "180", "alpha2": "QA"
 }
 
 ,
 {
     "c_id": "262", "name": "Reunion Island", "id_country": "181", "alpha2": "RE"
 }
 
 ,
 {
     "c_id": "40", "name": "Romania", "id_country": "182", "alpha2": "RO"
 }
 
 ,
 {
     "c_id": "7", "name": "Russia", "id_country": "183", "alpha2": "RU"
 }
 
 ,
 {
     "c_id": "250", "name": "Rwanda", "id_country": "184", "alpha2": "RW"
 }
 
 ,
 {
     "c_id": "378", "name": "San Marino", "id_country": "190", "alpha2": "SM"
 }
 
 ,
 {
     "c_id": "966", "name": "Saudi Arabia", "id_country": "192", "alpha2": "SA"
 }
 
 ,
 {
     "c_id": "221", "name": "Senegal", "id_country": "193", "alpha2": "SN"
 }
 
 ,
 {
     "c_id": "381", "name": "Serbia", "id_country": "194", "alpha2": "RS"
 }
 
 ,
 {
     "c_id": "248", "name": "Seychelles", "id_country": "195", "alpha2": "SC"
 }
 
 ,
 {
     "c_id": "232", "name": "Sierra Leone", "id_country": "196", "alpha2": "SL"
 }
 
 ,
 {
     "c_id": "65", "name": "Singapore", "id_country": "197", "alpha2": "SG"
 }
 
 ,
 {
     "c_id": "421", "name": "Slovakia", "id_country": "198", "alpha2": "SK"
 }
 
 ,
 {
     "c_id": "386", "name": "Slovenia", "id_country": "199", "alpha2": "SI"
 }
 
 ,
 {
     "c_id": "677", "name": "Solomon Islands", "id_country": "200", "alpha2": "SB"
 }
 
 ,
 {
     "c_id": "252", "name": "Somalia", "id_country": "201", "alpha2": "SO"
 }
 
 ,
 {
     "c_id": "27", "name": "South Africa", "id_country": "202", "alpha2": "ZA"
 }
 
 ,
 {
     "c_id": "34", "name": "Spain", "id_country": "203", "alpha2": "ES"
 }
 
 ,
 {
     "c_id": "94", "name": "Sri Lanka", "id_country": "204", "alpha2": "LK"
 }
 
 ,
 {
     "c_id": "290", "name": "St. Helena", "id_country": "185", "alpha2": "SH"
 }
 
 ,
 {
     "c_id": "869*", "name": "St. Kitts and Nevis", "id_country": "159", "alpha2": "KN"
 }
 
 ,
 {
     "c_id": "758*", "name": "St. Lucia", "id_country": "187", "alpha2": "LC"
 }
 
 ,
 {
     "c_id": "784*", "name": "St. Vincent", "id_country": "189", "alpha2": "VC"
 }
 
 ,
 {
     "c_id": "249", "name": "Sudan", "id_country": "205", "alpha2": "SD"
 }
 
 ,
 {
     "c_id": "597", "name": "Suriname", "id_country": "206", "alpha2": "SR"
 }
 
 ,
 {
     "c_id": "268", "name": "Swaziland", "id_country": "207", "alpha2": "SZ"
 }
 
 ,
 {
     "c_id": "46", "name": "Sweden", "id_country": "208", "alpha2": "SE"
 }
 
 ,
 {
     "c_id": "41", "name": "Switzerland", "id_country": "209", "alpha2": "CH"
 }
 
 ,
 {
     "c_id": "963", "name": "Syria", "id_country": "210", "alpha2": "SY"
 }
 
 ,
 {
     "c_id": "886", "name": "Taiwan", "id_country": "211", "alpha2": "TW"
 }
 
 ,
 {
     "c_id": "992", "name": "Tajikistan", "id_country": "212", "alpha2": "TJ"
 }
 
 ,
 {
     "c_id": "255", "name": "Tanzania", "id_country": "213", "alpha2": "TZ"
 }
 
 ,
 {
     "c_id": "66", "name": "Thailand", "id_country": "214", "alpha2": "TH"
 }
 
 ,
 {
     "c_id": "228", "name": "Togo", "id_country": "215", "alpha2": "TG"
 }
 
 ,
 {
     "c_id": "676", "name": "Tonga", "id_country": "216", "alpha2": "TO"
 }
 
 ,
 {
     "c_id": "868*", "name": "Trinidad \u0026 Tobago", "id_country": "217", "alpha2": "TT"
 }
 
 ,
 {
     "c_id": "216", "name": "Tunisia", "id_country": "218", "alpha2": "TN"
 }
 
 ,
 {
     "c_id": "90", "name": "Turkey", "id_country": "219", "alpha2": "TR"
 }
 
 ,
 {
     "c_id": "993", "name": "Turkmenistan", "id_country": "220", "alpha2": "TM"
 }
 
 ,
 {
     "c_id": "649*", "name": "Turks \u0026 Caicos", "id_country": "221", "alpha2": "TC"
 }
 
 ,
 {
     "c_id": "688", "name": "Tuvalu", "id_country": "222", "alpha2": "TV"
 }
 
 ,
 {
     "c_id": "340", "name": "U.S. Virgin Islands", "id_country": "241", "alpha2": "VI"
 }
 
 ,
 {
     "c_id": "256", "name": "Uganda", "id_country": "223", "alpha2": "UG"
 }
 
 ,
 {
     "c_id": "380", "name": "Ukraine", "id_country": "224", "alpha2": "UA"
 }
 
 ,
 {
     "c_id": "971", "name": "United Arab Emirates", "id_country": "225", "alpha2": "AE"
 }
 
 ,
 {
     "c_id": "44", "name": "United Kingdom", "id_country": "226", "alpha2": "GB"
 }
 
 ,
 {
     "c_id": "598", "name": "Uruguay", "id_country": "227", "alpha2": "UY"
 }
 
 ,
 {
     "c_id": "1", "name": "USA", "id_country": "3", "alpha2": "US"
 }
 
 ,
 {
     "c_id": "998", "name": "Uzbekistan", "id_country": "228", "alpha2": "UZ"
 }
 
 ,
 {
     "c_id": "678", "name": "Vanuatu", "id_country": "229", "alpha2": "VU"
 }
 
 ,
 {
     "c_id": "39", "name": "Vatican City", "id_country": "230", "alpha2": "VA"
 }
 
 ,
 {
     "c_id": "58", "name": "Venezuela", "id_country": "231", "alpha2": "VE"
 }
 
 ,
 {
     "c_id": "84", "name": "Vietnam", "id_country": "232", "alpha2": "VN"
 }
 
 ,
 {
     "c_id": "681", "name": "Wallis \u0026 Futuna", "id_country": "234", "alpha2": "WF"
 }
 
 ,
 {
     "c_id": "685", "name": "Western Samoa", "id_country": "235", "alpha2": "WS"
 }
 
 ,
 {
     "c_id": "967", "name": "Yemen", "id_country": "236", "alpha2": "YE"
 }
 
 ,
 {
     "c_id": "260", "name": "Zambia", "id_country": "238", "alpha2": "ZM"
 }
 
 ,
 {
     "c_id": "263", "name": "Zimbabwe", "id_country": "239", "alpha2": "ZW"
 }
 
 ];
 OrderForm.validationImgBtn='';
 OrderForm.removePrefWriterImg='<img class="delete" src="<?php echo base_url() ?>front_assets/images/adaptive/close-ic.png" title="Remove preferred writer" alt="x" />';
 OrderForm.BTP_validation=false;
 OrderForm.ForceSubmit=false;
 </script> <script type="text/javascript" src="<?php echo base_url() ?>front_assets/js_v1560415138/language-style-adaptive.js"></script> <script> document.addEventListener("DOMContentLoaded", function(event) {
     var phoneFirst=document.getElementById("mobile-phone");
     if (phoneFirst) {
         phoneFirst.addEventListener("keypress", isNumber, false)
     }
     var phoneSecond=document.getElementById("mobile-phone2");
     if (phoneSecond) {
         phoneSecond.addEventListener("keypress", isNumber, false)
     }
     function isNumber(evt) {
         var charCode=(evt.which) ? evt.which: evt.keyCode;
         if (charCode > 31 && (charCode < 48 || charCode > 57)) {
             evt.preventDefault();
             return false;
         }
     }
 }
 
 );
 </script> <script> window.allowedExtensions=["7z",
 "ace",
 "arj",
 "bz2",
 "cab",
 "cpio",
 "deb",
 "gz",
 "img",
 "iso",
 "jar",
 "lha",
 "lzh",
 "lzo",
 "lzx",
 "rar",
 "rpm",
 "smc",
 "tar",
 "xz",
 "zip",
 "zipx",
 "zoo",
 "602",
 "abw",
 "acl",
 "afp",
 "ami",
 "ans",
 "asc",
 "aww",
 "ccf",
 "csv",
 "cwk",
 "dbk",
 "doc",
 "docm",
 "docx",
 "dot",
 "dotx",
 "egt",
 "epub",
 "ezw",
 "fb2",
 "fb3",
 "fdx",
 "ftm",
 "ftx",
 "gdoc",
 "hwp",
 "hwpml",
 "log",
 "lwp",
 "mbp",
 "md",
 "mcw",
 "mobi",
 "nb",
 "nbp",
 "neis",
 "odm",
 "odt",
 "ott",
 "omm",
 "pages",
 "pap",
 "pda",
 "pdax",
 "pdf",
 "quox",
 "rtf",
 "rpt",
 "sdw",
 "se",
 "stw",
 "sxw",
 "tex",
 "info",
 "txt",
 "uof",
 "uoml",
 "via",
 "wpd",
 "wps",
 "wpt",
 "wrd",
 "wrf",
 "wri",
 "mml",
 "odf",
 "sxm",
 "ase",
 "bmp",
 "djvu",
 "gif",
 "icns",
 "ico",
 "iff",
 "jng",
 "jpeg",
 "jpg",
 "jfif",
 "jp2",
 "jps",
 "max",
 "miff",
 "mng",
 "pict",
 "pct",
 "png",
 "psd",
 "psp",
 "px",
 "pxm",
 "pxr",
 "qfx",
 "sct",
 "tga",
 "tif",
 "tiff",
 "vtf",
 "xbm",
 "xcf",
 "xpm",
 "ai",
 "cgm",
 "cdr",
 "cmx",
 "dxf",
 "e2d",
 "egt",
 "eps",
 "odg",
 "wmf",
 "xar",
 "3dmlw",
 "3dxml",
 "3mf",
 "acp",
 "amf",
 "aec",
 "ar",
 "asc",
 "asm",
 "brep",
 "ccc",
 "ccm",
 "ccs",
 "cad",
 "ckd",
 "ckt",
 "co",
 "drw",
 "dft",
 "dgn",
 "dgk",
 "dmt",
 "dxf",
 "dwb",
 "dwf",
 "dwg",
 "easm",
 "edrw",
 "emb",
 "eprt",
 "esw",
 "exp",
 "fm",
 "fmz",
 "g",
 "gbr",
 "glm",
 "gtc",
 "iam",
 "icd",
 "idw",
 "ifc",
 "iges",
 "ipn",
 "ipt",
 "jt",
 "mcd",
 "model",
 "ocd",
 "par",
 "pipe",
 "pln",
 "prt",
 "psm",
 "psmodel",
 "pwi",
 "pyt",
 "skp",
 "rlf",
 "rvm",
 "s12",
 "scadl",
 "scdoc",
 "sldasm",
 "slddrw",
 "sldprt",
 "aac",
 "ac3",
 "adpcm",
 "amr",
 "asx",
 "atrac",
 "cda",
 "dts",
 "flac",
 "mp3",
 "pcm",
 "wma",
 "wav",
 "xspf",
 "3gp",
 "asf",
 "avi",
 "flv",
 "mxf",
 "ogg",
 "m4v",
 "mov",
 "mp4",
 "mpeg",
 "mpg",
 "mts",
 "qt",
 "smk",
 "swf",
 "vob",
 "wmv",
 "csv",
 "gsheet",
 "numbers",
 "ods",
 "ots",
 "stc",
 "sxc",
 "xls",
 "xlsb",
 "xlsm",
 "xlsx",
 "xlr",
 "xlt",
 "xltm",
 "xlw",
 "gslides",
 "key",
 "keynote",
 "odp",
 "otp",
 "ppt",
 "pptx",
 "pas",
 "dpr",
 "pas",
 "bas",
 "bbc",
 "cs",
 "ml",
 "pl",
 "pm",
 "rb",
 "rbw",
 "sd7",
 "sha",
 "vsm",
 "kt",
 "dll",
 "dat"];
 </script> <script type="text/javascript" src="<?php echo base_url() ?>front_assets/scripts_v1560415138/fileuploader_original.js"></script>
  <form id="order_form" class="orderform  default-identify" name="order_form" method="post" action="<?php echo base_url() ?>pages/main/save_form"> 
    <div id="validation-notice" class="validation-notice hidden"> Some of the fields are not filled in correctly. Please check them. 
        <div class="validation-notice__close-btn" onclick="this.closest('#validation-notice').classList.add('hidden')"></div> </div> 
        <div class="orderform__form"> 
            <div class="orderform-tabs" data-active-step=""> 
                <div class="orderform-tabs__item" data-step-switcher="0">Project details</div> 
                <div class="orderform-tabs__item" data-step-switcher="1">Additional info</div> 
                <div class="orderform-tabs__item" data-step-switcher="2">Contact info</div> </div> 
                <div class="orderform-steps new-customer">
                 <table cellpadding="0" cellspacing="0"> 
                    <tbody id="order_details"> 
                        <tr> <td> <table class="table-block">
                         <tbody class="step step_1" data-step="0" data-step-name="Project details"> 
                            <tr id="row_topic" class="step__item step__item_topic "> <td> 
                                <div class="field ">
                                 <label class="field__label" for="topic"> Topic </label>
                                  <div class="field__wrapper"> 
                                    <div class="input-wrapper input-wrapper_text-input"> <input id="topic" name="topic" type="text" value="" maxlength="256" size="27" /> </div> <div class="field__error validation_error" id="error_topic">Fill in the field</div> </div> </div> </td> </tr> <tr id="row_doctype" class="step__item step__item_doctype "> <td> <div class="field "> <label class="field__label" for="doctype"> Type of document </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_select"> <select id="doctype" name="doctype" size="1"> <option disabled>Popular:</option> <option value="0" selected="selected">Essay</option> <option value="39">Coursework</option> <option value="14">Research Paper</option> <option value="276">Assignment</option> <option value="80">Case Study</option> <option disabled>--------------------------------------------------</option> <option disabled>Alphabetical:</option> <option value="142">Admission Services - Admission Essay</option> <option value="145">Admission Services - Editing</option> <option value="144">Admission Services - Personal Statement</option> <option value="143">Admission Services - Scholarship Essay</option> <option value="170">Annotated Bibliography</option> <option value="168">Article</option> <option value="169">Article Critique</option> <option value="268">Assessment</option> <option value="276">Assignment</option> <option value="269">Biography</option> <option value="37">Book Report</option> <option value="38">Book Review</option> <option value="270">Business Plan</option> <option value="271">Capstone Project</option> <option value="80">Case Study</option> <option value="39">Coursework</option> <option value="273">Critical Thinking</option> <option value="1">Dissertation</option> <option value="146">Dissertation Chapter - Abstract</option> <option value="151">Dissertation Chapter - Discussion</option> <option value="147">Dissertation Chapter - Introduction Chapter</option> <option value="148">Dissertation Chapter - Literature Review</option> <option value="149">Dissertation Chapter - Methodology</option> <option value="150">Dissertation Chapter - Results</option> <option value="159">Dissertation Services - Editing</option> <option value="174">Dissertation Services - Proofreading</option> <option value="3">Editing</option> <option value="0">Essay</option> <option value="359">Excel</option> <option value="277">Financial Analysis</option> <option value="152">Formatting</option> <option value="83">Lab Report</option> <option value="272">Marketing Plan</option> <option value="260">Mind/Concept mapping</option> <option value="85">Movie Review</option> <option value="261">Multimedia Project</option> <option value="125">Multiple Choice Questions (Non-time-framed)</option> <option value="126">Multiple Choice Questions (Time-framed)</option> <option value="262">Online assignment</option> <option value="51">PowerPoint Presentation</option> <option value="234">Problem Solving</option> <option value="182">Programming</option> <option value="163">Proofreading</option> <option value="171">Reaction Paper</option> <option value="14">Research Paper</option> <option value="40">Research Proposal</option> <option value="242">Research Summary</option> <option value="275">SWOT Analysis</option> <option value="274">Short Story</option> <option value="263">Simulation report</option> <option value="84">Speech/Presentation</option> <option value="173">Statistics Project</option> <option value="13">Term Paper</option> <option value="15">Thesis</option> <option value="172">Thesis/Dissertation Proposal</option> </select> </div> <div class="field__error validation_error" id="error_doctype"></div> </div> </div> </td> </tr> <tr id="row_urgency" class="step__item step__item_urgency "> <td> <div class="field "> <label class="field__label" for="urgency"> Urgency </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_select"> <select id="urgency" name="urgency" size="1"> <option value="11" data-hours="240">10 days</option> <option value="1" data-hours="168">7 days</option> <option value="3" data-hours="120">5 days</option> <option value="4" data-hours="96">4 days</option> <option value="5" data-hours="72">3 days</option> <option value="6" data-hours="48">48 hours</option> <option value="7" data-hours="24">24 hours</option> <option value="8" data-hours="12">12 hours</option> <option value="9" data-hours="6">6 hours</option> <option value="10" data-hours="3">3 hours</option> </select> </div> <div class="field__error validation_error" id="error_urgency">Select a valid urgency</div> </div> </div> </td> </tr> <tr id="row_wrlevel" class="step__item step__item_wrlevel "> <td> <div class="field "> <label class="field__label" for="wrlevel"> Level </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_text-input"> <select id="wrlevel" name="wrlevel" size="1" class=" linear">
                                     <option value="1" selected="selected">Standard Quality</option> 
                                        <option value="2">Premium Quality</option> 
                                        <option value="27">Platinum Quality</option> </select>
                                         <div id="wrlevels-info" class="hidden"> <div class="wrlevels-info-wrapper"> <div class="wrlevels-info">
                                          <div class="wrlevels-info__close-btn wrlevels-info__close-btn_icon"></div> <div class="wrlevels-info__heading">Level of services</div> <div class="wrlevels-info__item wrlevels-info__item_standard"> <div class="level-info-heading">Standard</div> <ul class="level-info"> <li class="level-info__feature">MA writer</li> <li class="level-info__feature">FREE add-ons</li> <li class="level-info__feature">Plagiarism check</li> </ul> <div class="level-price"> <div class="level-price__value" id="standard-cpp"></div> <a href="javascript:void(0)" class="level-price__btn" data-level="standard-wrlevel">Choose it</a> </div> </div> <div class="wrlevels-info__item wrlevels-info__item_premium"> <div class="level-info-heading level-info-heading_premium"> Premium </div> <ul class="level-info"> <li class="level-info__feature">MA/PhD writer</li> <li class="level-info__feature">Free add-ons</li> <li class="level-info__feature">High priority order</li> <li class="level-info__feature">Advanced plagiarism check</li> </ul> <div class="level-price"> <div class="level-price__value" id="premium-cpp"></div> <a href="javascript:void(0)" class="level-price__btn" data-level="premium-wrlevel">Choose it</a> </div> </div> <div class="wrlevels-info__item wrlevels-info__item_platinum"> <div class="level-info-heading">Platinum</div> <ul class="level-info"> <li class="level-info__feature">MA/PhD writer</li> <li class="level-info__feature">Free add-ons</li> <li class="level-info__feature">High priority order</li> <li class="level-info__feature">Advanced plagiarism check</li> <li class="level-info__feature">Writer with 5+ years of experience</li> </ul> <div class="level-price"> <div class="level-price__value" id="platinum-cpp"></div> <a href="javascript:void(0)" class="level-price__btn" data-level="platinum-wrlevel">Choose it</a> </div> </div> <div class="wrlevels-info__close-btn">Closed</div> </div> </div> </div> </div> <div class="field__error validation_error" id="error_wrlevel"></div> </div> </div> </td> </tr> <tr id="row_numpages" class="step__item step__item_numpages "> <td> <div class="field "> <label class="field__label" for="numpages"> Number of pages/words </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_select"> <select id="numpages" name="numpages" size="1" data-value=""> <option value="0">0</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> <option value="11">11</option> <option value="12">12</option> <option value="13">13</option> <option value="14">14</option> <option value="15">15</option> <option value="16">16</option> <option value="17">17</option> <option value="18">18</option> <option value="19">19</option> <option value="20">20</option> <option value="21">21</option> <option value="22">22</option> <option value="23">23</option> <option value="24">24</option> <option value="25">25</option> <option value="26">26</option> <option value="27">27</option> <option value="28">28</option> <option value="29">29</option> <option value="30">30</option> <option value="31">31</option> <option value="32">32</option> <option value="33">33</option> <option value="34">34</option> <option value="35">35</option> <option value="36">36</option> <option value="37">37</option> <option value="38">38</option> <option value="39">39</option> <option value="40">40</option> <option value="41">41</option> <option value="42">42</option> <option value="43">43</option> <option value="44">44</option> <option value="45">45</option> <option value="46">46</option> <option value="47">47</option> <option value="48">48</option> <option value="49">49</option> <option value="50">50</option> <option value="51">51</option> <option value="52">52</option> <option value="53">53</option> <option value="54">54</option> <option value="55">55</option> <option value="56">56</option> <option value="57">57</option> <option value="58">58</option> <option value="59">59</option> <option value="60">60</option> <option value="61">61</option> <option value="62">62</option> <option value="63">63</option> <option value="64">64</option> <option value="65">65</option> <option value="66">66</option> <option value="67">67</option> <option value="68">68</option> <option value="69">69</option> <option value="70">70</option> <option value="71">71</option> <option value="72">72</option> <option value="73">73</option> <option value="74">74</option> <option value="75">75</option> <option value="76">76</option> <option value="77">77</option> <option value="78">78</option> <option value="79">79</option> <option value="80">80</option> <option value="81">81</option> <option value="82">82</option> <option value="83">83</option> <option value="84">84</option> <option value="85">85</option> <option value="86">86</option> <option value="87">87</option> <option value="88">88</option> <option value="89">89</option> <option value="90">90</option> <option value="91">91</option> <option value="92">92</option> <option value="93">93</option> <option value="94">94</option> <option value="95">95</option> <option value="96">96</option> <option value="97">97</option> <option value="98">98</option> <option value="99">99</option> <option value="100">100</option> <option value="101">101</option> <option value="102">102</option> <option value="103">103</option> <option value="104">104</option> <option value="105">105</option> <option value="106">106</option> <option value="107">107</option> <option value="108">108</option> <option value="109">109</option> <option value="110">110</option> <option value="111">111</option> <option value="112">112</option> <option value="113">113</option> <option value="114">114</option> <option value="115">115</option> <option value="116">116</option> <option value="117">117</option> <option value="118">118</option> <option value="119">119</option> <option value="120">120</option> <option value="121">121</option> <option value="122">122</option> <option value="123">123</option> <option value="124">124</option> <option value="125">125</option> <option value="126">126</option> <option value="127">127</option> <option value="128">128</option> <option value="129">129</option> <option value="130">130</option> <option value="131">131</option> <option value="132">132</option> <option value="133">133</option> <option value="134">134</option> <option value="135">135</option> <option value="136">136</option> <option value="137">137</option> <option value="138">138</option> <option value="139">139</option> <option value="140">140</option> <option value="141">141</option> <option value="142">142</option> <option value="143">143</option> <option value="144">144</option> <option value="145">145</option> <option value="146">146</option> <option value="147">147</option> <option value="148">148</option> <option value="149">149</option> <option value="150">150</option> <option value="151">151</option> <option value="152">152</option> <option value="153">153</option> <option value="154">154</option> <option value="155">155</option> <option value="156">156</option> <option value="157">157</option> <option value="158">158</option> <option value="159">159</option> <option value="160">160</option> <option value="161">161</option> <option value="162">162</option> <option value="163">163</option> <option value="164">164</option> <option value="165">165</option> <option value="166">166</option> <option value="167">167</option> <option value="168">168</option> <option value="169">169</option> <option value="170">170</option> <option value="171">171</option> <option value="172">172</option> <option value="173">173</option> <option value="174">174</option> <option value="175">175</option> <option value="176">176</option> <option value="177">177</option> <option value="178">178</option> <option value="179">179</option> <option value="180">180</option> <option value="181">181</option> <option value="182">182</option> <option value="183">183</option> <option value="184">184</option> <option value="185">185</option> <option value="186">186</option> <option value="187">187</option> <option value="188">188</option> <option value="189">189</option> <option value="190">190</option> <option value="191">191</option> <option value="192">192</option> <option value="193">193</option> <option value="194">194</option> <option value="195">195</option> <option value="196">196</option> <option value="197">197</option> <option value="198">198</option> <option value="199">199</option> <option value="200">200</option> </select> </div> <div class="field__error validation_error" id="error_numpages">Select number of pages</div> </div> </div> </td> </tr> <tr id="row_o_interval" class="step__item step__item_o_interval "> <td> <div class="field "> <label class="field__label" for="o_interval"> Spacing </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_text-input"> <select id="o_interval" name="o_interval" size="1" class=" linear"> <option value="0">Double Spaced</option> <option value="1">Single Spaced</option> </select> </div> <div class="field__error validation_error" id="error_o_interval"></div> </div> </div> </td> </tr> <tr id="row_order_category" class="step__item step__item_order_category "> <td> <div class="field "> <label class="field__label" for="order_category"> Subject area </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_select"> <select id="order_category" name="order_category" size="1"> <option disabled>Popular:</option> <option value="52" selected="selected">Business</option> <option value="54">Management</option> <option value="9">English</option> <option value="101">Nursing</option> <option value="53">Economics</option> <option disabled>--------------------------------------------------</option> <option disabled>Alphabetical:</option> <option value="10">Art</option> <option value="12">&nbsp;
 &nbsp;
 Architecture</option> <option value="15">&nbsp;
 &nbsp;
 Dance</option> <option value="17">&nbsp;
 &nbsp;
 Design Analysis</option> <option value="13">&nbsp;
 &nbsp;
 Drama</option> <option value="16">&nbsp;
 &nbsp;
 Movies</option> <option value="18">&nbsp;
 &nbsp;
 Music</option> <option value="11">&nbsp;
 &nbsp;
 Paintings</option> <option value="14">&nbsp;
 &nbsp;
 Theatre</option> <option value="112">Biology</option> <option value="52">Business</option> <option value="111">Chemistry</option> <option value="102">Communications and Media</option> <option value="105">&nbsp;
 &nbsp;
 Advertising</option> <option value="107">&nbsp;
 &nbsp;
 Communication Strategies</option> <option value="103">&nbsp;
 &nbsp;
 Journalism</option> <option value="104">&nbsp;
 &nbsp;
 Public Relations</option> <option value="53">Economics</option> <option value="60">&nbsp;
 &nbsp;
 Accounting</option> <option value="58">&nbsp;
 &nbsp;
 Company Analysis</option> <option value="62">&nbsp;
 &nbsp;
 E-Commerce</option> <option value="59">&nbsp;
 &nbsp;
 Finance</option> <option value="117">&nbsp;
 &nbsp;
 International Affairs/Relations</option> <option value="57">&nbsp;
 &nbsp;
 Investment</option> <option value="63">&nbsp;
 &nbsp;
 Logistics</option> <option value="64">&nbsp;
 &nbsp;
 Trade</option> <option value="87">Education</option> <option value="93">&nbsp;
 &nbsp;
 Application Essay</option> <option value="89">&nbsp;
 &nbsp;
 Education Theories</option> <option value="88">&nbsp;
 &nbsp;
 Pedagogy</option> <option value="90">&nbsp;
 &nbsp;
 Teacher's Career</option>
 <option value="67">Engineering</option> <option value="9">English</option> <option value="24">Ethics</option> <option value="36">History</option> <option value="38">&nbsp;
 &nbsp;
 African-American Studies</option> <option value="37">&nbsp;
 &nbsp;
 American History</option> <option value="42">&nbsp;
 &nbsp;
 Asian Studies</option> <option value="41">&nbsp;
 &nbsp;
 Canadian Studies</option> <option value="44">&nbsp;
 &nbsp;
 East European Studies</option> <option value="45">&nbsp;
 &nbsp;
 Holocaust</option> <option value="40">&nbsp;
 &nbsp;
 Latin-American Studies</option> <option value="39">&nbsp;
 &nbsp;
 Native-American Studies</option> <option value="43">&nbsp;
 &nbsp;
 West European Studies</option> <option value="47">Law</option> <option value="49">&nbsp;
 &nbsp;
 Criminology</option> <option value="48">&nbsp;
 &nbsp;
 Legal Issues</option> <option value="7">Linguistics</option> <option value="2">Literature</option> <option value="4">&nbsp;
 &nbsp;
 American Literature</option> <option value="5">&nbsp;
 &nbsp;
 Antique Literature</option> <option value="6">&nbsp;
 &nbsp;
 Asian Literature</option> <option value="3">&nbsp;
 &nbsp;
 English Literature</option> <option value="116">&nbsp;
 &nbsp;
 Shakespeare Studies</option> <option value="54">Management</option> <option value="56">Marketing</option> <option value="51">Mathematics</option> <option value="94">Medicine and Health</option> <option value="99">&nbsp;
 &nbsp;
 Alternative Medicine</option> <option value="97">&nbsp;
 &nbsp;
 Healthcare</option> <option value="101">&nbsp;
 &nbsp;
 Nursing</option> <option value="95">&nbsp;
 &nbsp;
 Nutrition</option> <option value="100">&nbsp;
 &nbsp;
 Pharmacology</option> <option value="96">&nbsp;
 &nbsp;
 Sport</option> <option value="78">Nature</option> <option value="85">&nbsp;
 &nbsp;
 Agricultural Studies</option> <option value="113">&nbsp;
 &nbsp;
 Anthropology</option> <option value="86">&nbsp;
 &nbsp;
 Astronomy</option> <option value="83">&nbsp;
 &nbsp;
 Environmental Issues</option> <option value="79">&nbsp;
 &nbsp;
 Geography</option> <option value="80">&nbsp;
 &nbsp;
 Geology</option> <option value="28">Philosophy</option> <option value="110">Physics</option> <option value="29">Political Science</option> <option value="21">Psychology</option> <option value="108">Religion and Theology</option> <option value="22">Sociology</option> <option value="139">Statistics</option> <option value="65">Technology</option> <option value="71">&nbsp;
 &nbsp;
 Aeronautics</option> <option value="70">&nbsp;
 &nbsp;
 Aviation</option> <option value="72">&nbsp;
 &nbsp;
 Computer Science</option> <option value="73">&nbsp;
 &nbsp;
 Internet</option> <option value="75">&nbsp;
 &nbsp;
 IT Management</option> <option value="77">&nbsp;
 &nbsp;
 Web Design</option> <option value="114">Tourism</option> </select> </div> <div class="field__error validation_error" id="error_order_category">Select subject area</div> </div> </div> </td> </tr> <tr id="row_details" class="step__item step__item_details "> <td> <div class="field "> <label class="field__label" for="details"> Order description(type your instructions here) </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_text-input"> <textarea id="details" name="details" rows="7" cols="0"></textarea> </div> <div class="field__error validation_error" id="error_details">Type order description</div> <div class="field__error validation_error" id="error_details_words"> <b><span style="color: red;">Attention!</span> Please don't provide access to any of your personal accounts in order description field. Please move them to the fields below.</b> </div>
 </div> </div> </td> </tr> <tr id="row_online_account_login" class="step__item step__item_online_account_login hidden"> <td> <div class="field "> <label class="field__label" for="online_account_login"> Login for writer </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_text-input"> <input id="online_account_login" name="online_account_login" type="text" value="" size="10" /> </div> <div class="field__error validation_error" id="error_online_account_login"></div> </div> </div> </td> </tr> <tr id="row_online_account_password" class="step__item step__item_online_account_password hidden"> <td> <div class="field "> <label class="field__label" for="online_account_password"> Password for writer </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_text-input"> <input id="online_account_password" name="online_account_password" type="text" value="" size="10" /> </div> <div class="field__error validation_error" id="error_online_account_password"></div> </div> </div> </td> </tr> <tr id="row_will_upload_files" class="step__item step__item_will_upload_files "> <td> <div class="field "> <label class="field__label" for="will_upload_files"> I will upload additional files later in my account </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_text-input"> <div class="upload-area"> <div class="form_el_container"> <div class="attachFileBlock"> <div id="file-uploader"> </div> </div> </div> <div class="field__error validation_error" id="error_numpages">Please upload your document</div> </div> </div> <div class="field__error validation_error" id="error_will_upload_files"></div> </div> </div> </td> </tr> </tbody> <tbody class="step step_2" data-step="1" data-step-name="Additional info"> <tr class="step__item step__item_vases"> <td class="vases-wrapper"> <div class="field field_vas additional_153_wrap " id="row_additional_153"> <input id="additional_153" name="additional[153]" type="checkbox" value="additional[153]" size="1"> <label id="label_additional_153" class="field__label field__label_vas" for="additional_153"> Fulfilled by top 10 writers </label> <span class="expander"></span> <div class="field__wrapper field__wrapper_vas "> <span class="free_discounts" id="additional_153_free_discounts"> $ 11.00 </span> <span class="vas_price" id="additional_153_price">$ 11.00</span> <span class="vas_price free_discounts_price" id="153_free_price">FREE</span> <a title="Order the paper to be written by one of the most qualified 10 specialists in your subject area to get an outstanding assignment" class="field__hint field__hint_common field__hint_vas field_hint" href="javascript:void(0);"></a> </div> </div> <div class="field field_vas additional_147_wrap " id="row_additional_147"> <input id="additional_147" name="additional[147]" type="checkbox" value="additional[147]" size="1"> <label id="label_additional_147" class="field__label field__label_vas" for="additional_147"> VIP support </label> <span class="expander"></span> <div class="field__wrapper field__wrapper_vas "> <span class="free_discounts" id="additional_147_free_discounts"> $ 9.99 </span> <span class="vas_price" id="additional_147_price">$ 9.99</span> <span class="vas_price free_discounts_price" id="147_free_price">FREE</span> <a title="<p><b>We offer you a new service - VIP Support!</b><br /> You will be impressed with the speed in which your call is attended to, the professionalism of the customer service agent and the final results of live communication with our service representative! See for yourself the advantage of our VIP service option.</p>" class="field__hint field__hint_common field__hint_vas field_hint" href="javascript:void(0);"></a> </div> </div> <div class="field field_vas additional_152_wrap " id="row_additional_152"> <input id="additional_152" name="additional[152]" type="checkbox" value="additional[152]" size="1"> <label id="label_additional_152" class="field__label field__label_vas" for="additional_152"> Proofread by editor </label> <span class="expander"></span> <div class="field__wrapper field__wrapper_vas "> <span class="free_discounts" id="additional_152_free_discounts"> $ 5.74 </span> <span class="vas_price" id="additional_152_price">$ 5.74</span> <span class="vas_price free_discounts_price" id="152_free_price">FREE</span> <a title="If you choose this option, a professional editor dealing with academic writing for over 15 years will additionally review the finished paper and polish it to satisfy the strictest academic assessment" class="field__hint field__hint_common field__hint_vas field_hint" href="javascript:void(0);"></a> </div> </div> <div class="field field_vas additional_151_wrap " id="row_additional_151"> <input id="additional_151" name="additional[151]" type="checkbox" value="additional[151]" size="1"> <label id="label_additional_151" class="field__label field__label_vas" for="additional_151"> VIP Service package </label> <span class="expander"></span> <div class="field__wrapper field__wrapper_vas "> <span class="free_discounts" id="additional_151_free_discounts"> $ 16.03 </span> <span class="vas_price" id="additional_151_price">$ 16.03</span> <span class="vas_price free_discounts_price" id="151_free_price">FREE</span> <a title="Special offer! Do not miss your chance to order <b>VIP services package</b> - VIP support, Fulfilled by top 10 writers option and Proofreading by editor - with <b>40% discount</b>" class="field__hint field__hint_common field__hint_vas field_hint" href="javascript:void(0);"></a> </div> </div> <div class="field field_vas additional_131_wrap " id="row_additional_131"> <input id="additional_131" name="additional[131]" type="checkbox" value="additional[131]" size="1"> <label id="label_additional_131" class="field__label field__label_vas" for="additional_131"> 1-page summary of your paper </label> <span class="expander"></span> <div class="field__wrapper field__wrapper_vas "> <span class="free_discounts" id="additional_131_free_discounts"> $ 22.99 </span> <span class="vas_price" id="additional_131_price">$ 22.99</span> <span class="vas_price free_discounts_price" id="131_free_price">FREE</span> <a title="The whole paper briefly on 1 page - for you to get the main points of the research and ready for the tentative questions from your tutor. Advised to those who will also be asked live on the topic researched" class="field__hint field__hint_common field__hint_vas field_hint" href="javascript:void(0);"></a> </div> </div> <div class="field field_vas additional_164_wrap " id="row_additional_164"> <input id="additional_164" name="additional[164]" type="checkbox" value="additional[164]" size="1"> <label id="label_additional_164" class="field__label field__label_vas" for="additional_164"> I want a plagiarism report </label> <span class="expander"></span> <div class="field__wrapper field__wrapper_vas "> <span class="free_discounts" id="additional_164_free_discounts"> $ 2.29 </span> <span class="vas_price" id="additional_164_price">$ 2.29</span> <span class="vas_price free_discounts_price" id="164_free_price">FREE</span> <a title="Order a plagiarism report of your paper to make sure that the order is of top quality and custom written. Plagiarism report will be delivered in 48 hours after order completion" class="field__hint field__hint_common field__hint_vas field_hint" href="javascript:void(0);"></a> </div> </div> <div class="field field_vas additional_204_wrap " id="row_additional_204"> <input id="additional_204" name="additional[204]" type="checkbox" value="additional[204]" size="1"> <label id="label_additional_204" class="field__label field__label_vas" for="additional_204"> I want UK writer </label> <span class="expander"></span> <div class="field__wrapper field__wrapper_vas "> <span class="free_discounts" id="additional_204_free_discounts"> $ 2.29 </span> <span class="vas_price" id="additional_204_price">$ 2.29</span> <span class="vas_price free_discounts_price" id="204_free_price">FREE</span> <a title="" class="field__hint field__hint_common field__hint_vas field_hint" href="javascript:void(0);"></a> </div> </div> <div class="field field_vas additional_303_wrap " id="row_additional_303"> <input id="additional_303" name="additional[303]" type="checkbox" value="additional[303]" size="1"> <label id="label_additional_303" class="field__label field__label_vas" for="additional_303"> Power Point Presentation </label> <span class="expander"></span> <div class="field__wrapper field__wrapper_vas "> <span class="free_discounts" id="additional_303_free_discounts"> $ 16.98 </span> <span class="vas_price" id="additional_303_price">$ 16.98</span> <span class="vas_price free_discounts_price" id="303_free_price">FREE</span> <a title="A PowerPoint presentation is a presentation created using Microsoft PowerPoint software. The presentation is a collection of individual slides that contain information on a topic." class="field__hint field__hint_common field__hint_vas field_hint" href="javascript:void(0);"></a> </div> <div class="ppt-wrapper"> <label class="field__label" for="count_additional_303"> Number of slides: </label> <div class="input-wrapper input-wrapper_select"> <select id="count_additional_303" name="count_additional[303]"> <option value="1"> 1 slide(s) </option> <option value="2"> 2 slide(s) </option> <option value="3"> 3 slide(s) </option> <option value="4"> 4 slide(s) </option> <option value="5"> 5 slide(s) </option> <option value="6"> 6 slide(s) </option> <option value="7"> 7 slide(s) </option> <option value="8"> 8 slide(s) </option> <option value="9"> 9 slide(s) </option> <option value="10"> 10 slide(s) </option> <option value="11"> 11 slide(s) </option> <option value="12"> 12 slide(s) </option> <option value="13"> 13 slide(s) </option> <option value="14"> 14 slide(s) </option> <option value="15"> 15 slide(s) </option> <option value="16"> 16 slide(s) </option> <option value="17"> 17 slide(s) </option> <option value="18"> 18 slide(s) </option> <option value="19"> 19 slide(s) </option> <option value="20"> 20 slide(s) </option> <option value="21"> 21 slide(s) </option> <option value="22"> 22 slide(s) </option> <option value="23"> 23 slide(s) </option> <option value="24"> 24 slide(s) </option> <option value="25"> 25 slide(s) </option> <option value="26"> 26 slide(s) </option> <option value="27"> 27 slide(s) </option> <option value="28"> 28 slide(s) </option> <option value="29"> 29 slide(s) </option> <option value="30"> 30 slide(s) </option> <option value="31"> 31 slide(s) </option> <option value="32"> 32 slide(s) </option> <option value="33"> 33 slide(s) </option> <option value="34"> 34 slide(s) </option> <option value="35"> 35 slide(s) </option> <option value="36"> 36 slide(s) </option> <option value="37"> 37 slide(s) </option> <option value="38"> 38 slide(s) </option> <option value="39"> 39 slide(s) </option> <option value="40"> 40 slide(s) </option> <option value="41"> 41 slide(s) </option> <option value="42"> 42 slide(s) </option> <option value="43"> 43 slide(s) </option> <option value="44"> 44 slide(s) </option> <option value="45"> 45 slide(s) </option> <option value="46"> 46 slide(s) </option> <option value="47"> 47 slide(s) </option> <option value="48"> 48 slide(s) </option> <option value="49"> 49 slide(s) </option> <option value="50"> 50 slide(s) </option> </select> </div> </div> </div> </td> </tr> <tr id="row_refering_from" class="step__item step__item_refering_from hidden"> <td> <div class="field"> <label class="field__label" for="refering_from"> Refering from </label> <div class="field__wrapper "> <div class="input-wrapper input-wrapper_text-input"> <input id="refering_from" name="refering_from" type="hidden" value="" size="10" /> </div> <div class="field__error validation_error" id="error_refering_from"></div> </div> </div> </td> </tr> <tr id="row_academic_level" class="step__item step__item_academic_level "> <td> <div class="field"> <label class="field__label" for="academic_level"> Academic Level </label> <div class="field__wrapper "> <div class="input-wrapper input-wrapper_select "> <select id="academic_level" name="academic_level" size="1"> <option value="select">select</option> <option value="High School">High School</option> <option value="Undergraduate">Undergraduate</option> <option value="Master">Master</option> <option value="PhD">PhD</option> </select> </div> <div class="field__error validation_error" id="error_academic_level"></div> </div> </div> </td> </tr> <tr id="row_style" class="step__item step__item_style "> <td> <div class="field"> <label class="field__label" for="style"> Style </label> <div class="field__wrapper "> <div class="input-wrapper input-wrapper_select "> <select id="style" name="style" size="1"> <option value="1">APA</option> <option value="2">MLA</option> <option value="3">Turabian</option> <option value="4">Chicago</option> <option value="5">Harvard</option> <option value="6">Oxford</option> <option value="8">Vancouver</option> <option value="9">CSE</option> <option value="7">Other</option> </select> </div> <div class="field__error validation_error" id="error_style"></div> </div> <a title="<p><strong>MLA</strong> (Modern Language Association) style is most commonly used to write papers and cite sources within the liberal arts and humanities.</p>
 <p><strong>APA</strong> (American Psychological Association) is most commonly used to cite sources within the social sciences.</p> <p><strong>Chicago/Turabian</strong> style places bibliographic citations at the bottom of a page or at the end of a paper. The Chicago and Turabian styles are most commonly thought of as note systems.</p> <p><strong>Harvard</strong> referencing is the preferred style of the British Standards Institution. It is used mostly in the sciences and social sciences.</p> <p><strong>Oxford</strong> style is also referred to as the documentary-note system.</p> <p>The <strong>Vancouver</strong> style that was initially developed by an international committee of medical journal editors meeting in 1978 in Vancouver.</p> <p><strong>CSE</strong> (Council of Science Editor) - formerly called CBE is used in scientific studies.</p>" class="field__hint field__hint_common field_hint" href="javascript:void(0);
 "></a>
 </div> </td> </tr> <tr id="row_langstyle" class="step__item step__item_langstyle "> <td> <div class="field"> <label class="field__label" for="langstyle"> Preferred language style </label> <div class="field__wrapper  langstyle_content"> <div class="input-wrapper input-wrapper_select "> <select id="langstyle" name="langstyle" size="1" class=" linear"> <option value="1">English (U.S.)</option> <option value="2">English (U.K.)</option> </select> </div> <div class="field__error validation_error" id="error_langstyle"></div> </div> <a title="Although we are an American company we have British writers on staff. So, please choose an appropriate language style." class="field__hint field__hint_common field_hint" href="javascript:void(0);"></a> </div> </td> </tr> <tr id="row_preff_wr_id" class="step__item step__item_preff_wr_id "> <td> <div class="field"> <label class="field__label" for="preff_wr_id"> Preferred writer's ID </label>
 <div class="field__wrapper "> <input type="hidden" value="9" id="preff_wr_id_max" /> <ul id="preff_wr_id" class="prefflist"> <li> <input id="preff_wr_id" type="text" value="" name="preff_wr_id[]" /> <div class="add-phone"> <img class="add" src="<?php echo base_url() ?>front_assets/images/adaptive/add_phone3.png" border="0" title="Add writer" alt="+" style="display: inline;"> </div> </li> </ul> <div class="field__error validation_error" id="error_preff_wr_id">Your preferred writer is currently not available,
 please choose another writer.</div> <div style="display: none;" id="prefwriter_urgency_attention" class="brdata0"><span style="color: red">Attention!</span> The preferred writer option is available for orders with an urgency of 3 days and more.</div> </div> <a title="<center><b>Attention regular customers!</b></center><br/>To better serve you and help you find the perfect match, you now have the opportunity to choose the writer that you like to complete your order. If you select this option and choose your preferred writer when placing your order, you will be charged an additional +20%.  This payment will go directly to the writer as an additional compensation. This will ensure that your order will get the highest priority among all others.<p>If for some reason your chosen writer can not complete your order, it will be taken by another professional writer and completed on time. Your additional payment will be stored as a credit and you can use it for your next order with us. In the event that you choose several different preferred writers your order will be taken by the first available preferred writer." class="field__hint field__hint_common field_hint" href="javascript:void(0);"></a> </div> </td> </tr> <tr class="step__item step__item_summary"> <td> <div id="order-summary" class="orderform__summary order-summary order-summary_default"> <h2 class="summary-heading">Summary</h2> <div class="summary-content"> <div class="summary-content__item summary-content__item_doctype-details"> <div class="summary-content__subitem summary-content__subitem_doctype" data-summary="doctype"></div> <div class="summary-content__subitem summary-content__subitem_numpapers" data-summary="numpapers"></div> <div class="summary-content__subitem summary-content__subitem_numpages" data-summary="numpages"></div> <div class="summary-content__subitem summary-content__subitem_o_interval" data-summary="o_interval"></div> </div> <div class="summary-content__item summary-content__item_vases-details" data-summary="vases"></div> <div id="currencySwitcher" class="summary-content__item summary-content__item_curr "> <label class="summary-content__item-label summary-content__item-label_curr" for="curr"> <label for="curr">Currency</label> </label> <div class="field__wrapper"> <div class="input-wrapper"> <select id="curr" name="curr" size="1" class=" linear"> <option value="USD" selected="selected">USD</option> <option value="EUR">EUR</option> <option value="GBP">GBP</option> <option value="AUD">AUD</option> </select> </div> <div class="field__error validation_error" id="error_curr"></div> </div> </div> <div class="summary-content__item summary-content__item_cost_per_page "> <label class="summary-content__item-label summary-content__item-label_cost_per_page" for="cost_per_page"> <label for="cost_per_page">Cost per page</label> </label> <div class="field__wrapper"> <div class="input-wrapper"> <span id="cost_per_page" class="readonlyinput">$ 22.99</span> </div> <div class="field__error validation_error" id="error_cost_per_page"></div> </div> </div> <div class="summary-content__item summary-content__item_total"> <label for="total" class="summary-content__item-label summary-content__item-label_total">Total:</label> <span class="readonlyinput" id="total"></span> <span style="display: none" id="discount_span"> <span id="discount_percent"> 0 </span>% You save <span class="readonlyinput" id="discount">$0.00</span> </span> <span class="mob-border"></span> </div> <div class="summary-content__item summary-content__item_promo"> <div id="promo-area"> <a id="enter-discount" title="Please, be aware that membership discounts are not applied to extras and preferred writer's features" class="field_hint" href="javascript:void(0);"> <span class="promo-link">Have a discount code?</span> </a> <div id="discount-field"> <input id="promo" name="promo" type="text" value="" size="27" placeholder="discount code" /> <a href="javascript:void(0)" id="clear-promo-field" class="" type="button"></a> <a href="javascript:void(0)" id="check-promo-field" class="field_hint" title="" type="button">OK</a> <div id="promo-loader"></div> <div id="promo-warning">Sorry,
 but this code is not valid</div> </div> <div id="discount-notice">Discounts are applied to orders over <span id="discount-notice-sum"></span>.</div> </div> </div> <div class="summary-content__item summary-content__item_accept hidden"> <label class="summary-content__item-label summary-content__item-label_accept" for="accept"> </label> <div class="field__wrapper"> <div class="input-wrapper"> <ul id="accept" class="radiolist"> <li> <input type="radio" id="accept_1" name="accept" value="1" checked="checked" /> <label for="accept_1">I accept <a target="_blank" href="../disclaimer.html">terms and conditions</a> <br/> </label> </li> <li> <input type="radio" id="accept_2" name="accept" value="0" /> <label for="accept_2">I do not accept terms and conditions</label> </li> </ul> </div> <div class="field__error validation_error" id="error_accept">You must accept terms and conditions</div> </div> </div> </div> </div> </td> </tr> </tbody> </table> </td> </tr> </tbody> <tbody id="personal_info" class="table-block step step_3" data-step="2" data-step-name="Contact Info"> <tr class="step__item"> <td> <a title="<span class='security-hint'>Your personal information is protected by 256-bit encryption. We will never share your personal information with writers or/and any third parties</span>" class="security-notice field_hint" href="javascript:void(0);"> Your personal information is secured </a> </td> </tr> <tr id="row_firstname" class="step__item"> <td> <div class="field"> <label class="field__label" for="firstname"> Your name </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_text-input"> <input id="name" name="name" type="text" value="" /> </div> <div class="field__error validation_error" id="error_name"> Enter your first name </div> </div> </div> </td> </tr> <tr id="row_email" class="step__item step__item_email"> <td> <div class="field"> <label class="field__label" for="email"> Email </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_text-input"> <input id="email" name="email" type="text" value="" /> </div> <div class="field__error validation_error" id="error_email"> Enter valid email address </div> </div> </div> </td> </tr> <tr id="row_retype_email" class="step__item step__item_retype_email hidden"> <td> <div class="field"> <label class="field__label" for="retype_email"> Re-type email </label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_text-input"> <input id="retype_email" name="retype_email" type="text" value="" /> </div> <div class="field__error validation_error" id="error_retype_email"> Email addresses do not coincide </div> </div> </div> </td> </tr> <tr id="row_country" class="step__item step__item_country"> <td> <div class="field"> <label class="field__label" for="country">Contact phone</label> <div class="field__wrapper"> <div class="input-wrapper input-wrapper_select input-wrapper_select-country"> <select id="country" name="country" data-insertto="phone1_country phone2_country"> <option value="">select country code</option> <option value="3">USA - 1</option> <option value="17">Australia - 61</option> <option value="240">Canada - 1</option> <option value="192">Saudi Arabia - 966</option> <option value="225">United Arab Emirates - 971</option> <option value="226">United Kingdom - 44</option> <option value="disabled" disabled="disabled" /> <option value="4">Afghanistan - 93</option> <option value="5">Albania - 355</option> <option value="6">Algeria - 213</option> <option value="7">American Samoa - 684</option> <option value="8">Andorra - 376</option> <option value="9">Angola - 244</option> <option value="10">Anguilla - 264*</option> <option value="12">Antigua and Barbuda - 268*</option> <option value="13">Argentina - 54</option> <option value="14">Armenia - 374</option> <option value="15">Aruba - 297</option> <option value="16">Ascension Island - 247</option> <option value="17">Australia - 61</option> <option value="18">Austria - 43</option> <option value="19">Azberbaijan - 994</option> <option value="20">Bahamas - 242*</option> <option value="21">Bahrain - 973</option> <option value="22">Bangladesh - 880</option> <option value="23">Barbados - 246*</option> <option value="25">Belarus - 375</option> <option value="26">Belgium - 32</option> <option value="27">Belize - 501</option> <option value="28">Benin - 229</option> <option value="29">Bermuda - 441*</option> <option value="30">Bhutan - 975</option> <option value="31">Bolivia - 591</option> <option value="32">Bosnia - 387</option> <option value="33">Botswana - 267</option> <option value="34">Brazil - 55</option> <option value="35">British Virgin Islands - 284*</option> <option value="36">Brunei - 673</option> <option value="37">Bulgaria - 359</option> <option value="38">Burkina Faso - 226</option> <option value="40">Burundi - 257</option> <option value="41">Cambodia - 855</option> <option value="42">Cameroon - 237</option> <option value="240">Canada - 1</option> <option value="44">Cape Verde Islands - 238</option> <option value="45">Cayman Islands - 345*</option> <option value="46">Central African Rep. - 236</option> <option value="47">Chad - 235</option> <option value="48">Chile - 56</option> <option value="49">China - 86</option> <option value="50">Christmas Island - 61</option> <option value="52">Colombia - 57</option> <option value="54">Congo - 242</option> <option value="55">Congo,
 Dem. Rep. of - 243</option> <option value="56">Cook Islands - 682</option> <option value="57">Costa Rica - 506</option> <option value="58">Croatia - 385</option> <option value="59">Cuba - 53</option> <option value="60">Cyprus - 357</option> <option value="61">Czech Republic - 420</option> <option value="62">Denmark - 45</option> <option value="64">Djibouti - 253</option> <option value="65">Dominica - 767*</option> <option value="66">Dominican Rep. - 809*</option> <option value="67">Ecuador - 593</option> <option value="68">Egypt - 20</option> <option value="69">El Salvador - 503</option> <option value="70">Equatorial Guinea - 240</option> <option value="71">Eritrea - 291</option> <option value="72">Estonia - 372</option> <option value="73">Ethiopia - 251</option> <option value="74">Faeroe Islands - 298</option> <option value="75">Falkland Islands - 500</option> <option value="76">Fiji Islands - 679</option> <option value="77">Finland - 358</option> <option value="78">France - 33</option> <option value="80">French Guiana - 594</option> <option value="81">French Polynesia - 689</option> <option value="82">Gabon - 241</option> <option value="83">Gambia - 220</option> <option value="84">Georgia - 995</option> <option value="85">Germany - 49</option> <option value="86">Ghana - 233</option> <option value="87">Gibraltar - 350</option> <option value="88">Greece - 30</option> <option value="89">Greenland - 299</option> <option value="90">Grenada - 473*</option> <option value="91">Guadeloupe - 590</option> <option value="92">Guam - 671</option> <option value="94">Guatemala - 502</option> <option value="95">Guinea - 224</option> <option value="96">Guinea Bissau - 245</option> <option value="97">Guyana - 592</option> <option value="98">Haiti - 509</option> <option value="99">Honduras - 504</option> <option value="100">Hong Kong - 852</option> <option value="101">Hungary - 36</option> <option value="102">Iceland - 354</option> <option value="103">India - 91</option> <option value="104">Indonesia - 62</option> <option value="105">Iran - 98</option> <option value="106">Iraq - 964</option> <option value="107">Ireland - 353</option> <option value="108">Israel - 972</option> <option value="109">Italy - 39</option> <option value="111">Jamaica - 876*</option> <option value="112">Japan - 81</option> <option value="113">Jordan - 962</option> <option value="114">Kazakhstan - 7</option> <option value="115">Kenya - 254</option> <option value="116">Kiribati - 686</option> <option value="117">Korea,
 North - 850</option> <option value="118">Korea,
 South - 82</option> <option value="243">Kosovo - 383</option> <option value="119">Kuwait - 965</option> <option value="120">Kyrgyzstan - 996</option> <option value="121">Laos - 856</option> <option value="122">Latvia - 371</option> <option value="123">Lebanon - 961</option> <option value="124">Lesotho - 266</option> <option value="125">Liberia - 231</option> <option value="126">Libya - 218</option> <option value="127">Liechtenstein - 423</option> <option value="128">Lithuania - 370</option> <option value="129">Luxembourg - 352</option> <option value="130">Macau - 853</option> <option value="131">Macedonia - 389</option> <option value="132">Madagascar - 261</option> <option value="133">Malawi - 265</option> <option value="134">Malaysia - 60</option> <option value="135">Maldives - 960</option> <option value="136">Mali - 223</option> <option value="137">Malta - 356</option> <option value="138">Mariana Islands - 670*</option> <option value="139">Marshall Islands - 692</option> <option value="140">Martinique - 596</option> <option value="141">Mauritania - 222</option> <option value="142">Mauritius - 230</option> <option value="143">Mayotte Islands - 269</option> <option value="144">Mexico - 52</option> <option value="145">Micronesia - 691</option> <option value="147">Moldova - 373</option> <option value="148">Monaco - 377</option> <option value="149">Mongolia - 976</option> <option value="242">Montenegro - 382</option> <option value="150">Montserrat - 664*</option> <option value="151">Morocco - 212</option> <option value="152">Mozambique - 258</option> <option value="153">Myanmar (Burma) - 95</option> <option value="154">Namibia - 264</option> <option value="155">Nauru - 674</option> <option value="156">Nepal - 977</option> <option value="157">Netherlands - 31</option> <option value="158">Netherlands Antilles - 599</option> <option value="160">New Caledonia - 687</option> <option value="161">New Zealand - 64</option> <option value="162">Nicaragua - 505</option> <option value="163">Niger - 227</option> <option value="164">Nigeria - 234</option> <option value="166">Norfolk Island - 672</option> <option value="167">Norway - 47</option> <option value="168">Oman - 968</option> <option value="169" selected="selected">Pakistan - 92</option> <option value="170">Palau - 680</option> <option value="171">Palestine - 970</option> <option value="172">Panama - 507</option> <option value="173">Papua New Guinea - 675</option> <option value="174">Paraguay - 595</option> <option value="175">Peru - 51</option> <option value="176">Philippines - 63</option> <option value="177">Poland - 48</option> <option value="178">Portugal - 351</option> <option value="179">Puerto Rico - 787*</option> <option value="180">Qatar - 974</option> <option value="181">Reunion Island - 262</option> <option value="182">Romania - 40</option> <option value="183">Russia - 7</option> <option value="184">Rwanda - 250</option> <option value="190">San Marino - 378</option> <option value="192">Saudi Arabia - 966</option> <option value="193">Senegal - 221</option> <option value="194">Serbia - 381</option> <option value="195">Seychelles - 248</option> <option value="196">Sierra Leone - 232</option> <option value="197">Singapore - 65</option> <option value="198">Slovakia - 421</option> <option value="199">Slovenia - 386</option> <option value="200">Solomon Islands - 677</option> <option value="201">Somalia - 252</option> <option value="202">South Africa - 27</option> <option value="203">Spain - 34</option> <option value="204">Sri Lanka - 94</option> <option value="185">St. Helena - 290</option> <option value="159">St. Kitts and Nevis - 869*</option> <option value="187">St. Lucia - 758*</option> <option value="189">St. Vincent - 784*</option> <option value="205">Sudan - 249</option> <option value="206">Suriname - 597</option> <option value="207">Swaziland - 268</option> <option value="208">Sweden - 46</option> <option value="209">Switzerland - 41</option> <option value="210">Syria - 963</option> <option value="211">Taiwan - 886</option> <option value="212">Tajikistan - 992</option> <option value="213">Tanzania - 255</option> <option value="214">Thailand - 66</option> <option value="215">Togo - 228</option> <option value="216">Tonga - 676</option> <option value="217">Trinidad &amp;
 Tobago - 868*</option> <option value="218">Tunisia - 216</option> <option value="219">Turkey - 90</option> <option value="220">Turkmenistan - 993</option> <option value="221">Turks &amp;
 Caicos - 649*</option> <option value="222">Tuvalu - 688</option> <option value="241">U.S. Virgin Islands - 340</option> <option value="223">Uganda - 256</option> <option value="224">Ukraine - 380</option> <option value="225">United Arab Emirates - 971</option> <option value="226">United Kingdom - 44</option> <option value="227">Uruguay - 598</option> <option value="3">USA - 1</option> <option value="228">Uzbekistan - 998</option> <option value="229">Vanuatu - 678</option> <option value="230">Vatican City - 39</option> <option value="231">Venezuela - 58</option> <option value="232">Vietnam - 84</option> <option value="234">Wallis &amp;
 Futuna - 681</option> <option value="235">Western Samoa - 685</option> <option value="236">Yemen - 967</option> <option value="238">Zambia - 260</option> <option value="239">Zimbabwe - 263</option> </select> </div> <div class="field__error field__error validation_error" id="error_country"> Select country code </div> </div> </div> </td> </tr> <tr id="row_phone1" class="step__item step__item_phone1"> <td> <div class="field"> <label class="field__label" for="mobile-phone">country code - number</label> <div class="fakefield field__wrapper"> <div class="wrap-f-tel wrap-f-tel__code"> <input id="phone1_country" name="phone1_country" type="text" value="92" readonly="" /> </div> <div class="wrap-f-tel wrap-f-tel__number"> <input id="mobile-phone" type="text" maxlength="13" value=""> <div class="add-phone hidden"> <img id="img_add_phone2" src="<?php echo base_url() ?>front_assets/images/adaptive/add_phone3.png" border="0" alt="add" /> </div> </div> <a title="Enter valid phone number in the following format: country code – area code – phone number " class="field__hint field__hint_common field_hint" href="javascript:void(0);"></a> </div> <div class="hidden-field-phone hidden"> <input id="phone1_number" name="phone1_number" type="text" value="" maxlength="13" /> </div> <div class="field__error validation_error" id="error_phone1"> Enter valid phone number in the following format: country code - phone number </div> <div class="field__error validation_error" id="error_phone1_type"> Select phone type </div> <div id="row_phone2" class="hidden" style="display:none"> <div class="fakefield"> <div class="wrap-f-tel"> <input id="phone2_country" name="phone2_country" type="text" value="92" readonly="" maxlength="3" /> </div> <div class="wrap-f-tel"> <input id="mobile-phone2" type="text" maxlength="13" value=""> <div class="add-phone"> <img id="img_delete_phone2" class="delete" src="<?php echo base_url() ?>front_assets/images/adaptive/close-ic.png" alt="remove" /> </div> </div> </div> <div class="hidden-field-phone"> <input id="phone2_number" name="phone2_number" type="text" value="" maxlength="13" /> </div> <div class="field__error validation_error" id="error_phone2">Enter valid phone number different from Contact phone # 1 in the following format: country code - phone number </div> <div class="field__error validation_error" id="error_phone2_type">Select phone type </div> <div class="phone_hint">(country code - number)</div> </div> </div> </td> </tr> </tbody> </table> </div> <div id="bottom-order-summary"></div> <div class="orderform-controls" data-active-step=""> <button type="button" class="control-btn" data-step-switcher="prev"><span class="control-btn__icon">&larr;
 </span></button> <button id="button_next" type="button" class="control-btn control-btn_accent" data-step-switcher="next"><span class="control-btn__text">Next step</span><span class="control-btn__icon">&rarr;
 </span></button> <button id="submit_order_form" class="control-btn control-btn_accent" name="preview"> <span class="control-btn__text">Proceed my order</span> <span class="submit_order_form__text-loader">Wait a little</span> <span class="loader"></span> <span class="control-btn__icon">&rarr;
 </span> </button> <div class="terms-condition-block"> <p> By placing the order,
 you agree to the <a href="../disclaimer.html" target="_blank">Terms and Conditions</a> </p> </div> </div> </div> <script type="text/javascript"> OrderForm.repaintTable();
 </script> </form> <div id="select-level-popup"> <!--[if lte IE 6.5]><iframe></iframe><![endif]--> <div class="main"> <div class="close"> <a href="#">Close X</a> </div> <table cellspacing="0" cellpadding="0"> <colgroup> <col> <col align="center"> <col align="center"> <col align="center"> </colgroup> <thead> <tr> <th>&nbsp;
 </th> <th>Standard</th> <th>Premium</th> <th>Platinum</th> </tr> </thead> <tbody> <tr> <th> <a title="Stands for an academic degree held by writers serving a specific writer's level" class="field_hint" href="javascript:void(0);"><img alt="?" src="<?php echo base_url() ?>front_assets/images/adaptive/tooltip.png"></a> Writer's background
 </th> <td> MA </td> <td> MA/PhD </td> <td> MA/PhD </td> </tr> <tr> <th> <a title="You get a bibliography, title page, formatting, outline and amendments for FREE" class="field_hint" href="javascript:void(0);"><img alt="?" src="<?php echo base_url() ?>front_assets/images/adaptive/tooltip.png"></a> FREE add-ons </th> <td> <img src="<?php echo base_url() ?>front_assets/images/adaptive/check_icon.svg" alt="yes" width="18" height="18"> </td> <td> <img src="<?php echo base_url() ?>front_assets/images/adaptive/check_icon.svg" alt="yes" width="18" height="18"> </td> <td> <img src="<?php echo base_url() ?>front_assets/images/adaptive/check_icon.svg" alt="yes" width="18" height="18"> </td> </tr> <tr> <th> <a title="Plagiarism check of every paper" class="field_hint" href="javascript:void(0);"><img alt="?" src="<?php echo base_url() ?>front_assets/images/adaptive/tooltip.png"></a> Plagiarism check </th> <td> <img src="<?php echo base_url() ?>front_assets/images/adaptive/check_icon.svg" alt="yes" width="18" height="18"> </td> <td> <img src="<?php echo base_url() ?>front_assets/images/adaptive/check_icon.svg" alt="yes" width="18" height="18"> </td> <td> <img src="<?php echo base_url() ?>front_assets/images/adaptive/check_icon.svg" alt="yes" width="18" height="18"> </td> </tr> <tr> <th> <a title="With the high priority status, your order will be the first in line to get assigned to an expert" class="field_hint" href="javascript:void(0);"><img alt="?" src="../images/adaptive/tooltip.png"></a> High priority order </th> <td class="empty-line"> — </td> <td> <img src="<?php echo base_url() ?>front_assets/images/adaptive/check_icon.svg" alt="yes" width="18" height="18"> </td> <td> <img src="<?php echo base_url() ?>front_assets/images/adaptive/check_icon.svg" alt="yes" width="18" height="18"> </td> </tr> <tr> <th> <a title="Your paper is checked for plagiarism with multiple tools. First, we check it with our own tool, then it's checked with external service" class="field_hint" href="javascript:void(0);"><img alt="?" src="<?php echo base_url() ?>front_assets/images/adaptive/tooltip.png"></a> Advanced plagiarism check </th> <td class="empty-line"> — </td> <td> <img src="<?php echo base_url() ?>front_assets/images/adaptive/check_icon.svg" alt="yes" width="18" height="18"> </td> <td> <img src="<?php echo base_url() ?>front_assets/images/adaptive/check_icon.svg" alt="yes" width="18" height="18"> </td> </tr> <tr> <th> <a title="A writer with 5+ years of experience in academic writing is assigned to your order" class="field_hint" href="javascript:void(0);"><img alt="?" src="<?php echo base_url() ?>front_assets/images/adaptive/tooltip.png"></a> Writer with 5+ years of experience </th> <td class="empty-line"> — </td> <td class="empty-line"> — </td> <td> <img src="<?php echo base_url() ?>front_assets/images/adaptive/check_icon.svg" alt="yes" width="18" height="18"> </td> </tr> <tr> <th> Cost per page </th> <td> <span class="per-page-cost" id="select-level-cpp-standard">$21.99</span> </td> <td> <span class="per-page-cost" id="select-level-cpp-premium">$23.99</span> </td> <td> <span class="per-page-cost" id="select-level-cpp-platinum">$26.99</span> </td> </tr> <tr class="last"> <th> </th> <td> <a href="#" class="submit s1" data-num="1">Submit</a> </td> <td> <a href="#" class="submit s2" data-num="2">Submit</a> </td> <td> <a href="#" class="submit s3" data-num="3">Submit</a> </td> </tr> </tbody> </table> </div> </div> </div> </div> <div class="order_left_column hidden-xs hidden-sm"> <h4>FREE features in every order</h4> <div class="free_features"> <div> <div>FREE</div> </div> <table> <tbody> <tr> <td>Outline</td> <td>$5</td> </tr> <tr> <td>Amendments*</td> <td>$30</td> </tr> <tr> <td>Title Page</td> <td>$5</td> </tr> <tr> <td>Bibliography</td> <td>$15</td> </tr> <tr> <td>Formatting</td> <td>$10</td> </tr> <tr> <td><strong>Total savings:</strong></td> <td><strong>$65</strong></td> </tr> </tbody> </table> <p>(*Provided upon request)</p> </div> <div class="left_column_our_guarantee"> <h5>Our guarantees</h5> <p><strong>Satisfaction guarantee</strong> - free amendments are available upon request</p> <p><strong>100% original writing</strong> - all papers are written from scratch by your request</p> <p><strong>Deadline meeting guarantee</strong> - even 3-hr delivery is available</p> <p><strong>Confidentiality guarantee</strong> - your information is not disclosed to any third part</p> <p><strong>24/7 support guarantee</strong> - we are available any time day or night</p> <p><strong>Money-back guarantee</strong> - just negotiate all issues with support</p> </div> </div> </div> </div> <section class="disclamer"> <div class="disclamer_text"></div> </section> <script> var banner=(function() {
     function removeClass(el, classNm) {
         var currClass=el.getAttribute('class');
         var classResult=currClass.replace(classNm, '');
         el.setAttribute('class', classResult);
     }
     ;
     function addClass(el, classNm) {
         el.setAttribute('class', el.className + ' ' + classNm);
     }
     ;
     function hasClass(el, classNm) {
         var currClass=el.getAttribute('class') || '';
         if (currClass.indexOf(classNm) !=-1) {
             return true;
         }
         else {
             return false;
         }
     }
     ;
     function cookieExists(cookieName) {
         return (document.cookie.indexOf(cookieName) !=-1) ? true: false;
     }
     ;
     function init(bannerUniqueID, buttonUniqueID, cookie) {
         var $banner=$(bannerUniqueID), $button=$(buttonUniqueID), $textAfter=$(buttonUniqueID + ' + h6');
         if (cookieExists(cookie)===true) {
             $button.add($banner).removeClass('firstTime');
             $banner.attr( {
                 href: '/order/', onclick: "_gaq.push(['_trackEvent', 'Button', 'discount_banner_old_customers_new_design', '']);"
             }
             );
             $button.attr( {
                 href: '/order/', onclick: "_gaq.push(['_trackEvent', 'Button', 'top_button_old_customers_new_design', '']);"
             }
             );
             $button.html('REQUEST PAPER NOW');
             $textAfter.hide();
         }
         else {
             $banner.addClass('firstTime');
             $banner.attr( {
                 href: '/order/?promo=begin15', onclick: "_gaq.push(['_trackEvent', 'Button', 'banner_15off_new_design', '']);"
             }
             );
             $button.addClass('firstTime');
             $button.attr( {
                 href: '/order/?promo=begin15', onclick: "_gaq.push(['_trackEvent', 'Button', 'top_button_15off_new_design', '']);"
             }
             );
             $button.html('Try service with <strong>15% discount*</strong>');
             $textAfter.show();
         }
     }
     ;
     return {
         check: init
     }
 }
 
 ());
 </script> <script> banner.check('#dynamicBanner', '#dynamicLink', '_hpo');
 </script> <div class="wrapper-email-popup"> <div class="shadow-wrapp"></div> <div class="block-email-popup"> <div class="close-email-popup"><img src="<?php echo base_url() ?>front_assets/images/cls-but.jpg" alt="X"></div> <div class="wrapper-form"> <form class="email-form" action="#" method="POST"> <div class="wrap-input-field"> <label for="name-user-email">Your name:</label> <input id="name-user-email" type="text"> <div class="error-message">Enter your name</div> </div> <div class="wrap-input-field"> <label for="email-user">Email:</label> <input id="email-user" type="text"> <div class="error-message">Enter valid email address</div> </div> <div class="wrap-input-field"> <input id="send-email" value="Apply" type="button"> </div> </form> </div> <div class="thank-block"> <div class="title-thank">Thank you.</div> <p>Our representatives will contact <br>you within 24 hours.</p> </div> </div> </div> <style> .bcFloat {
     bottom: 0!important;
     right: 0!important;
     top: auto!important;
     left: auto!important;
     position: fixed!important;
 }
 
 </style> <!-- BoldChat Visitor Monitor HTML v5.00 (Website=www.bestessays.com, ChatButton=Dev button float, ChatInvitation=Order Form) --> <script type="text/javascript"> window._bcvma=window._bcvma || [];
 _bcvma.push(["setAccountID", "161178856198874968"]);
 _bcvma.push(["setParameter", "WebsiteID", "1985431959216183439"]);
 _bcvma.push(["setParameter", "VisitInfo", dataLayer[0].userId]);
 _bcvma.push(["setParameter", "InvitationID", "906741597883590584"]);
 _bcvma.push(["addFloat", {
     type: "chat", id: "3771936857143385943"
 }
 
 ]);
 _bcvma.push(["pageViewed"]);
 var bcLoad=function() {
     if (window.bcLoaded) return;
     window.bcLoaded=true;
     var vms=document.createElement("script");
     vms.type="text/javascript";
     vms.async=true;
     vms.src=('https:'==document.location.protocol ? 'https://': 'https://') + "vmss.boldchat.com/aid/161178856198874968/bc.vms4/vms.js";
     var s=document.getElementsByTagName('script')[0];
     s.parentNode.insertBefore(vms, s);
 }
 
 ;
 if (window.pageViewer && pageViewer.load) pageViewer.load();
 else if (document.readyState=="complete") bcLoad();
 else if (window.addEventListener) window.addEventListener('load', bcLoad, false);
 else window.attachEvent('onload', bcLoad);
 </script> <noscript> <a href="https://www.boldchat.com/" title="Live Chat Software" target="_blank"><img alt="Live Chat Software" src="https://vms.boldchat.com/aid/161178856198874968/bc.vmi?wdid=1985431959216183439&amp;vi=userID&amp;curl=" border="0" width="1" height="1" /></a> </noscript> <!-- /BoldChat Visitor Monitor HTML v5.00 --> <!-- Google Tag Manager (noscript) --> <noscript> <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTC9MMT" height="0" width="0" style="display:none;visibility:hidden"></iframe> </noscript> <!-- End Google Tag Manager (noscript) --> <script> var onbeforeunloadFunction=function(e) {
     e=e || window.event;
     if (e) {
         e.returnValue='Leave site? Changes you made will be lost.';
     }
     return 'Leave site? Changes you made will be lost.';
 }
 
 ;
 function handlePageLeave(e) {
     if ( (e.target.tagName==='A' && e.target.getAttribute('href').indexOf('tel') !==-1) || (e.target.tagName==='A' && e.target.getAttribute('href')==='#') || (e.target.id==='submit_order_form') || (e.target.id==='button_next') || (e.target.parentElement && e.target.parentElement.id==='button_next') || (e.target.parentElement && e.target.parentElement.id==='submit_order_form') || e.target.type=='submit') {
         window.onbeforeunload=null;
         return;
     }
     window.onbeforeunload=onbeforeunloadFunction;
 }
 
 document.addEventListener('click', handlePageLeave);
 var paymemntPageForm=document.querySelector('#billing_details');
 if (paymemntPageForm) {
     paymemntPageForm.addEventListener('submit', function() {
         window.onbeforeunload=null
     }
     );
 }
 
 window.onbeforeunload=onbeforeunloadFunction;
 </script> <script src="<?php echo base_url() ?>front_assets/rum-static.pingdom.net/pa-59f072b5f3f14ae82c7b23c6.js" async></script> <script src="<?php echo base_url() ?>front_assets/build/order.daf6a473cd26c5dadecf.js" async></script> </body> </html>