function count(memberCount = 0) {
    let count = memberCount;

    return function () {
        return count++;
    };
}

let l = count(22);

l();
l();
console.log(l());