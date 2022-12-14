$(function(){
    
    var skryj = $(".skryj");
    var side_bar = $(".side_bar");
    var chevron_right = $(".chevron_right");
    var chevron_left = $(".chevron_left");
    
        skryj.click(function () {

            //kontroluji viditelnost a podle toho nastavuju koment a jaká sipka se ukaze s tim ze na koncu viditelnost zmenim
            if(side_bar.is(":visible")){
                chevron_left.css('display', 'none');
                chevron_right.css('display', 'block');
                skryj.attr('title', 'zobrazit menu');
            }else{
                chevron_left.css('display', 'block');
                chevron_right.css('display', 'none');
                skryj.attr('title', 'skrýt menu');
            }
            side_bar.animate({
                width: "toggle"
            });

            
        });

});