var counter = 0;

function swap(selected) {
    document.getElementById('home').style.display = 'none';
    document.getElementById('coke').style.display = 'none';
    document.getElementById('sprite').style.display = 'none';
    document.getElementById('pepper').style.display = 'none';

    document.getElementById(selected).style.display = 'block';
}

function changeColours(){
    counter +=1;
    switch (counter){
        case 1:
            document.getElementById('body').style.backgroundColor = 'white';
            var header_sections = document.getElementsByClassName('main-colour');
            for (let i = 0; i < header_sections.length; i++) {
                console.log(header_sections.item(i))
                header_sections.item(i).style.backgroundColor = 'black';
            }
            document.getElementById('footer').style.backgroundColor = 'black';
            break;
        case 2:
            document.getElementById('body').style.backgroundColor = '#ffd500';
            // document.getElementById('header').style.backgroundColor = '#FF9700';
            var header_sections = document.getElementsByClassName('main-colour');
            for (let i = 0; i < header_sections.length; i++) {
                console.log(header_sections.item(i))
                header_sections.item(i).style.backgroundColor = '#FF9700';
            }
            document.getElementById('footer').style.backgroundColor = '#FF9700';
            break;
        case 3:
            document.getElementById('body').style.backgroundColor = '#00ffff';
            // document.getElementById('header').style.backgroundColor = '#0033fd';
            var header_sections = document.getElementsByClassName('main-colour');
            for (let i = 0; i < header_sections.length; i++) {
                console.log(header_sections.item(i))
                header_sections.item(i).style.backgroundColor = '#0033fd';
            }
            document.getElementById('footer').style.backgroundColor = '#0033fd';
            break;
        case 4:
            counter = 0;
            document.getElementById('body').style.backgroundColor = '#bbff9d';
            // document.getElementById('header').style.backgroundColor = '#0f5b00';
            var header_sections = document.getElementsByClassName('main-colour');
            for (let i = 0; i < header_sections.length; i++) {
                console.log(header_sections.item(i))
                header_sections.item(i).style.backgroundColor = '#0f5b00';
            }
            document.getElementById('footer').style.backgroundColor = '#0f5b00';
            break;
    }
}

function resetColours(){
    document.getElementById('body').style.backgroundColor = '#B6E7F3FF';
    // document.getElementById('header').style.backgroundColor = '#760003';
    var header_sections = document.getElementsByClassName('main-colour');
    for (let i = 0; i < header_sections.length; i++) {
        console.log(header_sections.item(i))
        header_sections.item(i).style.backgroundColor = '#760003';
    }
    document.getElementById('footer').style.backgroundColor = '#760003';
    counter = 0;
}