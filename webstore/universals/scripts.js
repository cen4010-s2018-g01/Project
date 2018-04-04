function validate(addRemove, num){
    var id = "form" + num;
    var form = document.getElementById(id);
    var quant = form.elements.namedItem('itemQuant').value;
    var pn = form.elements.namedItem('partNumber').value;
    var intro = "";
    var fromTo = "";
    
    if (addRemove == true){
        intro = "Add";
        fromTo = "to"
    }
    else{
        intro = "Remove";
        fromTo = "from";
    }
            
    var r = confirm(intro + " " + quant + " of " + pn + " " + fromTo + " your cart?");
            
    if (r == true){
        return true;
    }
            
    else {
        return false;
    }
}