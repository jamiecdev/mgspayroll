(function($) {
  showSuccessToast = function() {
    'use strict';

    resetToastPosition();
    $.toast({
      heading: 'Success',
      text: 'Transaction successfully saved!',
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#ffffff',
      position: 'top-right',
      hideAfter: 7000, 
    });
  };
  showWelcomeToast = function(user) {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Welcome to MGS Portal!',
      text: String(user),
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#ffffff',
      position: 'top-right',
      hideAfter: 7000, 
    });
  };
  showPhotoToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Success',
      text: "Photo successfully uploaded!",
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#ffffff',
      position: 'top-right',
      hideAfter: 7000, 
    })
  };
  showDepartmentToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Success',
      text: "Department has been successfully saved!",
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#ffffff',
      position: 'top-right',
      hideAfter: 7000, 
    })
  };
  showPositionToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Success',
      text: "Position has been successfully saved!",
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#ffffff',
      position: 'top-right',
      hideAfter: 7000, 
    })
  };
  showEmployeeToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Success',
      text: "Employee has been successfully saved!",
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#ffffff',
      position: 'top-right',
      hideAfter: 7000, 
    })
  };
  showDeptWarningToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Warning',
      text: 'Department is currently in used!',
      showHideTransition: 'slide',
      icon: 'warning',
      loaderBg: '#ffffff',
      position: 'top-right',
      hideAfter: 7000, 
    })
  };
  showDeptExistToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Warning',
      text: 'Department already exist.',
      showHideTransition: 'slide',
      icon: 'warning',
      loaderBg: '#ffffff',
      position: 'top-right',
      hideAfter: 7000, 
    })
  };
  showPosWarningToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Warning',
      text: 'Position already exist.',
      showHideTransition: 'slide',
      icon: 'warning',
      loaderBg: '#ffffff',
      position: 'top-right',
      hideAfter: 7000, 
    })
  };
  showInfoToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Info',
      text: 'And these were just the basic demos! Scroll down to check further details on how to customize the outfdgdfgdfgdfput.',
      showHideTransition: 'slide',
      icon: 'info',
      loaderBg: '#46c35f',
      position: 'top-right'
    })
  };
  showWarningToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Warning',
      text: 'Delete successfully.',
      showHideTransition: 'slide',
      icon: 'warning',
      loaderBg: '#57c7d4',
      position: 'top-right'
    })
  };
  showDangerToast = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Danger',
      text: 'Delete successfully.',
     // text: 'And these were just the basic demos! Scroll down to check further details on how to customize the output.',
      showHideTransition: 'slide',
      icon: 'error',
      loaderBg: '#f2a654',
      position: 'top-right'
    })
  };
  showToastPosition = function(position) {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Positioning',
      text: 'Specify the custom position object or use one of the predefined ones',
      position: String(position),
      icon: 'info',
      stack: false,
      loaderBg: '#f96868'
    })
  }
  showToastInCustomPosition = function() {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: 'Custom positioning',
      text: 'Specify the custom position object or use one of the predefined ones',
      icon: 'info',
      position: {
        left: 120,
        top: 120
      },
      stack: false,
      loaderBg: '#f96868'
    })
  }
  resetToastPosition = function() {
    $('.jq-toast-wrap').removeClass('bottom-left bottom-right top-left top-right mid-center'); // to remove previous position class
    $(".jq-toast-wrap").css({
      "top": "",
      "left": "",
      "bottom": "",
      "right": ""
    }); //to remove previous position style
  }

  showUploadError = function() {
    'use strict';

    resetToastPosition();
    $.toast({
      heading: 'Danger',
      text: 'File not supported! Please select a PDF File and try again.',
      showHideTransition: 'slide',
      icon: 'error',
      loaderBg: '#ffffff',
      position: 'top-right',
      hideAfter: 7000 
    });
  }
})(jQuery);