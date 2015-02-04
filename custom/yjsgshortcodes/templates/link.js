(function ($) {
    $(document).ready(function () {
		
		$('[data-toggle=tooltip]').tooltip({
		  	container: 'body',
			trigger:'click'// bug on hover
		 });
		 
		 $('select,input,textarea').on('mouseenter', function (event) {
			 
			 var label = $('label[for="'+$(this).attr('id')+'"]');
			 
			 label.trigger('click');
			 
		 }).on('mouseleave', function (event) {
			  var label = $('label[for="'+$(this).attr('id')+'"]');
			label.trigger('click');
		 });
		
        $('#addshortcode').click(function (event) {
            event.preventDefault();
            var linkhref 		= $('input[name=linkhref]').val();
			var linktext		= $('input[name=linktext]').val();
	
			 var insertlink ='[yjsglink ';
				 insertlink +='linkhref="' + linkhref + '" ';
				 insertlink +='linktext="' + linktext + '"';
				 insertlink +=']';
			
			if (linkhref == '') {
				alert('Link is required');
				return;
				
			}
			var findEditor = $("#editor-xtd-buttons", parent.document.body).parent().find('textarea').attr('id');
			
			if( findEditor !='undefined' ){
				window.parent.jInsertEditorText(insertlink, findEditor);
			}
			
        });

    });
}(jQuery));