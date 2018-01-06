$(document).ready(function() {
	        	       // Autoresponder
		      break_apart_ar();
		      // TAKE APART AR CODE
		      function break_apart_ar(){
		      var tags = ['a','iframe','frame','frameset','script'], reg, val = $('#autoresponderCode').val(),
		      hdn = $('#arcode_hdn_div2'), formurl = $('#arform'), hiddenfields = $('#arhidden');
		      formurl.val('');
		        if(jQuery.trim(val) == '')
		            return false;
		            $('#arcode_hdn_div').html('');
		            $('#arcode_hdn_div2').html('');
		        for(var i=0;i<5;i++){
		            reg = new RegExp('<'+tags[i]+'([^<>+]*[^\/])>.*?</'+tags[i]+'>', "gi");
		        val = val.replace(reg,'');
		        reg = new RegExp('<'+tags[i]+'([^<>+]*)>', "gi");
		            val = val.replace(reg,'');
		        }
		        var tmpval;
		        try {
		            tmpval = decodeURIComponent(val);
		        } catch(err){
		            tmpval = val;
		        }
		        hdn.append(tmpval);
		        var num = 0;
		        var name_selected = '';
		        var email_selected = '';
		        $(':text',hdn).each(function(){
		            var name = $(this).attr('name'),
		            name_selected = num == '0' ? name : (num != '0' ? name_selected : ''), 
		            email_selected = num == '1' ? name : email_selected;
		            if(num=='0') jQuery('#arname').val(name_selected);
		            if(num=='1') jQuery('#aremail').val(email_selected);
		            num++;
		        });
		        jQuery(':input[type=hidden]',hdn).each(function(){
		          jQuery('#arcode_hdn_div').append(jQuery('<input type="hidden" name="'+jQuery(this).attr('name')+'" />').val(jQuery(this).val()));
		        });   
		        var hidden_f = jQuery('#arcode_hdn_div').html();
		        formurl.val(jQuery('form',hdn).attr('action'));
		        hiddenfields.val(hidden_f);
		        hdn.html('');
		      };
		      $('.ARform').attr('action', $('#arform').val());
		      $('.ARhidden').html($('#arhidden').val());
		      $('#optinEmail').attr('name', $('#aremail').val());
		      $('#optinName').attr('name', $('#arname').val());
	      });