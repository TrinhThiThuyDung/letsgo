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
	$('input#avatar:file').change(function(e){
		
		var image_name = e.target.files[0].name;
		
		$('span#avaNewName').html(image_name);
	});
   
});