function count() {
    let count = 0;

    return function () {
        console.log(count);
        count++;
    };
}

let l = count();

l();
l();
l();