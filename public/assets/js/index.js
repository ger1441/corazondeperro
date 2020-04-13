
$(document).on('click','.openModal',function(e){
    e.preventDefault();
    var target = $(this).data('modal');
    $("#modal"+target).show();
});

$(document).on('click','.closeFamilia',function(){
    var target = $(this).data('modal');
    $("#modal"+target).hide();
});


/* Show images */
$(document).on('click','.imageFit',function(){
    var target = $(this);
    var targetContent = target.data('target');
    var targetImage = target.data('image');
    var parentP = $("#"+targetContent);
    var parentPImage = parentP.data('image');
    parentP.html('<img src="'+targetImage+'">');
    target.html('<img src="'+parentPImage+'">');

    parentP.data('image',targetImage);
    target.data('image',parentPImage);

});

