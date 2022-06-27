var day = new Date().getDay();

if (day === 0) {
    console.log('Today is Sunday');
} else if (day === 1) {
    console.log('Today is Monday');
} else if (day === 2) {
    console.log('Today is Tuesday');
} else if (day === 3) {
    console.log('Today is Wednesday');
} else if (day === 4) {
    console.log('Today is Thursday');
} else if (day === 5) {
    console.log('Today is Friday');
} else if (day === 6) {
    console.log('Today is Saturday');
} else {
    console.log('Invalid Day!');
}