// navigation Menu
function openNav() 
{
    document.getElementById("mySidenav").style.width = "100vw";
}
/* Set the width of the side navigation to 0 */
function closeNav() 
{
    document.getElementById("mySidenav").style.width = "0";
}


// var actualMode
// actualMode = "light";

// function blackWhite()
// {

//     if (actualMode == "light")
//     {
//         // change white background to black
//         var elementsBackWhite = document.getElementsByClassName("background_white"); //get all elements
//         for (var i = 0; i < elementsBackWhite.length; i++)
//         {
//             elementsBackWhite[i].style.backgroundColor = "#000000"
//         }
//         // change black elements to white
//         var elementsBlack = document.getElementsByClassName("black"); //get all elements
//         for (var i = 0; i < elementsBlack.length; i++)
//         {
//             elementsBlack[i].style.color = "#ffffff"
//         }
//         // change black background to white
//         var elementsBack = document.getElementsByClassName("background_black"); //get all elements
//         for (var i = 0; i < elementsBack.length; i++)
//         {
//             elementsBack[i].style.backgroundColor = "#ffffff"
//         }
//         // change white elements to black
//         var elementsWhite = document.getElementsByClassName("white"); //get all elements
//         for (var i = 0; i < elementsWhite.length; i++)
//         {
//             elementsWhite[i].style.color = "#000000"
//         }
//         actualMode = "dark"
//     }
//     else if (actualMode !== "light")
//     {
//         // change black background to white
//         var elementsBackWhite = document.getElementsByClassName("background_white"); //get all elements
//         for (var i = 0; i < elementsBackWhite.length; i++)
//         {
//             elementsBackWhite[i].style.backgroundColor = "#FFFFFF"
//         }
//         // change white elements to black
//         var elementsBlack = document.getElementsByClassName("black"); //get all elements
//         for (var i = 0; i < elementsBlack.length; i++)
//         {
//             elementsBlack[i].style.color = "#000000"
//         }
//         // change white background to black
//         var elementsBack = document.getElementsByClassName("background_black"); //get all elements
//         for (var i = 0; i < elementsBack.length; i++)
//         {
//             elementsBack[i].style.backgroundColor = "#000000"
//         }
//         // change black elements to white
//         var elementsWhite = document.getElementsByClassName("white"); //get all elements
//         for (var i = 0; i < elementsWhite.length; i++)
//         {
//             elementsWhite[i].style.color = "#FFFFFF"
//         }
//         actualMode = "light"
//     }
// }
// blackWhite();





function goDark()
{
    // change white background to black
    var elementsBackWhite = document.getElementsByClassName("background_white"); //get all elements
    for (var i = 0; i < elementsBackWhite.length; i++)
    {
        elementsBackWhite[i].style.backgroundColor = "#000000"
    }
    // change black elements to white
    var elementsBlack = document.getElementsByClassName("black"); //get all elements
    for (var i = 0; i < elementsBlack.length; i++)
    {
        elementsBlack[i].style.color = "#ffffff"
    }
    // change black background to white
    var elementsBack = document.getElementsByClassName("background_black"); //get all elements
    for (var i = 0; i < elementsBack.length; i++)
    {
        elementsBack[i].style.backgroundColor = "#ffffff"
    }
    // change white elements to black
    var elementsWhite = document.getElementsByClassName("white"); //get all elements
    for (var i = 0; i < elementsWhite.length; i++)
    {
        elementsWhite[i].style.color = "#000000"
    }
    actualMode = "dark"

}

function goLight()
{
    // change black background to white
    var elementsBackWhite = document.getElementsByClassName("background_white"); //get all elements
    for (var i = 0; i < elementsBackWhite.length; i++)
    {
        elementsBackWhite[i].style.backgroundColor = "#FFFFFF"
    }
    // change white elements to black
    var elementsBlack = document.getElementsByClassName("black"); //get all elements
    for (var i = 0; i < elementsBlack.length; i++)
    {
        elementsBlack[i].style.color = "#000000"
    }
    // change white background to black
    var elementsBack = document.getElementsByClassName("background_black"); //get all elements
    for (var i = 0; i < elementsBack.length; i++)
    {
        elementsBack[i].style.backgroundColor = "#000000"
    }
    // change black elements to white
    var elementsWhite = document.getElementsByClassName("white"); //get all elements
    for (var i = 0; i < elementsWhite.length; i++)
    {
        elementsWhite[i].style.color = "#FFFFFF"
    }
    actualMode = "light"
}



