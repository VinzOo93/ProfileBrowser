
    const buttons = document.querySelectorAll("button");
    const content = document.querySelectorAll(".content");


    buttons.forEach( button => {

        button.addEventListener("click", e => {
            let i = 0;
            // hide Dom element not desired
            for (i; i < content.length; i++) {
                content[i].style.display = "none"
                buttons[i].classList.remove('active');
            }
            // select effect on button + show the content of the tab
            content[button.id -1].style.display = "table";
            e.currentTarget.classList.add('active')

        });

    });

