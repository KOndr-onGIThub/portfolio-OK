$(function(){
    
    var skryj = $(".skryj");
    var side_bar = $(".side_bar");

        //ovladani zda je sidebar viditelny
            skryj.click( function(){
                manage_sideBar(side_bar, skryj)
            });

        //pri scrollu zobrazuji a posouvam ovladaci prvek navigace  ....
            $( window ).scroll( function(){
                manage_goToTop(side_bar)
            });
        //.... a pri kliku take
            skryj.click( function(){
                    manage_goToTop(side_bar)
            }); 

});

// functions
    //ovladani zda je sidebar viditelny
    function manage_sideBar(side_bar, skryj){

        let chevron_right = $(".chevron_right");
        let chevron_left = $(".chevron_left");

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
    }

    //zobrazuji a posouvam ovladaci prvek navigace
    function manage_goToTop(side_bar){

        let go_to_top = $('.go_to_top');
        let elem = document.querySelector('.side_nav');
        let bounding = elem.getBoundingClientRect();

        //console.log(bounding.bottom);
        if(bounding.bottom < 250 && side_bar.is(':visible')){
            go_to_top.css('display', 'flex');
            go_to_top.css('justify-content', 'space-between');
            go_to_top.css('top', (-1) * bounding.bottom + (bounding.bottom > 0 ? bounding.bottom : 0) + 'px' );
        }else{
            //go_to_top.css('top', '0px' ); //netreba, bo prvek cely skreju
            go_to_top.css('display', 'none');
        }
    }