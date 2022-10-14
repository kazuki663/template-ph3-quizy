'use strict'

const quiz_num = document.querySelectorAll('quiz_num');

quiz_num.forEach(function(num) {
    const quiz_selections = num.querySelectorAll('selections');
    quiz_selections.forEach(function(selection){
        const answer = selection.dataset.answer;
        selection.addEventListener('click', function(){
            if(answer == 1) {
                console.log('OK');
            }
            else{
                console.log('false');
            }
        }, false);
    })
})
