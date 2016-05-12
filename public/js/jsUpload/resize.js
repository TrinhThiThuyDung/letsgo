$(document).ready(function(){
    $.blueimp.fileupload.prototype.processActions.duplicateImage = function (data, options) {
    if (data.canvas) {
        console.log(data.canvas);
        data.files.push(data.files[data.index]);
    }
    console.log(data);
    return data;
};
$('#fileupload').fileupload({
    processQueue: [
        {
            action: 'loadImage',
            fileTypes: /^image\/(gif|jpeg|png)$/,
            maxFileSize: 20000000 // 20MB
        },
        {
            action: 'resizeImage',
            maxWidth: 1920,
            maxHeight: 1080
        },
        {action: 'saveImage'},
        {action: 'duplicateImage'},
        {
            action: 'resizeImage',
            maxWidth: 1280,
            maxHeight: 1024
        },
        {action: 'saveImage'},
        {action: 'duplicateImage'},
        {
            action: 'resizeImage',
            maxWidth: 1024,
            maxHeight: 768
        },
        {action: 'saveImage'}
    ]
});
});