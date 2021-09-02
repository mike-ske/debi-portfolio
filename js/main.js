



/* 
Code for active menu
*/

let nav__link = document.querySelectorAll(".link_1");
// let active = document.getElementsByClassName("active")[0];
// let main_menu = document.getElementsByClassName("nav__list")[0];
// Add active class to the current button (highlight it)
var header = document.querySelector(".form");
var btns = header.getElementsByClassName("link_1");



// console.log(header);
// console.log(btns);

// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace(" active", "");
//   this.className += " active";
//   });
// }



// ===================== ADD ACTIVE CLASS TO LINKS ================
let path = window.location.pathname.split('/').pop()
  

    let target1 = document.getElementById('p1')
    let target2 = document.getElementById('p2')
    let arrow1 = document.getElementById('arr1')
    let arrow2 = document.getElementById('arr2')
    let logo = document.getElementById('logo')

    console.log(target1);
    if (path == 'contact') 
    {
        arrow2.classList.add('active');
        target2.style.color = '#E0245E'
    }
    else if (path == 'projects') 
    {
        arrow1.classList.add('active');
        target1.style.color = '#E0245E'
    }
    


// for (let i = 0; i < nav__link.length; i++) 
// {

//     const list__item = nav__link[i];

//     nav__link[i].addEventListener("click", function () {
//         var current = document.querySelector(".active");
//         current[0].className.replace("active", "");
//         // this.classList.add("active");
//         this.className += " active";
//     })
    
//     // ==== CODE TO HIDE THE MENU WHEN TABS ARE CLICKED
//     // list__item.addEventListener("click", function () {
//     //     main_menu.classList.remove("show");
//     // })
// }

/* 
============== CODE TO HIDE AND SHOW MENU ========
*/

let main__nav = document.getElementsByClassName("links")[0];
let nav__icon = document.getElementsByClassName("bars")[0];
let cl_se = document.getElementById('close_ico');
let bar = document.getElementById('open_ico');


let flag = 1;
nav__icon.addEventListener('click', function () {
       
    if ( main__nav.classList.toggle("show")) 
    {
        bar.classList.add('cancel');
        cl_se.classList.remove('cancel');
    }
    else{
        bar.classList.remove('cancel');
        cl_se.classList.add('cancel');
    }
})

// ============ CODE TO SET ACTIVE MENU FOOTER SECTION

// let foot_menu = document.getElementsByClassName("ul__list")[0].getElementsByClassName("ft__list")[0].getElementsByClassName("ft_list_item")[0];

// for (let i = 0; i < foot_menu.length; i++) {
//     let ft__link = foot_menu[i];

//     ft__link.addEventListener("click", function () {
//         document.getElementsByClassName("active_2")[0].classList.remove("active_2");
//         foot_menu.classList.add("active_2");
//     })

// }


// ========= set scroll nav =====

// window.addEventListener("scroll", function () {
//     document.getElementById("nav").classList.add("sticky");
//     const currentScroll = window.pageYOffset;
//     if (currentScroll <= 0) {
//     document.getElementById("nav").classList.remove("sticky");
     
//     }
//     return;
// });


//  ===== code for project type menu

// let sellect = document.getElementsByClassName("type")[0];
// let arr_icon = document.querySelectorAll("up::after");

// sellect.addEventListener("click", function () {
//     arr_icon.classList.add("arr__up");
// })




function sendRequest(e) 
{
    val = e.value

    let xhtp = new XMLHttpRequest();
    
    xhtp.onreadystatechange = function () 
    {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector('.body').innerHTML = this.responseText;
            // alert(this.responseText);
        }
    }
    // alert(val);
    xhtp.open('GET', 'index.php?item='+val, true);
    xhtp.send();

   
}

