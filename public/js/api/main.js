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
	$('body').on('click', 'button.close' , function(e){
		$('tbody.files').remove();
	});
	$('body').on('click', 'button.close-modal' , function(e){
		$('tbody.files').remove();
	});
   
});