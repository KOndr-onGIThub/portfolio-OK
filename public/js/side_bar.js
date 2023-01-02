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

        //pri scrollu zobrazuji a posouvam ovladaci prvek navigace  ....
        $( window ).scroll(function (){
            let go_to_top = $('.go_to_top');
            let elem = document.querySelector('.side_nav');
            let bounding = elem.getBoundingClientRect();
            //console.log(bounding.bottom);
            if(bounding.bottom < 250){
                go_to_top.css('display', 'flex');
                go_to_top.css('justify-content', 'space-between');
                go_to_top.css('top', (-1) * bounding.bottom + (bounding.bottom > 0 ? bounding.bottom : 0) + 'px' );
            }else{
               /*  go_to_top.css('top', '0px' ); */
                go_to_top.css('display', 'none');
            }
        });

});