// function to calculate the result of the survey
function tabulateAnswers() {
    // initialize variables for each choice's score
    var c1score = 0;
    var c2score = 0;
    var c3score = 0;
    var c4score = 0;
    var c5score = 0;
    
    // get a list of the radio inputs on the page
    var choices = document.getElementsByTagName('input');
    // loop through all the radio inputs
    for (i=0; i<choices.length; i++) {
      // if the radio is checked..
      if (choices[i].checked) {
        // add 1 to that choice's score
        if (choices[i].value == 'vpoor') {
          c1score = c1score + 1;
        }
        if (choices[i].value == 'poor') {
          c2score = c2score + 2;
        }
        if (choices[i].value == 'fair') {
          c3score = c3score + 3;
        }
        if (choices[i].value == 'good') {
          c4score = c4score + 4;
        }
        if (choices[i].value == 'vgood') {
            c5score = c5score + 5;
          }
        
      }
    }
    
    // Find out the total score.

    var totalsurscore = Math.sum(c1score,c2score,c3score,c4score,c5score);}
