
function equalSequenceLength(array) {
    let sequenceLength = 0;
    for (let i = 1; i < array.length; i++) {
        if (array[i-1] == array[i]) {
            sequenceLength+=1;
        }
    }
    return sequenceLength;
}


// зона тестов ниже)

var assert = require('assert');

function runTest(sequence, expected) {
    const actual = equalSequenceLength(sequence);
    assert.equal(actual, expected)
    console.log("Sequence:", sequence, "; Actual: ", actual, "; Expected: ", expected) //не, это не отладка
}

class Test {
    constructor(sequence, expectedResult) {
        this.sequence = sequence
        this.expectedResult = expectedResult
    }
}

example = new Test([1, 1, 2, 3, 4, -51, 12, 12, 12, -51], 3)
longSequenceOnStart = new Test([1, 1, 1, 1, 2, 3, 4, -51, 12, 12, 12, -51], 5)
shortAndEqualsSequence = new Test([1, 1, 1], 2)
empty = new Test([], 0)
onlyOneElement = new Test([0], 0)

var array = [example, longSequenceOnStart, shortAndEqualsSequence, empty, onlyOneElement]

array.forEach(element => {
    runTest(element.sequence, element.expectedResult)
});

