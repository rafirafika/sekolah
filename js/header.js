$(function(){
    var i;
    var li0 = new Array();
    li0[0]= $('.panel_header ul li a:eq(0)');
    li0[1]= $('.panel_header ul li a:eq(1)');
    li0[2]= $('.panel_header ul li a:eq(2)');
    li0[3]= $('.panel_header ul li a:eq(3)');
    li0[4]= $('.panel_header ul li a:eq(4)');
    li0[5]= $('.panel_header ul li a:eq(5)');
    li0[6]= $('.panel_header ul li a:eq(6)');

    for(i=0;i<=li0.length;i++)
    {
        function hov(e){
            e.hover(
                function(){
                    $(this).css({
                        "color":"red"
                    });
                },
                function(){
                    $(this).css({
                        "color":"black"
                    });
                }
            );
        }
        hov(li0[i]);
    }




});