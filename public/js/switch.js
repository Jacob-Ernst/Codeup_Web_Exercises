// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'indigo'; // todo, change this to your favorite color from the list

switch(color){
    case "red":
        console.log("Red is the color Ferrari\'s must be.");
        break;
    case "orange":
        console.log("Orange is the color of tangerines.");
        break;
    case "yellow":
        console.log("Yellow! Don\'t eat this snow.");
        break;
    case "green":
        console.log("Green is the color humans can discern the most shades of.");
        break;
    case "blue":
        console.log("Blue is the color of things that are blue.");
        break;
    default:
        console.log("I do not know anything by that color.");
        break;
    
}



