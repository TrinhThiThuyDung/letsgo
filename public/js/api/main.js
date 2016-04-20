$(document).ready(function(){
        var signOut = $('#signout');
        if (signOut) {
            signOut.click(function(){
                window.localStorage.clear();
                window.sessionStorage.clear();
                window.location.href = '/';
                return false;
            });

        }

});