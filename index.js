$(document).ready(main);


var a = 2 ;

function main() {
    $('.bt').click(function(){
        if(a == 2){
            $('#sidebar').animate({
                    left: '0'
            },700);
            a = 1;
        } else {
            a = 2;
            $('#sidebar').animate({
                    left: '-100%'
            },700);    }
    });
    $('section,#sidebar a').click(function(){
    if(a == 1){
        a = 2;
            $('#sidebar').animate({
                    left: '-100%'
        },700);}});
} 

