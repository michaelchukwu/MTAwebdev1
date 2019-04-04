<<<<<<< HEAD
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
=======
// the survey should take on a secton per page i.e the other section not been answered should be hidden 
//a section ends with the next button 
// study study and dont change the html document 

$('#btn1').click(function(){
    $('#namesec').slideUp("slow", "linear");
    $('#info').slideDown("slow", "linear");
});
$('#btn2').click(function(){
    $('#info').slideUp("slow", "linear");
    $('#pg1').slideDown("slow", "linear")
});

$('#btn3').click(function(){
    $('#pg1').slideUp("slow", "linear");
    $('#pg2').slideDown("slow", "linear")
});

$('#submit').click(function(){
    $('#pg2').slideUp("slow", "linear");
    $('#success').slideDown("slow", "linear")
});

$("#submit").click(function(e){
    e.preventDefault();
    var comment;

    var username = $("#userName").val();
    var email = $("#emailAdd").val();
    var course = $("#courseId").val();
    var tutor = $("#tutName").val();
    var Q1 = $("input[name=q1]:checked").val();
    var Q2 = $("input[name=q2]:checked").val();
    var Q3 = $("input[name=q3]:checked").val();
    var Q4 = $("input[name=q4]:checked").val();
    var Q5 = $("input[name=q5]:checked").val();
    var Q6 = $("input[name=q6]:checked").val();
    var Q7 = $("input[name=q7]:checked").val();
    var Q8 = $("input[name=q8]:checked").val();
    var Q9 = $("input[name=q9]:checked").val();
    var comment = $("#comments").val();
    
        
    var userValues = [username, email, course, tutor, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, comment];
    console.log(userValues);
    
    


});

$(document).ready(function(){
    $("#userName").on('input', function() {
        var input = $(this);
        var is_name = input.val();
        if(is_name) {input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
    });
    $("#emailAdd").on('input', function() {
        var input = $(this);
        var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9]+(?:\.[a-zA-z0-9-]+)*$/;
        var is_email = re.test(input.val());
        if(is_email){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
    });
    $("#courseId").on('input', function() {
        var input = $(this);
        var is_course= input.val();
        if(is_course) {input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
    });

    $("#submit").click(function(event){
        var form_data = $("#survey-form").serializeArray();
        var error_free = true;
        for (var input in form_data) {
            var element = $ ("#survey-form"+formdata[input]['userName']);
            var valid = element.hasClass("valid");
            var error_element = $("spann", element.parent());
            if(!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
            else{error_element.removeClass("error_show").addClass("error");}

        }
        if(!error_free) {
            event.preventDefault();
        }
        else {
            alert('no errors: form will be submitted')
        }
    });
});
>>>>>>> 5f74d80b21564050f3eb7b59fd28a0995acbfaf0
