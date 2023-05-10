var is_spinning = false;
var current_model_type = "can";
var brand = "coke";

function toggle_spin()
{
    is_spinning = !is_spinning
    document.getElementById('model__can-TIMER').setAttribute('enabled', is_spinning);
    document.getElementById('model__coke_bottle-TIMER').setAttribute('enabled', is_spinning);
    document.getElementById('model__sprite_bottle-TIMER').setAttribute('enabled', is_spinning);
    document.getElementById('model__pepper_bottle-TIMER').setAttribute('enabled', is_spinning);
    document.getElementById('model__fanta_bottle-TIMER').setAttribute('enabled', is_spinning);
    document.getElementById('model__cup-TIMER').setAttribute('enabled', is_spinning);
    if(is_spinning){
        document.getElementById('spin_button').style.backgroundImage = 'url(./assets/images/buttons/stop_spin_button.png)';
    }else{
        document.getElementById('spin_button').style.backgroundImage = 'url(./assets/images/buttons/spin_button.png)';
    }
}
function lighting(intensity)
{
    for (let i = 1; i <=6 ; i++) {
        var e = document.getElementById("model__light_" + i)
        e.setAttribute('intensity',intensity);
    }
}

function set_camera(view){
    var cam_string = 'model__' + view + '_cam';
    document.getElementById(cam_string).setAttribute('bind', 'true');
}

function switch_brand(new_brand){
    brand = new_brand;
    // console.log(brand + "-" + current_model_type);
    set_can_texture(brand);
    set_cup_texture(brand);
    resetColours();
    set_model_type(current_model_type);

}

function set_model_type(model_type){
    current_model_type = model_type;
    switch(current_model_type){
        case "can":
            set_model_active(0);
            break;
        case 'bottle':
            switch (brand) {
                case "coke":
                    set_model_active(1);
                    break;
                case "sprite":
                    set_model_active(2);
                    break;
                case "pepper":
                    set_model_active(3);
                    break;
                case "fanta":
                    set_model_active(4);
                    break;
            }
            break;
        case "cup":
            set_model_active(5);
            break;
        default:
            set_model_active(0);
    }
    setTextAreas();
}

function set_can_texture(brand){
    document.getElementById('model__can_texture').setAttribute('url','./textures/'+ brand +'_can_texture.png');
}

function set_cup_texture(brand){
    document.getElementById('model__cup_texture').setAttribute('url','./textures/'+ brand +'_cup_texture.png');
}

function setTextAreas(){
    var modelString = ""
    switch (brand){
        case "coke":
            modelString += "Coke"
            break;
        case "sprite":
            modelString += "Sprite"
            break;
        case "pepper":
            modelString += "Dr Pepper"
            break;
        case "fanta":
            modelString += "Fanta"
            break;
    }
    switch (current_model_type){
        case "can":
            modelString += " Can";
            break;
        case "bottle":
            modelString += " Bottle"
            break;
        case "cup":
            modelString += " Cup"
            break;
    }
    modelString += " 3D Model"
    $('#model_title').html(modelString);

    var description = "This " + modelString;

    if(current_model_type == 'can'){
        description += " has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.";
    }else{
        description += " has been created in Blender, imported to 3DSMax and converted, using the instantreality transcoders, to X3D for display online.";
    }

    $('#model_text').html(description);
}

function set_model_active(id){
    document.getElementById("model__switcher").setAttribute("whichChoice", id)
}