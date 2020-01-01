function humanFactory() {
    return {
        myName : 'name',
        age : 30,
        say: function () {
            console.log(this.myName + this.age);
        },
    }
}

let human  = humanFactory();
human.say();