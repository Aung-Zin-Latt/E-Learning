// console.log(3 === 3 && 'a' === 'a');
// // return true
// console.log(3 === 3 && 'cow');
// // return cow
// console.log(3 === 3 && 'cow' && 'chicken');
// // return chicken because all openrands are truthy
// console.log(3 === 3 && false && 'chicken');
// // return false
// 3 === 3 && 'cow' && console.log('chicken');
// // return chicken
// console.log(3 === 3 || 'cow' || 'chicken');
// // return true
// console.log(3 === 4 || 'cow' || 'chicken');
// // return cow
// console.log(3 === 4 || false || 0);
// // return 0

function isAdult(age) {
    // if (age && age >= 18) {
    //     return true;
    // } else {
    //     return false;
    // }
    return age && age >= 18;
}
console.log(isAdult(15));
// return false
console.log(isAdult(33));
// return true

function countToFive(start) {
    var start = start || 1;
    for (var i = start; i <= 5; i++) {
        console.log(i);
    }
}
countToFive(0);
// return 1, 2, 3, 4, 5

function countToFive(start = 1) {
    for (var i = start; i <= 5; i++) {
        console.log(i);
    }
}
countToFive(0);
// return 0, 1, 2, 3, 4, 5

function greet(name) {
    name && console.log('Hi, my name is ' + name + '!');
}
greet('Aung Zin Latt');
// return "Hi, my name is Aung Zin Latt!"