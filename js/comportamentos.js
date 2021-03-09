
window.onload = init;

function init()
{
    var lista_posicao = document.querySelector("#posicao-mouse");

    document.querySelector("#btn").onmouseout = function()
    {
        var texto = document.createTextNode("Tirou o mouse do botão.");
        var li = document.createElement("li");

        li.appendChild(texto);
        lista_posicao.appendChild(li);
    }

    document.querySelector("#btn").onmouseover = function()
    {
        var texto = document.createTextNode("Colocou o mouse no botão");
        var li = document.createElement("li");

        li.appendChild(texto);
        lista_posicao.appendChild(li);
    }

    document.querySelector("header").onmouseover = function()
    {
        var texto = document.createTextNode("Colocou o mouse no cabeçalho.");
        var li = document.createElement("li");

        li.appendChild(texto);
        lista_posicao.appendChild(li);
    }
}