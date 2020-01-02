class observer {
    update() {
        // Abstract method :: write nothing make concrete
    }
}

class concreteObserver extends observer {
    update() {
        console.log('処理');
    }
}

class concreteObserver1 extends observer {
    update() {
        console.log('処理1');
    }
}

class concreteObserver2 extends observer {
    update() {
        console.log('処理2');
    }
}

class subject {
    observerList;

    constructor() {
        this.observerList = [];
    }

    addObserver(observer) {
        this.observerList.push(observer);
    }

    notifyObserver() {
        this.observerList.forEach(observer => observer.update())
    }
}

class concreteSubject extends subject {
    addComment() {
        console.log('書き込み込み〜');
        this.notifyObserver();
    }
}

let concreteSubject1 = new concreteSubject();
concreteSubject1.addObserver(new concreteObserver());
concreteSubject1.addObserver(new concreteObserver1());
concreteSubject1.addObserver(new concreteObserver2());

concreteSubject1.addComment();

// [出力]
// 書き込み込み〜
// 処理
// 処理1
// 処理2