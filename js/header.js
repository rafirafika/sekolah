$(function(){
//    var i;
//
//    var li0 = new Array();
//    li0[0]= $('.panel_header ul li a:eq(0)');
//    li0[1]= $('.panel_header ul li a:eq(1)');
//    li0[2]= $('.panel_header ul li a:eq(2)');
//    li0[3]= $('.panel_header ul li a:eq(3)');
//    li0[4]= $('.panel_header ul li a:eq(4)');
//    li0[5]= $('.panel_header ul li a:eq(5)');

//    var tbl = new Array();
//    tbl[0] = $('#menu_list_hide li table:eq(0)');
//    tbl[1] = $('#menu_list_hide li table:eq(1)');
//    tbl[2] = $('#menu_list_hide li table:eq(2)');
//    tbl[3] = $('#menu_list_hide li table:eq(3)');
//    tbl[4] = $('#menu_list_hide li table:eq(4)');



//    for(i=0;i<=li0.length;i++)
//    {
//        function hov(e){
//            e.hover(
//                function(){
//                    $(this).css({
//                        "color":"red"
//                    });
//
//
//                },
//                function(){
//                    $(this).css({
//                        "color":"black"
//                    });
//
//
//                }
//            );
//        }
//        hov(li0[i]);
//
//
//    }

//    var o;
//
//    var tbl = new Array();
//    tbl[0] = $('#menu_list_hide li table:eq(0)');
//    tbl[1] = $('#menu_list_hide li table:eq(1)');
//    tbl[2] = $('#menu_list_hide li table:eq(2)');
//    tbl[3] = $('#menu_list_hide li table:eq(3)');
//    tbl[4] = $('#menu_list_hide li table:eq(4)');
//
//    var li1 = new Array();
//    li1[0]= $('.panel_header ul li a:eq(0)');
//    li1[1]= $('.panel_header ul li a:eq(1)');
//    li1[2]= $('.panel_header ul li a:eq(2)');
//    li1[3]= $('.panel_header ul li a:eq(3)');
//    li1[4]= $('.panel_header ul li a:eq(4)');
//    li1[5]= $('.panel_header ul li a:eq(5)');
//
//    for(o=0;o<=tbl.length;o++)
//    {
//        function hove(e){
//            e.hover(
//                function(){
//                    tbl[o].show();
//                },
//                function(){
//                    tbl[o].hide();
//                }
//            );
//        }
//        hove(li1[o]);
//    }



});

$(function(){


    var lib= $('.panel_header ul li a:eq(1)');
    var lic= $('.panel_header ul li a:eq(2)');
    var lid= $('.panel_header ul li a:eq(3)');
    var lie= $('.panel_header ul li a:eq(4)');
    var lif= $('.panel_header ul li a:eq(5)');

    var tbl0 = $('#menu_list_hide li table:eq(0)');
    var tbl1 = $('#menu_list_hide li table:eq(1)');
    var tbl2 = $('#menu_list_hide li table:eq(2)');
    var tbl3 = $('#menu_list_hide li table:eq(3)');
    var tbl4 = $('#menu_list_hide li table:eq(4)');

    lib.hover(
        function(){
            tbl0.show();
            tbl1.hide();
            tbl2.hide();
            tbl3.hide();
            tbl4.hide();
        }
    );

    lic.hover(
        function(){
            tbl1.show();
            tbl0.hide();
            tbl2.hide();
            tbl3.hide();
            tbl4.hide();
        }
    );

    lid.hover(
        function(){
            tbl2.show();
            tbl1.hide();
            tbl0.hide();
            tbl3.hide();
            tbl4.hide();
        }
    );

    lie.hover(
        function(){
            tbl3.show();
            tbl1.hide();
            tbl2.hide();
            tbl0.hide();
            tbl4.hide();
        }
    );

    lif.hover(
        function(){
            tbl4.show();
            tbl1.hide();
            tbl2.hide();
            tbl3.hide();
            tbl0.hide();
        }
    );

});