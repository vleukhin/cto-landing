/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */
var quiz = new Vue({
    el: '#quiz',

    data: {
        currentStep: 0,
        answers: [
            {}
        ],
        quiz: {}
    },

    created: function () {
        this.quiz = quizData;
    },

    computed: {
        result: function () {
            var result = '';
            this.quiz.steps.forEach(function (step, index) {
                switch (typeof this.answers[index]){
                    case 'object':
                        var selected = [];
                        step.options.forEach(function (option, i) {
                            if (this.answers[index][i] === true){
                                selected.push(option);
                            }
                        }.bind(this));
                        result += (step.name + ': ' + selected.join(','));
                        break;
                    default:
                        result += (step.name + ': ' + this.answers[index]);
                        break;
                }
            }.bind(this));

            return result;
        }
    },

    methods: {
        nextStep: function () {
            this.currentStep += 1;
        },
        selectAll: function (stepIndex, event) {
            console.log(event);
            this.quiz.steps[stepIndex].options.forEach(function (option, index) {
                Vue.set(this.answers[stepIndex], index, event.target.checked);
            }.bind(this));
        },
        checkStep: function (stepIndex) {
            var result;

            if (typeof this.answers[stepIndex] === 'undefined'){
                return false;
            }

            this.quiz.steps[stepIndex].options.forEach(function (option, index) {
                if (this.answers[stepIndex][index]){
                    result = true;
                    return;
                }
            }.bind(this));

            return result;
        }
    }
});