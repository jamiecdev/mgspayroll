(function($) {
  'use strict';
  $(function() {
    $('.file-upload-browse').on('click', function() {
      var file = $(this).parent().parent().parent().find('.file-upload-default');
      document.getElementById("error").innerHTML = "";
      file.trigger('click');
    });
    $('.file-upload-default').on('change', function() {
      var disp = '';
      if($('.file-upload-default')[0].files.length==0){
        disp = "No file selected.";
      }else if($('.file-upload-default')[0].files.length==1){
        disp = $(this).val().replace(/C:\\fakepath\\/i, '');
      }else{
        disp = $('.file-upload-default')[0].files.length + " files selected.";
      }
      $(this).parent().find('.form-control').val(disp);
    });
  });
})(jQuery);