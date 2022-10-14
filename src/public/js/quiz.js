'use strict'

const quiz_num = document.querySelectorAll('.quiz_num');

quiz_num.forEach(function(num) {
    const quiz_selections = num.querySelectorAll('.selections');
    const answer_box = num.querySelector('.correct-box');
    const judge_answer = num.querySelector('.judge_answer');
    const answer_selection = num.querySelector('[data-answer="1"]');
    quiz_selections.forEach(function(selection){
        const answer = selection.dataset.answer;
        selection.addEventListener('click', function(){
            if(answer == 1) {
                console.log('OK');
                answer_box.style.display = "block";
                judge_answer.innerHTML = "正解";
                judge_answer.classList.add('correct');
            }
            else{
                console.log('false');
                answer_box.style.display = "block";
                judge_answer.innerHTML = "不正解";
                judge_answer.classList.add('incorrect');
                selection.classList.add('incorrect_answer');
            }
            answer_selection.classList.add('correct_answer');
            quiz_selections.forEach(function(selection){
                selection.classList.add('oneClick');
            })
        }, false);
    })
})
