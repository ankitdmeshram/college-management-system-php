const gs_sidebar_close = () => {
    // alert(" gs_sidebar_close function called")
    document.getElementById("gs-sidebar").style.transform =
        "translateX(-100%)";
    document.getElementById("gs-sidebar").style.height = "0";
    document.getElementById("gs-sidebar").style.transition = ".2s";
    document.getElementById("gs-body").style.width = "100%";
    document.getElementById("gs-nav").style.width = "100%";
    document.getElementById("gs-body").style.transition = ".1s";
    document.getElementById("gs-nav").style.transition = ".1s";
    document.getElementById("gs_sidebar_close").style.display = "none";
    document.getElementById("gs_sidebar_open").style.display = "block";
};
const gs_sidebar_open = () => {
    // alert("gs_sidebar_open function called")
    document.getElementById("gs-sidebar").style.transform =
        "translateX(0%)";
    document.getElementById("gs-sidebar").style.height = "100vh";
    document.getElementById("gs-sidebar").style.transition = ".2s";
    document.getElementById("gs-body").style.width = "85%";
    document.getElementById("gs-nav").style.width = "85%";
    document.getElementById("gs-body").style.transition = ".1s";
    document.getElementById("gs-nav").style.transition = ".1s";
    document.getElementById("gs_sidebar_close").style.display = "block";
    document.getElementById("gs_sidebar_open").style.display = "none";
};

const gs_mob_sidebar_open = () => {
    // alert(" gs_mob_sidebar_open function called")
    document.getElementById("gs-sidebar").style.transform =
        "translateX(0%)";
    document.getElementById("gs-sidebar").style.height = "100vh";
    document.getElementById("gs-sidebar").style.position = "fixed";
    document.getElementById("gs-sidebar").style.zIndex = 1;
    document.getElementById("gs-sidebar").style.marginTop = "55px";
    document.getElementById("gs-sidebar").style.transition = ".2s";
    document.getElementById("gs-body").style.width = "85%";
    document.getElementById("gs-nav").style.width = "85%";
    document.getElementById("gs-body").style.transition = ".1s";
    document.getElementById("gs-nav").style.transition = ".1s";
    document.getElementById("gs_sidebar_close").style.display = "block";
    document.getElementById("gs_mob_sidebar_open").style.display = "none";
};