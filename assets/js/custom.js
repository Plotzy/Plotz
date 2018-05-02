//Button down
window.onload = initAll;

function initAll(){
        console.log("Document Ready to use");
        //alert("javascript is working!")
}

    function buttonRemove(){
        document.getElementById("agcen1").innerHTML = "Your cute, but you got flab! Starts Playing with the Flab, flaflaflaflaflaflaflafla hahahaha";


    }
jQuery(function($) {
    //-----------------Start of Testing -----------------
    //jquery

    //alert("Time to learn some jquery Jonathan Plotz!")

    // Hide Things in Jquery
    //----------------------------
    //$('#box').hide(3000).show(2000).slideDown(1000).slideUp(2000).slideDown(1000);

    //Fade out effect for a class
    //-----------------------------
   // $(".thing").fadeout();

    //Change the color in jquery
    //-----------------------------
    //$("h1").css('color','red');

    //-----------End Of Testing ONE -----------------





    //-----------------------------------------------------
    //------------------Start of Button Agcentric ---------
    //-----------------------------------------------------

    $('.btnAgcentric').hide();
    console.log("Jquery is working this is Agcentric Section");
    $('#Agcen').click(function () {
        $('.btnAgcentric').slideDown(50000);
        $('#Agcen').slideUp(1200);
    });

    //-----------------------------------------------------
    //------------------End of Button Agcentric -----------
    //-----------------------------------------------------





    //-----------------------------------------------------
    //------------------Start of Button Wissota -----------
    //-----------------------------------------------------

    $('.btnWissota').hide();
    console.log("Jquery is working This is Wissota Section");
    $('#Wiss').click(function () {
        $('.btnWissota').slideDown(1500);
        $('#Wiss').slideUp(1200);
    });

    //-----------------------------------------------------
    //------------------End of Button Wissota -------------
    //-----------------------------------------------------






    // ---------------------Testing Jquery #2 ---------------

    $('.Roar').hide();
    console.log("Jquery is working for hide");
    $('#btnRoar').click(function () {
        $('.Roar').slideDown(1500);
        $('#btnRoar').slideUp(1200);
    });

    // --------------------End Of Testing Jquery #2 ---------

    $('h1','h2','h3')


    //------------------Start of Testing Jquery #3-----------



});



