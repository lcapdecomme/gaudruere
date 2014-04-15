
function reloadPage() {
location.reload();
};

 function isInteger(s)
{ var i;
for (i = 0; i < s.length; i++)
{
// Check that current character is number.
var c = s.charAt(i);
if (((c < "0") || (c > "9"))) return false;
}
// All characters are numbers.
return true;
}
function stripCharsInBag(s, bag)
{ var i;
var returnString = "";
// Search through string's characters one by one.
// If character is not in bag, append to returnString.
for (i = 0; i < s.length; i++)
{
// Check that current character isn't whitespace.
var c = s.charAt(i);
if (bag.indexOf(c) == -1) returnString += c;
}
return returnString;
}

function manageDisplayConflitDates()
{
	var valeurConflitDates = $("#conflitDates").val();
	if (valeurConflitDates == "0")
	{
		$("#labelConflitDates").addClass('masquerMessage');
	}
	else
	{
		$("#labelConflitDates").removeClass('masquerMessage');
	}
}

function updateCalendars()
{
    // appel ajax pour raffraichir les calendriers
		var dd = $("#datePickerDateDebut").val();
		var df = $("#datePickerDateFin").val();
		
		if (dd == '')
		{
			dd = 'null';
		}
		else
		{
			// TODO : à améliorer si vous savez faire un replace global
			dd = dd.replace("/", "-");
			dd = dd.replace("/", "-");
			dd = dd.replace("/", "-");
		}
		
		if (df == '')
		{
			df = 'null';
		}
		else
		{
			// TODO : à améliorer si vous savez faire un replace global
			df = df.replace("/", "-");
			df = df.replace("/", "-");
			df = df.replace("/", "-");
		}
		
		$.ajax({
			type: "GET",
			url: "./reservation/majCalendriers/" + dd + "/" + df,
			success:
			    function(retour)
			    {
					$("#internal-calendrier-content").html(retour);
					manageDisplayConflitDates();
					$("#btnReserver").removeAttr("disabled");
				}
		});
}



$(document).ready(function() {
	$("#datePickerDateDebut").datepicker({
  		minDate: 0,
  		defaultDate: "+1w",
  		changeMonth: true,
  		numberOfMonths: 1,
  		beforeShow: function(input)
  		{
  			var date2 =  $("#datePickerDateFin").datepicker('getDate');
  			if(date2 != undefined) return { maxDate: new Date(date2 - 86400000) };
  		},
  		onSelect: function( selectedDate )
  		{
  			$("#btnReserver").attr("disabled", "true");
  			$("#formResa").validate().element(this);
  			updateCalendars();
  		}
	});

	$("#datePickerDateFin").datepicker({
		minDate: '+1d',
		defaultDate: "+1w",
		changeMonth: true,
		numberOfMonths: 1,
		beforeShow: function(input)
  		{
			var date1 = $("#datePickerDateDebut").datepicker('getDate');
			if(date1 != undefined) return { minDate: new Date(date1.getTime() + 86400000) };
  		},
		onSelect: function( selectedDate )
		{
			$("#btnReserver").attr("disabled", "true");
			$("#formResa").validate().element(this);
			updateCalendars();
		}
	});
    
    $( "#sliderNbreAdultes" ).slider({min: 1, max: 4, range: "min", value: 1, animate: true, slide: function( event, ui ) {
    		$("#nbAdultes").val(ui.value);
    		$("#sliderNbAdultes").html("<b>" + ui.value + "</b>");
		}
    });
    
    $( "#sliderNbreEnfants" ).slider({min: 0, max: 4, range: "min", value: 0, animate: true, slide: function( event, ui ) {
    		$("#nbEnfants").val(ui.value);
    		$("#sliderNbEnfants").html("<b>" + ui.value + "</b>");
		}
    });
    
    $( "#sliderNbreBebes" ).slider({min: 0, max: 2, range: "min", value: 0, animate: true, slide: function( event, ui ) {
    	$("#nbBebes").val(ui.value);
    	$("#sliderNbBebes").html("<b>" + ui.value + "</b>");
		}
    });
    
    jQuery.validator.addMethod("phone", function(phone_number, element) {
    	var digits = "0123456789";
    	var phoneNumberDelimiters = "()- ext.";
    	var validWorldPhoneChars = phoneNumberDelimiters + "+";
    	var minDigitsInIPhoneNumber = 10;
    	s=stripCharsInBag(phone_number,validWorldPhoneChars);
    	return this.optional(element) || isInteger(s) && s.length >= minDigitsInIPhoneNumber;
    	}, "Please enter a valid phone number"
    );

    var options = {
   		beforeSubmit: function() {
   			manageDisplayConflitDates();
   			return $('#formResa').validate().form() && $('#conflitDates').val() == "0";
        },
  		target: '.calendrier-content',
  		type: 'POST',
  		clearForm: true,
		success: function() {
			$("#nbAdultes").val("1");
			$("#nbEnfants").val("0");
			$("#nbBebes").val("0");
		
			$("#sliderNbreAdultes").slider("option", "value", 1);
			$("#sliderNbreEnfants").slider("option", "value", 0);
			$("#sliderNbreBebes").slider("option", "value", 0);
		
			$("#sliderNbAdultes").html("<b>1</b>");
			$("#sliderNbEnfants").html("<b>0</b>");
			$("#sliderNbBebes").html("<b>0</b>");
			 
			// demande le rechargement de la page dans 10 secondes.
			setTimeout("reloadPage()", 10000);
		}

        // beforeSubmit:  validationForm,  // pre-submit callback 
        // success:       showFormResponse  // post-submit callback 
        // other available options: 
        //url:       url         // override for form's 'action' attribute 
        //type:      type        // 'get' or 'post', override for form's 'method' attribute 
        //dataType:  null        // 'xml', 'script', or 'json' (expected server response type) 
        //clearForm: true        // clear all form fields after successful submit 
        //resetForm: true        // reset the form after successful submit 
 
        // $.ajax options can be used here too, for example: 
        //timeout:   3000
    };
    
    // bind form using 'ajaxForm' 
    $('#formResa').ajaxForm(options); 
    
    // validate signup form on keyup and submit
	$("#formResa").validate({
		ignore: [], 
		rules: 
		{
			datePickerDateDebut: { 
				required: true
			},
			datePickerDateFin: { 
				required: true
			},
			nom: {
				required: true
			},
			prenom: {
				required: true
			},
			codePostal: {
				required: true,
				number: true,
				minlength: 5
			},
			ville: {
				required: true
			},
			email: {
				email: true,
				required: "#tel:blank"
			},
			tel: {
				phone: true,
				required: "#email:blank"
			},
			commentaire: {
				maxlength: 2000
			}
		},
		messages: {
			datePickerDateDebut: {
				required: "La date de début du séjour est obligatoire."
			},
			datePickerDateFin: {
				required: "La date de fin du séjour est obligatoire."
			},
			nom: {
				required: "Le nom est obligatoire."
			},
			prenom: {
				required: "Le prénom est obligatoire."
			},
			codePostal: {
				required: "Le code postal est obligatoire.",
				number: "Le code postal est incorrect.",
				minlength: "Le code postal doit contenir 5 caractères."
			},
			ville: {
				required: "Le nom de la commune est obligatoire."
			},
			email: {
				email: "L'adresse mail est incorrecte.",
				required: "L'adresse mail ou le numéro de téléphone doivent-être renseignés."
			},
			tel: {
				phone: "Le numéro de téléphone est incorrect.",
				required: "Le numéro de téléphone ou l'adresse email doivent-être renseignés."
			},
			commentaire: {
				maxlength: "Le commentaire ne doit pas dépasser 2000 caractères."
			}
		}
	});
});