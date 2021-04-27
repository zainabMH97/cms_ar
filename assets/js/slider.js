
var $typeMenu = $('#type');
var $title = $('#title');


$typeMenu.change(function(){
    disableTitle();
});

function disableTitle(){
    if($typeMenu.val() == 'bg'){
        $title.attr("disabled", true);
    }else{
        $title.removeAttr("disabled");
    }
}