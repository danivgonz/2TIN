var svg = "http://www.w3.org/2000/svg";
var tela = document.getElementById('tela');

// Criar círculo

function Circulo(x,y,r){
    this.x = x;
    this.y = y; 
    this.r = r;

    var novoCircle = document.createElementNS(svg, "circle");
    novoCircle.setAttribute("cx", x);
    novoCircle.setAttribute("cy", y);
    novoCircle.setAttribute("r", r);

    this.element = novoCircle;
    tela.appendChild(this.element);
    this.setFill = function(f){
        this.element.setAttribute("fill", f);
    }

    this.setStroke = function(sf, sw){
        this.element.setAttribute("stroke", sf);
        this.element.setAttribute("stroke-width", sw);        
    }
}


function Retangulo(x0,y0,x1,y2){
    this.x0 = x0;
    this.x1 = x1; 
    this.y0 = y0;     
    this.y1 = y1; 

    var novoRetangulo = document.createElementNS(svg, "rect");
    novoRetangulo.setAttribute("x", x0);
    novoRetangulo.setAttribute("y", y1);
    novoRetangulo.setAttribute("x", x1);
    novoRetangulo.setAttribute("y", y1);

    this.element = novoRetangulo;
    tela.appendChild(this.element);
    this.setFill = function(f){
        this.element.setAttribute("fill", f);
    }

    this.setStroke = function(sf, sw){
        this.element.setAttribute("stroke", sf);
        this.element.setAttribute("stroke-width", sw);        
    }
}



