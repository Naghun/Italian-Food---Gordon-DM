document.addEventListener('DOMContentLoaded', function() {
    const navigation_button = document.getElementById('navigation-button')
    const popup = document.getElementById('popup-container');
    const close_navigation_button = document.getElementById('close-navigation-button');
    // const back_to_top_button = document.getElementById('back-to-top')
    // const navigation_container = document.getElementById('navigation-container')


    // const transparent_nav = document.getElementById('transparent-nav')
    // const white_nav = document.getElementById('white-nav')

    // const first_row = document.getElementById('starter-row')

    // const observer = new IntersectionObserver(
    //     entries => {
    //         entries.forEach(entry => {
    //             if (entry.isIntersecting) {
    //                 navigation_container.classList.add('add-color');
    //                 transparent_nav.classList.add('d-flex')
    //                 transparent_nav.classList.remove('d-none')
    //                 white_nav.classList.add('d-none')
    //                 white_nav.classList.remove('d-flex')
    //             } else {
    //                 navigation_container.classList.remove('add-color');
    //                 transparent_nav.classList.add('d-none')
    //                 transparent_nav.classList.remove('d-flex')
    //                 white_nav.classList.add('d-flex')
    //                 white_nav.classList.remove('d-none')
    //             }
    //         });
    //     },
    //     {
    //         threshold: 0.6,
    //     }
    // );
    
    // if (first_row) {
    //     observer.observe(first_row);
    // }

    navigation_button.addEventListener('click', () => {
        popup.classList.add('active')
    })
    close_navigation_button.addEventListener('click', () => {
        popup.classList.remove('active')
    })
    back_to_top_button.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    })
});