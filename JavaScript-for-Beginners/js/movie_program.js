var movies = [{
        title: 'Peaky Blinders',
        time: '12pm',
        status: 'Available'
    },
    {
        title: 'Avengers',
        time: '3pm',
        status: 'Unavailable'
    },
    {
        title: 'The Last Jedi',
        time: '6pm',
        status: 'Available'
    },
    {
        title: 'Lady Bird',
        time: '8pm',
        status: 'Unavailable'
    }
];

for (var movie of movies) {
    if (movie.status === 'Available') {
        console.log("The movie " + movie.title + " plays at " + movie.time + ".");
    } else {
        console.log("The movie " + movie.title + " is sold out.");
    }
}