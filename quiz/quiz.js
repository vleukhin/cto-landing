/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */
var quiz = new Vue({
    el: '#quiz',

    data: {
        currentStep: 0,
        answers: [],
        quiz: {}
    },

    created: function () {
        this.quiz = quizData;

        quizData.steps.forEach(function (step, index) {
            this.answers.push({});
        }.bind(this));

	    var css = document.createElement('link');
	    css.href = '/quiz/quiz.css';
	    css.type = "text/css";
	    css.rel = "stylesheet";
	    css.media = "screen,print";
	    document.head.appendChild(css);

	    var css = document.createElement('link');
	    css.href = 'https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css';
	    css.type = "text/css";
	    css.rel = "stylesheet";
	    css.media = "screen,print";
	    document.head.appendChild(css);

    },

    computed: {
        result: function () {
            var result = 'Заявка через опрос.\n';
            this.quiz.steps.forEach(function (step, index) {
                switch (typeof this.answers[index]) {
                    case 'object':
                        switch (step.type) {
                            case 'checkbox':
                                var selected = [];
                                step.options.forEach(function (option, i) {
                                    if (this.answers[index][i] === true) {
                                        selected.push(option);
                                    }
                                }.bind(this));
                                result += (step.name + ': ' + selected.join(', '));
                                break;
                            case 'form':
                                var answer = [];

                                for (var input in step.form) {
                                    if (step.form.hasOwnProperty(input)) {
                                        if (typeof this.answers[index][input] !== 'undefined') {
                                            answer.push(step.form[input].placeholder + ' - ' + this.answers[index][input]);
                                        }
                                    }
                                }

                                result += (step.name + ': ' + answer.join(', '));
                                break
                        }
                        break;
                    default:
                        result += (step.name + ': ' + this.answers[index]);
                        break;
                }
                result += "\n";
            }.bind(this));

            return result;
        }
    },

    methods: {
        nextStep: function () {
            this.currentStep += 1;

            var currentStep = this.quiz.steps[this.currentStep];

            if (typeof currentStep.dependsOnStep !== 'undefined'){
                currentStep.options = currentStep.optionsVars[this.answers[currentStep.dependsOnStep]];
                currentStep.title = this.answers[currentStep.dependsOnStep];
            }
        },
        selectAll: function (stepIndex, event) {
            console.log(event);
            this.quiz.steps[stepIndex].options.forEach(function (option, index) {
                Vue.set(this.answers[stepIndex], index, event.target.checked);
            }.bind(this));
        },
        checkStep: function (stepIndex) {
            if (typeof this.answers[stepIndex] === 'undefined') {
                return false;
            }

            var result = false;

            switch (this.quiz.steps[stepIndex].type) {
                case 'checkbox':
                    this.quiz.steps[stepIndex].options.forEach(function (option, index) {
                        if (this.answers[stepIndex][index]) {
                            result = true;
                            return;
                        }
                    }.bind(this));
                    break;
                case 'radio':
                    /**
                     * Условие в начале функции ловит не выбранный пункт
                     * так что тут уже можно возвращать true
                     */
                    result = true;
                    break;
                case 'form':
                    result = true;

                    for (var input in this.quiz.steps[stepIndex].form) {
                        if (this.quiz.steps[stepIndex].form.hasOwnProperty(input)) {
                            if (!this.answers[stepIndex][input] && this.quiz.steps[stepIndex].form[input].required) {
                                result = false;
                                return;
                            }
                        }
                    }

                    break;
            }

            return result;
        }
    }
});