var results = {};
const gateCheckJJ = (input, config) =>{
  const input1 = setInput1(input);
  const output1 = setOutput1(input1, config[0], config[1], config[2]);
  const input2 = setInput2(output1);
  const output2 = setOutput2(input2, config[0], config[1], config[2], config[3], config[4], config[5]);
  clearLEDs();
  setLEDs(input, input1, input2, output1, output2);
  if (output2.join(',') === 'true,true,true') {
      if( results[JSON.stringify(input)] === undefined ) {
        results[JSON.stringify(input)] = 1;
      } else {
        results[JSON.stringify(input)] = parseInt(results[JSON.stringify(input)])+1;
      }
  }
};

function permutation(array) {
    function p(array, temp) {
        var i, x;
        if (!array.length) {
            result.push(temp);
        }
        for (i = 0; i < array.length; i++) {
            x = array.splice(i, 1)[0];
            p(array, temp.concat(x));
            array.splice(i, 0, x);
        }
    }

    var result = [];
    p(array, []);
    return result;
 }

 const base = getPlacedICs();
 const permutations = permutation(base);
 const inputs = [[0,0,0,0],[0,0,0,1],[0,0,1,0],[0,1,0,0],[1,0,0,0],[1,1,0,0],[1,0,1,0],[1,0,0,1],[0,1,1,0],[0,1,0,1],[0,0,1,1],[1,1,1,0],[1,1,0,1],[1,0,1,1],[0,1,1,1],[1,1,1,1]];

 for (let j = 0; j < inputs.length; j++) {
 for (let i = 0; i < permutations.length; i++) {
  gateCheckJJ(inputs[j],permutations[i])
 }
 }
console.log(results);