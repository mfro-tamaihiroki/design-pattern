let sum;
sum = (a, b) => a + b;

sum = (...nums) => {
    let total = 0;
    nums.forEach(value => total = total + value);
    return total;
};

console.log(sum(1,2,3,4,5,6));