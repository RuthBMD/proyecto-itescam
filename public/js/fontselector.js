var body= $('body');
var select= $('#tamanio');
select.on('change',function(){
    setFontSize(this.value);
});

function setFontSize(fontsize){
    removeClasses(body);

    body.addClass(`font-${fontsize}`);

    
}
function removeClasses(JQElement){
    JQElement.removeClass(function(index, classNames){
        var current_classes= classNames.split(" "),
            classes_to_remove = [];

        $.each(current_classes, function(index, class_name){
            if (/^(font-).*/.test(class_name)) {
                classes_to_remove.push(class_name);
            }
          });
        return classes_to_remove.join(" ");
    });   
}    

/**
 * @author Victor Isaac Lopez Fernandez
 * @param nada
 */
function noHaceNada(nada){
    return 'nada';
}