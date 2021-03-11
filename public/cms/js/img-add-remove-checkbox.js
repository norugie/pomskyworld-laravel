(function() {
    'use strict';

    $(document).on('click', '.img-checkbox-data', function (e) {
        var id = $(this).data('ext-id');
        var existingImageNameList = $('#ext_image_name').val();
        if(existingImageNameList.includes(id + ",") ? existingImageNameList = existingImageNameList.replace(id + ',', '') : existingImageNameList = existingImageNameList + id + ",");
        
        $('#ext_image_name').attr('value', existingImageNameList);
    });
})();