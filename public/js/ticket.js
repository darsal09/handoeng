/**
 * Created by darsal on 4/7/15.
 */
function validateTicketForm(){
    var flag = true;
    var elements = document.getElementById( 'ticketForm').elements;

    for( var x in elements ){
        if( elements[ x].value == '' ){
            $( '#'+elements[ x].name+'_error').addClass( 'has-error');
            flag = false;
        }
        else{
            $( '#'+elements[ x].name+'_error').removeClass( 'has-error');
        }
    }

    return flag;
}