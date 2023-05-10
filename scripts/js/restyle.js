var counter = 0;

function changeColours(){
    counter +=1;
    console.log(counter)
    switch (counter){
        case 1:
            setColour('black');
            break;
        case 2:
            setColour('blue');
            break;
        case 3:
            setColour('fanta');
            break;
        case 4:
            setColour('pepper');
            break;
        case 5:
            setColour('sprite');
            break;
        case 6:
            resetColours();
    }
}

function setColour(colour){
    switch (colour){
        case 'coke':
            document.getElementById('body').style.backgroundColor = '#B6E7F3FF';
            // document.getElementById('header').style.backgroundColor = '#760003';
            var header_sections = document.getElementsByClassName('main-colour');
            for (let i = 0; i < header_sections.length; i++) {
                header_sections.item(i).style.backgroundColor = '#760003';
            }
            document.getElementById('footer').style.backgroundColor = '#760003';
            break;
        case 'sprite':
            document.getElementById('body').style.backgroundColor = '#d3ffbe';
            // document.getElementById('header').style.backgroundColor = '#0f5b00';
            var header_sections = document.getElementsByClassName('main-colour');
            for (let i = 0; i < header_sections.length; i++) {
                header_sections.item(i).style.backgroundColor = '#168101';
            }
            document.getElementById('footer').style.backgroundColor = '#168101';
            break;
        case 'pepper':
            document.getElementById('body').style.backgroundColor = 'rgb(255,213,219)';
            // document.getElementById('header').style.backgroundColor = '#760003';
            var header_sections = document.getElementsByClassName('main-colour');
            for (let i = 0; i < header_sections.length; i++) {
                header_sections.item(i).style.backgroundColor = '#590729';
            }
            document.getElementById('footer').style.backgroundColor = '#590729';
            break;
        case 'fanta':
            document.getElementById('body').style.backgroundColor = '#ffd500';
            // document.getElementById('header').style.backgroundColor = '#FF9700';
            var header_sections = document.getElementsByClassName('main-colour');
            for (let i = 0; i < header_sections.length; i++) {
                header_sections.item(i).style.backgroundColor = '#FF9700';
            }
            document.getElementById('footer').style.backgroundColor = '#FF9700';
            break;
        case 'black':
            console.log('Set Black')
            document.getElementById('body').style.backgroundColor = 'white';
            var header_sections = document.getElementsByClassName('main-colour');
            for (let i = 0; i < header_sections.length; i++) {
                header_sections.item(i).style.backgroundColor = 'black';
            }
            document.getElementById('footer').style.backgroundColor = 'black';
            break;
        case 'blue':
            document.getElementById('body').style.backgroundColor = '#00ffff';
            // document.getElementById('header').style.backgroundColor = '#0033fd';
            var header_sections = document.getElementsByClassName('main-colour');
            for (let i = 0; i < header_sections.length; i++) {
                header_sections.item(i).style.backgroundColor = '#0033fd';
            }
            document.getElementById('footer').style.backgroundColor = '#0033fd';
            break;
    }
}

function resetColours(){
    setColour(brand);
    counter = 0;
}