
$(document).ready(function () {
        var url = window.location;
		console.log(url);
        $('.navbar .nav').find('.active').removeClass('active');
        $('.navbar .nav li a').each(function () {
            if (this.href == url) {
                $(this).parent().addClass('active');
            }
        }); 
    });
