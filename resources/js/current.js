var delay = 2000, value = 0, valueStore = 0, tick = 1, tickStore = 1, tickDiff = 0, tickDiffValue = 0;
function valBetween(v, min, max) {
    return (Math.min(max, Math.max(min, v)));
}
(function loop() {
    value = Math.ceil(Math.random() * 100);
    tick = valBetween(Math.ceil((value/100)*28), 1, 28);
    tickDiff = Math.abs(tick-tickStore);
    tickDiffValue = Math.abs(value-valueStore)/tickDiff;
    console.log("tickDiff: "+tickDiffValue+" * "+tickDiff+" = "+(tickDiffValue*tickDiff));
    var counter = 0, valueStoreTemp = valueStore, tickStoreTemp = tickStore;
    if (value > valueStore) {
        for (i=tickStoreTemp; i<=tick; i++) {
            (function(i){
                setTimeout(function() {
                    $('#current').css('box-shadow', '0 0 32px rgba(21, 55, 172, 0.25), inset 0 -192px 192px -240px '+$('#current path:nth-child('+i+')')[0].style.fill+', inset 0 0 2px -1px '+$('#current path:nth-child('+i+')')[0].style.fill);
                    $('#current path:nth-child('+i+')').show();
                    $('#current-label')
                        .css('color', $('#current path:nth-child('+i+')')[0].style.fill)
                        .text(Math.ceil(valueStoreTemp+(tickDiffValue*Math.abs(tickStoreTemp-i))));
                    if (i==tick) { $('#current-label').text(value); }
                    // console.log(i);
                }, 50 * counter);
                counter++;
            }(i));
        }
    } else if (value < valueStore) {
        for (i=tickStoreTemp; i>=tick; i--) {
            (function(i){
                setTimeout(function() {
                    $('#current').css('box-shadow', '0 0 32px rgba(21, 55, 172, 0.25), inset 0 -192px 192px -240px '+$('#current path:nth-child('+i+')')[0].style.fill+', inset 0 0 2px -1px '+$('#current path:nth-child('+i+')')[0].style.fill);
                    $('#current path:nth-child('+i+')').hide();
                    $('#current-label')
                        .css('color', $('#current path:nth-child('+i+')')[0].style.fill)
                        .text(Math.floor(valueStoreTemp-(tickDiffValue*Math.abs(tickStoreTemp-i))));
                    if (i==tick) { $('#current-label').text(value); }
                    // console.log(i);
                }, 50 * counter);
                counter++;
            }(i));
        }
    }
    valueStore = value;
    tickStore = tick;
    window.setTimeout(loop, delay);
})();
