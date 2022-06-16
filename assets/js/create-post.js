var arr_html = {
    'p': '<p class="text_content _active textFocus mt-2 mb-2" data-placeholder="Текст"></P>',
    'h2': '<h2 class="text_content _active textFocus mt-5 mb-3" data-placeholder="Текст заголовока"></h2>',
    'hr': '<hr class="text_content _active">',
    'blockquote': '<blockquote class="text _active row mt-3 mb-3 ms-1 me-1"> <i><p class="textFocus col-md-12 mt-2 mb-2" data-placeholder="Текст цитаты"></p></i> <p class="textFocus col-md-12 mt-2 mb-2 quote-author" data-placeholder="Автор"></p> </blockquote>',
    'ul': '<ul class="text_content _active mt-3 mb-3"><li class="ps-2"><br></li></ul>',
};

function myFunction(elem){
    for (let key in arr_html){
        if (key == elem) {
            let _active = document.querySelector("._active")
            let elemeHTML = ""
            elemeHTML = arr_html[key]

            let text_content = document.querySelectorAll('.text_content')
            _active.insertAdjacentHTML('afterend', elemeHTML);

            for (let i = 0; i < text_content.length; i++){
                text_content[i].classList.remove("_active")
            }
        }

    }
}

function clicked(){
    let parent = document.querySelector('.contents')
    let itemClick = parent.querySelectorAll('.text_content')
    parent.addEventListener('click', (event) => {
        let target = event.target
        if(target.classList.contains('text_content')) {
            for(let i = 0; i < itemClick.length; i++) {
                itemClick[i].classList.remove('_active')
            }
            target.classList.add('_active')
        }
    })
}
clicked()

function keydown(){
    document.addEventListener('keydown', function(event) {
        keyup()
        clicked()
        const cols = document.querySelectorAll("._active");
        if (cols.length == 2){
            cols[0].classList.remove("_active")
        }
    });
} 
keydown()


function keyup(){
    parent.addEventListener('keyup', function(event) {
        content()
        if(event.target.classList.contains('text_content')) {
            event.target.classList.add('_active')
        }
    })
}

function content(){
    let parent = document.querySelector('.contents');
    let child = document.querySelector('p');

    let contains = parent.contains(child);
    console.log(contains);
    if (contains == false){
        parent.innerHTML = '<p class="text_content _active textFocus" data-placeholder="Текст"></P>'
    }
}


function exportText(){
    document.querySelector("#textPost").innerHTML = document.querySelector(".contents").innerHTML
}