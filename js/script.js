var UCW_CLASS = UCW_CLASS || {};

UCW_CLASS.MAP_FIX = {
    MIOTA: 'IOT',
    NANO: 'XRB',
};

UCW_CLASS.CHART_COLORS = {
    white: {fill: '#ccddff', line: '#4e7ceb'},
    transparent: {fill: '#ccddff', line: '#4e7ceb'},
    red: {fill: '#f44336', line: '#b71c1c'},
    pink: {fill: '#e91e63', line: '#880e4f'},
    purple: {fill: '#9c27b0', line: '#4a148c'},
    deeppurple: {fill: '#673ab7', line: '#311b92'},
    indigo: {fill: '#3f51b5', line: '#1a237e'},
    blue: {fill: '#2196f3', line: '#0d47a1'},
    lightblue: {fill: '#03a9f4', line: '#01579b'},
    cyan: {fill: '#00bcd4', line: '#006064'},
    teal: {fill: '#009688', line: '#004d40'},
    green: {fill: '#4caf50', line: '#1b5e20'},
    lightgreen: {fill: '#8bc34a', line: '#33691e'},
    lime: {fill: '#cddc39', line: '#afb42b'},
    yellow: {fill: '#ffeb3b', line: '#fbc02d'},
    amber: {fill: '#ffc107', line: '#ffa000'},
    orange: {fill: '#ff9800', line: '#f57c00'},
    deeporange: {fill: '#ff5722', line: '#e64a19'},
    brown: {fill: '#795548', line: '#3e2723'},
    grey: {fill: '#9e9e9e', line: '#616161'},
    bluegrey: {fill: '#607d8b', line: '#455a64'},
};

UCW_CLASS.FORMAT_MONEY = function(money){
    var symbol = UCW_SETTINGS.CURRENCY,
        rate = 1;
    
    if(UCW_SETTINGS.RATES.hasOwnProperty(symbol)) {
        rate = UCW_SETTINGS.RATES[symbol];
    } 
    symbol = UCW_SETTINGS.CURRENCY_SYMBOL;
    
    money = new String(money * rate);
    var dec = money.split(".");
    if(typeof dec[1] != 'undefined' && dec[1].length > 2 && (money > 1 || money < -1)) {
        money = numeral(money).format('0,0.[00]');
    } else {
        money = numeral(money).format('0,0.00[00]');
    }
    return symbol + ' ' + money;
};

UCW_CLASS.MONEY_RATES = function(money){
    var symbol = UCW_SETTINGS.CURRENCY,
        rate = 1;
    
    if(UCW_SETTINGS.RATES.hasOwnProperty(symbol)) {
        rate = UCW_SETTINGS.RATES[symbol];
    }
    money = new String(money * rate);
    return money;
};

UCW_CLASS.FORMAT_NUMBER = function(money){
    money = new String(money);  
    var dec = money.split(".");
    if(typeof dec[1] != 'undefined' && dec[1].length > 2 && (money > 1 || money < -1)) {
        money = numeral(money).format('0,0.[00]');
    } else {
        money = numeral(money).format('0,0.00[00]');
    }
    return money;
};

(function(UCW_CLASS, $) {
    'use strict';

    UCW_CLASS = UCW_CLASS || {};
    $.extend(UCW_CLASS, {

        CRYPTO: {
            init: function() {
                this.loadData(this);
                this.loadChart24h();
                this.loadSparkChart24h();
                this.loadTable(this);
                this.live(this);
                this.loadTableCompare();
                this.loadChart();
                this.loadCalculator();
            },
            loadCoinImage: function(){
                $('[data-coin-image]').each(function( index ) {
                    var coin = $(this).attr('data-coin-image');
                    if(typeof UCW_CLASS.MAP_FIX[coin] != 'undefined') {
                        coin = UCW_CLASS.MAP_FIX[coin];
                    }
                    if(typeof UCW_SETTINGS.IMAGES[coin] !== 'undefined') {
                        $(this).css({backgroundImage: 'url('+UCW_SETTINGS.IMAGES_URL+UCW_SETTINGS.IMAGES[coin]+')'});
                    }
                });
            },
            loadData: function(self) {
                self.loadCoinImage();
                var coins = [];
                $( "[data-coin]" ).each(function( index ) {
                    var coin = $(this).attr('data-coin');
                    if (coin && coins.indexOf(coin) == -1) {
                        coins.push(coin);
                    }
                });
                if(coins.length <= 0) {
                    if($('.rc-ajax-loading').length > 0) {
                        $('.rc-ajax-loading').fadeOut();
                    }
                } else if(coins.length > 0) {
                    $.get('https://min-api.cryptocompare.com/data/pricemultifull?fsyms='+coins.join(',')+'&tsyms=USD', null, function(data) {
                        var coins = [];
                        if(typeof data.RAW !== 'undefined') {
                            for (var key in data.RAW) {
                                var coin = data.RAW[key].USD;
                                coins[key] = {
                                    'price' : coin.PRICE,
            						'lastMarket' : coin.LASTMARKET,
            						'low24h' : coin.LOW24HOUR,
            						'high24h' : coin.HIGH24HOUR,
            						'change24h' : coin.CHANGE24HOUR,
            						'changePct24h' : coin.CHANGEPCT24HOUR,
            						'open24h' : coin.OPEN24HOUR,
            						'mktCap' : coin.MKTCAP,
            						'supply' : coin.SUPPLY,
            						'volumne24h' : coin.VOLUME24HOUR,
            						'volumne24hTo' : coin.VOLUME24HOURTO,
            						'totalVolume24h' : coin.TOTALVOLUME24HTO,
                                };
                            }
                        }
                        // data = JSON.parse(data);
                        // if(typeof data.status != 'undefined' && data.status == 'ok') {
                        if(typeof data.RAW !== 'undefined') {
                            for (var key in coins) {
                                var coin = coins[key];
                                if(typeof UCW_CLASS.MAP_FIX[key] != 'undefined') {
                                    key = UCW_CLASS.MAP_FIX[key];
                                }
                                if(typeof UCW_SETTINGS.IMAGES[key] !== 'undefined') {
                                    $('.rc-image-' + key).css({backgroundImage: 'url('+UCW_SETTINGS.IMAGES_URL+UCW_SETTINGS.IMAGES[key]+')'});
                                }
                                if(typeof UCW_SETTINGS.COINS[key] !== 'undefined') {
                                    $('.rc-coinname-' + key).html(UCW_SETTINGS.COINS[key]);
                                }
                                $('.rc-name-' + key).html(key);
                                
                                $('.rc-LASTMARKET-' + key).html(coin.lastMarket);
                                $('.rc-VOLUME24HOUR-' + key).html(UCW_CLASS.FORMAT_MONEY(coin.volumne24h));
                                $('.rc-OPEN24HOUR-' + key).html(UCW_CLASS.FORMAT_MONEY(coin.open24h));
                                $('.rc-LOW24HOUR-' + key).html(UCW_CLASS.FORMAT_MONEY(coin.low24h));
                                $('.rc-HIGH24HOUR-' + key).html(UCW_CLASS.FORMAT_MONEY(coin.high24h));
                                $('.rc-PRICE-' + key).html(UCW_CLASS.FORMAT_MONEY(coin.price));
                                $('.rc-CHANGE24HOUR-' + key).html(UCW_CLASS.FORMAT_MONEY(coin.change24h));
                                $('.rc-CHANGE24HOURPCT-' + key).html(numeral(coin.changePct24h).format('0,0.00') + '%');
                                
                                $('.rc-MKTCAP-' + key).html(UCW_CLASS.FORMAT_MONEY(coin.mktCap));
                                $('.rc-VOLUME24HOURTO-' + key).html(UCW_CLASS.FORMAT_MONEY(coin.volumne24hTo));
                                $('.rc-TOTALVOLUME24HTO-' + key).html(UCW_CLASS.FORMAT_MONEY(coin.totalVolume24h));
                                
                                var $CHANGE24HOUR = $('.rc-wrap-CHANGE24HOUR-' + key + ',.rc-wrap-CHANGE24HOURPCT-' + key);
                                if (coin.changePct24h >= 0) {
                                    $CHANGE24HOUR.removeClass('rc-up-color rc-down-color');
                                    $CHANGE24HOUR.addClass('rc-up-color');
                                } else {
                                    $CHANGE24HOUR.removeClass('rc-up-color rc-down-color');
                                    $CHANGE24HOUR.addClass('rc-down-color');
                                }
                            } // endfor
                            
                            self.loadTicker();
                        }
                        
                        if($('.rc-ajax-loading').length > 0) {
                            $('.rc-ajax-loading').fadeOut();
                        }
                    });
                }
            },
            loadChart24h: function(){
                var flag = false;
                $('[data-chart24h]').each(function( index ) {
                    var self = $(this),
                        coin = $(this).attr('data-chart24h'),
                        color = self.closest('table').attr('data-color'),
                        lineColor = null, fillColor = null;
                    if(self.attr('data-disable') == 'true') {
                        return true;
                    }
                    if(typeof UCW_CLASS.CHART_COLORS[color] != 'undefined') {
                        lineColor = UCW_CLASS.CHART_COLORS[color].line;
                        fillColor = UCW_CLASS.CHART_COLORS[color].fill;
                    }
                    if(typeof UCW_CLASS.MAP_FIX[coin] != 'undefined') {
                        coin = UCW_CLASS.MAP_FIX[coin];
                    }
                    if(self.attr('data-chart24h-data') != '') {
                        var chartData = self.attr('data-chart24h-data');
                        $.each(chartData, function(index, value){
                            chartData[index] = UCW_CLASS.MONEY_RATES(value);
                            console.log(chartData[index]);
                        });
                        self.sparkline(eval(chartData), {
                            width: '120',
                            height: '24',
                            lineColor: lineColor,
                            fillColor: fillColor,
                            spotColor: false,
                            minSpotColor: false,
                            maxSpotColor: false
                        });
                        self.attr('data-disable', 'true');
                        return true;
                    }
                    UCW_CLASS.CRYPTO.drawSparkchart24h(self, coin, lineColor, fillColor);
                });
            },
            drawSparkchart24h:function (self, coin, lineColor, fillColor){
                $.post('https://min-api.cryptocompare.com/data/histohour?fsym='+coin+'&tsym=USD&limit=24&aggregate=3&e=CCCAGG', null, function(chartData) {
                    if(typeof chartData.Response != 'undefined' && chartData.Response == 'Success') {
                        if(typeof chartData.Data != 'undefined') {
                            
                            var chartData24h = [];
                            $.each(chartData.Data, function(index, value){
                                chartData24h.push( UCW_CLASS.MONEY_RATES(value.close));
                            });
                            
                            self.sparkline(chartData24h, {
                                width: '120',
                                height: '24',
                                lineColor: lineColor,
                                fillColor: fillColor,
                                spotColor: false,
                                minSpotColor: false,
                                maxSpotColor: false
                            });
                            self.attr('data-disable', 'true');
                        }
                    } else if(typeof chartData.Type != 'undefined' && chartData.Type == 1) {
                            self.sparkline([0,0], {
                                width: '120',
                                height: '24',
                                lineColor: lineColor,
                                fillColor: fillColor,
                                spotColor: false,
                                minSpotColor: false,
                                maxSpotColor: false
                            });
                            self.attr('data-disable', 'true');
                    } else {
                        setTimeout(function(){ 
                            UCW_CLASS.CRYPTO.drawSparkchart24h(self, coin, lineColor, fillColor);
                        }, 1000);
                    }
                    
                });
            },
            loadSparkChart24h: function(){
                $('[data-sparkchart]').each(function( index ) {
                    var self = $(this),
                        coin = $(this).attr('data-sparkchart-coin'),
                        color = self.attr('data-color'),
                        lineColor = null, fillColor = null;
                    if(self.attr('data-disable') == 'true') {
                        return true;
                    }
                    if(typeof UCW_CLASS.CHART_COLORS[color] != 'undefined') {
                        lineColor = UCW_CLASS.CHART_COLORS[color].line;
                        fillColor = UCW_CLASS.CHART_COLORS[color].fill;
                    }
                    if(typeof UCW_CLASS.MAP_FIX[coin] != 'undefined') {
                        coin = UCW_CLASS.MAP_FIX[coin];
                    }
                    if(self.attr('data-sparkchart') != '') {
                        var chartData = eval(self.attr('data-sparkchart'));
                        $.each(chartData, function(index, value){
                            chartData[index] = UCW_CLASS.MONEY_RATES(value);
                        });
                        self.sparkline(chartData, {
                            width: '100%',
                            height: '100%',
                            lineColor: lineColor,
                            fillColor: fillColor,
                            spotColor: false,
                            minSpotColor: false,
                            maxSpotColor: false
                        });
                        self.attr('data-disable', 'true');
                        return true;
                    }
                    $.post(UCW_SETTINGS.ajaxurl, { 'action': 'ucw_history24h', 'coin': coin }, function(chartData) {
                        
                        if(typeof chartData != 'undefined') {
                            self.sparkline(eval(chartData), {
                                width: '100%',
                                lineColor: lineColor,
                                fillColor: fillColor,
                                spotColor: false,
                                minSpotColor: false,
                                maxSpotColor: false
                            });
                            self.attr('data-disable', 'true');
                        }
                        
                    });
                });
            },
            loadChart: function(){
                $('.rc-chart-large').each(function( index ) {
                    var self = $(this),
                        color = self.attr('data-color'),
                        lineColor = null, fillColor = null;
                    if(typeof UCW_CLASS.CHART_COLORS[color] != 'undefined') {
                        lineColor = UCW_CLASS.CHART_COLORS[color].line;
                        fillColor = UCW_CLASS.CHART_COLORS[color].fill;
                    }
                    if(self.attr('data-chart') != '') {
                        var chartData = self.attr('data-chart'),
                        chartLabel = self.attr('data-chart-labels').split(','),
                        idCanvas = $(this).attr('id');
                        
                        $.each(chartLabel, function(index, value){
                            chartLabel[index] = new Date(1e3 * parseInt(value, 10)).toLocaleString();
                        });
                        
                        var datasets = [{
                            //label: from,
                            fill: true,
                            backgroundColor: fillColor,
                            borderColor: lineColor,
                            data: chartData.split(','),
                        }];
                        var data = {
                            type: 'line',
                            data: {
                                labels: chartLabel,
                                datasets: datasets,
                            },
                            options: {
                                responsive: true,
                                legend: {
                                    display: false,
                                },
                                tooltips: {
                                    mode: 'index',
                                    intersect: false,
                                },
                                hover: {
                                    mode: 'nearest',
                                    intersect: true
                                },
                                scales: {
                                    xAxes: [{
                                        ticks: {
                                            autoSkip: false,
                                            maxRotation: 50,
                                            minRotation: 50
                                        }
                                    }],
                                    yAxes: [{
                                        display: true,
                                        scaleLabel: {
                                            display: true,
                                            labelString: 'Closing price (USD)'
                                        }
                                    }]
                                }
                            }
                        };
                        var ctx = document.getElementById(idCanvas).getContext("2d");
                        var rcChart = new Chart(ctx, data);
                    }
                });
            },
            loadTable: function(self){
                $('.realcrypto-table').each(function(i){
                    var $self = $(this), 
                    start = $self.attr('data-start'), 
                    limit = $self.attr('data-limit'), 
                    table = $self.DataTable({
                        responsive: true,
                        bDestroy: true,
                    });
                    
                    $('.rc-load-more .rc-btn').on('click', function(){
                        var btn = $(this);
                        btn.hide();
                        $.post(UCW_SETTINGS.ajaxurl, { 'action': 'ucw_table_list', 'start': start, 'limit': limit }, function(row) {
                            table.rows.add($(row)).draw(false);
                            self.loadChart24h();
                            self.loadCoinImage();
                            btn.show();
                            start = 1*start + 1*limit;
                            $self.attr('data-start', start);
                            
                            $('.rc-detal-coin').on('click', function(){
                                if($(this).closest('.realcrypto-table').attr('data-detail-url') != '') {
                                    window.location.href = $(this).closest('.realcrypto-table').attr('data-detail-url') + $(this).attr('data-detail-coin');
                                }
                            });
                            
                        });
                    });
                });
                
                $('.rc-detal-coin').on('click', function(){
                    if($(this).closest('.realcrypto-table').attr('data-detail-url') != '') {
                        window.location.href = $(this).closest('.realcrypto-table').attr('data-detail-url') + $(this).attr('data-detail-coin');
                    }
                });
            },
            loadTableCompare: function(){
                $('.realcrypto-comparison-wrap').find('a.next').on('click', function(){
                    var $container = $(this).closest('.realcrypto-comparison-wrap').find('.rc-comparisons-wrapper');
                    $container.animate({ scrollLeft: ($container.scrollLeft() + 150) }, "fast");
                });
                $('.realcrypto-comparison-wrap').find('a.prev').on('click', function(){
                    var $container = $(this).closest('.realcrypto-comparison-wrap').find('.rc-comparisons-wrapper');
                    $container.animate({ scrollLeft: ($container.scrollLeft() - 150) }, "fast");
                });
            },
            loadTicker: function(){
                $('.realcrypto-ticker-inside').marquee({
                    //speed in milliseconds of the marquee
                    duration: 20000,
                    //gap in pixels between the tickers
                    gap: 0,
                    //time in milliseconds before the marquee will start animating
                    delayBeforeStart: 0,
                    //'left' or 'right'
                    direction: 'left',
                    //true or false - should the marquee be duplicated to show an effect of continues flow
                    duplicated: true,
                    pauseOnHover: true,
                });
            },
            loadSparkcharts: function(key, price, tooltip){
                UCW_CLASS.SPARKCHART = UCW_CLASS.SPARKCHART || [];
                UCW_CLASS.SPARKCHART[key] = UCW_CLASS.SPARKCHART[key] || [];
                UCW_CLASS.SPARKCHART[key].push(price);
                
                UCW_CLASS.SPARKCHART.TOOLTIP = UCW_CLASS.SPARKCHART.TOOLTIP || [];
                UCW_CLASS.SPARKCHART.TOOLTIP[key] = UCW_CLASS.SPARKCHART.TOOLTIP[key] || [];
                
                UCW_CLASS.SPARKCHART.TOOLTIP[key].push(tooltip);
                
                if(UCW_CLASS.SPARKCHART[key].length > 24) {
                    UCW_CLASS.SPARKCHART[key].splice(0,1);
                }
                if(UCW_CLASS.SPARKCHART.TOOLTIP[key].length > 24) {
                    UCW_CLASS.SPARKCHART.TOOLTIP[key].splice(0,1);
                }
                
                $('.rc-sparkchart-'+key).each(function(i){
                    var self = $(this),
                        color = self.attr('data-color'),
                        lineColor = null, fillColor = null;
                    
                    if(typeof UCW_CLASS.CHART_COLORS[color] != 'undefined') {
                        lineColor = UCW_CLASS.CHART_COLORS[color].line;
                        fillColor = UCW_CLASS.CHART_COLORS[color].fill;
                    }
                    
                    $(this).sparkline(UCW_CLASS.SPARKCHART[key], {
                        tooltipFormat: '<span style="color: {{color}}">&#9679;</span><span> {{offset:offset}}: <b style="font-size: 1.2em">$ {{y}}</b></span>',
                        tooltipValueLookups: {
                            offset: UCW_CLASS.SPARKCHART.TOOLTIP[key]
                        },
                        width: '100%',
                        lineColor: lineColor,
                        fillColor: fillColor,
                        spotColor: false,
                        minSpotColor: false,
                        maxSpotColor: false,
                    });
                });
            },
            loadCalculator: function(){
                if($('.realcrypto-convert-wrap').length > 0) {
                    $.post(UCW_SETTINGS.ajaxurl, { 'action': 'rc_list_convert'}, function(response) {
                        
                        response = JSON.parse(response);
                        if(typeof response.coins != 'undefined') {
                            $.each( response.coins, function( key, coin ) {
                                $('.rc-coins-data').append('<option value="'+key+'">'+key+' - '+coin+'</option>');
                            });
                            $.each( response.currency, function( key, currency ) {
                                $('.rc-currency-data').append('<option value="'+key+'">'+currency+'</option>');
                            });
                        }
                        $('.realcrypto-convert-wrap').each(function( index ) {
                            $(this).find('select.rc-coins-data').val($(this).attr('data-convert-coin'));
                        });
                        $('.realcrypto-convert-wrap').find('select.rc-currency-data').val(UCW_SETTINGS.CURRENCY);
                        $('.realcrypto-convert-wrap').find('select').select2();
                        
                        $('.rc-btn-exchange').on('click', function(){
                            var $self = $(this),
                                $wrap = $self.closest('.realcrypto-convert-wrap'),
                                from = $wrap.find('.rc-coins-data').val(),
                                to = $wrap.find('.rc-currency-data').val(),
                                amount = $wrap.find('.rc-amount').val();
                                
                            if($self.hasClass('active')) {
                                return;
                            }    
                            $self.addClass('active'); 
                            $wrap.find('.rc-result').val('...');   
                            if(amount <= 0) {
                                $wrap.find('.rc-result').val('0');
                                $self.removeClass('active');
                                return;
                            }
                                
                            $.post(UCW_SETTINGS.ajaxurl, { 'action': 'rc_get_convert', 'from': from, 'to': to }, function(response) {
                                response = JSON.parse(response);
                                if(typeof response.result != 'undefined') {
                                    var number = response.result[from][to] * amount;
                                    $wrap.find('.rc-result').val(numeral(number).format('0,0.[0000000000]'));
                                    $self.removeClass('active');    
                                }
                            });
                        });
                    });
                }
            },
            live: function(self){
                var socket = io.connect('https://coincap.io');
                socket.on('trades', function (coin) {
                    var id = coin.coin,
                        data = coin.msg,
                        oldPrice = '';
                    if(typeof UCW_CLASS.MAP_FIX[id] != 'undefined') {
                        id = UCW_CLASS.MAP_FIX[id];
                    }    
                    if($('[data-live-price="'+id+'"]').length > 0) {
                        oldPrice = numeral($('.rc-PRICE-'+id).first().html()).value();
                    }
                    if(oldPrice == '') {
                        return;
                    }
                    
                    var change24h = ( data.price * 100 / (100 - data.perc) ) - data.price;
                    
                    $('.rc-CHANGE24HOUR-' + id).html(UCW_CLASS.FORMAT_MONEY(change24h));
                    $('[data-live-price="'+id+'"],.rc-PRICE-'+id).html(UCW_CLASS.FORMAT_MONEY(data.price));
                    $('[data-live-perc="'+id+'"],.rc-CHANGE24HOURPCT-'+id).html(numeral(data.perc ).format('0,0.00')+ '%');
                    var $price = $('[data-live-price="'+id+'"]').closest('.rc-wrap-price');
                    
                    if (oldPrice < numeral(UCW_CLASS.FORMAT_MONEY(data.price)).value() ) {
                        $price.removeClass('rc-up-color rc-down-color');
                        $price.addClass('rc-up-color rc-up-color-now');
                    } else {
                        $price.removeClass('rc-up-color rc-down-color');
                        $price.addClass('rc-down-color rc-down-color-now');
                    }
                    setTimeout(function(){
                        $price.removeClass('rc-up-color-now rc-down-color-now');
                    }, 500);
                    
                    var $wrapPerc = $('[data-live-perc="'+id+'"]').closest('.rc-wrap-perc');
                    if (data.perc >= 0) {
                        $wrapPerc.removeClass('rc-up-color rc-down-color');
                        $wrapPerc.addClass('rc-up-color');
                    } else {
                        $wrapPerc.removeClass('rc-up-color rc-down-color');
                        $wrapPerc.addClass('rc-down-color');
                    }
                    
                    // Old code
                    var $PRICE = $('.rc-wrap-PRICE-' + id);
                    if (oldPrice < numeral(UCW_CLASS.FORMAT_MONEY(data.price)).value() ) {
                        $PRICE.removeClass('rc-up-color rc-down-color');
                        $PRICE.addClass('rc-up-color rc-up-color-now');
                    } else {
                        $PRICE.removeClass('rc-up-color rc-down-color');
                        $PRICE.addClass('rc-down-color rc-down-color-now');
                    }
                    setTimeout(function(){
                        $PRICE.removeClass('rc-up-color-now rc-down-color-now');
                    }, 500);
                    
                    var $CHANGE24HOUR = $('.rc-wrap-CHANGE24HOUR-' + id + ',.rc-wrap-CHANGE24HOURPCT-' + id);
                    if (data.perc >= 0) {
                        $CHANGE24HOUR.removeClass('rc-up-color rc-down-color');
                        $CHANGE24HOUR.addClass('rc-up-color');
                    } else {
                        $CHANGE24HOUR.removeClass('rc-up-color rc-down-color');
                        $CHANGE24HOUR.addClass('rc-down-color');
                    }
                    
                    if($('.rc-sparkchart-'+id).length > 0) {
                        self.loadSparkcharts(id, data.price, new Date().toLocaleString() );
                    }
                    // console.log(coin);
                });
            },
        }
    });
}).apply(this, [window.UCW_CLASS, window.jQuery]);

(function($) {
    'use strict';
 
    $(document).ready(function() {
        if (typeof UCW_CLASS.CRYPTO !== 'undefined') {
            UCW_CLASS.CRYPTO.init();
        } else {
            if($('.rc-ajax-loading').length > 0) {
                $('.rc-ajax-loading').fadeOut();
            }
        }
    });
}(window.jQuery));