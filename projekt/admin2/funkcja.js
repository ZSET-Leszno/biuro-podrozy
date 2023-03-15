
//funkcja przypsiania obiektu jako przycisk 
//elemnt klikany


function open()
{
    let OpenBtn1 = document.getElementById("");
    OpenBtn1.onclick =  openfun1 ;     
    let closeBtn1 = document.getElementById("przycisk");
    closeBtn1.onclick =  closefun1 ; 

    let OpenBtn2 = document.getElementById("area2");
    OpenBtn2.onclick =  openfun2 ;     
    let closeBtn2 = document.getElementById("close2");
    closeBtn2.onclick =  closefun2 ;     
    
    let OpenBtn3 = document.getElementById("area3");
    OpenBtn3.onclick =  openfun3 ;     
    let closeBtn3 = document.getElementById("close3");
    closeBtn3.onclick =  closefun3 ;   



}

//funkcje otwierajace popup'y
function openfun1()
{
    document.getElementById("info_klient").style.display = "block";
    document.getElementById("popmenu2").style.display = "none";
    document.getElementById("popmenu3").style.display = "none";
}
function openfun2()
{
    document.getElementById("popmenu1").style.display = "none";
    document.getElementById("popmenu2").style.display = "block";
    document.getElementById("popmenu3").style.display = "none";
}
function openfun3()
{
    document.getElementById("popmenu1").style.display = "none";
    document.getElementById("popmenu2").style.display = "none";
    document.getElementById("popmenu3").style.display = "block";
}

//funkcje zamykajace popup'y

function closefun1()
        {
            document.getElementById("info_klient").style.display = "none";
        }

function closefun2()
        {
            document.getElementById("popmenu2").style.display = "none";
        }

function closefun3()
        {
            document.getElementById("popmenu3").style.display = "none";
        }


document.addEventListener("DOMContentLoaded", open);