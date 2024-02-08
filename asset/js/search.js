// var libelle = ["fury", "FURY", "test", "Goal"]
var regex = /.*FURY.*/;

// TODO a chaque lettre ajouter charger serachArray -> push dans autocomplete, if click sur ref -> load prod else load array

var searchArray = function(arr, regex) {
  var matches=[], i;
  for (i=0; i<arr.length; i++) {
    if (arr[i].match(regex)) matches.push(arr[i]);
  }
  return matches;
};

document.getElementById("search").addEventListener("keyup", merde);

function merde() {
	console.log(document.getElementById("search").value);
	
	console.log(searchArray(libelle, document.getElementById("search").value));
}

// console.log(searchArray(libelle, regex));