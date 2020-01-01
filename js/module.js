let human = {
    myName : 'name',
    age : 30,
    say: function () {
        console.log(this.myName + this.age);
    }
};

human.say();