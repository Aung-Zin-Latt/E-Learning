var movie = {
    title: 'Wonder Woman',
    time: '2pm'
};

//updating property value
alert(movie.title = 'Avengers');

//adding a property to an object
movie.status = 'Unavailable';
console.log(movie);

//combining objects with arrays by making an array of objects
var movies = [{
        title: 'Peaky Blinders',
        time: '12pm',
        status: 'Available'
    },
    {
        title: 'Rampage',
        time: '6pm',
        status: 'Unavailable'
    }
];