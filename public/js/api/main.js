$(document).ready(function(){

	function signOut() {
		var signOut = $('#signout');
        if (signOut) {
            signOut.click(function(){
                window.localStorage.clear();
                window.sessionStorage.clear();
            });

        }
	}
   
});