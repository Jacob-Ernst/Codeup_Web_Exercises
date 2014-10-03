var now = moment();
console.log(now.format('MMMM Do YYYY, h:mm:ss a'));

console.log(now.format('[I love] YYYY'));

var daysFromHalloween = moment("20111131", "YYYYMMDD").fromNow();
console.log(daysFromHalloween);

var startOf = now.startOf('day').fromNow();
console.log(startOf);
