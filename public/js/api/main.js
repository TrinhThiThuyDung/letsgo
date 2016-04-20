$(document).ready(function(){
        var signOut = $('#logout');
        if (signOut) {
            signOut.click(function(){
                window.localStoges.clear();
                window.sessionStorage.clear();
                window.location.href = '/'
            });

        }

});