  function cliquer() {
    var text = prompt("Entrer Texte");
    if (text)
    {
      var my_element = document.getElementById('ft_list')
      my_element.getAttribute('id');
      var new_element = document.createElement('div');
      // // new_element.setAttribute('style','width:200px;height:60px;');
      //new_element.setAttribute('onclick','supr()');
      var_text = document.createTextNode(text);
      // //document.body.div.insertBefore( new_element, document.body.childnodes);
      // //new_element.appendChild(var_text);
      // //my_element.appendChild(new_element);
//var parent = document.createElement("div");
//var my_element = document.getElementById('ft_list');
//my_element.getAttribute('id');
//parent.id = "ft_list";

//ar child = document.createElement("div");
//var_text = document.createTextNode(text);
//child.id = "ft_list";
//child.innerHTML = text;
//parent.appendChild(child);

my_element.insertBefore(new_element,document.body.childNodes[0]);
    }
  }
  // function supr {
  //
  // }
