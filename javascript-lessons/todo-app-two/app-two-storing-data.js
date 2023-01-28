
// We are learning to save and access data from the local storage that we have. It gets saved on the server. 

// To save something to local storage, you use setItem and write it the key value for each one. Key is the first one and Value the second one. When you save it in localStorage, it is saved as a string, important to remember this.
localStorage.setItem("myName","Steve");

// To access that which I have saved you used getItem and you only have one parameter, to use the key to retrieve.
localStorage.getItem("myName");
console.log(localStorage.getItem("myName")); // Steve

// Instead of writing localStorage everytime we want to save or access something, can be pretty long to write. Lets make it shorter.
const data = localStorage;
data.setItem("bday", "idk"); // it works

data.getItem("bday");
console.log(data.getItem("bday")); // it works


// first example, keeping score of game

var count = 0;

count++;

data.setItem('score', count);

// typeof is helpful to find the type of variable, which so far are number, string or boolean

const storedCount = data.getItem('score');

console.log( typeof storedCount == "number"); // false
console.log( typeof storedCount == "string"); // true
console.log( typeof storedCount == "boolean"); //false

// the number 1 being stored is a string and not a number

// Let say I want to store the value in an object as such
data.setItem('score', {score: count}); // it saves it as a [object Object]
// How do we fix this, there is already a solution


data.setItem('score', JSON.stringify({score: count}));
// stringify is encoding it, allowing it to be saved as a string

// give it a different name since it has a object now
const storedCount1 = data.getItem('score');
// parse is decoding it, allowing it to be accessed as an object
console.log( JSON.parse(storedCount1)); // access the whole object
console.log( JSON.parse(storedCount1).score); // access the score inside the object





// Practice

data.clear(); // cleared local storage
console.clear(); // cleared console

data.setItem("firstName", "Steve");

var firstName = data.getItem("firstName");
console.log(firstName);

function storedData(key,value) {
	data.setItem(key, value);
	var access = data.getItem(key);
	console.log(access);
}

storedData("lastName", "DeAnda");
storedData("age", 32);
storedData("alive", "true");
data.clear();
storedData("food", "pizza");
storedData("color", "green");
storedData("typing", "yes");
data.clear();

data.clear();
var steve = "Steve";
var deanda = "DeAnda";
data.setItem("person", JSON.stringify({firstName: steve}));
const human = data.getItem("person");
console.log(JSON.parse(human));
console.log(JSON.parse(human).firstName);

data.clear();
data.setItem("person", JSON.stringify({firstName: steve, secondName: deanda}));
const humanTwo = data.getItem("person");
console.log(JSON.parse(humanTwo));
console.log(JSON.parse(humanTwo).firstName);
console.log(JSON.parse(humanTwo).secondName);

const pack = [
{ id: 1, item: "bottle",},
{ id: 2, item: "toys",}
]

data.setItem("bag", JSON.stringify(pack));
const getBag = data.getItem("bag");
console.log(JSON.parse(getBag));
console.log(JSON.parse(getBag)[0]);
console.log(JSON.parse(getBag)[0].item);
console.log(JSON.parse(getBag)[1]);
console.log(JSON.parse(getBag)[1].item);

function objectData(key, object) {
	data.setItem(key, JSON.stringify(object));
	const getBag = data.getItem(key);
	console.log(JSON.parse(getBag));
}

objectData("pack", pack);










































