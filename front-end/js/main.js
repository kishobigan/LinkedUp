//side bar
const menu_item = document.querySelectorAll(".menu-item");
//messages
const msg_notification = document.querySelector(".massages-notifications");
const msgs = document.querySelector(".messages");
const msg = document.querySelectorAll(".message");
const msg_search = document.querySelector("#message-search");
//theme
const theme = document.querySelector(".theme");
const c_theme = document.querySelector(".custermize-theme");
const close_card = document.querySelector(".close");
const font_sizes = document.querySelectorAll(".choose-size span");
var root = document.querySelector(":root");
const color_palette = document.querySelectorAll(".color span");
const bg_color_1 = document.querySelector(".bg-color-1");
const bg_color_2 = document.querySelector(".bg-color-2");
const bg_color_3 = document.querySelector(".bg-color-3");





// ------------------ Side bar --------------------------------
//remove active class from all menu item
const change_item = () =>{
    menu_item.forEach(item => {
        item.classList.remove("active");
    });
};

//hightlight click item
menu_item.forEach(item =>{
    item.addEventListener("click", () => {
        change_item();
        item.classList.add("active");
        if(item.id == notificatiions){
            document.querySelector(".notfication-popup").style.display = "none";
        }else{
            document.querySelector(".notfication-popup").style.display = "block";
            document.querySelector("#notificatiions .notification-counnt").style.display = "none";
        }
    });
});

// ------------------ Messages --------------------------------
//search chats
const search_msg = () => {
    const msg_set = msg_search.value.toLowerCase();
    console.log(msg_set);
    msg.forEach(chat =>{
        let name = chat.querySelector("h5").textContent.toLowerCase();
        if(name.indexOf(msg_set) != -1){
            chat.style.display = "flex";
        }else{
            chat.style.display = "none";
        }
    });
}

//search cht
msg_search.addEventListener("keyup",search_msg);

//hightlight msg box
msg_notification.addEventListener("click", () => {
    msgs.style.boxShadow = "0 0 1rem var(--color-priimary)";
    document.querySelector(".massages-notifications .notification-counnt").style.display = "none";
    setTimeout(() => {
        msgs.style.boxShadow = "none";
    }, 2000);
});

// ------------------ Custormize theme --------------------------------
//open card
const openTheme = () => {
    c_theme.style.display = "grid";
}
theme.addEventListener("click", openTheme);

//close card
close_card.addEventListener("click", () => {
    c_theme.style.display = "none";
});

//remove active class from span or font size selectors
const remove_size_selector = () => {
    font_sizes.forEach(size => {
        size.classList.remove("active");
    });
}
// active seclect span
font_sizes.forEach(size =>{
    size.addEventListener("click", () =>{
        remove_size_selector();
        size.classList.add("active");
    })
});

// fonts size
font_sizes.forEach(size => {
    let font_size;

    size.addEventListener("click", () =>{
        if(size.classList.contains("font-size-1")){
            font_size = "10px";
            root.style.setProperty("--sticky-top-left", "5.4rem;");
            root.style.setProperty("--sticky-top-left", "5.4rem;");
        }else if(size.classList.contains("font-size-2")){
            font_size = "13px";
            root.style.setProperty("--sticky-top-left", "5.4rem;");
            root.style.setProperty("--sticky-top-left", "-7rem;");
        }else if(size.classList.contains("font-size-3")){
            font_size = "16px";
            root.style.setProperty("--sticky-top-left", "-2rem;");
            root.style.setProperty("--sticky-top-left", "-17rem;");
        }else if(size.classList.contains("font-size-4")){
            font_size = "19px";
            root.style.setProperty("--sticky-top-left", "-5rem;");
            root.style.setProperty("--sticky-top-left", "-25rem;");
        }else if(size.classList.contains("font-size-5")){
            font_size = "22px";
            root.style.setProperty("--sticky-top-left", "-12rem;");
            root.style.setProperty("--sticky-top-left", "-35rem;");
        }

        // change font size of the root html element
        document.querySelector('html').style.fontSize = font_size;
    });
});

//remove color selector
const remove_color = () => {
    color_palette.forEach(color =>{
        color.classList.remove("active");
    });
}
//hightlight color secect
color_palette.forEach(color =>{
    color.addEventListener("click", () =>{
        remove_color();
        color.classList.add("active");
    });
});

// change primary color
color_palette.forEach(color =>{
    color.addEventListener("click", () => {
        let priimary;

        if(color.classList.contains("color-1")){
            priimaryHue = 0;
        }else if(color.classList.contains("color-2")){
            priimaryHue = 20;
        }else if(color.classList.contains("color-3")){
            priimaryHue = 32.94;
        }else if(color.classList.contains("color-4")){
            priimaryHue = 49;
        }else if(color.classList.contains("color-5")){
            priimaryHue = 59;
        }

        root.style.setProperty("--priimary-color-hue",priimaryHue);
    });
});

//back ground theme color value
let light_value;
let white_value;
let darck_value;

//change backgroun color
const changeBg = () =>{
    root.style.setProperty("--dark-color-lightness",darck_value);
    root.style.setProperty("--light-color-lightness",light_value);
    root.style.setProperty("--white-color-lightness",white_value);
}

bg_color_1.addEventListener("click", () =>{
    // add active class
    bg_color_1.classList.add("active");
    //remove active class
    bg_color_2.classList.remove("active");
    bg_color_3.classList.remove("active");

    //remove customized chhanges from local storage
    window.location.reload();
});
bg_color_2.addEventListener("click", () =>{
    light_value = "15%";
    white_value = "20%";
    darck_value = "95%";

    // add active class
    bg_color_2.classList.add("active");
    //remove active class
    bg_color_1.classList.remove("active");
    bg_color_3.classList.remove("active");

    changeBg();

});
bg_color_3.addEventListener("click", () =>{
    light_value = "0%";
    white_value = "10%";
    darck_value = "95%";

    // add active class
    bg_color_3.classList.add("active");
    //remove active class
    bg_color_1.classList.remove("active");
    bg_color_2.classList.remove("active");

    changeBg();
});

