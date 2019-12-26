
const array = [1, 1, 2, 3, 4, -51, 12, 12, 12, -51];


function equalSequenceLength(array) {
    let sequenceLength = 0;
    for (let i = 1; i < array.length; i++) {
        if (array[i-1] == array[i]) {
            sequenceLength+=1;
        }
    }
    return sequenceLength;
}

const a = equalSequenceLength(array);
console.log(a);