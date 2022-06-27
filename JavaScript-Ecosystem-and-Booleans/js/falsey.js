function truthyChecker(someValue) {
    if (someValue) {
        console.log("This is truthy");
        return true;
    } else {
        console.log("This is flasey");
        return false;
    };
}