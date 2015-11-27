var str_name;
var str_tel;
var str_email;
var script = document.createElement("SCRIPT");
script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js';
script.type = 'text/javascript';
document.getElementsByTagName("head")[0].appendChild(script);
var checkReady = function(callback) {
    if (window.jQuery) {
        callback(jQuery);
    }
    else {
        window.setTimeout(function() { checkReady(callback); }, 100);
    }
};
checkReady(function($){
	
	$('[name*=name]').keyup(
	function to_maj()
	{
		str_name = document.getElementsByName('name')[0].value;
		document.getElementsByName('name')[0].value = document.getElementsByName('name')[0].value.toUpperCase();
	});
	$('[name*=tel]').keyup(
	function verif_number()
	{
		str_tel = document.getElementsByName('tel')[0].value;
		if (isNaN(str_tel) == true)
		{
			alert("N'accepte que les chiffres")
			document.getElementsByName('tel')[0].value = '';
		}
	});
	$('[name*=email]').blur(
	function verif_email()
	{
		str_email = document.getElementsByName('email')[0].value;
		if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(str_email)) {
			$('[name*=email]').removeClass("error");
		} else {
			$('[name*=email]').addClass("error");
		}
	});
	$('button').click(
	function verif_validation()
	{
		if(str_name){str_name = str_name.toUpperCase();}
		if ((str_name && str_name.length > 3) &&
			(str_tel && str_tel.length > 3) &&
			(str_email && str_email.length > 3))
		{
				event.preventDefault();
				$('[name*=name]').prop('disabled', true);
				$('[name*=tel]').prop('disabled', true);
				$('[name*=email]').prop('disabled', true);
				$('#validation').append('<br /><p>Validation ok</p>');
				var pop = window.open("", "pop", "width=800, height=600");
				var content = '<ul><li>Nom : ' + str_name + '</li><li>Tel : ' + str_tel + '</li><li>Email : ' + str_email + '</li></ul>'; 
				pop.document.write(content);
		} else {
			alert('Minimum 3 caracteres par champ !');
		}
	});
	
});