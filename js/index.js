const burger = () => {
    const buttonOpen = document.querySelectorAll('.burger');
    if (!buttonOpen) return false;

    const parent = document.querySelector('.modal-burger');
    if (!parent) return false;
    const content = parent.querySelector('.content');
    const buttonClose = parent.querySelector('.close');

    const bg = document.querySelector('.bg-black')

    if (!bg) return false;

    buttonOpen.forEach(el => {
        el.addEventListener('click', (e) => {
            e.preventDefault();
            parent.classList.add('active');
            bg.classList.add('active');
            setTimeout(() => {
                content.classList.add('active')
            }, 0)
        });
    })


    buttonClose.addEventListener('click', (e) => {
        e.preventDefault();
        content.classList.remove('active');
        setTimeout(() => {
            parent.classList.remove('active');
        }, 300);
        bg.classList.remove('active');
        
    });

    parent.addEventListener('click', (e) => {
        if (e.target == parent) {
            content.classList.remove('active');
            setTimeout(() => {
                parent.classList.remove('active');
                
            }, 300)
            bg.classList.remove('active');
        }
    })
}

const programCourse = () => {
    const parent = document.querySelectorAll('.program-themes__item');

    if(parent.length == 0) return false;

    parent.forEach(el => {
        const text = el.querySelector('.about');
        const circle = el.querySelector('.circle');
        const arrow = el.querySelector('.arrow');
        if(!arrow) return false;

        el.addEventListener('click', () => {
            el.classList.toggle('active');
            circle.classList.toggle('active');
            arrow.classList.toggle('active');
            text.classList.toggle('active');
        })
    })
}

const navAccount = () => {
    const parent = document.querySelector('.account-wrapper');
    if(!parent) return false;

    const menu = parent.querySelector('.menu');
    const button = parent.querySelector('.name');
    const arrow = parent.querySelector('.arrow');

    button.addEventListener('click', () => {
        menu.classList.toggle('active');
        arrow.classList.toggle('active');
    })
}

const accordion = (accordion, parentItems, parentButton, parrentContent) => {

    const parent = document.querySelector(accordion);
    if(!parent) return false;

    const items = parent.querySelectorAll(parentItems);

    items.forEach((item) => {
        const open = item.querySelector(parentButton);
        const content = item.querySelector(parrentContent);
        open.addEventListener('click', () => {
            content.classList.toggle('active');
            open.classList.toggle('active');
        })
    })
}

const numberAnimation = (elems) => {

    let elements = elems;

    // Параметры анимации
    const time = 1000;
    const step = 1;

    function outNum(elements) {
        let e = document.querySelectorAll(elements);
        e.forEach((item) => {
            // Числа
            let number = +item.textContent;
            let n = 0;
            let t = Math.round(time/(number/step));
            let interval = setInterval(() => {
                    n = n + step;
                    if (n === number) {
                        clearInterval(interval);
                    }
                    item.innerHTML = n;
                }, t);
        })
    }

    // Вызываем функцию
    outNum(elements);

}

const init = () => {
    burger();
    programCourse();
    navAccount();
    accordion('.accordion__list', '.accordion__item', '.accordion__button', '.accordion__content');
    numberAnimation('.admin-panel-content-info-item__title');
}

document.addEventListener('DOMContentLoaded', init)