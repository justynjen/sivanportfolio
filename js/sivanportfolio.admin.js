jQuery(document).ready(function($) {

	var mediaUploader;

	$( '#upload-button' ).on('click',function(e) {
		e.preventDefault();
		if( mediaUploader ) {
			mediaUploader.open();
			return;
		}

		mediaUploader = wp.media.frames.file_frame = wp.media({
				title: 'Choose a Profile Picture',
				button: {
					text: 'Choose Picture'
				},
				multiple: false
		});

		mediaUploader.on('select', function(){
			attactment = mediaUploader.state().get('selection').first().toJSON();
			$('#profile-picture').val(attactment.url);
			$('#profile-picture-preview').css('background-img', 'url(' + attatchment.url + ')');
		});

		mediaUploader.open();

	});

});
