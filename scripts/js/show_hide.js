$(document).ready(function (){

    showHome();
})

function showHome(){
    brand = 'coke';
    resetColours();
    $("#home").show();
    $("#model").hide();
    $("#deeper_understanding").hide();
    $('#verge3d').hide();
}

function showModel($modelName){
    $("#home").hide();
    $("#model").show();
    $("#deeper_understanding").hide();
    $('#verge3d').hide();


    $('#coke_gallery').hide()
    $('#coke_description_model').hide()
    $('#sprite_gallery').hide()
    $('#sprite_description_model').hide()
    $('#pepper_gallery').hide();
    $('#pepper_description_model').hide();
    $('#fanta_gallery').hide();
    $('#fanta_description_model').hide();


    switch ($modelName){
        case 'coke':
            $('#coke_gallery').show()
            $('#coke_description_model').show()
            break;
        case 'sprite':
            $('#sprite_gallery').show()
            $('#sprite_description_model').show()
            break;
        case 'pepper':
            $('#pepper_gallery').show();
            $('#pepper_description_model').show();
            break;
        case 'fanta':
            $('#fanta_gallery').show();
            $('#fanta_description_model').show();
            break;
        default:
            break;
    }
    switch_brand($modelName);
}

function showVerge3d(){
    brand = 'coke';
    resetColours();
    $("#home").hide();
    $("#model").hide();
    $("#deeper_understanding").hide();
    $('#verge3d').show();
}

function showDeeperUnderstanding(){
    brand = 'coke';
    resetColours();
    $("#home").hide();
    $("#model").hide();
    $("#deeper_understanding").show();
    $('#verge3d').hide();
}

