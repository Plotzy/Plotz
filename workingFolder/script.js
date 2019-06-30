/*
    Testing for all the things I learned
*/

/* If and else statements */
//6/13/2019

/*var firstName = 'jon';
var civilStatus = 'single';

if (civilStatus === 'married'){
    console.log(firstName + 'is married!');
} else {
    console.log(firstName + ' will hopefully marry soon :)')
}

var isMarried = false;
if (isMarried){
    console.log(firstName + 'is married!');
} else {
    console.log(firstName + ' will hopefully marry soon :)')
}

var massMark =78; //kg
var heightMark = 1.69; // meters
 massJohn = 92;
var heightJohn = 1.95;

var BMIMark = massMark / (heightMark * heightMark);
var BMIJohn = massJohn / (heightJohn * heightJohn);

if (BMIMark > BMIJohn){
console.log('Mark\'s BMI is higher than John\'s.');
} else {
console.log('BMIJohn\'s BMI is higher than Marks\'s.');
}*/


/*parents = 'Jonathan & Sharista';
wife='Sharista';
son='Noah'

firstName = 1;
switch(firstName){
    case 1:
        console.log(parents + ' ' + 'are going to have a baby soon.');
        break;
    case 2:
        console.log(wife +  ' ' + 'is going to give Birth soon.');
        break;
    case 1:
    case 3:
        console.log(son + ' ' + 'is excited to come into this world.');
        break;
    default:
        console.log(firstName + ' ' + 'are super excited');
        break;
}*/

/*jonTeam = (89 + 120 + 103) / 3;
mikeTeam = (116 + 94 + 123) / 3;

console.log('On average Jon\'s team has scored' + ' ' + jonTeam);
console.log('On average Mike\'s team has scored' + ' ' + mikeTeam);

if(mikeTeam >= jonTeam){
    console.log(mikeTeam + ' ' + 'so Mike\'s team is the winner');
}else{
    console.log('You are the loser.');
}*/



// Learning Functions

/*function calculateAge(birthYear) {
     return 2018 - birthYear;
}

let ageJohn = calculateAge(1990);
let ageMike = calculateAge(1948);
let ageJane = calculateAge(1969);
console.log(ageJohn, ageMike, ageJane);

function yearsUntilRetirement(year, firstName) {
    let age = calculateAge(year);
    let retirement = 65 - age;

    if (retirement > 0) {
        console.log(firstName + ' retires in ' + retirement + ' years. ');
    } else {
        console.log(
            firstName + ' is already retired.');
    }
}

yearsUntilRetirement(1990, 'John');
yearsUntilRetirement(1969, 'Mike');
yearsUntilRetirement(1948, 'Jane');

let whatDoYouDo = function(job, firstName){
    switch(job){
        case 'teacher':
            return firstName + ' teaches kids how to code.';
        case 'driver':
            return firstName + ' drives a cab in hutchinson.';
        case 'designer':
            return firstName + ' designs beautiful websites.';
        default:
            return firstName + ' does something else.'
    }
}
console.log(whatDoYouDo('teacher', 'Jonathan -'));
console.log(whatDoYouDo('driver', 'Sharista -'));
console.log(whatDoYouDo('designer', 'Noah -'));

var names = ['Jonathan','Sharista','Noah'];
var years = new Array(1990,1969,1948);

console.log(names.length);

names[1] = 'Ben';
names[names.length] = 'Mary';
console.log(names);*/

//Different Data
/*var jon = ['Jonathan','Plotz',1991,'Web Developer', true];
jon.unshift('Mr.'); //Adds element to the beginning of the array.
jon.push('blue'); //Adds element to the end of the array;
console.log(jon);

jon.pop(); //removes an element from the end of the array.
jon.pop();
jon.shift(); // removes an element from the beginning of the array
console.log(jon.indexOf(1991));

developer = jon.indexOf('Web Developer') === 4 ? 'Jon is not a Web Developer' : 'Jon is a Web Developer';

console.log(developer);
console.log(names);*/










// variable.unshift() = Adds and element to the beginning of the array.

// variable.shift() = Removes and element from the beginning of the array.

// variable.push() = Adds an element to the end of the array

// variable.pop() = Removes an element from the end of the array.




development =['html5','CSS3', 'php7','javascript', 'jquery', 'json', 'ajax'];

console.log(development);

development.unshift('Bootstrap4');

console.log(development);

development.push('reactJs');

console.log(development);

development.pop();

console.log(development);

development.shift();

console.log(development);



    let bills =[124,48,268];

     let tips = [
        tipCalculator(bills[0]),
        tipCalculator(bills[1]),
        tipCalculator(bills[2])
    ];

      let finalValues = [
         bills[0] + tips[0],
         bills[1] + tips[1],
         bills[2] + tips[2]
     ];

function tipCalculator(bill){
    let percentage;
    if(bill < 50){
        percentage = .20;
    } else if(bill >= 50 && bill < 200){
        percentage = .15;
    }else{
       percentage = .10;
    }
    return percentage * bill;
}

console.log(tipCalculator(25));
console.log(tipCalculator(100));
console.log(tipCalculator(300));

console.log(tips);
//console.log(bills);

// Objects and Properties

jon = {
    firstName:'Kevin',
    lastName: 'Rachet',
    birthYear: 1990,
    family: ['Kevin','Stephanie','Sheila','Tasha'],
    job: 'Pen Testing ',
    isMarried: false,
    calAge:function(){
         this.age = 2018 - this.birthYear;
    }
};

jon.calAge();
console.log(jon);

